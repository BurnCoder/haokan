<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            好看文学
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
        <link href="/css/swiper.min.css" rel="stylesheet" type="text/css">
        <link href="/css/index.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="https://cpsn.klmnf.com/assets/qy/img/favicon.ico?v=2.1.35"
        type="image/x-icon">
    </head>
    
    <body class="">
        <!--console_main 弹出吐丝-->
        <div id="console_main">
        </div>
        <!-- 这是正文 body_sytle_girl 1-->
        <div class="body_sytle">
            <div class="i_nav_fixed_box">
                <div class="i_nav_box">
                    <a href="/usercenter" class="i_h_user_but">
                    </a>
                    <a href="/search"
                    class="i_h_search_but">
                    </a>
                    <div class="i_nav_list">
                        <a href="/?type=boy" class="nav_but <?php if ($type == 'boy') echo 'hover'; ?>">
                            <strong>
                                男生
                            </strong>
                            <span>
                            </span>
                        </a>
                        <a href="/?type=girl" class="nav_but <?php if ($type == 'girl') echo 'hover'; ?>">
                            <strong>
                                女生
                            </strong>
                            <span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--i_nav_box 顶部导航-->
            <div class="i_slide_box">
                <!-- Swiper -->
                <div class="swiper-container swiper-container-horizontal swiper-container-ios swiper-container-wp8-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-1125px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="2" style="width: 375px;">
                            <a href="/bookinfo">
                                <img alt="" src="/images/e0d5c6c86865a46527a22fd8f7b8b786.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                        style="width: 375px;">
                            <a href="/bookinfo">
                                <img alt="" src="/images/5a0770d7724914f7225b6f708aade660.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1"
                        style="width: 375px;">
                            <a href="/bookinfo">
                                <img alt="" src="/images/5a6e61613ace68a3e55cf6e38919a1d7.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2"
                        style="width: 375px;">
                            <a href="/bookinfo">
                                <img alt="" src="/images/e0d5c6c86865a46527a22fd8f7b8b786.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0"
                        style="width: 375px;">
                            <a href="/bookinfo">
                                <img alt="" src="/images/5a0770d7724914f7225b6f708aade660.jpg">
                            </a>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet">
                        </span>
                        <span class="swiper-pagination-bullet">
                        </span>
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active">
                        </span>
                    </div>
                </div>
            </div>
            <!--i_slide_box 轮播图-->
            <div class="i_topic_nav_box">
                <div class="i_topic_nav_li">
                    <a href="/category">
                        <div class="i_topic_nav_li_img">
                            <img alt="" src="/images/nav_icon_1.png">
                        </div>
                        <strong>
                            分类
                        </strong>
                    </a>
                </div>
                <div class="i_topic_nav_li">
                    <a href="/booklist">
                        <div class="i_topic_nav_li_img">
                            <img alt="" src="/images/nav_icon_2.png">
                        </div>
                        <strong>
                            免费
                        </strong>
                    </a>
                </div>
                <div class="i_topic_nav_li">
                    <a href="/booklist">
                        <div class="i_topic_nav_li_img">
                            <img alt="" src="/images/nav_icon_3.png">
                        </div>
                        <strong>
                            完本
                        </strong>
                    </a>
                </div>
                <div class="i_topic_nav_li">
                    <a href="/pay">
                        <div class="i_topic_nav_li_img">
                            <img alt="" src="/images/nav_icon_5.png">
                        </div>
                        <strong>
                            充值
                        </strong>
                    </a>
                </div>
            </div>
            <div class="i_recent_box">
                <a href="/recentread" class="i_r_l">
                    最近阅读：
                </a>
                <a href="/readbook"
                class="i_r_r">
                    《快穿：我只想种田》
                </a>
            </div>
            <div class="i_module_box">
                <div class="i_module_tit">
                    <h2>
                        <strong>
                            本周强推
                        </strong>
                    </h2>
                </div>
                <div class="i_images_list">
                    <ul class="i_images_ul">
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/1.jpeg">
                                </div>
                                <h3>
                                    快穿：我只想种田
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/c6d046dd2105cfa27620ba1271157ea3.jpg">
                                </div>
                                <h3>
                                    在星光处等你
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/2583217c2896896f0d29e230ee04235f.jpg">
                                </div>
                                <h3>
                                    凤女难求
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/bf77c5960e099907d452a3581fb20a70.jpg">
                                </div>
                                <h3>
                                    夫人，华丽转身
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <a class="i_module_list_more" href="/booklist">
                        <strong>
                            查看更多
                        </strong>
                    </a>
                </div>
            </div>
            <div class="i_module_box">
                <div class="i_module_tit">
                    <h2>
                        <strong>
                            编辑力荐
                        </strong>
                    </h2>
                </div>
                <div class="i_images_list">
                    <ul class="i_images_ul">
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/0c1891b9808e38cb430690ee02d768eb.jpg">
                                </div>
                                <h3>
                                    总裁爱吃窝边草
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/eec39adb4c9fd3ad25f448fd6cb687c4.jpg">
                                </div>
                                <h3>
                                    穿越府中宝
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/0dd30feab1cc4f059f85f42db84eba1a.jpg">
                                </div>
                                <h3>
                                    神女凶萌
                                </h3>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/8616c5a5c9ac03e1eaf779e611e31989.jpg">
                                </div>
                                <h3>
                                    总裁娇妻当自强
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <a class="i_module_list_more" href="/booklist">
                        <strong>
                            查看更多
                        </strong>
                    </a>
                </div>
            </div>
            <div class="i_module_box">
                <div class="i_module_tit">
                    <h2>
                        <strong>
                            人气作品
                        </strong>
                    </h2>
                </div>
                <div class="i_images_text_list">
                    <ul class="i_images_text_ul">
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/8073d5aae8be270ed66009ef0e79e406.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        神秘老公撩又宠
                                    </h3>
                                    <p>
                                        一夜欢愉，霍家大少捡回家养了十三年的小媳妇，跑了！ 三年后再次见面，从此她看见他就想跑，却被他连哄带骗拐回家。 “霍大少求放过，我们不熟！”
                                        他将她扑倒淡定回答：“养了十三年都不熟，那只能多养一辈子了。” 从此同一屋檐下，大被同眠，夜夜纠缠，他非常努力的深入了解。 霍大少坚定不移的相信，睡上一辈子他们肯定就熟了！
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            秦小甜
                                        </strong>
                                        <em>
                                            23.38万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/fb4c3b12508df4688d0ff78af3e1ab82.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        王妃已下线
                                    </h3>
                                    <p>
                                        方菡穿越了变成了九岁的方菡娘，身后还多了两个弟弟妹妹。 爹娘不在，爷奶不爱，亲戚使坏，一手烂牌！ 然我偏要把命争，斗极品亲戚，养弟弟妹妹，走出一条康庄大道来！
                                        请叫我——致富小能手！ 只是，那个面瘫王爷，你能不能离我远点？你这条大腿，我并不是很想抱…… 姬谨行：那就抱腰。
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            西兰花花
                                        </strong>
                                        <em>
                                            21.62万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/f91e77af32b25a916fcdef7ed4aa3dac.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        凡缘双牵
                                    </h3>
                                    <p>
                                        相亲却被当成勾人男友的小三，简筠愤怒大骂：“我不认识那个人渣！”结果从此被人渣缠上。一纸隐婚协议，她成了他的妻，说好彼此不侵犯，谁知霍少转眼就食言，简筠忍无可忍，“我要——”“好，我给！”他一口答应。可是，她明明想说的是我要离婚，为什么下一秒却被拦腰抱起……
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            麦可
                                        </strong>
                                        <em>
                                            23.05万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/8b82ce65507ebdabfbc296b77eb44709.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        她就是如此娇花
                                    </h3>
                                    <p>
                                        上一世，姜暖烟错信堂姐，希望她们能说服太子，重审棉衣一案，备受凌辱之后，方知兰溪姜家早被满门抄斩，而这一切的罪魁祸首真是她嫡亲的祖母、伯父……
                                        重生归来，这一世，她保家业，护家人，踩姐妹、打兄长，气伯母，斗伯父，更是气死祖母，再将太子拉下马！ 为了不让兰溪姜家重蹈覆辙，她看似嚣张横行，实则步步算计。
                                        他，貌赛潘安，权倾天下，一双桃花眼处处风流债…… 偏偏她对自己冷嘲热讽，每每捉弄…… 他为她暗中扫除阴谋暗杀，他为她与太子明争暗斗，他为她披甲上阵。
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            子衿
                                        </strong>
                                        <em>
                                            23.19万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a class="i_module_list_more" href="/booklist">
                        <strong>
                            查看更多
                        </strong>
                    </a>
                </div>
            </div>
            <div class="i_module_box">
                <div class="i_module_tit">
                    <h2>
                        <strong>
                            优书试读
                        </strong>
                    </h2>
                </div>
                <div class="i_images_text_list">
                    <ul class="i_images_text_ul">
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/1e7fd8869c5bfb4129d528b479f896c0.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        画满田园
                                    </h3>
                                    <p>
                                        这就是一个农女穿越、带娃、种田、买房、买车的致富记。从吃不饱到吃的饱再到地主的创业史，从山野娃到位居高堂的奋斗史，收割美男与被收割的爱情史。总之，没事种种田，一不小心种出个千亩江山；没事带带娃娃，一不小心带出仨种子选手；没事收割美男，一不小心……不，顾筱婉督了眼床上那嚎的正带劲的两个奶娃娃，欲哭无泪，咋被这妖孽男收割了。
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            秦喜儿
                                        </strong>
                                        <em>
                                            21.62万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/bcc1ebfbaac64e0b27e4e39b33ae5993.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        谢谢你，予我星辰
                                    </h3>
                                    <p>
                                        婚礼休息室里，她亲眼看到自己的新郎和他的“男朋友”抱在了一起。万念俱灰之后，她现场征婚：“谁敢娶我，我现在就嫁，只要不是弯的！”全场哗然之时，一个坐着轮椅的男人出了声，“我娶！不过，是弯是直，你要不要先验验货？”当她知道这个腰部以下高位瘫痪的男人，竟是新郎亲舅舅时，毅然嫁给了他！
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            薇子
                                        </strong>
                                        <em>
                                            21.86万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/f57787db391270a7cb9fb2cebbee3f6b.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        王爷要吃回头草
                                    </h3>
                                    <p>
                                        那一年他心有所爱，却因皇命不得不迎娶她。婚后，他要她谨记自己的身份，“你不过是别人的弃子，唯一能做的只有顺从！”莫须有的罪名，他终如愿逼她奉上美眸换给他深爱的女子。那刻心死，一场大火，从此大路朝天，各走半边。六年后，凤凰涅槃，她已改嫁，身边还多了一对孪生神童，却逃不掉他霸道的纠缠……“该死的！生了我的子嗣，你还敢改嫁！”
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            婧宸
                                        </strong>
                                        <em>
                                            23.58万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/bookinfo">
                                <div class="i_images_img">
                                    <img alt="" src="/images/default_img.png" data-original="https://cpsn.klmnf.com/uploads/20180705/bb86ca9e9bc0feb67c157c6d2046e253.jpg">
                                </div>
                                <div class="i_images_txt_box">
                                    <h3>
                                        医生，恋爱吧
                                    </h3>
                                    <p>
                                        “放开我！唔……”“放开你？先喂饱我再说。” 为救腹中的孩子，她假装自杀，消失在他的世界，从这以后，她成了他的禁忌。 谁知四年后相遇，他冷漠，他无情，他恨她入骨……然而他再次爱这个女人“上”了瘾。
                                    </p>
                                    <div class="i_images_txt_other">
                                        <strong>
                                            月明中
                                        </strong>
                                        <em>
                                            24.2万人在追
                                        </em>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <a class="i_module_list_more" href="/booklist">
                        <strong>
                            查看更多
                        </strong>
                    </a>
                </div>
            </div>
        </div>
        <!--body_sytle-->
        <!--活动弹框-->
        <!-- 这里引入底部footer -->
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
        <script type="text/javascript" src="/js/swiper.min.js">
        </script>
        <script type="text/javascript" src="/js/common.js">
        </script>
        <script type="text/javascript" src="/js/cps_log.js">
        </script>
        <!-- 这里引入js -->
        <script type="text/javascript" src="/js/index.js">
        </script>
    </body>

</html>
