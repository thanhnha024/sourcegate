<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
), $atts));

$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);

if($type == 'column'){

$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'accordion'){

$output .= "\n\t".'<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 prht_zero">
            <div class="prht85">
              <h3 class="fnt_dark_color_s">'.wp_specialchars_decode(esc_attr($title)).'</h3>
              <div class="accordion-first clearfix">
                <div id="accordion2" class="accordion">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                <!-- end accordion-->
              </div>
            </div>
          </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'choose'){

$output .= "\n\t".'<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 prht85 col_margin">
            <h3 class="fnt_dark_color_s">'.wp_specialchars_decode(esc_attr($title)).'</h3>';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
          </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'faq'){

$output .= "\n\t".'<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 faq_page">
            <h3 class="mbot40">'.wp_specialchars_decode(esc_attr($title)).'</h3>
            <div class="accordion-first accordion-faqs clearfix">
              <div class="accordion">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div>
          </div>'.$this->endBlockComment($el_class) . "\n";

}else{


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);