<?php 
$textdoimain = 'metallex';
$metallex_redux_demo = get_option('redux_demo');
global $pre_text;

$pre_text = 'VG ';
//add

//Sention Hero
add_shortcode('slider', 'slider_func');
function slider_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'link1' => '',
        'textbutton1' => '',
        'link2' => '',
        'textbutton2' => '',
        'active' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($type=='type2'){ ?>
    <div style="background-image: url(<?php echo esc_url($images[0]);?>);backgroudn-position: center right;" class="item <?php if($active){echo "active";} ?> slide-1">
      <div class="carousel-caption">
        <div class="thm-container">
          <div class="box valign-bottom">
            <div class="content text-center">
              <h1 data-animation="animated fadeInUp"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
              <p data-animation="animated fadeInDown"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
              <?php if($link1){ ?>
              <a data-animation="animated fadeInUp" href="<?php echo esc_url($link1); ?>" class="view-all hvr-bounce-to-right slide_learn_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton1));?></a>
              <?php } ?>
              <?php if($link2){ ?>
              <a data-animation="animated fadeInUp" href="<?php echo esc_url($link2); ?>" class="view-all hvr-bounce-to-right slide_learn_btn slide_solution_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton2));?></a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php }elseif($type=='type3'){ ?>
        <div style="background-image: url(<?php echo esc_url($images[0]);?>);backgroudn-position: center right;" class="item <?php if($active){echo "active";} ?> slide-1">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-center">
                  <h1 data-animation="animated fadeInUp"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
                  <p data-animation="animated fadeInDown"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                  <?php if($link1){ ?>
                  <a data-animation="animated fadeInUp" href="<?php echo esc_url($link1); ?>" class="view-all hvr-bounce-to-right slide_learn_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton1));?></a>
                  <?php } ?>
                  <?php if($link2){ ?>
                  <a data-animation="animated fadeInUp" href="<?php echo esc_url($link2); ?>" class="view-all hvr-bounce-to-right slide_learn_btn slide_solution_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton2));?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php }else{ ?>

    <div style="background-image: url(<?php echo esc_url($images[0]);?>);backgroudn-position: center right;" class="item  <?php if($active){echo "active";} ?> slide-1">
        <div class="carousel-caption">
          <div class="thm-container txt-left">
            <div class="box valign-middle">
              <div class="content cnt_wdt1">
                <h1 data-animation="animated fadeInUp" class="bnrfnt45">
                  <?php echo htmlspecialchars_decode(esc_attr($title));?>
                </h1>
                <p data-animation="animated fadeInDown" class="pln_he"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
                <?php if($link1){ ?>
                <a data-animation="animated fadeInUp" href="<?php echo esc_url($link1); ?>" class="view-all  slide_learn_btn second_var_slide_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton1));?></a>
                <?php } ?>
                <?php if($link2){ ?>
                <a data-animation="animated fadeInUp" href="<?php echo esc_url($link2); ?>" class="view-all  slide_learn_btn second_var_slide_btn knw_more_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton2));?></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('quote', 'quote_func');
function quote_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '',
        'textbutton' => '',
        'image' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($type=='type2'){ ?>
    <div class="full_wrapper yellow_bg var4_yellow_bg">
      <div class="container"><span class="innov_txt innov_txt1"> <?php echo htmlspecialchars_decode(esc_attr($title));?></span><a href="<?php echo esc_url($link); ?>" class="view-all hvr-bounce-to-right get_quote_btn sec_var_quote_btn var4_request_quote"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a></div>
    </div>

    <?php }elseif($type=='type3'){ ?>

    <div class="full_wrapper yellow_bg var4_yellow_bg var4_blue_bg" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat center top;
    padding: 29px 0px 31px!important;
    background-size: cover;">
      <div class="container"><span class="innov_txt innov_txt1 onstp_sol"><?php echo htmlspecialchars_decode(esc_attr($title));?></span><a href="<?php echo esc_url($link); ?>" class="view-all hvr-bounce-to-right get_quote_btn sec_var_quote_btn var4_request_quote contactus"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a></div>
    </div>
<?php }else{ ?>
    <div class="full_wrapper yellow_bg">
      <div class="container">
        <div class="innov_txt"> <?php echo htmlspecialchars_decode(esc_attr($title));?></div>
        <div class="innove_quote_btn"><a href="<?php echo esc_url($link); ?>" class="view-all hvr-bounce-to-right get_quote_btn sec_var_quote_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a></div>
      </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('mission', 'mission_func');
function mission_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="row mbot40">
      <div class="col-lg-3 col-md-4 col-sm-2 col-xs-4"><img src="<?php echo esc_url($images[0]);?>" alt="quality assurance"></div>
      <div class="col-lg-9 col-md-8 col-sm-10 col-xs-8">
        <h4 class="letter_space_0 mbot15"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('accordion', 'accordion_func');
function accordion_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'link1' => '',
        'textbutton1' => '',
        'link2' => '',
        'textbutton2' => '',
        'id' => '',
        'active' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="accordion-group">
      <div class="accordion-heading <?php if($type=='type1'){echo "var2_accordian";} ?> <?php if($type=='type3'){echo "var3_accordian";} ?>"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo esc_attr($id); ?>" class="accordion-toggle <?php if($active){echo "active";} ?>"><em class="icon-fixed-width fa <?php if($active){echo "fa-minus";} ?> fa-plus "></em><?php echo htmlspecialchars_decode(esc_attr($title));?></a></div>
      <div id="collapse<?php echo esc_attr($id); ?>" style="height: 0px;" class="accordion-body collapse <?php if($active){echo "in";} ?>">
        <div class="accordion-inner"><span class="wdt_img core_img fl"><img src="<?php echo esc_url($images[0]);?>" alt="core1"></span>
          <div class="core_txt fl">
            <h5 class="fnt_18 mbot10"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
            <p class="line_he3"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
            <ul class="core_list">
              <li><a href="<?php echo esc_url($link1); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton1));?> </a></li>
              <li><a href="<?php echo esc_url($link2); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton2));?> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image1' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pad_zero col_margin">
      <h3 class="fnt_dark_color_s"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
      <div class="variation2_about_img full_width mbot35"><span class="first_img"><img src="<?php echo esc_url($images1[0]);?>"></span><span class="second_img"><img src="<?php echo esc_url($images2[0]);?>"></span></div>
      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('about2', 'about2_func');
function about2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image1' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prht85">
      <h3 class="fnt_dark_color_s"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
      <div class="variation2_about_img full_width mbot35"><span class="first_img"><img src="<?php echo esc_url($images1[0]);?>"></span><span class="second_img"><img src="<?php echo esc_url($images2[0]);?>"></span></div>
      <p class="var4_welcome_txt fnt20 mbot25"> <?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
      <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('choose', 'choose_func');
function choose_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="var5_choose_col1"><span class="var5_choose_col1_img"><img src="<?php echo esc_url($images[0]);?>"></span>
      <div class="var5_choose_col1_desc">
        <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('testi', 'testi_func');
function testi_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'testi' => '',
        'image1' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pad_zero col_margin">
      <h3 class="fnt_dark_color_s"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
      <div class="plft30">
        <div class="full_width mbot25"><span class="testi_img"><img src="<?php echo esc_url($images[0]);?>" alt="Testimonial"></span>
          <div class="testi_txt">
            <h5 class="fnt_18"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h5>
            <p class="fnt14"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p><span class="testi_Star_img"><img src="<?php echo get_template_directory_uri();?>/images/home_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/home_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/home_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/home_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/home_page/testi_stars.jpg" alt="star"></span>
          </div>
        </div>
        <p class="mbot40"><?php echo htmlspecialchars_decode(esc_attr($testi));?></p><img src="<?php echo esc_url($images2[0]);?>" alt="signature">
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'facebook' => '',
        'twitter' => '',
        'linkedin' => '',
        'google' => '',
        'active' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="item <?php if($active){echo "active";} ?>">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center mbot45">
        <div class="dedicated-team-img-holder mbot15">
          <div class="shadow_effect effect-apollo"><img src="<?php echo esc_url($images[0]);?>" alt="team1"></div>
          <div class="overlay">
            <div class="inner-holder">
              <ul>
              <?php if($facebook){ ?>
                <li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                <?php } ?>
                <?php if($twitter){ ?>
                <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if($linkedin){ ?>
                <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php } ?>
                <?php if($google){ ?>
                <li><a href="<?php echo esc_url($google); ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div><span class="team_name full_width"><?php echo htmlspecialchars_decode(esc_attr($title));?></span><span class="team_designation full_width"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('team2', 'team2_func');
function team2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'facebook' => '',
        'twitter' => '',
        'linkedin' => '',
        'google' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="text-center mbot45 team-over">
    <div class="dedicated-team-img-holder mbot15">
      <div class="shadow_effect effect-apollo"><img src="<?php echo esc_url($images[0]);?>" alt="Team8"></div>
      <div class="overlay">
        <div class="inner-holder">
          <ul>
            <?php if($facebook){ ?>
                <li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                <?php } ?>
                <?php if($twitter){ ?>
                <li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if($linkedin){ ?>
                <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php } ?>
                <?php if($google){ ?>
                <li><a href="<?php echo esc_url($google); ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
          </ul>
        </div>
      </div>
    </div><span class="team_name full_width"><?php echo htmlspecialchars_decode(esc_attr($title));?></span><span class="team_designation full_width"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('counter', 'counter_func');
function counter_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'number' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="number"><?php echo esc_attr($number); ?> <span class="plus">+</span></div><span class="txt"><?php echo htmlspecialchars_decode(esc_attr($title));?></span>
<?php  return ob_get_clean();
} 

add_shortcode('welding', 'welding_func');
function welding_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'title1' => '',
        'subtitle1' => '',
        'image1' => '',
        'title2' => '',
        'subtitle2' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <div class="full_wrapper welding-col padtb_92_85">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pad_zero"><span class="wdt_img welding_img"><img src="<?php echo esc_url($images[0]);?>" alt="welding mechanical"></span></div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="plft30">
              <h2 class="mtopminus5">
                <?php echo htmlspecialchars_decode(esc_attr($title));?>
              </h2>
              <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
              <div class="row mtop45">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 award_mr">
                  <div class="fl mrht20"><img src="<?php echo esc_url($images1[0]);?>" alt="worker"></div>
                  <div class="fl">
                    <h5 class="martopbtm fnt_dark_color"><?php echo htmlspecialchars_decode(esc_attr($title1));?></h5>
                    <p class="fnt16"><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="fl mrht20"><img src="<?php echo esc_url($images2[0]);?>" alt="award"></div>
                  <div class="fl">
                    <h5 class="martopbtm fnt_dark_color"><?php echo htmlspecialchars_decode(esc_attr($title2));?></h5>
                    <p class="fnt16"><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('award', 'award_func');
function award_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="award_bg plft15"><img src="<?php echo esc_url($images[0]);?>" alt="Award Img">
        <div class="award_txt padtb_87 full_width">
          <h3 class="mbot40 award_head"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
          <h4 class="white_head mbot20 line_hehead"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></h4>
          <p class="mbot40 p_award_color"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p><a href="<?php echo esc_url($link); ?>" class="view-all hvr-bounce-to-right work_btn"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
        </div>
      </div>
<?php  return ob_get_clean();
} 

add_shortcode('brand', 'brand_func');
function brand_func($atts, $content = null){
    extract(shortcode_atts(array(
        'post_gallery' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php $gallery = shortcode_atts( 
                    array(
                        'post_gallery'      =>  'post_gallery',
                    ), $atts );
        if($gallery !=''){ ?>
    <section class="full_wrapper brand-section">
      <div class="container">
          <div class="brand-carousel owl-carousel owl-theme">
          <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
              <div class="item">
                  <img src="<?php echo esc_url($sigle_img[0]);?>"  alt="Awesome Image"/>
              </div><!-- /.item -->
              <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
              <div class="item">
                  <img src="<?php echo esc_url($imgs[0]);?>" alt="Awesome Image"/>
              </div><!-- /.item -->
       <?php
          }
        } ?>
          </div><!-- /.brand-carousel -->
      </div><!-- /.container -->
    </section>
    <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('banner', 'banner_func');
function banner_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'link' => '',
        'type' => 'yellow_prd_bg',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li class="<?php echo esc_attr($type); ?>" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat center top;
    background-size: cover;">
      <h4><a href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($title));?></a></h4>
      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
    </li>
<?php  return ob_get_clean();
}

add_shortcode('expert', 'expert_func');
function expert_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon' => '',
        'title' => '',
        'subtitle' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li><span class="lst_icon <?php echo esc_attr($icon); ?>"></span>
      <h4><a href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($title));?></a></h4>
      <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p><a href="<?php echo esc_url($link); ?>" class="read_more"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
    </li>
<?php  return ob_get_clean();
}

add_shortcode('testimonial', 'testimonial_func');
function testimonial_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'active' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="item <?php if($active){echo "active";} ?>">
      <div class="var3_testi_pad"><span class="var3_testi_img"><img src="<?php echo esc_url($images[0]);?>"></span>
        <p class="white_color1"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        <p class="testi_author"><?php echo htmlspecialchars_decode(esc_attr($title));?></p>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('testimonial2', 'testimonial2_func');
function testimonial2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'title1' => '',
        'subtitle1' => '',
        'testimonial1' => '',
        'image2' => '',
        'title2' => '',
        'subtitle2' => '',
        'testimonial2' => '',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?> 
    <div class="row mbot95">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="full_width mbot25"><span class="testi_img"><img src="<?php echo esc_url($images1[0]);?>" alt="Testimonial1"></span>
              <div class="testi_txt">
                <h5 class="fnt_18"><?php echo htmlspecialchars_decode(esc_attr($title1));?></h5>
                <p class="letter_spac0"><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p><span class="testi_Star_img"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"></span>
              </div>
            </div>
            <p><?php echo htmlspecialchars_decode(esc_attr($testimonial1));?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center"><span class="vertical_testi_line"></span></div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="full_width mbot25"><span class="testi_img"><img src="<?php echo esc_url($images2[0]);?>" alt="Testimonial2"></span>
              <div class="testi_txt">
                <h5 class="fnt_18"><?php echo htmlspecialchars_decode(esc_attr($title2));?></h5>
                <p class="letter_spac0"><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p><span class="testi_Star_img"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"><img src="<?php echo get_template_directory_uri();?>/images/testimonial_page/testi_stars.jpg" alt="star"></span>
              </div>
            </div>
            <p><?php echo htmlspecialchars_decode(esc_attr($testimonial2));?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-center mobile_line"><span class="vertical_testi_line"></span></div>
        </div>
<?php  return ob_get_clean();
}

add_shortcode('welcome', 'welcome_func');
function welcome_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'title1' => '',
        'subtitle1' => '',
        'title2' => '',
        'subtitle2' => '',
        'title3' => '',
        'subtitle3' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="var4_welcome full_width">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img src="<?php echo esc_url($images[0]);?>" class="img-responsive"></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 plft_zero">
            <h4 class="var4welcome_head mbot20 mtop110"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
            <p class="var4_welcome_txt mbot20"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            <p class="gray_color2"><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
            <ul class="var4_trust_lst">
              <li>
                <h6><?php echo htmlspecialchars_decode(esc_attr($title1));?></h6>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle1));?></p>
              </li>
              <li class="lst_wdt1">
                <h6><?php echo htmlspecialchars_decode(esc_attr($title2));?></h6>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
              </li>
              <li class="lst_wdt2">
                <h6><?php echo htmlspecialchars_decode(esc_attr($title3));?></h6>
                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle3));?></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('welcome2', 'welcome2_func');
function welcome2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'desc' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="var4_welcome var5_welcome full_width">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 prht30">
            <h3 class="fnt45 mbot20 no_after mtop110"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
            <p class="var4_welcome_txt fnt20 mbot25 ln_hght"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 award_bg plft15"><img src="<?php echo esc_url($images[0]);?>" class="dedicated_img"></div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('worker', 'worker_func');
function worker_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
        'facebook' => '',
        'twitter' => '',
        'linkedin' => '',
        'google' => '',
        'active' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="item <?php if($active){echo "active";} ?>">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
        <div class="dedicated-team-img-holder mbot15">
          <div class="shadow_effect effect-apollo"><img src="<?php echo esc_url($images[0]);?>" alt="team1"></div>
          <div class="overlay">
            <div class="inner-holder">
              <ul>
                <li><a href="<?php echo esc_url($facebook) ?>"><i class="fa fa-link"></i></a></li>
              </ul>
            </div>
          </div>
        </div><span class="team_name full_width"><?php echo htmlspecialchars_decode(esc_attr($title));?></span><span class="team_designation full_width"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('service', 'service_func');
function service_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image1' => '',
        'image2' => '',
        'image3' => '',
        'title' => '',
        'subtitle' => '',
        'link' => '',
        'textbutton' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images1 = wp_get_attachment_image_src($image1,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    $images3 = wp_get_attachment_image_src($image3,''); 
    ?> 
    <?php if($type=='type2'){ ?>

    <div class="var5_srvice_col">
        <div class="v5_service">
          <div class="var5_srvice_left_wdt service2_left_bg" style="background: url(<?php echo esc_url($images1[0]);?>) no-repeat center top;
    padding: 100px 70px 112px 77px;
    background-size: cover;"></div>
          <div class="var5_srvice_left_wdt service2_rght_bg" style="background: url(<?php echo esc_url($images2[0]);?>) no-repeat center top;
    height: 359px;
    background-size: cover;"><span class="var5_srvice_img"><img src="<?php echo esc_url($images3[0]);?>"></span>
            <div class="var5_srvice_txt">
              <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
              <p class="white_color1"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p><a href="<?php echo esc_url($link); ?>" class="service_read"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
            </div>
          </div>
        </div>
      </div>

    <?php }else{ ?>
    <div class="var5_srvice_col">
      <div class="v5_service">
        <div class="var5_srvice_left_wdt service1_left_bg" style="background: url(<?php echo esc_url($images1[0]);?>) no-repeat center top;
    padding: 100px 70px 112px 77px;
    background-size: cover;"><span class="var5_srvice_img"><img src="<?php echo esc_url($images3[0]);?>"></span>
          <div class="var5_srvice_txt">
            <h6><?php echo htmlspecialchars_decode(esc_attr($title));?></h6>
            <p class="white_color1"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p><a href="<?php echo esc_url($link); ?>" class="service_read"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
          </div>
        </div>
        <div class="var5_srvice_left_wdt service1_rght_bg" style="background: url(<?php echo esc_url($images2[0]);?>) no-repeat center top;
    height: 359px;
    background-size: cover;"></div>
      </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}

add_shortcode('about_page', 'about_page_func');
function about_page_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'text1' => '',
        'text2' => '',
        'text3' => '',
        'link1' => '',
        'textbutton1' => '',
        'link2' => '',
        'textbutton2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="full_wrapper padtb_100_100">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12"><span class="wdt_img img_100"><img src="<?php echo esc_url($images[0]);?>" alt="About Img" class="img-responsive"></span></div>
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col_margin">
            <div class="plft50">
              <h3 class="mtopminus10 no_after letter_spac0 line_heg45 blue_head1">
                <?php echo htmlspecialchars_decode(esc_attr($title));?>
              </h3>
              <p class="fnt_18 mbot25"><?php echo htmlspecialchars_decode(esc_attr($text1));?></p>
              <p class="mbot25"><?php echo htmlspecialchars_decode(esc_attr($text2));?></p>
              <p class="mbot45"><?php echo htmlspecialchars_decode(esc_attr($text3));?></p>
              <a href="<?php echo esc_url($link1) ?>" class="view-all hvr-bounce-to-right news_read_btn get_Quote"><?php echo htmlspecialchars_decode(esc_attr($textbutton1));?></a><a href="<?php echo esc_url($link2) ?>" class="view-all hvr-bounce-to-right news_read_btn get_Quote view_service"><?php echo htmlspecialchars_decode(esc_attr($textbutton2));?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('about_award', 'about_award_func');
function about_award_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image' => '',
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="row mbot70">
      <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2"><img src="<?php echo esc_url($images[0]);?>" alt="award"></div>
      <div class="col-lg-9 col-md-8 col-sm-10 col-xs-10">
        <h4 class="letter_space_0 white_color"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
        <p class="letter_spac0 lyt_color"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?> </p>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('special_no', 'special_no_func');
function special_no_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li><span class="number"><?php echo htmlspecialchars_decode(esc_attr($title));?></span><span class="txt"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></span></li>
<?php  return ob_get_clean();
}

add_shortcode('faq', 'faq_func');
function faq_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'id' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="accordion-group">
      <div class="accordion-heading"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo esc_attr($id); ?>" class="accordion-toggle collapsed"><em class="icon-fixed-width fa fa-caret-right"></em><?php echo htmlspecialchars_decode(esc_attr($title));?></a></div>
      <div id="collapse<?php echo esc_attr($id); ?>" style="height: 0px;" class="accordion-body collapse">
        <div class="accordion-inner faq-accordion-inner">
          <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('contact_info', 'contact_info_func');
function contact_info_func($atts, $content = null){
    extract(shortcode_atts(array(
        'info1' => '',
        'info2' => '',
        'info3' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <ul class="contact_info">
      <li class="cnt_map_icon">
        <p class="line_he2"><?php echo htmlspecialchars_decode(esc_attr($info1));?></p>
      </li>
      <li class="cnt_mail_icon">
        <p class="line_he2"><?php echo htmlspecialchars_decode(esc_attr($info2));?></p>
      </li>
      <li class="cnt_call_icon">
        <p class="line_he2"><?php echo htmlspecialchars_decode(esc_attr($info3));?></p>
      </li>
    </ul>
<?php  return ob_get_clean();
}

add_shortcode('solutions', 'solutions_func');
function solutions_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'orderpost' => '',
        'orderby' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
 $metallex_redux_demo = get_option('redux_demo');
    ?> 
    <?php if($type=='type2'){ ?>
    <div class="full_wrapper graybg_color padtb_96_47">
      <div class="container">
        <h3 class="fnt_dark_color"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <div class="row mbot15">
        <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'solutions',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts() && $i < 3): $wp_query -> the_post();
                        $i++;
                    ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mbot30 enitre_mouse">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="shadow_effect effect-apollo mbot25">
            <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Material" class="img-responsive"></a>
            </div>
            <?php } ?>
            <h4 class="mbot10"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
            <p class="mbot12 line_he2"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
          </div>
        <?php endwhile; ?>
        </div>
        <div class="gray_separate_line"></div>
        <div class="full_width mtop50">
          <div class="row">
          <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'solutions',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
                    <?php if($i== '4' || $i== '5'){ ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbot30 enitre_mouse">
              <div class="row">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="shadow_effect effect-apollo mbot25"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Material" class="img-responsive"></a></div>
                </div>
                <?php } ?>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <h4 class="mtopminus5 mbot10"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                  <p class="mbot10 line_he2"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>

<?php }else{ ?>

    <div class="full_wrapper second_variation_services padtb_96_47">
      <div class="container">
        <h3 class="fnt_white_color"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <div class="row mbot15">
        <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'solutions',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts() && $i < 3): $wp_query -> the_post();
                        $i++;
                    ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mbot30 enitre_mouse">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="shadow_effect effect-apollo mbot25">
            <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Material" class="img-responsive"></a>
            </div>
            <?php } ?>
            <h4 class="mbot10"><a href="<?php the_permalink();?>" class="ser_white_head"><?php the_title(); ?></a></h4>
            <p class="mbot12 line_he2 p_gray_color"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more service_read"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
          </div>
        <?php endwhile; ?>
        </div>
        <div class="gray_separate_line lght_gray_separator"></div>
        <div class="full_width mtop50">
          <div class="row">
          <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'solutions',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
                    <?php if($i== '4' || $i== '5'){ ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mbot30 enitre_mouse">
              <div class="row">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="shadow_effect effect-apollo mbot25"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Material" class="img-responsive"></a></div>
                </div>
                <?php } ?>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <h4 class="mtopminus5 mbot10"><a href="<?php the_permalink();?>" class="ser_white_head"><?php the_title(); ?></a></h4>
                  <p class="mbot10 line_he2 p_gray_color"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more service_read"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('solutions2', 'solutions2_func');
function solutions2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '',
        'textbutton' => '',
        'orderpost' => '',
        'orderby' => '',
        'number' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
 $metallex_redux_demo = get_option('redux_demo');
    ?> 
    <div class="full_wrapper padtb_96_151">
      <div class="container">
        <div class="full_width mbot10">
          <h3 class="fnt_dark_color fl"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3><a href="<?php echo esc_url($link); ?>" class="view_all view_all1"><?php echo htmlspecialchars_decode(esc_attr($title));?></a>
        </div>
        <div class="row mbot15 mob_pad_zero">
          <div id="what_we_offer" data-ride="carousel" class="carousel slide three_shows_one_move">
            <div class="full_width">
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">
                <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'solutions',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
                  <div class="item <?php if($i=='1'){echo "active";} ?>">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mbot30 enitre_mouse">
                      <div class="shadow_effect effect-apollo mbot25">
                      <a href="<?php the_permalink();?>">
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Material" class="img-responsive">
                      </a></div>
                      <h4 class="mbot10 fnt23"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                      <p class="mbot25 offer_lst"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="view-all hvr-bounce-to-right offer_read"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>
                <div class="controls pull-right home_var4 what_we_offer"><a href="#what_we_offer" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#what_we_offer" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('projects', 'projects_func');
function projects_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'link' => '',
        'textbutton' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
        'image' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
 $metallex_redux_demo = get_option('redux_demo');
    ?> 
    <?php if($type=='type2'){ ?>
    <div class="project_gallery home-4 full_width clearfix">
      <div class="project_gal_left">
        <h3 class="mbot25 fnt40 fnt_white_color no_after"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <p class="mbot20"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p><a href="<?php echo esc_url($link); ?>" class="checkmor_work"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
      </div>
      <div class="var_4_slider">
        <div id="our_project" class="our-project-home-4-carousel owl-theme owl-carousel ">
        <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'projects',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
          <div class="item">
            <div class="project_img pad_zero effect-goliath">
              <div class="shadow_effect black_overlay"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Project1" class="img-responsive"></div>
              <div class="project_txt_btn"><a href="<?php the_permalink();?>" class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><?php echo esc_html__( 'view project', 'metallex' );?></a>
                <h6><?php the_title(); ?></h6>
              </div>
            </div>
          </div><!-- /.item -->
          <?php endwhile; ?>
        </div><!-- /.our-project-home-4 -->
      </div><!-- /.var_4_slider -->
    </div>

    <?php }elseif($type=='type3'){ ?>

    <div id="our_project" data-ride="carousel" class="full_wrapper variation3_projectbg padtb_91_0 carousel slide three_shows_one_move" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat center top;
    background-size: cover;">
      <div class="container">
        <h3 class="fnt_white_color mbot25"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <p class="white_color1 mbot45"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        <div class="controls pull-right mtop165"><a href="#our_project" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#our_project" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
      </div>
      <!-- Wrapper for slides-->
      <div class="carousel-inner">
      <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'projects',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
        <div class="item <?php if($i=='1'){echo "active";} ?>">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 project_img pad_zero effect-goliath">
            <div class="shadow_effect black_overlay"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Project1" class="img-responsive"></div>
            <div class="project_txt_btn"><a href="<?php the_permalink();?>" class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><?php echo esc_html__( 'view project', 'metallex' );?></a>
              <h6><?php the_title(); ?></h6>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <?php }else{ ?>
    <div id="our_project" data-ride="carousel" class="full_wrapper variation2_projectsection_bg padtb_91_0 carousel slide three_shows_one_move" style="background: url(<?php echo esc_url($images[0]);?>) no-repeat center top;
    background-size: cover;">
      <div class="container">
        <h3 class="fnt_white_color mbot25"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <p class="p_gray1 mbot45"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        <div class="controls pull-right mtop165"><a href="#our_project" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#our_project" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
      </div>
      <!-- Wrapper for slides-->
      <div class="carousel-inner">
      <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'projects',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
        <div class="item <?php if($i=='1'){echo "active";} ?>">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 project_img pad_zero effect-goliath">
            <div class="shadow_effect black_overlay"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Project1" class="img-responsive"></div>
            <div class="project_txt_btn"><a href="<?php the_permalink();?>" class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><?php echo esc_html__( 'view project', 'metallex' );?></a>
              <h6><?php the_title(); ?></h6>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('projects2', 'projects2_func');
function projects2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '',
        'textbtn' => '',
        'number' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
 $metallex_redux_demo = get_option('redux_demo');
    ?> 
    <div class="full_wrapper projectsection_bg padtb_91_70">
      <div class="container">
        <div class="full_width mbot50">
          <h3 class="fnt_white_color fl no_margin_btm"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3><a href="<?php echo esc_url($link); ?>" class="view_all"><?php echo htmlspecialchars_decode(esc_attr($textbtn));?></a>
        </div>
        <div class="row">
        <?php 
                        $args = array(    
                            'paged' => $paged,
                            'posts_per_page' => $number,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'projects',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="project_img mbot30 effect-goliath">
              <div class="shadow_effect black_overlay"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Project1" class="img-responsive"></div>
              <div class="project_txt_btn"><a href="<?php the_permalink();?>" class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><?php echo esc_html__( 'view project', 'metallex' );?></a>
                <h6><?php the_title(); ?></h6>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
} 


add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'link' => '',
        'textbutton' => '',
        'orderpost' => '',
        'orderby' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
$metallex_redux_demo = get_option('redux_demo');
    ?>
    <div class="full_wrapper padtb_95_100">
      <div class="container">
        <h3 class="fnt_dark_color"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts() && $i < 2): $wp_query -> the_post();
                        $i++;
                    ?>
            <div class="row mbot25 enitre_mouse">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                <div class="wdt_img news_img"><span class="news_Date"><?php the_time(get_option( 'date_format' ));?></span>
                  <div class="shadow_effect effect-apollo mbot25"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" width="370" height="190" alt="News Img1"></div>
                </div>
              </div>
              <?php } ?>
              <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h5 class="line_heig26 letter_spac0 mbot10 mtopminus5 fnt_black_color"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <p class="mbot10"><?php if(isset($metallex_redux_demo['blog_excerpt2'])){?>
                                <?php echo esc_attr(metallex_excerpt3($metallex_redux_demo['blog_excerpt2'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt3(15)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more"><?php if(isset($metallex_redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
              </div>
            </div>
        <?php endwhile; ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_margin">
            <div class="support_br full_width">
            <?php 
                        $args = array(    
                            'paged' => $paged,
                            'order' => $orderpost,
                            'orderby' => $orderby, 
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        $i=0;
                        while ($wp_query -> have_posts()): $wp_query -> the_post();
                        $i++;
                    ?>
                    <?php if($i== '3' || $i== '4' || $i== '5'){ ?>
              <div class="col-lg-12 support_list">
                <h5 class="mbot10 fnt_black_color line_heig26"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <p><?php the_time(get_option( 'date_format' ));?></p>
              </div>
              <?php } ?>
              <?php endwhile; ?>

              <div class="col-lg-12 support_list support_read_more"><a href="<?php echo esc_url($link); ?>" class="read_more"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php  return ob_get_clean();
} 

add_shortcode('blog2', 'blog2_func');
function blog2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title' => '',
        'orderpost' => '',
        'orderby' => '',
        'number' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,'');
$metallex_redux_demo = get_option('redux_demo');
    ?>
    <div class="full_wrapper padtb_95_100">
      <div class="container">
        <h3 class="fnt_dark_color mbot35"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
        <div class="row">

        <?php 
            $args = array(    
                'paged' => $paged,
                'order' => $orderpost,
                'orderby' => $orderby, 
                'post_type' => 'post',
                'posts_per_page' => $number,
                );
            $wp_query = new WP_Query($args);
            $i=0;
            while ($wp_query -> have_posts()): $wp_query -> the_post();
            $i++;
        ?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 responsive_mrbtm">
            <div class="enitre_mouse">
            <?php if ( has_post_thumbnail() ) { ?>
              <div class="wdt_img news_img"><span class="news_Date"><?php the_time(get_option( 'date_format' ));?></span>
                <div class="shadow_effect effect-apollo mbot25"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="News Img1"></div>
              </div>
              <?php } ?>
              <h5 class="line_heig26 letter_spac0 mbot10 mtopminus5 fnt_black_color"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="mbot10"><?php if(isset($metallex_redux_demo['blog_excerpt2'])){?>
                                <?php echo esc_attr(metallex_excerpt3($metallex_redux_demo['blog_excerpt2'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt3(15)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more"><?php if(isset($metallex_redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
            </div>
          </div>
          
          <?php endwhile; ?>
        </div>
      </div>
    </div>

<?php  return ob_get_clean();
} 
