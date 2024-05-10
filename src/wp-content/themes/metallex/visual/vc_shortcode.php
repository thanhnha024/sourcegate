<?php 
$textdoimain = 'metallex';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item Slider", 'metallex'),
   "base" => "slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'metallex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 1", 'metallex'),
      "param_name" => "textbutton1",
      "value" => "",
      "description" => __("Text Btn 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'metallex'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 2", 'metallex'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Btn 2", 'metallex')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Item active", 'metallex'),
      "param_name" => "active",
      "value" => "",
      "description" => __("Select item active", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Slider', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
            __( 'Type 3', 'metallex') => 'type3',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Quote", 'metallex'),
   "base" => "quote",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link ", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link ", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn ", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn ", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
            __( 'Type 3', 'metallex') => 'type3',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background on type 3.', 'metallex' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Mission", 'metallex'),
   "base" => "mission",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Icon', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item Accordion", 'metallex'),
   "base" => "accordion",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'metallex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 1", 'metallex'),
      "param_name" => "textbutton1",
      "value" => "",
      "description" => __("Text Btn 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'metallex'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 2", 'metallex'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Btn 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID item", 'metallex'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID item", 'metallex')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Item active", 'metallex'),
      "param_name" => "active",
      "value" => "",
      "description" => __("Select item active", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Accordion', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
            __( 'Type 3', 'metallex' ) => 'type3',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us", 'metallex'),
   "base" => "about",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us 2", 'metallex'),
   "base" => "about2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Choose Us", 'metallex'),
   "base" => "choose",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image ', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testi Box", 'metallex'),
   "base" => "testi",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image testi', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image sign', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("text testi", 'metallex'),
      "param_name" => "testi",
      "value" => "",
      "description" => __("text testi", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Our Team", 'metallex'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Facebook", 'metallex'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link Facebook", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter", 'metallex'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link linkedin", 'metallex'),
      "param_name" => "linkedin",
      "value" => "",
      "description" => __("Link linkedin", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link google", 'metallex'),
      "param_name" => "google",
      "value" => "",
      "description" => __("Link google", 'metallex')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Item active", 'metallex'),
      "param_name" => "active",
      "value" => "",
      "description" => __("Select item active", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Item Team Page", 'metallex'),
   "base" => "team2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Facebook", 'metallex'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link Facebook", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter", 'metallex'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link linkedin", 'metallex'),
      "param_name" => "linkedin",
      "value" => "",
      "description" => __("Link linkedin", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link google", 'metallex'),
      "param_name" => "google",
      "value" => "",
      "description" => __("Link google", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Counter", 'metallex'),
   "base" => "counter",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("number", 'metallex'),
      "param_name" => "number",
      "value" => "",
      "description" => __("number", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Welding", 'metallex'),
   "base" => "welding",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Icon 1', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'metallex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 1", 'metallex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("subtitle 1", 'metallex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Icon 2', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'metallex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 2", 'metallex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("subtitle 2", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Award Text", 'metallex'),
   "base" => "award",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Brand Section", 'metallex'),
   "base" => "brand",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_images',
         'heading' => __( 'Brand gallery', 'metallex' ),
         'param_name' => 'post_gallery',
         'value' => '',
         'description' => __( 'Select image Gallery from media library to do your signature.', 'metallex' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Banner Box", 'metallex'),
   "base" => "banner",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Color', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Yellow', 'metallex' ) => 'yellow_prd_bg',
            __( 'Blue', 'metallex' ) => 'blue_prd_bg',
            __( 'Lyt Blue', 'metallex') => 'lytblue_prd_bg',
         ),
         'description' => __( 'Select type background color', 'metallex' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Expert Box", 'metallex'),
   "base" => "expert",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'metallex'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("text button", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("text button", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial", 'metallex'),
   "base" => "testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Item active", 'metallex'),
      "param_name" => "active",
      "value" => "",
      "description" => __("Select item active", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 2", 'metallex'),
   "base" => "testimonial2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image item 1', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title item 1", 'metallex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title item 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle item 1", 'metallex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("subtitle item 1", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("testimonial item 1", 'metallex'),
      "param_name" => "testimonial1",
      "value" => "",
      "description" => __("testimonial item 1", 'metallex')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image item 2', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title item 2", 'metallex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title item 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle item 2", 'metallex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("subtitle item 2", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("testimonial item 2", 'metallex'),
      "param_name" => "testimonial2",
      "value" => "",
      "description" => __("testimonial item 2", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Welcome Box", 'metallex'),
   "base" => "welcome",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'metallex'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 1", 'metallex'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("subtitle 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'metallex'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 2", 'metallex'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("subtitle 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'metallex'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Title 3", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 3", 'metallex'),
      "param_name" => "subtitle3",
      "value" => "",
      "description" => __("subtitle 3", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Welcome Box 2", 'metallex'),
   "base" => "welcome2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'metallex'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Worker Box", 'metallex'),
   "base" => "worker",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link facebook social", 'metallex'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link facebook social", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter social", 'metallex'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter social", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link linkedin social", 'metallex'),
      "param_name" => "linkedin",
      "value" => "",
      "description" => __("Link linkedin social", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link google social", 'metallex'),
      "param_name" => "google",
      "value" => "",
      "description" => __("Link google social", 'metallex')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Item active", 'metallex'),
      "param_name" => "active",
      "value" => "",
      "description" => __("Select item active", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Box", 'metallex'),
   "base" => "service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Left', 'metallex' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Right', 'metallex' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Icon', 'metallex' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Page", 'metallex'),
   "base" => "about_page",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 1", 'metallex'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Text 1", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 2", 'metallex'),
      "param_name" => "text2",
      "value" => "",
      "description" => __("Text 2", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 3", 'metallex'),
      "param_name" => "text3",
      "value" => "",
      "description" => __("Text 3", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 1", 'metallex'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link 1", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 1", 'metallex'),
      "param_name" => "textbutton1",
      "value" => "",
      "description" => __("Text Btn 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link 2", 'metallex'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link 2", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn 2", 'metallex'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Btn 2", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Award", 'metallex'),
   "base" => "about_award",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Icon', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Speciality", 'metallex'),
   "base" => "special_no",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Faq", 'metallex'),
   "base" => "faq",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID", 'metallex'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact Info", 'metallex'),
   "base" => "contact_info",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 1", 'metallex'),
      "param_name" => "info1",
      "value" => "",
      "description" => __("Text Info 1", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 2", 'metallex'),
      "param_name" => "info2",
      "value" => "",
      "description" => __("Text Info 2", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Info 3", 'metallex'),
      "param_name" => "info3",
      "value" => "",
      "description" => __("Text Info 3", 'metallex')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Solutions", 'metallex'),
   "base" => "solutions",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Solutions Carousel", 'metallex'),
   "base" => "solutions2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'metallex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'metallex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'metallex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Projects Carousel", 'metallex'),
   "base" => "projects",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'metallex'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'metallex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'metallex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'metallex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'metallex' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'metallex' )
      ), 
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type', 'metallex' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'metallex' ) => 'type1',
            __( 'Type 2', 'metallex' ) => 'type2',
            __( 'Type 3', 'metallex' ) => 'type3',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Projects Grid", 'metallex'),
   "base" => "projects2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Alls projects", 'metallex')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text view", 'metallex'),
      "param_name" => "textbtn",
      "value" => "",
      "description" => __("Text view all", 'metallex')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'metallex'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'metallex')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'metallex'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'metallex'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'metallex')
   ),

   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'metallex'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog Grid", 'metallex'),
   "base" => "blog2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'metallex'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'metallex')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'metallex' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'metallex' ) => 'DESC',
            __( 'ASC : lowest to highest', 'metallex' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'metallex' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'metallex' ) => 'date',
            __( 'Title', 'metallex' ) => 'title',
            __( 'Random', 'metallex') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'metallex' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("number", 'metallex'),
      "param_name" => "number",
      "value" => "",
      "description" => __("number", 'metallex')
   ),

    )));
}