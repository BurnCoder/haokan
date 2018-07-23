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
            html, body{ background-color: #f2f4f8; }
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
        <!-- 这是正文 body_sytle_girl -->
        <div class="body_sytle">
            <div class="u_head_box">
                <div class="u_head_img">
                    <img alt="头像" src="/images/132">
                </div>
                <div class="u_head_txt">
                    <strong>
                        跳跳狗
                    </strong>
                    <em>
                        <span>
                            ID:
                        </span>
                        qy49697269
                    </em>
                </div>
            </div>
            <!--u_head_box 用户信息-->
            <div class="u_list_box">
                <ul class="u_list_ul">
                    <li>
                        <a href="pay">
                            <strong>
                                充值
                            </strong>
                            <div class="u_list_li u_list_li_icon_1">
                                余额：30 书币
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="payrecord">
                            <div class="u_list_li u_list_li_icon_2">
                                充值记录
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="u_list_box">
                <ul class="u_list_ul">
                    <li>
                        <a href="/signin">
                            <div class="u_list_li u_list_li_icon_3">
                                签到
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="u_list_box">
                <ul class="u_list_ul">
                    <li>
                        <a href="/recentread">
                            <div class="u_list_li u_list_li_icon_4">
                                阅读记录
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--u_list_box 用户列表-->
        </div>
        <!--活动弹框-->
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
            $(function() {
                var n = 0;
                $('.u_head_box img').click(function() {
                    n++;
                    if (n > 4) {
                        window.location.href = '/index/index/dev'
                    }
                })
            })
        </script>
    </body>

</html>
