<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            充值
        </title>
        <script type="text/javascript">
            window.log_host = 'https://log.ziread.cn';
            window.theme = 'qy'; (function(doc) {
                var docEl = doc.documentElement,
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth > 414) {
                        docEl.style.fontSize = '115px';
                    } else {
                        docEl.style.fontSize = 100 * (clientWidth / 360) + 'px';
                    }
                };
                recalc();
            })(document);
            //toast tip提示
            var consoleTime = null;
            function consoleMain(str, nsecond, mask) {
                clearTimeout(consoleTime);
                nsecond = nsecond ? nsecond * 1000 : 3000;
                mask = mask ? '<i></i>': '';
                var div = document.getElementById('console_main');
                div.innerHTML = '<div class="console_box"><span>' + str + '</span></div>' + mask;
                consoleTime = setTimeout(function() {
                    div.innerHTML = '';
                },
                nsecond);
            }
        </script>
        <!-- 这里引入css -->
        <link href="/css/common.css" rel="stylesheet" type="text/css">
        <link href="/css/classify.css" rel="stylesheet" type="text/css">
        <link href="/css/pay.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            html, body { background-color: #f2f4f8; }
        </style>
        <link rel="shortcut icon" href="https://cpsn.klmnf.com/assets/qy/img/favicon.ico?v=2.1.35"
        type="image/x-icon">
    </head>
    
    <body>
        <!--console_main 弹出吐丝-->
        <div id="console_main">
        </div>
        <div class="head_tit_box">
            <a href="javascript:;" class="head_return_page_but">
            </a>
            <div class="head_menu_but_box">
                <!--<a href="javascript:;" class="head_menu_but"></a>-->
            </div>
            <h1>
                充值
            </h1>
        </div>
        <!--head_tit_box 分类 head_menu_but_open-->
        <div class="pop_up_menu_box">
            <i>
            </i>
            <div class="pum_box">
                <div class="pum_nav_list">
                    <ul class="pum_nav_list_ul">
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/index?type=boy">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_1.png">
                                </div>
                                <strong>
                                    男生
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/index?type=girl">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_2.png">
                                </div>
                                <strong>
                                    女生
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/category">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_3.png">
                                </div>
                                <strong>
                                    分类
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/list?type=finish">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_4.png">
                                </div>
                                <strong>
                                    完本
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/list?type=free">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_5.png">
                                </div>
                                <strong>
                                    免费
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/user">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_6.png">
                                </div>
                                <strong>
                                    个人中心
                                </strong>
                            </a>
                        </li>
                    </ul>
                    <div class="pum_but_box">
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/user/recent">
                            最近阅读
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--pop_up_menu_box 菜单弹框-->
        <div class="body_sytle">
            <div class="re_head_box">
                <div class="re_img">
                    <img alt="头像" src="/images/132">
                </div>
                <div class="re_user_info_box">
                    <h3>
                        跳跳狗
                    </h3>
                    <div class="re_user_info">
                        <em>
                            ID：
                            <span>
                                qy49697269
                            </span>
                        </em>
                        <strong>
                            余额：
                            <span>
                                60书币
                            </span>
                        </strong>
                    </div>
                </div>
            </div>
            <div class="re_main_box">
                <div class="re_list_box">
                    <div class="re_list_tit">
                        <h2>
                            微信支付
                            <span>
                                （1元=100书币）
                            </span>
                        </h2>
                    </div>
                    <ul class="re_list_ul">
                        <li class="hover">
                            <a href="javascript:;" data-goods-id="39" data-goods-category="wechat"
                            data-goods-money="50元">
                                <strong>
                                    50元
                                </strong>
                                <em>
                                    8000书币
                                    <span>
                                        多送30元
                                    </span>
                                </em>
                                <i>
                                    新人专享
                                </i>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-goods-id="38" data-goods-category="wechat"
                            data-goods-money="30元">
                                <strong>
                                    30元
                                </strong>
                                <em>
                                    3000书币
                                    <span>
                                    </span>
                                </em>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-goods-id="40" data-goods-category="wechat"
                            data-goods-money="100元">
                                <strong>
                                    100元
                                </strong>
                                <em>
                                    18000书币
                                    <span>
                                        多送80元
                                    </span>
                                </em>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-goods-id="50" data-goods-category="wechat"
                            data-goods-money="200元">
                                <strong>
                                    200元
                                </strong>
                                <em>
                                    40000书币
                                    <span>
                                        多送200元
                                    </span>
                                </em>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-goods-id="48" data-goods-category="wechat"
                            data-goods-money="180元">
                                <strong>
                                    180元 半年
                                </strong>
                                <em>
                                    每天1块钱
                                </em>
                                <i>
                                    热销
                                </i>
                                <b>
                                    所有书免费看半年
                                </b>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;" data-goods-id="35" data-goods-category="wechat"
                            data-goods-money="365元">
                                <strong>
                                    365元 包年
                                </strong>
                                <em>
                                    每天1块钱
                                </em>
                                <i>
                                    超值
                                </i>
                                <b>
                                    所有书免费看一年
                                </b>
                            </a>
                        </li>
                    </ul>
                    <div class="re_but_box">
                        <a href="javascript:;" id="wechat" data-money="50元" data-goods-id="39"
                        data-goods-category="wechat">
                            立即充值：50元
                        </a>
                    </div>
                </div>
            </div>
            <div class="re_rule_box">
                <p>
                    温馨提示：
                </p>
                <p>
                    1. 充值获得的书币仅限在本公司书城使用。
                </p>
                <p>
                    2. 若是发现充值未到账，请先确认你登录的账号与充值的账号是否一致。
                </p>
                <p>
                    3. 用户一旦充值成功，不得以任何理由要求本公司退还全部或部分已充值款项，因不可抗力或本公司单方面原因导致的情况除外。
                </p>
                <p>
                    4. 充值赠送的书币存在有效期，有效期为：自领取时间起， 5天有效；消费时优先扣除赠送书币。
                </p>
            </div>
        </div>
        <script type="text/javascript" src="/js/zepto.min.js">
        </script>
        <script type="text/javascript" src="/js/zepto.cookie.min.js">
        </script>
        <!-- 这是zepto插件 -->
        <script type="text/javascript" src="/js/common.js">
        </script>
        <script type="text/javascript" src="/js/cps_log.js">
        </script>
        <script type="text/javascript" src="/js/pay.js">
        </script>
    </body>

</html>
