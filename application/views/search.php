<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            搜索
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
        <link href="/css/search_body.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="https://cpsn.klmnf.com/assets/qy/img/favicon.ico?v=2.1.35"
        type="image/x-icon">
    </head>
    
    <body>
        <!--console_main 弹出吐丝-->
        <div id="console_main">
        </div>
        <input type="hidden" name="sex" id="sex" value="boy">
        <!-- 这是正文 -->
        <div class="new_search_input_fixed">
            <div class="new_search_input_box">
                <div class="new_search_input">
                    <div class="new_search_input_search">
                        <input type="search" placeholder="搜索你想要的内容" autocomplete="off">
                    </div>
                    <a href="javascript:;">
                    </a>
                </div>
                <a href="javascript:;" class="new_search_return">
                </a>
                <a href="javascript:;" class="new_search_but">
                    搜索
                </a>
                <div class="new_search_tips_list">
                    <ul class="new_search_tips_list_ul">
                        <li>
                            <span>
                                楚乔传
                            </span>
                        </li>
                        <li>
                            <span>
                                夏至未至
                            </span>
                        </li>
                        <li>
                            <span>
                                醉玲珑
                            </span>
                        </li>
                        <li>
                            <span>
                                三生三世
                            </span>
                        </li>
                        <li>
                            <span>
                                全职高手
                            </span>
                        </li>
                        <li>
                            <span>
                                我的前半生
                            </span>
                        </li>
                        <li>
                            <span>
                                恶魔少爷别吻我
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="search_list_content">
            <div class="ns_list_main_box">
                <div class="ns_list_main_search_loading">
                    <div class="ns_list_main_search_loading_img">
                        <img src="/images/search_icon_4.gif" style="height: 1.04rem; width: auto;">
                    </div>
                    <div class="ns_list_main_search_loading_null">
                        <img src="/images/search_icon_3.png" style="height: 1.04rem; width: auto;">
                        <strong>
                            非常抱歉
                        </strong>
                        <span>
                            没找到相关内容
                        </span>
                    </div>
                </div>
                <div class="ns_list_main ns_list_main_local" style="display: none;">
                    <div class="ns_list_tit">
                        <a href="javascript:;">
                            全部删除
                        </a>
                        <h2>
                            最近搜索
                        </h2>
                    </div>
                    <div class="ns_list_box">
                        <ul>
                            <li>
                                楚乔传
                            </li>
                            <li>
                                夏至未至
                            </li>
                            <li>
                                醉玲珑
                            </li>
                            <li>
                                三生三世
                            </li>
                            <li>
                                全职高手
                            </li>
                            <li>
                                我的前半生
                            </li>
                            <li>
                                恶魔少爷别吻我
                            </li>
                            <li>
                                楚乔传
                            </li>
                            <li>
                                夏至未至
                            </li>
                            <li>
                                醉玲珑
                            </li>
                            <li>
                                三生三世
                            </li>
                            <li>
                                全职高手
                            </li>
                            <li>
                                我的前半生
                            </li>
                            <li>
                                恶魔少爷别吻我
                            </li>
                        </ul>
                        <div class="ns_list_ul_border">
                        </div>
                    </div>
                </div>
                <div class="ns_list_main ns_list_hot" style="display: block;">
                    <div class="ns_list_tit">
                        <a href="javascript:;" class="ns_list_hot_but" style="display: none;">
                            换一换
                        </a>
                        <h2>
                            大家都在看
                        </h2>
                    </div>
                    <div class="ns_list_box">
                        <ul>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000074973">
                                    末日刁民
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000002555">
                                    末世求生录
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000096321">
                                    东北招阴人
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000091104">
                                    我在殡仪馆工作的那些事儿
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000071525">
                                    六界封神
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000004735">
                                    无敌剑域
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000092050">
                                    青云仕途
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000092160">
                                    情路官道
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000081283">
                                    都市血狼
                                </a>
                            </li>
                            <li>
                                <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000118568">
                                    桃运小保镖
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="new_search_tips_body">
                <ul class="nst_list_ul">
                    <!--<li>
                    <a href="javascript:;">
                    <div class="s_img"><img src="images/img/book_bg.png" data-original="http://ods51247g.bkt.clouddn.com/cppartner/1x1/11x0/110x0/11000081945/11000081945.jpg" /></div>
                    <div class="s_info">
                    <h3>爆笑<span>皇后</span>：本宫要改嫁</h3>
                    <strong>作者名称</strong>
                    <p>情节发散而不偏离历史，主要人物主要事件依照历史上的主流解读，但细节和空白之处填上主角的作用……情节发散而不偏离历史，主要人物主要事件依照历史上的主流解读，但细节和空白之处填上主角的作用……</p>
                    </div>
                    </a>
                    </li>
                    <li>
                    <a href="javascript:;">
                    <div class="s_img"><img src="images/img/book_bg.png" data-original="http://ods51247g.bkt.clouddn.com/cppartner/1x1/11x0/110x0/11000081945/11000081945.jpg" /></div>
                    <div class="s_info">
                    <h3>爆笑<span>皇后</span>：本宫要改嫁</h3>
                    <strong>作者名称</strong>
                    <p>情节发散而不偏离历史，主要人物主</p>
                    </div>
                    </a>
                    </li>-->
                </ul>
                <div class="nst_list_loading">
                    已经是全部了~
                </div>
            </div>
        </div>
        <!-- 这里引入底部footer -->
        <script type="text/javascript" src="/js/zepto.min.js">
        </script>
        <script type="text/javascript" src="/js/zepto.cookie.min.js">
        </script>
        <!-- 这是zepto插件 -->
        <script type="text/javascript" src="/js/zepto.picLazyLoad.min.js">
        </script>
        <script type="text/javascript" src="/js/common.js">
        </script>
        <script type="text/javascript" src="/js/cps_log.js">
        </script>
        <!-- 这里引入js -->
        <script type="text/javascript" src="/js/search.js">
        </script>
        <script type="text/javascript">
            $(function() {
                $('.bd_description_box a').click(function() {
                    $(this).parent().removeClass('bd_description_open');
                });
            });
        </script>
    </body>

</html>
