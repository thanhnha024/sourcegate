<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
  'el_class'        => '',
  'bg_image'        => '',
  'bg_image_repeat' => '',
  'padding'         => '',
  'margin_bottom'   => '',
  'css' => '',
  'wrap_class' => '',
  'ses_title' => '',
  'el_id' => '',
  'type_row' => '',
  'ses_subtitle' => '',
  'ses_desc' => '',
  'ses_image' => '',
  'ses_btn1' => '',
  'ses_link1' => '',
), $atts));

wp_enqueue_script('wpb_composer_front_js');
$class = $this->getExtraClass($el_class);
$id_map_class = !empty($class) ? str_replace(' ', '', $this->getExtraClass($class)) : 'our_worker';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, '' . ($this->settings('base') === 'vc_row_inner' ? 'vc_inner ' : '') . get_row_css_class() . $el_class . vc_shortcode_custom_css_class($css, ' '), $this->settings['base'], $atts);
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$images = wp_get_attachment_image_src($ses_image, '');
if ($type_row == 'type2') {
  $output .= wpb_js_remove_wpautop($content);
  $output .= $this->endBlockComment('row');
} elseif ($type_row == 'slider') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner ver_new_2_slider">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>';
} elseif ($type_row == 'slider2') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width home_banner_slider">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>';
} elseif ($type_row == 'slider3') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width ver_new_3_slider">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner ver_new_3_slider">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>';
} elseif ($type_row == 'slider4') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner ver_new_4_slider">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>';
} elseif ($type_row == 'slider5') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner ver_new_5_slider">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>';
} elseif ($type_row == 'mission') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '    <div class="full_wrapper padtb_100_100">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 prht60">
            <div class="vision_col full_width">
              <h3 class="fnt_white_color margin_0">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
              <p class="mbot10">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p><a href="' . esc_url($ses_link1) . '" class="read_more view_more">' . wp_specialchars_decode(esc_attr($ses_btn1)) . ' </a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 fr">
            <div class="row vision_pad">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
          </div>
        </div>
      </div>
    </div>';
} elseif ($type_row == 'graybg') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_95_100 graybg_color1">
      <div class="container">
        <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      </div>
    </div>';
} elseif ($type_row == 'graybg2') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_width graybg_color2">
      <div class="container">
        <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      </div>
    </div>';
} elseif ($type_row == 'graybg3') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_95_100">
      <div class="container">
        <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      </div>
    </div>';
} elseif ($type_row == 'team') {

  $images = wp_get_attachment_image_src($ses_image, '');
  if (empty($this->getExtraClass($class))) {
    $output .= '<div class="full_wrapper worker_bg padtb_91_50">
      <div class="container">
        <h3 class="mbot45">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
            <p>' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin">
            <div id="' . $id_map_class . '" data-ride="carousel" class="carousel slide four_shows_one_move">
              <div class="controls pull-right"><a href="#' . $id_map_class . '" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#' . $id_map_class . '" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .= '' . $this->endBlockComment('row');
    $output .= '</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  } else {
    $output .= '<div class="full_wrapper worker_bg padtb_91_50">
      <div class="container">
        <h3 class="mbot45">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
        <p>' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
      </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_margin">
            <div id="' . $id_map_class . '" class="four_shows_one_move">
              <div class="controls pull-right"><a href="#' . $id_map_class . '" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#' . $id_map_class . '" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .= '' . $this->endBlockComment('row');
    $output .= '</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
} elseif ($type_row == 'team2') {

  $images = wp_get_attachment_image_src($ses_image, '');
  if (empty($this->getExtraClass($class))) {

    $output .= '<div class="full_wrapper padtb_95_100 team-member-about-us">
      <div class="container">
        <h3 class="mbot40">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
            <p>' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin">
            <div id="' . $id_map_class . '" data-ride="carousel" class="carousel slide four_shows_one_move">
              <div class="controls pull-right"><a href="#' . $id_map_class . '" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#' . $id_map_class . '" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .= '' . $this->endBlockComment('row');
    $output .= '</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  } else {
    $output .= '<div class="full_wrapper padtb_95_100 team-member-about-us">
      <div class="container">
        <h3 class="mbot40">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
            <p>' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
          </div>
          <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 col_margin">
            <div id="' . $id_map_class . '"  class=" slide four_shows_one_move">
              <div class="controls pull-right"><a href="#' . $id_map_class . '" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#' . $id_map_class . '" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .= '' . $this->endBlockComment('row');
    $output .= '</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
} elseif ($type_row == 'team3') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_100_50">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10">
            <h3 class="mbot25">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
            <p class="mbot25">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin new_team_col">
            <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
          </div>
        </div>
      </div>
    </div>';
} elseif ($type_row == 'counter') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_width home_page_numbering" style="background: url(' . esc_url($images[0]) . ') center top;">
      <div class="container">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
    </div>';
} elseif ($type_row == 'banner') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<ul class="banner_btm_list">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</ul>';
} elseif ($type_row == 'expert_bg') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper expert_bg">
      <div class="container">
        <div class="full_width exprt_col">
          <h3 class="no_after exprt_head">
            ' . wp_specialchars_decode(esc_attr($ses_title)) . '
          </h3>
          <p class="exprt_txt">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
        </div>
        <ul class="expert_list">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</ul>
      </div>
    </div>';
} elseif ($type_row == 'testinomial') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_width var3_testinomial_col" style="background: url(' . esc_url($images[0]) . ') no-repeat center top fixed;
    text-align: center;
    padding: 50px 0px 60px;
    background-size: cover;">
      <div class="container">
        <div id="tcb-testimonial-carousel" data-ride="carousel" class="carousel slide">
          <div class="carousel-inner">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
          <!-- Controls--><a href="#tcb-testimonial-carousel" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#tcb-testimonial-carousel" data-slide="next" class="right fa fa-angle-right next_prve_control"></a>
        </div>
      </div>
    </div>';
} elseif ($type_row == 'testinomial2') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_100_100 testi-section">
      <div class="container">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
    </div>';
} elseif ($type_row == 'worker_bg') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper worker_bg padtb_91_95_1">
      <div class="container">
        <h3 class="mbot45">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mtopminus10 prht30">
            <p>' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_margin">
            <div id="' . $id_map_class . '" data-ride="carousel" class="carousel slide four_shows_one_move">
              <div class="controls pull-right home_var4"><a href="#' . $id_map_class . '" data-slide="prev" class="left fa fa-angle-left next_prve_control"></a><a href="#' . $id_map_class . '" data-slide="next" class="right fa fa-angle-right next_prve_control"></a></div>
              <!-- Wrapper for slides-->
              <div class="row">
                <div class="carousel-inner">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
} elseif ($type_row == 'service') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper variation5_service padtb_91_109" style="background: url(' . esc_url($images[0]) . ') no-repeat center top;
    background-size: cover;">
      <div class="container">
        <h3 class="fnt_white_color mbot25 blue_after">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <p class="srv_fntgray mbot45">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
      </div>';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>';
} elseif ($type_row == 'about_award') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_width about_award_bg">
      <div class="container">
        <div class="row">
          <!-- =========award-winning col start============-->
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 award_bg plft15"><img src="' . esc_url($images[0]) . '" ></div>
          <!-- =========award-winning col end============-->
          <!-- =========request-consultant col start============-->
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 fr">
            <div class="row award_pad">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
          </div>
          <!-- =========request-consultant col end============-->
        </div>
      </div>
    </div>';
} elseif ($type_row == 'speciality') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper speciality_bg padtb_95_100" style="background: url(' . esc_url($images[0]) . ') no-repeat center top;
    background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 class="fnt_24 mbot15 letter_spac0">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
            <h4 class="mbot25">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</h4>
            <p class="mbot25">' . wp_specialchars_decode(esc_attr($ses_desc)) . '</p>
          </div>
          <div class="col-lg-1 col-md-6 col-sm-12 col-xs-12"></div>
          <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <ul class="special_no">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</ul>
          </div>
        </div>
      </div>
    </div>';
} elseif ($type_row == 'faq') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_95_90">
      <div class="container">
        <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      </div>
    </div>';
} elseif ($type_row == 'contact') {
  $images = wp_get_attachment_image_src($ses_image, '');
  $output .= '<div class="full_wrapper padtb_92_100">
      <div class="container">
        <h3 class="mbot25">' . wp_specialchars_decode(esc_attr($ses_title)) . '</h3>
        <p class="mbot45">' . wp_specialchars_decode(esc_attr($ses_subtitle)) . '</p>
        <div class="row">';
  $output .= wpb_js_remove_wpautop($content);
  $output .= '' . $this->endBlockComment('row');
  $output .= '</div>
      </div>
    </div>';
} else {
  $output .= wpb_js_remove_wpautop($content);
  $output .= $this->endBlockComment('row');
}
echo wp_specialchars_decode(esc_attr($output), ENT_QUOTES);
