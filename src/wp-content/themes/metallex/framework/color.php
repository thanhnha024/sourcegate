<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $metallex_redux_demo; 
$b=$metallex_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>

.yellow_bg {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.home_page_numbering .number {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.view-all.offer_read {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.search_overlay.vari_2_search {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>
}
#main-navigation-wrapper.navbar-default.var2_main_menu_wrapper .navbar-nav > .open > a, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper .navbar-nav > .open > a:focus, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper .navbar-nav > .open > a:hover, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper .navbar-nav > li:hover > a {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    border-bottom:2px solid <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.hdr_top_bar.hdr2_top_bar.updated-1-1 p.hdr_certified {color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.hdr_top_bar.hdr2_top_bar.updated-1-1 ul.contact-info li a {color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;}
.inner-banner .breadcumb a {
  color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.hdr_top_bar.hdr2_top_bar.updated-1-1 ul.contact-info li i.fa-phone {font-size: 20px;color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;}
.hdr_top_bar.hdr2_top_bar.updated-1-1 ul.contact-info li i.fa-envelope {font-size: 15px;color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;}
#main-navigation-wrapper .navbar-nav > li > .dropdown-submenu {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
#main-navigation-wrapper.navbar-default.var2_main_menu_wrapper.var3_main_menu_wrapper.var5_main_menu_wrapper .navbar-nav > .open > a, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper.var3_main_menu_wrapper.var5_main_menu_wrapper .navbar-nav > .open > a:focus, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper.var3_main_menu_wrapper.var5_main_menu_wrapper .navbar-nav > .open > a:hover, #main-navigation-wrapper.navbar-default.var2_main_menu_wrapper.var3_main_menu_wrapper.var5_main_menu_wrapper .navbar-nav > li:hover > a {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
#main-navigation-wrapper .navbar-collapse {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
#main-navigation-wrapper.var4_main_menu_wrapper .navbar-collapse {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?> none repeat scroll 0 0;
}
#main-navigation-wrapper.updated-1-1 .navbar-collapse.var2_main_menu_wrapper .navbar-nav li a {color:#fff;}
a.read_more.service_read {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.second_variation_services .enitre_mouse:hover a.read_more {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.second_variation_services .enitre_mouse:hover h4 a {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.accordion-first .accordion-heading.var2_accordian .accordion-toggle.active{
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.accordion-first .accordion-heading .accordion-toggle.active {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    color:#fff;
}
h3.award_head span {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.accordion-first.accordion-faqs .accordion-heading .accordion-toggle.active {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    color: #fff;
}
.project_txt_btn h6 {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.research_query_col h4.fnt_28 span {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.view-all.contact_btn {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.accordion-first.accordion-first1 .accordion-heading .accordion-toggle.active {
    color: #fff;
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>
}
.accordion-first.accordion-first1 .accordion-heading .accordion-toggle.collapsed:hover {
    color: #fff;
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>
}
a.view_all {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.view_all:hover {
    color:#fff;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
a.view-all.work_btn {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.news_Date {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.var3_testinomial_col p.testi_author {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    margin:0px;
}
#imagelightbox-close {
    background-color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
#imagelightbox-close:hover, #imagelightbox-close:focus {
    background-color: #111;
    outline: none;
}
#imagelightbox-caption {
    background-color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.imagelightbox-arrow-left:hover, .imagelightbox-arrow-right:hover {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.dedicated-team-img-holder .overlay ul li a {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.footer-cta .btn-box a.cta-btn {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.award_txt a.view-all.work_btn {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.hdr_social_icons a {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.view-all.get_quote_btn {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.hvr-bounce-to-right.get_quote_btn:before {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.sticky_header {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
ul.expert_list li:hover h4 a {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.view-all.get_quote_btn.var4_get_quote{
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
.yellow_bg.var4_yellow_bg {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    padding: 33px 0px!important;
}
a.view-all.news_read_btn.get_Quote.view_service {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
footer h6:after {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
}
a.ftr_readmore {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-1']); ?>;
    background:none;
}
.hdr_certified > img {
    display: none;
}




a.view-all.slide_learn_btn {
    border: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.slide_learn_btn.second_var_slide_btn {
    border: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.accordion-first .accordion-heading.var3_accordian .accordion-toggle.active {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.btn.submit_now {
    background: url(../images/home_page/submit_btn_ar.png) no-repeat 141px 16px <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.hvr-bounce-to-bottom:before {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.filter > li > a:hover, ul.filter > li > a:focus {
    border-bottom: 2px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    color:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.filter > li.active a {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    border-bottom: 2px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h3 .blue_head {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
 .btn-default, a. {
 background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.btn.submit_now.faq_submit_btn {
    background: none <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.news_read_btn {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.comment_info .coment_name {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.download_brochure {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.add_cart_btn {
    background: url(../images/cart_page/cart_icon.png) no-repeat 89% 13px <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.add_cart_btn.checkout_btn {
    background: none <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h2.acc_trigger a:hover {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.prd_cat_list li a:hover {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.tags_list li a:hover {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    border: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.shop_add_cart {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a, .with-nav-tabs.panel-default .nav-tabs > .open > a:hover, .with-nav-tabs.panel-default .nav-tabs > .open > a:focus, .with-nav-tabs.panel-default .nav-tabs > li > a:hover, .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    border-top: 2px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>!important;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a, .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover, .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
    border-top: 2px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>!important;
}
.btn.news_btn {
    background:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view_all.view_all1:hover {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.view-all.slide_learn_btn {
    border: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.form-submit input.submit {
    background: none <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.full_width .wp-tag-cloud li a:hover {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    color: #fff;
    border: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
button.view-all.shop_add_cart {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?> !important;
    background-color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?> !important;
}
.woocommerce #review_form #respond .form-submit input{
    background: none <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h3.blue_head1 span {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.read_more.view_more {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    border-bottom: 1px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h3.fnt_white_color.blue_after:after {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h3:after {
    background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.special_no li .txt {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.service_nav li a:hover, ul.service_nav li a.service_nav_active {
    border-left: 5px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}

h5.fnt_black_color a:hover {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
a.read_more {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.enitre_mouse:hover h4 a {
    color:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
h4 a:hover {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
ul.expert_list li:hover a.read_more {
    text-decoration:underline;
    color:<?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.footer-cta {background: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;padding: 33px 0;}
h4.var4welcome_head span {
    color: <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
.download_brochure {
    border: 2px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}
ul.service_nav li.service_nav_active a {
    border-left: 5px solid <?php echo esc_attr($metallex_redux_demo['main-color-2']); ?>;
}