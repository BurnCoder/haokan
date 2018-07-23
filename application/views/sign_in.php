<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            个人中心
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
        <style type="text/css">
            .s_main{ overflow: hidden; background-color: #fff; } .s_img{ overflow:
            hidden; margin: .5rem auto .2rem; width: 1.43rem; height: 1.43rem; } .s_img
            img{ display: block; width: 100%; height: 100%; } .s_main h1{ height: .36rem;
            color: #0a347e; font-size: .21rem; text-align: center; line-height: .36rem;
            } .s_main strong{ display: block; overflow: hidden; height: .36rem; font-size:
            .15rem; color: #5e6a94; text-align: center; line-height: .36rem; } .s_main
            strong span{ display: inline; font-size: .15rem; color: #f63566; } .content_null_but_box
            a{ height: .36rem; font-size: .16rem; line-height: .36rem; } .s_main .s_main_over{
            background-color: #f63566; } .s_fixed_box{ display: none; padding-top:
            2.6rem; position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index:
            1000; background: rgba(0,0,0,.8) url(https://cpsn.klmnf.com/assets/qy/img/frontend/icon/icon_28.png?v=2.1.35)
            no-repeat center 1.46rem; background-size: 1.87rem 1.17rem; } .s_fixed_box
            strong, .s_fixed_box em{ display: block; text-align: center; font-weight:
            normal; } .s_fixed_box strong{ font-size: .24rem; color: #ff4b4b; line-height:
            .32rem; } .s_fixed_box em{ font-size: .15rem; color: #77a4ff; line-height:
            .24rem; } .s_fixed_box em span{ display: inline; color: #ff4b4b; } .s_fixed_box
            a{ margin: .4rem auto 0; display: block; width: 2.1rem; height: .36rem;
            border: 1px solid #fff; border-radius: .36rem; font-size: .16rem; color:
            #fff; text-align: center; line-height: .36rem; }
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
                <a href="javascript:;" class="head_menu_but">
                </a>
            </div>
            <h1>
                个人中心
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
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/index?type=boy&amp;from=wechat">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_1.png">
                                </div>
                                <strong>
                                    男生
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/index?type=girl&amp;from=wechat">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_2.png">
                                </div>
                                <strong>
                                    女生
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/category?sex=1&amp;from=wechat">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_3.png">
                                </div>
                                <strong>
                                    分类
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/list?sex=0&amp;type=finish&amp;from=wechat">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_4.png">
                                </div>
                                <strong>
                                    完本
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/list?sex=0&amp;type=free&amp;from=wechat">
                                <div class="pum_icon">
                                    <img alt="" src="/images/module_icon_5.png">
                                </div>
                                <strong>
                                    免费
                                </strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/user?from=wechat">
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
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/user/recent?from=wechat">
                            最近阅读
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--pop_up_menu_box 菜单弹框-->
        <!-- 这是正文 -->
        <div class="body_sytle">
            <div class="s_main">
                <div class="s_img">
                    <img src="/images/icon_27.png">
                </div>
                <h1>
                    签到送礼
                </h1>
                <strong>
                    每日签到可获得
                    <span>
                        30书币
                    </span>
                    奖励
                </strong>
                <div class="content_null_but_box">
                    <a id="toIndex" href="javascript:;" class="s_main_over">
                        今日已签到，继续阅读
                    </a>
                    <a style="display:none;" id="sign" href="javascript:;">
                        签到领书币
                    </a>
                </div>
            </div>
        </div>
        <div class="s_fixed_box">
            <strong>
                恭喜您
            </strong>
            <em>
                签到成功
            </em>
            <em>
                获得
                <span>
                    30书币
                </span>
                奖励
            </em>
            <a href="https://wxe9c387c875ec95f5.ziread.cn/index/user/recent">
                去看书
            </a>
        </div>
        <!-- 这里引入底部footer -->
        <script type="text/javascript" src="/js/zepto.min.js">
        </script>
        <script type="text/javascript" src="/js/zepto.cookie.min.js">
        </script>
        <!-- 这是zepto插件 -->
        <script type="text/javascript" src="/js/common.js">
        </script>
        <script type="text/javascript" src="/js/cps_log.js">
        </script>
        <!-- 这里引入js -->
        <script>
            var isClick = false;
            $('#sign').click(function() {
                if (isClick) {
                    return false;
                }
                isClick = true;
                $.post('/api/user/sign', {},
                function(data) {
                    if (data.err == 0) {
                        $('.s_fixed_box').show();
                        $('#sign').hide();
                        $('#toIndex').show();
                    } else {
                        isClick = false;
                        consoleMain(data.msg);
                    }
                })
            });
            $('#toIndex').click(function() {
                window.location.href = '/recentread';
            });
        </script>
    </body>

</html>
