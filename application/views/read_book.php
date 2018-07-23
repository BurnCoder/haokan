<!DOCTYPE html>
<html style="font-size: 104.167px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
            第二章：克夫
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
        <style>
            @charset "utf-8";*{font-family:\\5FAE\8F6F\96C5\9ED1,microsoft yahei;border:0;margin:0;padding:0;background:0
            0;font-weight:400;font-style:normal;word-break:break-all;word-wrap:break-word;text-decoration:none;list-style:none;outline:0;-webkit-tap-highlight-color:rgba(255,255,255,0)}body{font-size:14px;text-align:justify}a{-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none}input,select,textarea{border:none;font-size:14px;display:block;width:100%;box-sizing:border-box;-webkit-box-sizing:border-box;appearance:none;-webkit-appearance:none;background:0
            0;color:#666;resize:none}input[type=button],input[type=submit],input[type=reset],input[type=number]{-webkit-appearance:none;-moz-appearance:none;appearance:none}::-webkit-input-placeholder{color:#d2d2d2}:-moz-placeholder{color:#d2d2d2}::-moz-placeholder{color:#d2d2d2}:-ms-input-placeholder{color:#d2d2d2}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none!important;margin:0}html{height:100%}body{min-height:100%;background-color:#eee}.menu_position_101{position:relative;left:0;top:0;z-index:101}.read_tit_box{padding-top:15px}.menu_box{display:none;overflow:hidden;position:fixed;left:0;top:0;right:0;bottom:0;z-index:1000}.menu_box
            i{position:absolute;left:0;top:0;right:0;bottom:0}.menu_head{position:absolute;left:0;top:0;right:0;height:46px;background-color:#24242b}.menu_head_but{height:46px}.return_page{float:left;height:46px;width:46px;background:url(/assets/img/frontend/icon/return_icon_1.png)
            no-repeat center center;background-size:10px auto}.menu_h_more{float:right;height:46px;width:46px;background:url(/assets/img/frontend/icon/more_icon_1.png)
            no-repeat center center;background-size:21px auto}.menu_h_reading{float:right;height:46px;width:46px;background:url(/assets/img/frontend/icon/more_icon_2.png)
            no-repeat center center;background-size:21px auto}.menu_h_more_list{overflow:hidden;position:absolute;padding:8px
            0;right:0;top:46px;width:120px;background-color:rgba(36,36,43,.9);-webkit-transition:-webkit-transform
            .15s;transition:transform .15s;-webkit-transform:translateX(100%);transform:translateX(100%)}.menu_list_show{-webkit-transform:translateX(0);transform:translateX(0)}.menu_h_more_list
            a{margin:3px 0;display:block;height:34px;font-size:14px;color:#fff;text-align:center;line-height:34px}.menu_footer{position:absolute;left:0;right:0;bottom:0;height:50px}.menu_footer_but{position:absolute;left:0;top:0;right:0;bottom:0;z-index:10;overflow:hidden;height:50px;background-color:#24242b}.menu_footer_but
            a{float:left;padding-top:32px;width:20%;height:50px;background-position:center
            5px;background-repeat:no-repeat;background-size:25px auto;font-size:10px;color:#fff;text-align:center;box-sizing:border-box;line-height:1.4}.m_f_prev{background-image:url(/images/menu_icon_1.png)}.m_f_catalog{background-image:url(/images/menu_icon_2.png)}.m_f_set{background-image:url(/images/menu_icon_3.png)}.m_f_day{display:none;background-image:url(/images/menu_icon_6.png)}.m_f_night{background-image:url(/images/menu_icon_4.png)}.m_f_next{background-image:url(/images/menu_icon_5.png)}.m_f_set_box{position:absolute;left:0;right:0;bottom:50px;padding:8px
            8px 0;overflow:hidden;background-color:rgba(36,36,43,.9);-webkit-transition:-webkit-transform
            .15s;transition:transform .15s;-webkit-transform:translateY(200%);transform:translateY(200%)}.menu_set_show{-webkit-transform:translateY(0);transform:translateY(0)}.m_f_set_fontsize{margin-bottom:16px;overflow:hidden;position:relative;left:0;top:0}.m_f_font_max,.m_f_font_min{position:absolute;top:0;height:30px;width:50px;text-align:center;color:#fff;font-size:16px;line-height:30px}.m_f_font_min{left:0}.m_f_font_max{right:0}.m_f_font_range_box{position:relative;left:0;top:0;margin:0
            54px;height:30px}.m_f_font_rage{position:absolute;left:0;top:14px;right:0;z-index:100;height:2px;border-left:0
            solid #ed424b;background-color:rgba(225,225,225,.2)}.m_f_font_rage span{position:absolute;left:0;top:-5px;margin-left:-6px;height:12px;width:12px;background-color:#fff;-moz-border-radius:12px;-webkit-border-radius:12px;border-radius:12px}.m_f_font_rage
            .m_f_font_left_1{left:0}.m_f_font_rage .m_f_font_left_2{left:25%}.m_f_font_rage
            .m_f_font_left_3{left:50%}.m_f_font_rage .m_f_font_left_4{left:75%}.m_f_font_rage
            .m_f_font_left_5{left:100%}.m_f_input_range{display:block;position:absolute;left:0;right:0;top:8px;z-index:200;height:14px;opacity:0;filter:alpha(opacity=0)}.m_f_set_bg_box{overflow:hidden;margin:0
            0 16px}.m_f_set_font_main{margin-top:10px}.m_f_set_font_main a{background-color:#eee}.m_f_set_bg_li{float:left;height:26px;width:20%}.m_f_set_bg_li_tit{float:left;height:26px;width:15%;color:#fff;font-size:10px;text-align:center;line-height:13px}.m_f_set_bg_li
            a{display:block;margin:0 8px;height:26px;background-position:right bottom;background-repeat:no-repeat;background-size:20px
            auto;box-sizing:border-box;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;font-size:14px;color:#5e6a94;text-align:center;line-height:26px}.m_f_set_bg_but_1{background-color:#eee}.m_f_set_bg_but_2{background-color:#dfedd6}.m_f_set_bg_but_3{background-color:#f8ceda}.m_f_set_bg_but_4,.read_theme_4
            .read_recharge_tit_annotation span,.read_theme_4 .read_recharge_tit_null
            span{background-color:#f3cb9d}.m_f_set_bg_elect a{background-image:url(../../img/frontend/icon/elect_icon_3.png);-moz-box-shadow:0
            0 0 2px #27c1a0 inset;-webkit-box-shadow:0 0 0 2px #27c1a0 inset;box-shadow:0
            0 0 2px #27c1a0 inset}.read_theme_1,.read_theme_1 .read_fiexd_tit h1,.read_theme_1
            .read_recharge_tit_annotation span,.read_theme_1 .read_recharge_tit_null
            span{background-color:#eee}.read_theme_2,.read_theme_2 .read_fiexd_tit
            h1,.read_theme_2 .read_recharge_tit_annotation span,.read_theme_2 .read_recharge_tit_null
            span{background-color:#dfedd6}.read_theme_3,.read_theme_3 .read_fiexd_tit
            h1,.read_theme_3 .read_recharge_tit_annotation span,.read_theme_3 .read_recharge_tit_null
            span{background-color:#e6d5da}.read_theme_3{background-position:center
            center;background-repeat:no-repeat;background-attachment:fixed;background-image:url(/images/read_theme_3.jpg);background-size:100%
            auto}.read_theme_3 .read_recharge_tit_annotation,.read_theme_3 .read_recharge_tit_null{background-image:url(/assets/img/frontend/icon/border_icon_2.png)}.read_theme_3
            .read_chapter_price em,.read_theme_3 .read_chapter_price i,.read_theme_3
            .read_chapter_price strong,.read_theme_3 .read_charge_null_price strong,.read_theme_3
            .read_fiexd_tit h1,.read_theme_3 .read_recharge_tit_annotation span,.read_theme_3
            .read_recharge_tit_null span{color:#86465a}.read_theme_3 .read_recharge_more_but_1{border-color:#e8c6cf}.read_theme_4{background:url(/images/read_theme_4.jpg)
            repeat-y center center;background-size:100% auto}.read_theme_4 .read_fiexd_tit
            h1{background:url(/images/read_theme_4.jpg) repeat-y
            center center;background-size:100% auto}.read_theme_4 .read_recharge_tit_annotation,.read_theme_4
            .read_recharge_tit_null{background-image:url(/assets/img/frontend/icon/border_icon_3.png)}.read_theme_4
            .read_chapter_price em,.read_theme_4 .read_chapter_price i,.read_theme_4
            .read_chapter_price strong,.read_theme_4 .read_charge_null_price strong,.read_theme_4
            .read_fiexd_tit h1,.read_theme_4 .read_recharge_tit_annotation span,.read_theme_4
            .read_recharge_tit_null span{color:#533722}.read_theme_4 .read_recharge_more_but_1{border-color:#c1ae98}.read_theme_4
            .read_recharge_tit_annotation span,.read_theme_4 .read_recharge_tit_null
            span{background:url(/assets/img/frontend/banner/read_theme_4.jpg) repeat-y
            center center;background-size:auto 286px}.read_theme_3 .read_recharge_but_list
            a{background-color:rgba(255,255,255,.2);border-color:#e8c6cf}.read_theme_4
            .read_recharge_but_list a{background-color:rgba(255,255,255,.2);border-color:#c1ae98}.read_theme_3
            .read_recharge_but_select a,.read_theme_4 .read_recharge_but_select a{background-image:url(/assets/img/frontend/icon/elect_icon_1.png);border-color:#4bf}.read_theme_3
            .read_recharge_sms_input{background-image:url(/assets/img/frontend/icon/sms_icon_3.png);background-color:#ebdde1;border-color:#e9cad3}.read_theme_4
            .read_recharge_sms_input{background-image:url(/assets/img/frontend/icon/sms_icon_2.png);background-color:#dbcebc;border-color:#c4b19c}.read_theme_3
            ::-webkit-input-placeholder{color:#c3a1ab}.read_theme_3 :-moz-placeholder{color:#c3a1ab}.read_theme_3
            ::-moz-placeholder{color:#c3a1ab}.read_theme_3 :-ms-input-placeholder{color:#c3a1ab}.read_theme_4
            ::-webkit-input-placeholder{color:#ad9d8a}.read_theme_4 :-moz-placeholder{color:#ad9d8a}.read_theme_4
            ::-moz-placeholder{color:#ad9d8a}.read_theme_4 :-ms-input-placeholder{color:#ad9d8a}.read_theme_5,.read_theme_5
            .read_fiexd_tit h1,.read_theme_5 .read_recharge_tit_annotation span,.read_theme_5
            .read_recharge_tit_null span{background:#1d1d1f}.read_theme_5 .read_ewm{border-color:#604916;background-color:#29292a}.read_theme_5
            .read_ewm_other strong{color:#9c7317}.read_theme_5 .read_ewm_body em,.read_theme_5
            .read_ewm_other h3,.read_theme_5 .read_fiexd_tit h1,.read_theme_5 .read_main_loading
            strong,.read_theme_5 .read_main_next,.read_theme_5 .read_main_p p,.read_theme_5
            .read_recharge_tit_annotation span,.read_theme_5 .read_recharge_tit_null
            span,.read_theme_5 .read_tit_box em,.read_theme_5 .read_tit_box h2,.read_theme_5
            .read_tit_box strong{color:#7e8286}.read_theme_5 .read_main_next{background-color:#555}.read_theme_5
            .read_main_loading span{opacity:.3}.read_theme_5 .m_f_night{display:none}.read_theme_5
            .m_f_day{display:block}.read_theme_5 .read_recharge_list_tit,.read_theme_5
            .read_recharge_sms_input input{color:#7e8286}.read_theme_5 .read_chapter_price
            em,.read_theme_5 .read_chapter_price i,.read_theme_5 .read_chapter_price
            strong,.read_theme_5 .read_recharge_but_list a em,.read_theme_5 .read_recharge_but_list
            a strong{color:#56585c}.read_theme_5 .read_recharge_list_tit span,.read_theme_5
            .read_recharge_tit_annotation span{color:#6a7a8a}.read_theme_5 .read_chapter_price
            em span,.read_theme_5 .read_ewm_body p span,.read_theme_5 .read_recharge_but_list
            a em span,.read_theme_5 .read_recharge_sms_box span{color:#a43334}.read_theme_5
            .read_recharge_but_list i{color:#c69797;background-color:#8c2e2f}.read_theme_5
            .read_recharge_sms_input{border-color:#29292a;background-color:#29292a}.read_theme_5
            .read_recharge_but_list a{background-color:#29292a;border-color:#29292a}.read_theme_5
            .read_recharge_more_but_1{border-color:#5a5c5f}.read_theme_5 .read_recharge_but_select
            a{background-image:url(/assets/img/frontend/icon/elect_icon_2.png);border-color:#2559a6}.read_theme_5
            .read_charge_order_but,.read_theme_5 .read_recharge_sms_but{background-color:#2559a6;color:#92acd3;-moz-box-shadow:0
            4px 3px rgba(37,89,166,.2);-webkit-box-shadow:0 4px 3px rgba(37,89,166,.2);box-shadow:0
            4px 3px rgba(37,89,166,.2)}.read_fiexd_tit{height:36px}.read_fiexd_tit
            h1{overflow:hidden;padding:0 20px;position:fixed;left:0;top:0;right:0;z-index:1000;height:36px;background-color:#eee;font-size:12px;color:#a1a3a5;line-height:36px;text-align:justify;box-sizing:border-box}.read_body{min-height:100%;overflow:hidden;text-align:justify}.read_b_banner{margin:0
            0 10px;position:relative;left:0;top:0;overflow:hidden}.read_b_banner img{display:block;width:100%}.read_b_close{position:absolute;left:0;top:0;bottom:0;right:93%}.read_b_blank{position:absolute;left:7%;top:0;bottom:0;right:0}.read_content_list{padding:0
            20px}.read_ewm,.read_main_banner,.read_main_banner_img,.read_main_box,.read_main_loading,.read_main_other_box,.read_main_p,.read_main_p
            p,.read_tit_box{overflow:hidden}.read_main_other_box{padding-bottom:20px}.read_main_banner{margin:20px
            0}.read_tit_box h2{text-align:center;font-size:.21rem;color:#1d1b1b;line-height:1.4}.read_tit_box
            h2 em{margin:0;padding:0;display:inline-block;font-size:.21rem;color:#27c1a0;font-style:normal;text-align:left;line-height:.24rem;white-space:normal;word-break:break-all;word-wrap:break-word}.read_head_bookname{position:relative;left:0;top:0;margin:.1rem
            0 0;overflow:hidden;height:.4rem}.read_head_report{position:absolute;right:0;top:0;padding:0
            .06rem;height:.22rem;width:.4rem;text-decoration:none;text-align:center;font-size:.13rem;color:#4ab0fe;box-sizing:border-box;line-height:.22rem}.read_head_bookname
            strong{padding-right:.4rem;display:block;text-align:left;font-size:.13rem;color:rgba(27,27,27,.5);font-weight:400;line-height:.22rem}.read_tit_box
            strong{padding:10px 0;display:block;font-size:12px;color:#6a7a8a;line-height:1.4}.read_main_p
            p{margin:10px 0;font-size:18px;color:#1b1b1b;text-indent:36px;line-height:1.75}.read_main_p
            p:first-child{display:none}.read_main_loading{display:none;white-space:nowrap;font-size:0;text-align:center}.read_main_loading
            span,.read_main_loading strong{display:inline-block;margin:0 2px;font-size:14px;line-height:42px;vertical-align:middle}.read_main_loading
            span{overflow:hidden;height:10px;width:32px;background:url(/assets/img/frontend/icon/loading.gif)
            no-repeat 0 0;background-size:32px 10px}.read_main_loading strong{margin-left:4px;color:#6a7a8a}.read_main_next{margin:20px
            0;height:44px;background-color:#f4f6f8;font-size:16px;color:#6a7a8a;text-align:center;line-height:44px;-moz-border-radius:44px;-webkit-border-radius:44px;border-radius:44px}.read_main_banner_img
            a{display:block;overflow:hidden}.read_main_banner_img img{display:block;width:100%}.read_ewm{padding:10px;box-sizing:border-box}.read_ewm_img_box{margin:0
            auto;width:240px;overflow:hidden}.read_ewm_img{margin:0 auto;overflow:hidden;width:120px}.read_ewm_img
            img{display:block;width:100%}.read_ewm_img_box span{display:block;height:30px;font-size:14px;color:#a1a3a5;text-align:center;line-height:30px}.read_ewm_other{margin:0
            100px 0 0}.read_ewm_other h3{margin-bottom:6px;height:30px;font-size:20px;color:#000;line-height:30px}.read_ewm_other
            span{display:block;font-size:12px;color:#666;line-height:20px}.read_ewm_other
            strong{margin-top:14px;display:block;font-size:12px;color:#e6a30c;line-height:20px}.read_body_fontsize_1
            .read_main_p p{text-indent:28px;font-size:14px}.read_body_fontsize_2 .read_main_p
            p{text-indent:36px;font-size:18px}.read_body_fontsize_3 .read_main_p p{text-indent:44px;font-size:22px}.read_body_fontsize_4
            .read_main_p p{text-indent:40px;font-size:21px}.read_body_fontsize_5 .read_main_p
            p{text-indent:48px;font-size:25px}.read_catalog_box{visibility:hidden;position:fixed;left:0;top:0;right:0;bottom:0;z-index:3000;overflow:auto;-webkit-transition:visibility
            .25s;transition:visibility .25s}.read_catalog_show{visibility:visible;-webkit-transition:none;transition:none}.read_catalog_list{overflow:hidden;position:relative;left:0;top:0;z-index:10;margin-right:15%;padding:0
            14px;display:block;height:100%;white-space:nowrap;-webkit-transition:-webkit-transform
            .15s;transition:transform .15s;-webkit-transform:translateX(-100%);transform:translateX(-100%)}.read_catalog_show
            .read_catalog_list,.read_catalog_show .read_catalog_loading{-webkit-transform:translateX(0);transform:translateX(0)}.read_catalog_box
            i{position:absolute;left:0;top:0;right:0;bottom:0;z-index:5;background:rgba(36,36,43,.9)
            url(/assets/img/frontend/icon/close_icon_1.png) no-repeat 95% center;background-size:22px
            22px;-webkit-transition:opacity .25s;transition:opacity .25s;opacity:0}.read_catalog_show
            i{opacity:1}.read_catalog_tit{height:50px}.read_catalog_tit strong{float:left;height:50px;font-size:16px;color:#333;line-height:50px}.read_catalog_tit
            span{float:right;padding-right:26px;height:50px;background:url(/assets/img/frontend/icon/list_icon_1.png)
            no-repeat right center;background-size:16px auto;font-size:16px;color:#333;line-height:50px}.read_catalog_tit
            .read_reverse_sequence{background-image:url(/assets/img/frontend/icon/list_icon_2.png)}.read_catalog_ul{overflow:auto;position:absolute;left:0;top:50px;right:0;bottom:50px;padding:0
            14px;box-sizing:border-box}.more_mun_but{position:absolute;left:0;right:0;bottom:0;height:50px;width:100%;overflow:hidden;display:block;font-size:14px;color:#4bf;text-align:center;white-space:normal;word-break:break-all;word-wrap:break-word;line-height:50px;border-top:1px
            solid #edf0fa}.read_catalog_ul_touch{-webkit-overflow-scrolling:touch}.read_catalog_ul
            li{overflow:hidden;height:50px;background-color:#fff;border-bottom:1px
            solid #edf0fa}.read_catalog_ul li a{overflow:hidden;display:block;height:50px;font-size:14px;color:#a1a3a5;white-space:normal;word-break:break-all;word-wrap:break-word;line-height:50px}.read_catalog_ul
            li a,.read_catalog_ul li a:visited{color:#3a4a5a}.read_catalog_ul li a.read_catalog_elect{color:#59f}.read_catalog_loading{position:absolute;left:0;top:0;right:15%;bottom:0;z-index:6;padding-top:50%;box-sizing:border-box;background-color:#fff;-webkit-transition:-webkit-transform
            .15s;transition:transform .15s;-webkit-transform:translateX(-100%);transform:translateX(-100%)}.read_catalog_loading_img_1{margin:0
            auto 20px;width:210px;height:155px;background:url(/assets/img/frontend/icon/loading_icon_2.gif)
            no-repeat center center;background-size:210px 155px}.read_catalog_loading
            strong{display:block;font-size:14px;color:#6a7a8a;text-align:center;line-height:30px}.read_catalog_loading_hide
            .read_catalog_loading_img_1,.read_catalog_loading_hide strong{display:none}.menu_evocation_box{position:fixed;left:0;top:0;right:0;bottom:0;z-index:100}.menu_evocation_box
            span,.menu_evocation_box strong{display:block;width:100%}.menu_evocation_box
            span{height:30%}.menu_evocation_box strong{height:40%}.fiexd_ewm_box{display:none;position:fixed;z-index:5000;left:0;top:0;right:0;bottom:0;width:100%;overflow:hidden;background-color:rgba(27,27,27,.8);font-size:0;white-space:nowrap;text-align:center}.f_main_cloes{float:right;margin-top:4px;width:40px;height:40px;background:url(/assets/img/frontend/icon/cha_icon_2.png)
            no-repeat center center;background-size:18px 18px}.f_main_cloes_2{overflow:hidden;display:block;margin:15px
            auto 0;height:26px;width:26px;background:url(/assets/img/frontend/icon/close_icon_3.png)
            no-repeat center center;background-size:14px 14px;border-radius:26px;border:1px
            solid #fff}.f_align,.f_main_box{display:inline-block;vertical-align:middle}.f_align{margin-left:-1px;height:100%;width:1px}.f_main_box{width:280px}.f_main_info{overflow:hidden;background-color:#fff;border-radius:6px}.f_mian_title{padding:15px
            0 0;overflow:hidden}.f_mian_title h3{height:32px;font-size:18px;color:#5e6a94;text-align:center;line-height:32px}.f_mian_title
            p{text-align:center;font-size:13px;color:#fb6b69;line-height:20px}.f_mian_img{overflow:hidden;margin:10px
            auto;padding:10px;width:160px;height:160px;box-sizing:border-box;border:1px
            #dfe1e6 solid;-moz-box-shadow:0 2px 3px 0 rgba(94,106,148,.3);-webkit-box-shadow:0
            2px 3px 0 rgba(94,106,148,.3);box-shadow:0 2px 3px 0 rgba(94,106,148,.3)}.f_mian_img
            canvas,.f_mian_img img{display:block;width:100%;height:100%}.f_main_text,.f_main_text
            span,.f_main_text strong{display:block;overflow:hidden;font-size:14px;font-weight:400;color:#5e6a94;text-align:center;white-space:normal;line-height:18px}.f_main_text{padding:0
            16px 16px}.f_main_text span,.f_main_text strong{margin:4px 0}.f_main_text
            span{font-size:10px}.f_main_tomorrow_but{display:block;height:46px;border-top:1px
            solid #dfe1e6;text-align:center;font-size:15px;color:#77a4ff;line-height:46px}.f_main_over{display:block;margin:-8px
            auto 8px;width:200px;height:36px;background-color:#f6f6f6;border:1px solid
            #ddd;font-size:14px;color:#333;text-align:center;line-height:36px;border-radius:4px}.bind_alert_box{display:none;position:fixed;left:0;top:0;right:0;bottom:0;padding:20px
            0;overflow:hidden;background-color:rgba(0,0,0,.5);text-align:center;font-size:0;z-index:3000}.bind_alert_height,.bind_alert_main{display:inline-block;vertical-align:middle}.bind_alert_height{height:100%;overflow:hidden;width:1px;margin-left:-10px}.bind_alert_main{overflow:hidden;width:240px;background-color:#fff;border-radius:6px;font-size:14px;-moz-box-shadow:0
            0 10px 0 rgba(0,0,0,.3);-webkit-box-shadow:0 0 10px 0 rgba(0,0,0,.3);box-shadow:0
            0 10px 0 rgba(0,0,0,.3)}.alert_tit{text-align:center;overflow:hidden;height:40px}.alert_tit_clear{margin:5px
            5px 0 0;float:right;width:30px;height:30px;background:url(/assets/img/frontend/icon/cha_icon_2.png)
            no-repeat center center;background-size:18px auto}.alert_tit h2{margin:0
            40px;overflow:hidden;height:40px;font-size:16px;color:grey;text-align:center;line-height:40px}.alert_tit
            h3{margin-top:10px;padding-left:22px;display:inline-block;overflow:hidden;height:30px;background:url(/assets/img/frontend/icon/warning_icon_2.png)
            no-repeat 0 center;background-size:18px auto;font-size:16px;color:#333;text-align:center;line-height:30px}.alert_text{padding:10px}.alert_txt_c{font-size:14px;color:grey;text-align:left;line-height:20px}.alert_but_box{border-top:1px
            solid #d8d8d8;overflow:hidden}.alert_but_box a{display:block;float:left;width:50%;box-sizing:border-box}.alert_but_1{height:36px;font-size:15px;color:#ff6fa2;text-align:center;line-height:36px}.unicom_input_box{overflow:hidden;margin:10px
            16px 0;padding:5px 6px;height:28px;border:1px solid #d8d8d8;background-color:#fff;border-radius:4px}.unicom_input_box
            input{display:block;width:100%;height:28px;border:0;margin:0;padding:0;font-size:14px;color:#333;line-height:28px}.unicom_new_msg{padding:0
            16px;height:34px;text-align:right;line-height:24px}.unicom_new_msg a,.unicom_new_msg
            span{font-size:12px;color:#4ab0fe;line-height:28px}.marquee_text{margin-bottom:10px;text-align:justify;padding:5px
            16px;background-color:#fffacb}.marquee_main{position:relative;left:0;top:0;overflow:hidden}.marquee_main
            span{display:block;font-size:12px;color:#9a6d44;line-height:20px}.read_ewm_body{display:none;overflow:hidden;padding:0
            20px 220px}.read_ewm_body p{margin:20px 0}.read_ewm_body p span{color:#f84545}.read_body_ewm_img{margin:40px
            auto 10px;overflow:hidden;width:180px;height:180px}.read_body_ewm_img img{display:block;width:180px;height:180px}.read_ewm_body
            em{display:block;height:26px;font-size:14px;color:#3a4a5a;text-align:center;line-height:26px}.read_ewm_body
            a{display:block;margin:0 auto;height:30px;width:260px;font-size:14px;color:#4bf;text-align:center;line-height:30px}.scanIframe{overflow:hidden;position:absolute;left:-100px;top:-100px;margin:0;padding:0;border:0;height:1px;width:1px;opacity:0;filter:alpha(opacity=0)}.menu_h_more_list
            .menu_h_more_personal_center,.menu_h_more_list .my_bookcase{display:none}.read_nex_but{display:block;margin:.2rem
            0;overflow:hidden;height:.34rem;border:1px solid #27c1a0;font-size:.15rem;color:#27c1a0;text-align:center;line-height:.34rem;border-radius:.34rem}.read_theme_5
            .read_nex_but{color:#989898}.read_other_box{overflow:hidden;padding-bottom:10px}.read_other_but_l{overflow:hidden;float:left;padding:4px
            6px;height:24px;font-size:14px;color:#27c1a0;line-height:24px}.read_other_but_r{overflow:hidden;float:right;padding:4px
            6px;height:24px;text-decoration:none;font-size:14px;color:#27c1a0;line-height:24px}.read_other_box
            span{overflow:hidden;float:left;margin:9px 10px 0;height:14px;width:1px;background-color:#27c1a0}.recent_reading_but{position:absolute;padding:0
            24px 0 20px;right:0;top:60px;height:32px;background-color:#38383e;border-radius:32px
            0 0 32px;font-size:16px;color:#fff;line-height:32px;z-index:1001}#console_main{height:0;font-size:0}.console_box{position:fixed;left:0;top:50%;right:0;z-index:5000;margin-top:-.23rem;height:.46rem;font-size:0;text-align:center}.console_box
            span{display:inline-block;padding:0 .3rem;height:.46rem;background-color:rgba(0,0,0,.9);-moz-border-radius:.06rem;-webkit-border-radius:.06rem;border-radius:.06rem;font-size:.14rem;color:#fff;text-align:center;line-height:.46rem}.page-guide-and{display:none;position:fixed;left:0;top:0;bottom:0;z-index:600;width:100%;background:url(/assets/img/android.png);background-size:100%
            100%}.page-guide-ios{display:none;position:fixed;left:0;top:0;bottom:0;z-index:600;width:100%;background:url(/assets/img/ios.png);background-size:100%
            100%}.read_tit_box{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.reminder_box{overflow:hidden;padding:.14rem
            .24rem;background-color:rgba(215,221,220,.3);font-size:.14rem;color:#535756;line-height:.24rem}.reminder_box
            span{margin-left:-.08rem;color:#f56451;font-size:.14rem}.read_theme_5 .read_head_bookname
            strong,.read_theme_5 .reminder_box{color:#7e8286}.read_theme_5 .read_nex_but,.read_theme_5
            .read_other_box span,.read_theme_5 .read_other_but_l,.read_theme_5 .read_other_but_r,.read_theme_5
            .read_tit_box em{color:#93e0cf}.read_theme_5 .read_nex_but{border-color:#93e0cf}
        </style>
        <link rel="shortcut icon" href="https://cpsn.klmnf.com/assets/qy/img/favicon.ico?v=2.1.35"
        type="image/x-icon">
    </head>
    
    <body class="read_theme_1 ">
        <!--console_main 弹出吐丝-->
        <div id="console_main">
        </div>
        <!-- 这是正文 -->
        <div class="marquee_text" style="display: none;">
            <div class="marquee_main">
                <span style="text-align:center;">
                    重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知重要通知
                </span>
            </div>
        </div>
        <div class="read_body read_body_fontsize_2">
            <div class="read_content_list">
                <div class="read_main_box">
                    <div class="read_tit_box">
                        <h2>
                            <em>
                                第二章：克夫
                            </em>
                        </h2>
                    </div>
                    <div class="read_main_p">
                        <p>
                            第二章：克夫
                        </p>
                        <p>
                            聂家来的人听到这，目光之中带起了几分鄙夷，这还真是痴人说梦。
                        </p>
                        <p>
                            这些人此时已经想快点离开这一院子猪粪味儿的农家院了，直接就把那几乎不能自己走路的张秀娥，塞到了花轿里面。
                        </p>
                        <p>
                            张婆子看到这一幕，眼睛一转，就吩咐着自己的三儿媳妇：“你在家招待着，我跟去看看！”今天聂家少不了大鱼大肉的，去吃个饱再回来才够本呢！
                        </p>
                        <p>
                            说着竟然领着张玉敏，要跟到聂家去！
                        </p>
                        <p>
                            聂家这次也来了一个主事的婆婆，打心眼里就轻贱张家，她冷哼了一声说道：“你还是别跟着了，要是冲撞到了我家公子，仔细你赔不起！”
                        </p>
                        <p>
                            说着也不等张婆子说什么，这主事的婆婆就吩咐了两个人，押着张婆子往张家送。
                        </p>
                        <p>
                            张婆子骂骂咧咧的：“我们张家可是聂家的亲家呢，你们怎么能这么对我们？你们这些狗眼看人低的东西！”
                        </p>
                        <p>
                            不过此时她骂也没什么用了，聂家的人只想赶紧把这穷丫头抬回去冲喜，才不想多争执呢！
                        </p>
                        <p>
                            聂家今日要迎娶新妇，可是感觉并不怎么热闹，反而是冷清的很。
                        </p>
                        <p>
                            聂家在这十里八乡的，可是数一数二的大地主了，单说那门上的匾额，都是鎏金！门口还立着两座威武的石狮子！可气派了呢！
                        </p>
                        <p>
                            不过此时花轿走的并不是正门，而是从侧面的角门进去的。
                        </p>
                        <p>
                            张秀娥正从自己的袖口里面，摸出了一个发馊的馍馍吃着，张婆子说她左右都要出嫁了，多吃多赔，没给她饭吃，这还是她早前存下的。
                        </p>
                        <p>
                            聂家今天也没有什么宾客过来，这冲喜可不是什么光彩的事情，再加上聂老爷因为聂公子的病，憔悴了很多，此时实在没精力应付客人。
                        </p>
                        <p>
                            “夫人，人来了吗？”聂老爷有一些焦急的问道。
                        </p>
                        <p>
                            聂夫人看起来不过三十出头，可谓是风韵犹存光彩照人，此时她轻笑了一下说道：“到了。”
                        </p>
                        <p>
                            此言刚落，一个干瘪的老头就急匆匆的走了过来：“公……公子没气了！”
                        </p>
                        <p>
                            聂老爷的身子微微一晃悠，整个人就栽倒了过去。
                        </p>
                        <p>
                            至于聂夫人，闻言脸上带起了一丝若有若无的笑容。
                        </p>
                        <p>
                            ……
                        </p>
                        <p>
                            村中央的位置生着一棵枝繁叶茂的大槐树，正是正午时分，不少人下地或者是挖野菜回来的人，都会忍不住的在这歇一歇。
                        </p>
                        <p>
                            此时几个婆子正眉飞色舞的说着什么。
                        </p>
                        <p>
                            “嘿！我看这次老张家是走了大运喽！”
                        </p>
                        <p>
                            “是啊，这次那张家大丫可是嫁了一个好人家，以后张家一家子可都要过有钱人的日子了！”
                        </p>
                        <p>
                            一个五十多头的婆子，如同斗胜了的公鸡一样，负手阔步的在这走了一圈，满意的听着大家的议论，这便是张婆子了。
                        </p>
                        <p>
                            她的孙女可是嫁到了地主家当正妻呢！以后稍微掉下点渣子来，就比这些穷鬼强太多了！
                        </p>
                        <p>
                            这只是明面上的话，大家的心中可嘀咕着，这张家可真抠门，张秀娥嫁的那么好，也不整点像样的饭食！不过这些话，这些人可不敢当着张婆子的面说。
                        </p>
                        <p>
                            他们不指望以后能沾光，但是还是免不了想着，若是给张婆子记恨上了，以后使绊子可怎么办？
                        </p>
                        <p>
                            不管那张秀娥是不是冲喜，毕竟是嫁到了聂地主家啊！
                        </p>
                        <p>
                            “唉！你们快看，那不是早上接张家大丫的花轿吗？怎么又回来了？”树下有个人忍不住的惊呼了一声。
                        </p>
                        <p>
                            张家婆子微微一顿，往村口的方向看去。
                        </p>
                        <p>
                            此时张秀娥正坐在花轿里面，痛苦万分的捂着自己胸口，手上还拿着一把染血的剪子。
                        </p>
                        <p>
                            张秀娥咬牙低咒着：“这都是什么事儿啊！怎么就穿越了？”
                        </p>
                        <p>
                            看着这一身大红的衣服，再看看手中的剪子，显而易见，这是一个自杀的新嫁娘！张秀娥此时觉得自己的脑子之中，隐隐约约的浮现出来一些原主的记忆。
                        </p>
                        <p>
                            这些片段零零星星的，她这么想就有一些头痛欲裂，只是大概知道了，张秀娥被自己贪慕虚荣的奶奶，卖给了聂地主家那得了痨病快要死了的儿子冲喜。
                        </p>
                        <p>
                            可是谁知道，花轿才到聂家，聂地主的儿子就没了命。
                        </p>
                        <p>
                            聂夫人一口咬定了是张秀娥克夫，这不……张秀娥就被抬回来了。
                        </p>
                        <p>
                            被抬回来的张秀娥也是一根筋的，想着自己要是这样回来，少不了被自己的奶奶打死，于是就趁乱摸了一把剪子带到了花轿上。
                        </p>
                        <p>
                            之后的事情就简单了，这原主张秀娥一死百了，正在乘坐电梯的倒霉版张秀娥遇见电梯事故，醒来的时候就接收了这破败的身子。
                        </p>
                        <p>
                            张婆子此时连忙冲到了花轿门前，一脸谄媚的看着花轿旁边的胖媒婆：“大妹子，这是咋回事儿啊？咋还把空花轿给抬回来了？”
                        </p>
                        <p>
                            胖媒婆一脸横肉，此时语气不快的说道：“不是空的，你家张秀娥才过去，就把聂公子给克死了，聂夫人让我把人给送回来。”
                        </p>
                        <p>
                            张婆子一脸惊怒的看着花轿：“你是说张秀娥在里面？”
                        </p>
                        <p>
                            胖媒婆随手掀开了花轿的门，然后开口说道：“你可看清楚了，人我给你送回来了！以后咱们就两清了。”
                        </p>
                        <p>
                            “不行，不行！这人都嫁到聂家了，怎么还能给送回来！大妹子，我可是给了你五十个大钱的，你是怎么办事的？”张婆子的声音尖锐了起来。
                        </p>
                        <p>
                            之后就是两个人的争吵声了。
                        </p>
                        <p>
                            张秀娥在花轿里面已经要昏厥过去了，她知道自己这是失血过多。
                        </p>
                        <p>
                            要是再这样下去，她肯定是要一命呜呼。
                        </p>
                        <p>
                            虽然说莫名其妙的穿越了，她的心中不痛快，但是好歹有命在，她可不敢保证自己就这样死了，还会不会有下一次睁开眼睛的机会。
                        </p>
                        <p>
                            于是张秀娥就哑着声音开口了：“疼……”
                        </p>
                        <p>
                            此时张婆子才不会看张秀娥一眼呢，这个丧门星，本以为她嫁过去家里就能过好日子了，哪成想竟然又被送回来了！
                        </p>
                        <p>
                            不过好事儿的刘婆子，往花轿里面张望了一眼，这一张望，就看出来那大红的嫁衣上是染了血的，当下就惊呼了一声：“血！”
                        </p>
                        <p>
                            “张秀娥自杀了！”
                        </p>
                        <p>
                            “这次看张婆子还怎么嚣张，呸！”
                        </p>
                        <p>
                            “夭寿嘞。”
                        </p>
                    </div>
                </div>
                <div class="read_main_other_box">
                    <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000078930&amp;chapter_id=12421886"
                    class="read_nex_but menu_position_101">
                        下一章
                    </a>
                    <div class="read_other_box menu_position_101">
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000078930&amp;chapter_id=12421881"
                        class="read_other_but_l">
                            上一章
                        </a>
                        <span>
                        </span>
                        <a href="javascript:;" class="read_other_but_l op_menu">
                            菜单
                        </a>
                    </div>
                    <div class="reminder_box">
                        <span>
                            【温馨提示】
                        </span>
                        请点击右上角“...”—选择“在聊天中置顶”，下次阅读更方便
                    </div>
                    <div class="read_head_bookname menu_position_101">
                        <a href="https://wxe9c387c875ec95f5.ziread.cn/index/index/report?from=wechat"
                        class="read_head_report">
                            举报
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--read_body 阅读内容-->
        <div class="menu_evocation_box">
            <span>
            </span>
            <strong>
            </strong>
            <span>
            </span>
        </div>
        <!--menu_evocation_box 唤出菜单点击区域框-->
        <div class="menu_box menu_hide" style="display: none;">
            <i>
            </i>
            <a href="/recentread"
            class="recent_reading_but">
                最近阅读
            </a>
            <div class="menu_footer">
                <div class="m_f_set_box">
                    <div class="m_f_set_bg_box m_f_set_font_main">
                        <div class="m_f_set_bg_li_tit">
                            字体
                            <br>
                            大小
                        </div>
                        <div class="m_f_set_bg_li">
                            <a href="javascript:;">
                                小
                            </a>
                        </div>
                        <div class="m_f_set_bg_li m_f_set_bg_elect">
                            <a href="javascript:;">
                                中
                            </a>
                        </div>
                        <div class="m_f_set_bg_li">
                            <a href="javascript:;">
                                大
                            </a>
                        </div>
                    </div>
                    <div class="m_f_set_bg_box m_f_set_bg_main">
                        <div class="m_f_set_bg_li_tit">
                            背景
                            <br>
                            颜色
                        </div>
                        <div class="m_f_set_bg_li m_f_set_bg_elect">
                            <a href="javascript:;" class="m_f_set_bg_but_1">
                            </a>
                        </div>
                        <div class="m_f_set_bg_li">
                            <a href="javascript:;" class="m_f_set_bg_but_2">
                            </a>
                        </div>
                        <div class="m_f_set_bg_li">
                            <a href="javascript:;" class="m_f_set_bg_but_3">
                            </a>
                        </div>
                        <div class="m_f_set_bg_li">
                            <a href="javascript:;" class="m_f_set_bg_but_4">
                            </a>
                        </div>
                    </div>
                </div>
                <!--m_f_set_box-->
                <div class="menu_footer_but">
                    <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000078930&amp;chapter_id=12421881"
                    class="m_f_prev">
                        上一章
                    </a>
                    <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/menu?book_id=11000078930&amp;chapter_id=12421884"
                    class="m_f_catalog">
                        目录
                    </a>
                    <a href="javascript:;" class="m_f_set">
                        设置
                    </a>
                    <a href="javascript:;" class="m_f_day m_f_night_day">
                        白天
                    </a>
                    <a href="javascript:;" class="m_f_night m_f_night_day">
                        夜间
                    </a>
                    <a href="https://wxe9c387c875ec95f5.ziread.cn/index/book/chapter?book_id=11000078930&amp;chapter_id=12421886"
                    class="m_f_next">
                        下一章
                    </a>
                </div>
                <!--menu_footer_but-->
            </div>
            <!--menu_footer-->
        </div>
        <!--menu_box 菜单-->
        <div class="fiexd_ewm_box" style="display:none" id="fiexd_ewm_box">
            <div class="f_main_box">
                <div class="f_main_info">
                    <div class="f_mian_title">
                        <p style="font-size: .16rem;">
                            支持原创，保护正版
                        </p>
                        <p style="font-size: .16rem;">
                            请关注作者授权公众号
                        </p>
                        <p style="font-size: .16rem;">
                            阅读后续精彩内容
                        </p>
                    </div>
                    <div class="f_mian_img">
                        <img src="/images/qrcode_gh_ac8ed94b442f_1.jpg">
                    </div>
                    <div class="f_main_text">
                        <span>
                            长按识别上方二维码关注
                        </span>
                    </div>
                </div>
                <a class="f_main_cloes_2">
                </a>
            </div>
            <div class="f_align">
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
        <script type="text/javascript">
            var cs = {
                f: "2",
                l: "1",
                b: "2",
                d: "1"
            },
            fRead = {
                getQueryString: function(a, b, c) {
                    if (0 < b.length) {
                        var d = b.indexOf(a + "=");
                        if ( - 1 != d) return d = d + a.length + 1,
                        a = b.indexOf(c, d),
                        -1 == a && (a = b.length),
                        unescape(b.substring(d, a))
                    }
                    return ""
                },
                consolelog: function() {
                    for (var a = "",
                    b = 0; b < arguments.length; b++) a += arguments[b] + "---\u2192";
                    console.log(a)
                },
                jsonparse: function(a) {
                    if ("string" == typeof a) return JSON.parse(a);
                    fRead.consolelog("jsonparse", "not string");
                    return a
                },
                jsonstringify: function(a) {
                    if ("object" == typeof a) return JSON.stringify(a);
                    fRead.consolelog("jsonparse", "not object");
                    return a
                },
                settheme: function(a) {
                    var b = $(window).scrollTop(),
                    c = $(".read_body").height();
                    a && (oJson = a);
                    $("html,body").attr("class", oJson.bookBg.aAookBg[oJson.bookBg.selectVal]);
                    oJson.bookNight ? $("html,body").addClass("read_theme_5") : $("html,body").removeClass("read_theme_5");
                    $(".m_f_input_range").val(oJson.fontSize);
                    $(".m_f_font_rage span").attr("class", "m_f_font_left_" + oJson.fontSize);
                    $(".read_body").attr("class", "read_body read_body_fontsize_" + oJson.fontSize);
                    c = $(".read_body").height() / c;
                    $(window).scrollTop(c * b);
                    $(".m_f_set_bg_li").eq(oJson.bookBg.selectVal).addClass("m_f_set_bg_elect").siblings(".m_f_set_bg_li").removeClass("m_f_set_bg_elect");
                    $.fn.cookie("contentJson", fRead.jsonstringify(oJson), {
                        expires: 30,
                        path: "/"
                    })
                }
            };
            function getyearday() {
                var a = new Date,
                b = a.getYear(),
                c = a.getMonth() + 1;
                a = a.getDate();
                10 > c && (c = "0" + c);
                10 > a && (a = "0" + a);
                return "" + (1900 + b) + c + a
            }
            $(function() {
                var a = $.fn.cookie("cs");
                a && (1 == a.l ? $(".ocs span").addClass("read_reverse_sequence").text("\u5012\u5e8f") : $(".ocs span").removeClass("read_reverse_sequence").text("\u6b63\u5e8f"));
                $(".read_catalog_list").on("click", ".read_catalog_tit span",
                function() {
                    var b = $.fn.cookie("cs"),
                    a = $(".read_catalog_ul li"),
                    d = $("<ul></ul>");
                    b = b ? fRead.jsonparse(b) : cs;
                    1 == b.l ? (b.l = 2, $(".read_catalog_tit span").addClass("read_reverse_sequence").text("\u5012\u5e8f")) : (b.l = 1, $(".read_catalog_tit span").removeClass("read_reverse_sequence").text("\u6b63\u5e8f"));
                    for (var e = a.length - 1; 0 <= e; e--) d.append(a.eq(e));
                    $(".read_catalog_ul").html("");
                    $(".read_catalog_ul").html(d.html());
                    $.fn.cookie("cs", fRead.jsonstringify(b), {
                        expires: 30,
                        path: "/"
                    })
                });
                $(".m_f_catalog").click(function() {});
                $(".menu_evocation_box strong,.op_menu").click(function() {
                    $(".menu_box").show()
                });
                $(".menu_box i").click(function() {
                    $(".m_f_set_box").removeClass("menu_set_show");
                    $(".menu_hide").hide()
                });
                $(".m_f_set").click(function() {
                    $(".m_f_set_box").toggleClass("menu_set_show")
                });
                $(".m_f_set_font_main .m_f_set_bg_li").click(function() {
                    var b = $(this),
                    a = $.fn.cookie("cs"),
                    d = b.index();
                    a = a ? fRead.jsonparse(a) : cs;
                    a.f = d;
                    $(".read_body").attr("class", "read_body read_body_fontsize_" + d);
                    b.addClass("m_f_set_bg_elect").siblings(".m_f_set_bg_li").removeClass("m_f_set_bg_elect");
                    $.fn.cookie("cs", fRead.jsonstringify(a), {
                        expires: 30,
                        path: "/"
                    })
                });
                $(".m_f_set_bg_main .m_f_set_bg_li").click(function() {
                    var a = $(this),
                    c = $.fn.cookie("cs"),
                    d = a.index();
                    c = c ? fRead.jsonparse(c) : cs;
                    c.b = d;
                    c.d = 1;
                    $("html,body").attr("class", "read_theme_" + d);
                    a.addClass("m_f_set_bg_elect").siblings(".m_f_set_bg_li").removeClass("m_f_set_bg_elect");
                    $.fn.cookie("cs", fRead.jsonstringify(c), {
                        expires: 30,
                        path: "/"
                    })
                });
                $(".m_f_night_day").click(function() {
                    var a = $.fn.cookie("cs");
                    a = a ? fRead.jsonparse(a) : cs;
                    1 == a.d ? ($("html,body").addClass("read_theme_5"), a.d = 2) : ($("html,body").removeClass("read_theme_5"), a.d = 1);
                    $.fn.cookie("cs", fRead.jsonstringify(a), {
                        expires: 30,
                        path: "/"
                    })
                });
                $(".read_catalog_box i").click(function() {
                    $(".read_catalog_box").removeClass("read_catalog_show")
                });
                $(".read_other_but_r").click(function() {
                    $("#fiexd_ewm_box").show()
                });
                $(document).on("click", ".gzewm",
                function(a) {
                    if (2 != $.fn.cookie("tiao")) return $("#fiexd_ewm_box").show(),
                    a.stopPropagation(),
                    $.fn.cookie("tiao", 2, {
                        expires: 1,
                        path: "/"
                    }),
                    !1
                });
                $(".f_main_cloes,.f_main_over,.f_main_cloes_2").click(function() {
                    $(".fiexd_ewm_box").hide()
                });
                $(document).on("click", ".r_img_list_edit a",
                function(a) {
                    a.stopPropagation();
                    return ! 1
                })
            });
            //cpslog([701, {
            //    map: {
            //        book_id: '11000078930',
            //        chapter_id: '12421884',
            //        sid: '',
            //        need_pay: '0',
            //        daofen: ''
            //    }
            //},
            //'chapter_pv']);
        </script>
    </body>

</html>
