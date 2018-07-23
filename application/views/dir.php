<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            书籍目录
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
        <link href="/css/book_details.css" rel="stylesheet" type="text/css">
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
                书籍目录
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
            <div class="bd_head_box">
                <div class="bl_tit_box">
                    <div class="directory_select">
                        <span>
                        </span>
                        <select id="book_page">
                            <option value="/index/book/menu?book_id=11000005643&amp;page=1" p="1"
                            selected="">
                                1-100章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=2" p="2">
                                101-200章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=3" p="3">
                                201-300章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=4" p="4">
                                301-400章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=5" p="5">
                                401-500章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=6" p="6">
                                501-600章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=7" p="7">
                                601-700章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=8" p="8">
                                701-800章
                            </option>
                            <option value="/index/book/menu?book_id=11000005643&amp;page=9" p="9">
                                801-808章
                            </option>
                        </select>
                    </div>
                    <strong class="total_chapter">
                        共808章
                    </strong>
                </div>
                <ul class="bd_list_ul">
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766327">
                            第001章 动了心思
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766328">
                            第002章 跃跃欲试
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766329">
                            第003章 翻来覆去
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766330">
                            第004章 看得入神
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766331">
                            第005章 气死我了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766332">
                            第006章 高兴坏了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766333">
                            第007章 现场翻译
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766334">
                            第008章 突然分开
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766335">
                            第009章 没有骨头
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766336">
                            第010章 痛苦愤怒
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766337">
                            第011章 绘声绘色
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766338">
                            第012章 吃了不成
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766339">
                            第013章 是个好人
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766340">
                            第014章 转移话题
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766341">
                            第015章 一起吃饭
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766342">
                            第016章 永在心里
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766343">
                            第017章 皱皱眉头
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766344">
                            第018章 话音刚落
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766345">
                            第019章 都没看中
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766346">
                            第020章 还没确定
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766347">
                            第021章 拍拍床沿
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766348">
                            第022章 海南之行
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766349">
                            第023章 别想太多
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766350">
                            第024章 不可貌相
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766351">
                            第025章 大海哭泣
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766352">
                            第026章 没人认识
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766353">
                            第027章 刚要敲门
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766354">
                            第028章 信仰理念
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766355">
                            第029章 隔壁动静
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766356">
                            第030章 蓝色海岸
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766357">
                            第031章 笑个不停
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766358">
                            第032章 醋意大发
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766359">
                            第033章 听她说话
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766360">
                            第034章 谈个事请
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766361">
                            第035章 过问细节
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766362">
                            第036章 乐开了花
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766363">
                            第037章 遇见是缘
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766364">
                            第038章 集中精力
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766365">
                            第039章 业务提成
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766366">
                            第040章 适应很快
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766367">
                            第041章 有些遗憾
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766368">
                            第042章 相见不如怀念
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766369">
                            第043章 她还记得自己
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766370">
                            第044章 姐只是个传说
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766371">
                            第045章 没有一丝抗拒
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766372">
                            第046章 睡得十分幸福
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766373">
                            第047章 服务不怕细
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766374">
                            第048章 风行公司出事了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766375">
                            第049章 我们的规矩
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766376">
                            第050章 王炎的钱一定要还
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766377">
                            第051章 在沉默中爆发
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766378">
                            第052章 为钱所困的感觉
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766379">
                            第053章 话说到这个份上
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766380">
                            第054章 从希望到失望到绝望
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766381">
                            第055章 既感动又心疼
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766382">
                            第056章 何英不想离开老高
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766383">
                            第057章 也不例外
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766384">
                            第058章 公司以前的事
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766385">
                            第059章 郑总突然来了兴趣
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766386">
                            第060章 你怎么知道的
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766387">
                            第061章 挤爆了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766388">
                            第062章 他发现了病历
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766389">
                            第063章 除了出国和金钱
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766390">
                            第064章 上了瘾
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766391">
                            第065章 自己被误会不要紧
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766392">
                            第066章 难道陈瑶认识何英
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766393">
                            第067章 不以人的意志为转移
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766394">
                            第068章 蛛丝马迹
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766395">
                            第069章 我的心却老了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766396">
                            第070章 你比我强多了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766397">
                            第071章 手里拿着一个本子
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766398">
                            第072章 默认了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766399">
                            第073章 不一样的离别
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766400">
                            第074章 去了休息室
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766401">
                            第075章 稍稍有点虚惊
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766402">
                            第076章 这一天一定会来到
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766403">
                            第077章 单间已经订好
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766404">
                            第078章 这根本就不是恋爱
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766405">
                            第079章 车里的人是他们
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766406">
                            第080章 别的能耐没有
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766407">
                            第081章 自我感觉良好
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766408">
                            第082章 发自内心的亲爱
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766409">
                            第083章 很从容
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766410">
                            第084章 初步琢磨了一个方案
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766411">
                            第085章 他又离自己很远
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766412">
                            第086章 困意都上来了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766413">
                            第087章 有人来了
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766414">
                            第088章 有了底气
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766415">
                            第089章 做事情就是仔细
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766416">
                            第090章 故意装聋作哑
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766417">
                            第091章 是个养生的好地方
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766418">
                            第092章 在这里留守
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766419">
                            第093章 干嘛这么早睡觉
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766420">
                            第094章 下面有没有鱼
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766421">
                            第095章 基本特点
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766422">
                            第096章 肚子里缺油水
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766423">
                            第097章 我们那宿舍怎么办
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766424">
                            第098章 绿色蔬菜
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766425">
                            第099章 两朵姊妹花
                        </a>
                    </li>
                    <li>
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000005643&amp;chapter_id=2766426">
                            第100章 我痛不欲生
                        </a>
                    </li>
                </ul>
            </div>
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
        <script type="text/javascript">
            $(function() {
                $('.bd_description_box a').click(function() {
                    $(this).parent().removeClass('bd_description_open');
                });
                $("#book_page").change(function() {
                    var url = $(this).val();
                    window.location.href = url;
                })
            });
        </script>
    </body>

</html>
