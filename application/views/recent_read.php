<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            最近阅读
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
        <link href="/css/recently.css" rel="stylesheet" type="text/css">
        <link href="/css/classify.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            .content_null_top_border{ border-top: 0; }
        </style>
        <link rel="shortcut icon" href="https://cpsn.klmnf.com/assets/qy/img/favicon.ico?v=2.1.35"
        type="image/x-icon">
    </head>
    
    <body class="">
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
                最近阅读
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
        <!-- 提示置顶 -->
        <div class="set_top_box">
            点击右上角[在聊天中置顶或者浮窗]阅读有惊喜↑
        </div>
        <div class="body_sytle">
            <!--i_nav_box 顶部导航-->
            <div class="r_img_list_box">
                <div class="r_img_edit_box">
                    <div class="r_book_num">
                        <strong totalnum="9">
                            共9本
                        </strong>
                        <em>
                            选中0本
                        </em>
                    </div>
                    <div class="r_img_edit_but_box">
                        <a href="javascript:;" class="r_img_edit_open">
                            管理
                        </a>
                        <a href="javascript:;" class="r_img_edit_close">
                            取消
                        </a>
                        <a href="javascript:;" class="r_img_edit_remove">
                            确定删除
                        </a>
                    </div>
                </div>
                <ul class="r_img_ul" id="recent_ul">
                    <li supdatet="1532193378" sbid="11000078930">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/b57a0216dade286b7e6389a8ff98dd7d.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    快穿：我只想种田
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第二章：克夫
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第八百八十六章：番外七（完结）
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532192445" sbid="11000078938">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/6b0b90570cedf3e54c7b99c334de3daf.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    轩少，轻点宠
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第1章人家好想你哦~
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第494章就这么决定了！
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532181877" sbid="11000093253">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/1e7fd8869c5bfb4129d528b479f896c0.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    画满田园
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：001竟然做了春梦
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：1577李家门口
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532145066" sbid="11000132025">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/298d3e6ca1c772b6dc42b0c12f453918.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    支教的那些日子
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第5章 被窝里耍流氓
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第646章 刺激（全本完）
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532105698" sbid="11000111352">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/9ff99b9652dd666d0ef8f0dfd42000ad.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    放贷人
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第1章：喝水陪睡
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第268章：万法归元（完）
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532105688" sbid="11000147149">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/11000147149.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    禁忌迷城
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第001章 电脑病毒
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第142章 助兴
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532008584" sbid="11000080136">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/95efa0eba36349db8b90d4a048c344a5.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    小妻哪里逃
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第21章 那丫头对你挺上心的
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第612章 一顾多少年
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532008356" sbid="11000035359">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/9ed58999c3fcc8a0e8c7eb4da4330cf7.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    前面兵王
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第004章 特聘主任？
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第1706章 梅林
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li supdatet="1532006925" sbid="11000072594">
                        <a href="/readbook">
                            <div class="r_img">
                                <img src="/images/edabb2537a0fcc7e02be0a294d61518f.jpg">
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    登高绝顶
                                </h3>
                                <div class="r_img_chaptername">
                                    上次读到：第１章 龙魂兵王
                                </div>
                                <div class="r_img_chaptername">
                                    更新至：第2722章 掌控天道（终章）
                                </div>
                                <div class="r_img_other">
                                    <em>
                                        继续阅读
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!--r_img_ul 最近阅读列表 r_img_remove_select-->
                <div class="loading_box">
                    <span>
                        已显示全部图书
                    </span>
                </div>
            </div>
            <!--r_img_list 编辑最近阅读列表 r_img_list_edit_remove r_img_list_edit -->
            <div class="content_null_box content_null_top_border" style="display:none;">
                <img src="/images/icon_5.png" style="width: .72rem;">
                <span>
                    你还没有阅读记录
                </span>
            </div>
            <div class="r_img_list_other" style="display:none;">
                <div class="r_img_list_other_tit">
                    <h2>
                        为你推荐
                    </h2>
                </div>
                <ul class="r_img_ul">
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000132353">
                            <div class="r_img">
                                <img src="/images/c7dc7b61c428ed543717a9613d895f4e.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    都市王者
                                </h3>
                                <p>
                                    　　创业失败的落魄屌丝王强，无意中救下了被下迷药的霸道女总裁，从此一个崭新的世界出现在他的面前。 　　清纯小萝莉妩媚女秘书风流俏少妇泼辣老板娘，纷纷闯入他的生活。
                                    　　面对各色美女，张强将如何收入囊中……
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        半江月色
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000131459">
                            <div class="r_img">
                                <img src="/images/4e8f2cd326d3248a874689dd535ea61d.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    狂兵天下
                                </h3>
                                <p>
                                    一代钢铁狂兵，卷土重回都市！喝最烈的酒，踩最狂的反派，征服最美的女人！
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        陈行者
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000114467">
                            <div class="r_img">
                                <img src="/images/eff786718c1eda1cb29c6b13f75ba272.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    君临天下
                                </h3>
                                <p>
                                    宇宙杀神渡劫陨落，重生为地球上的废材少爷，身边还有个貌美如花的未婚妻，这一世，注定不平凡…… 他无心世俗，却成为地下世界的王者；他医术无双，让无数人千金难聘；他想离开地球，重回浩瀚宇宙，奈何身边美女环绕，拒之不得。
                                    叶欢，这个宇宙中的修士，且看他如何香风缭绕，君临天下！！
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        叶清明
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000101593">
                            <div class="r_img">
                                <img src="/images/5794b13faceede83a4546c7b92a251f7.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    无敌神医
                                </h3>
                                <p>
                                    爷爷离世前的嘱托，萧轩翻出祖传的银针，从此，乡村小伙变成无敌神医； 隔壁朴素的少妇，名牌大学的清纯校花，脚踩细高跟的女白领，面对各种美女的青睐，萧轩开始了他风流的传奇人生……
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        阿里山的大爷
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000089928">
                            <div class="r_img">
                                <img src="/images/f600e0760f88974b4522af966459f7b0.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    都市医仙
                                </h3>
                                <p>
                                    林奇得到上古传承，觉醒神瞳后，拥有了不可思议的能力，他不在是一个平凡小医生，还有了很多烦恼，因为昨天冰山女院长要他约在小树林，讨论一些羞羞的事情，但是他今天已经约了清纯校花……
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        大小写
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000078928">
                            <div class="r_img">
                                <img src="/images/3d738cbeb7609c3760ff2fb06d351e96.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    桃运漩涡
                                </h3>
                                <p>
                                    神秘高手龙潜花都，与冰山美女总裁签订婚约，但无奈被嫌弃。可怜的沈浪，只得外出觅食。不料一个个美女接踵而至，沈浪陷入各种桃运漩涡。当然，最主要的还是征服冰山女总裁。不乖？调教一下就好。
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        花幽山月
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000028091">
                            <div class="r_img">
                                <img src="/images/11000028091.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    透视新人王
                                </h3>
                                <p>
                                    地摊小子叶开捡了块玉石，意外得到透视能力，更有个绝代妖女住进他的身体！从此生活多姿多彩，赌石？一眼看穿！美女？一眼看透！还做了美女们的保镖，“大小姐，我是保镖，不是保姆，暖脚洗衣，不是我的工作吧？”
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        秦长青
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000008419">
                            <div class="r_img">
                                <img src="/images/11000008419.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    阴阳医仙
                                </h3>
                                <p>
                                    身具鬼谷道门奇术与医术的林煜入世修心。 他通天道，知阴阳，以一手鬼谷医术纵横都市。坐拥财色天下。 一手板砖，一手医经，打得了畜生，救得了苍生……
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        一念
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000006288">
                            <div class="r_img">
                                <img src="/images/b8363388a0194e920fef8a754b421f5b.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    神针透视眼
                                </h3>
                                <p>
                                    顽疾？怪病？一眼便可得知症结所在！凭此独特能力，张均济世天下，神针妙手治愈绝症，拯救世人！
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        小妖
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/info?book_id=11000143886">
                            <div class="r_img">
                                <img src="/images/11000143886.jpg">
                                <span>
                                </span>
                            </div>
                            <div class="r_img_text">
                                <h3>
                                    打脸
                                </h3>
                                <p>
                                    萧雨琪：“三年之后，你娶我可好？”楚云：“洪门千金，宅男女神，全球最美面孔排行榜三年榜首。豆蔻年华，冰清玉女。雨琪，你觉得我，配得上你吗？”萧雨琪：“我不管，我只问你一句，三年之后，你可愿娶我？”————前一世，只因楚云一句话，伊人含恨而终，楚家家破人亡。...
                                </p>
                                <div class="r_img_other">
                                    <i>
                                        布知火舞
                                    </i>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--活动弹框-->
        <div class="footer_box">
            <div class="footer_ewm">
                <img alt="" src="/images/qrcode_gh_ac8ed94b442f_1.jpg">
            </div>
            <div class="footer_txt" style="width: 2.5rem;text-align: center">
                <p>
                    哈喽，亲们如有问题请添加我们客服妹纸---微信：
                    <span style="font-weight: bold;">
                        xmhcsj530
                    </span>
                    <br>
                </p>
            </div>
        </div>
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
        <script type="text/javascript" src="/js/recently.js">
        </script>
        <script>
            //接口调用测试，海波，log里有返回的数据
            //	$(function(){
            //		$.post('/api/user/getReadRecently',{pageNo:1,pageSize:5},function(data){
            //			console.log(data);
            //		})
            //	})

            var pagenum = 2,
            sBookstop = true,
            sBookstopTime = null,
            pagesize = 10,
            block_id = $("#block_id").val(),
            user_id = $.fn.cookie('user_id');

            $(function() {

                $('img').picLazyLoad({
                    effect: "fadeIn"
                });

                if (user_id && $('#recent_ul li').length >= pagesize) {
                    console.log(user_id);
                    $(window).scroll(function() {
                        var nWinH = document.documentElement.clientHeight;
                        var nScrollTop = (document.body.scrollTop || document.documentElement.scrollTop) + nWinH;
                        var nBodyScrollH = document.body.scrollHeight;
                        if (sBookstop && nBodyScrollH - nScrollTop < 600) {
                            bookstoptime();
                            loadingList();
                        }
                    });

                }
            });

            function loadingList() {
                var sUpadateTime = '';
                if ($('#recent_ul li').length > 0) {
                    var sUpadateTime = $('#recent_ul li').last().attr('supdatet');
                }
                $('.loading_box').html('<span>正在加載中，请稍候......</span>').show();
                console.log(sUpadateTime);
                $.ajax({
                    type: 'post',
                    url: '/api/user/getReadRecently',
                    timeout: 10000,
                    cache: false,
                    dataType: 'json',
                    data: {
                        'pageSize': pagesize,
                        'updatetime': sUpadateTime
                    },
                    success: function(data) {
                        clearTimeout(sBookstopTime);
                        if (typeof data == 'string') {
                            data = JSON.parse(data);
                        }
                        console.log(data);
                        data = data.data;
                        var sLi = '';
                        for (var i = 0; i < data.length; i++) {
                            if (data[i]['state'] == 1) {
                                sLi += '<li supdatet="' + data[i].updatetime + '" sbid = "' + data[i].book_id + '">\
						<a href="/index/book/chapter?book_id=' + data[i]['book_id'] + '&chapter_id=' + data[i]['chapter_id'] + '">\
							<div class="r_img">\
								<img src="https://cpsn.klmnf.com/assets/qy/img/frontend/images/default_img.png?v=2.1.35" data-original="' + data[i]['image'] + '" />\
								<span></span>\
							</div>\
							<div class="r_img_text">\
								<h3>' + data[i]['book_name'] + '</h3>\
								<div class="r_img_chaptername">上次读到：' + data[i]['chapter_name'] + '</div>\
								<div class="r_img_chaptername">更新至：' + data[i]['last_chapter_name'] + '</div>\
								<div class="r_img_other">\
									<em>继续阅读</em>\
								</div>\
							</div>\
						</a>\
					</li>';
                            } else if (data[i]['state'] == 0) {
                                sLi += '<li supdatet="' + data[i].updatetime + '" sbid = "' + data[i].book_id + '">\
						<a href="javascript:;" class="r_img_book_null">\
							<div class="r_img">\
								<img src="https://cpsn.klmnf.com/assets/qy/img/frontend/images/default_img.png?v=2.1.35" data-original="' + data[i]['image'] + '" />\
								<span></span>\
							</div>\
							<div class="r_img_text">\
								<h3>' + data[i]['book_name'] + '</h3>\
								<div class="r_img_chaptername">上次读到：' + data[i]['chapter_name'] + '</div>\
								<div class="r_img_chaptername">更新至：' + data[i]['last_chapter_name'] + '</div>\
								<div class="r_img_other">\
									<span>本书已下架</span>\
								</div>\
							</div>\
						</a>\
					</li>';
                            }

                        }
                        $('#recent_ul').append(sLi);
                        pagenum++;
                        if (data.length < pagesize) {
                            $('.loading_box').html('<span>已显示全部</span>').show();
                            sBookstop = false;
                        } else {
                            $('.loading_box').html('<span>下拉加载更多</span>').show();
                            sBookstop = true;
                        }
                        $('img').picLazyLoad({
                            effect: "fadeIn"
                        });

                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {}
                });
            }

            //防止重复请求数据
            function bookstoptime() {
                clearTimeout(sBookstopTime);
                sBookstop = false;
                sBookstopTime = setTimeout(function() {
                    sBookstop = true;
                },
                10000);
            }
        </script>
    </body>

</html>
