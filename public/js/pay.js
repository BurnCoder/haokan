var smoney = '';
var sbookid = commont.getQueryString('book_id', window.location.search, '&') || '';
var schapterid = commont.getQueryString('chapter_id', window.location.search, '&') || '';

$(function () {
    /**
     * 头像点击
     */
    //var n = 0;
    //$('.re_head_box img').click(function () {
    //    n++;
    //    if (n > 4) {
    //        window.location.href = '/index/index/dev'
    //    }
    //});
    /**
     * 选项卡点击
     */
    $('.re_list_ul a').click(function () {
        var $this = $(this),
            goodsId = $this.data('goods-id'),
            goodsCategory = $this.data('goods-category'),
            goodsMoney = $this.data('goods-money');
        $this.parent().addClass('hover').siblings('li').removeClass('hover');
        var but = $('#' + goodsCategory);
        but.data('goods-id', goodsId);
        but.data('goods-category', goodsCategory);
        but.data('money', goodsMoney);
        but.text('立即充值：' + goodsMoney);
    });
    /**
     * 充值按钮
     */
    var paystop = true;
    $('.re_but_box a').click(function () {
        if (!paystop) {
            return false
        }
        paystop = false;
        var $this = $(this),
            goodsId = $this.data('goods-id'),
            goodsCategory = $this.data('goods-category');
        smoney = $this.data('money');
        sbookid = commont.getQueryString('book_id', window.location.search, '&') || '';
        schapterid = commont.getQueryString('chapter_id', window.location.search, '&') || '';
        cpslog([702, {
            adid: goodsId,
            map: {
                book_id: sbookid,
                chapter_id: schapterid,
                money: smoney
            }
        }, goodsCategory]);
        var data = {
            id: goodsId,
            category: goodsCategory
        };
        if(sbookid){
            data.book_id = sbookid;
        }
        if(schapterid){
            data.chapter_id = schapterid;
        }
        $.ajax({
            url: '/api/recharge/pay.do',
            data: data,
            type: 'POST',
            timeout: 10000,
            success: function (data) {
                paystop = true;
                if (data.code) {
                    switch (goodsCategory) {
                        case 'wechat': //微信公众号支付
                            var oJsonObj = JSON.parse(data.data.json);
                            wechatPay(oJsonObj, goodsId);
                            cpslog([703, {
                                map: {
                                    package: oJsonObj.package,
                                    xdtype: goodsCategory,
                                    result: 1,
                                    book_id: sbookid,
                                    adid: goodsId,
                                    chapter_id: schapterid,
                                    money: smoney
                                }
                            }, 'xdjg']);
                            break;
                        default: //alipay 支付宝 //wechath5 微信H5支付
                            break;
                    }
                } else {
                    consoleMain('操作失败，错误内容：' + data.msg);
                    cpslog([703, {
                        map: {
                            xdtype: goodsCategory,
                            result: 2,
                            book_id: sbookid,
                            adid: goodsId,
                            chapter_id: schapterid,
                            money: smoney
                        }
                    }, 'xdjg']);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                consoleMain('异常错误，请刷新页面重试');
                cpslog([703, {
                    map: {
                        xdtype: goodsCategory,
                        result: 4,
                        book_id: sbookid,
                        adid: goodsId,
                        chapter_id: schapterid,
                        money: smoney,
                        XMLHttpRequest: XMLHttpRequest.status,
                        textStatus: textStatus,
                        errorThrown: errorThrown
                    }
                }, 'xdjg']);
                paystop = true;
            }
        })
    });

    /**
     * 处理默认充值商品自动下单
     */
    var check = $('.re_but_box a.check');
    if(check.length){
        check.click();
    }
});

/**
 * 微信公众号支付
 * @param json 微信支付相关数据
 * @param goodsId 商品id
 */
function wechatPay(json, goodsId) {
    if (typeof WeixinJSBridge == "undefined") {
        if (document.addEventListener) {
            document.addEventListener('WeixinJSBridgeReady', function () {
                onBridgeReady(json, goodsId);
            }, false);
        } else if (document.attachEvent) {
            document.attachEvent('WeixinJSBridgeReady', function () {
                onBridgeReady(json, goodsId);
            });
            document.attachEvent('onWeixinJSBridgeReady', function () {
                onBridgeReady(json, goodsId);
            });
        }
    } else {
        onBridgeReady(json, goodsId);
    }
}

/**
 * 微信内唤起充值窗口
 * @param json
 * @param goodsId
 */
function onBridgeReady(json, goodsId) {
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest', json,
        function (res) {
            switch (res.err_msg) {
                case 'get_brand_wcpay_request:ok': //成功
                    consoleMain('充值成功');
                    cpslog([703, {
                        map: {
                            cztype: 'wechat',
                            package: json.package,
                            result: 1,
                            book_id: sbookid,
                            chapter_id: schapterid,
                            money: smoney
                        }
                    }, 'czjg']);
                    if (redirect = commont.getQueryString('redirect')) { //回跳链接
                        window.location.href = redirect;
                    }else{
                        setTimeout(function () {
                            window.location.reload(true);
                        },1000);
                    }
                    break;
                case 'get_brand_wcpay_request:cancel': //取消
                    consoleMain('您已取消充值');
                    wechatCancel(goodsId);
                    cpslog([703, {
                        map: {
                            cztype: 'wechat',
                            package: json.package,
                            result: 2,
                            book_id: sbookid,
                            chapter_id: schapterid,
                            money: smoney
                        }
                    }, 'czjg']);
                    break;
                case 'get_brand_wcpay_request:fail': //失败
                    consoleMain('充值失败，请尝试重新充值或试试其他充值方式');
                    wechatCancel(goodsId);
                    cpslog([703, {
                        map: {
                            cztype: 'wechat',
                            package: json.package,
                            result: 3,
                            book_id: sbookid,
                            chapter_id: schapterid,
                            money: smoney
                        }
                    }, 'czjg']);
                    break;
                default:
                    console.log(res);
                    wechatCancel(goodsId);
                    if (typeof res.err_msg == 'undefined' && res.errMsg == 'chooseWXPay:fail, the permission value is offline verifying') {
                        consoleMain('充值失败，原因：模拟器无法充值');
                    } else {
                        consoleMain('异常错误，请刷新页面重试');
                        cpslog([703, {
                            map: {
                                cztype: 'wechat',
                                package: json.package,
                                result: 4,
                                book_id: sbookid,
                                chapter_id: schapterid,
                                money: smoney
                            }
                        }, 'czjg']);
                    }
                    break;
            }
        }
    );
}

function wechatCancel(goodsId) {
    $.ajax({
        url: '/api/recharge/wechatCancel',
        data: {
            url: window.location.href,
            goods_id: goodsId
        },
        type: 'POST',
        timeout: 10000,
        success: function (data) {

        },
        error: function (err) {

        }
    })
}
