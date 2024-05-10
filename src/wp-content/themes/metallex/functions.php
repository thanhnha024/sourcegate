<?php
$metallex_redux_demo = get_option('redux_demo');
//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function metallex_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('metallex', $lang);

    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    add_editor_style();
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'metallex' ),
    'solutions' =>  esc_html__( 'Solutions Navigation Menu: Chosen menu in single solutions', 'metallex' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'metallex_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function metallex_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Raleway:400,100,200,300,500,600,700,800,900' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url2() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Alegreya:400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url3() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url4() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'PT Serif' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url5() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Lora:400,400i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url6() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,400i,600,600i,700,700i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_fonts_url7() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'metallex' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:400,400i,500,500i,600,600i' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function metallex_theme_scripts_styles() {
  $metallex_redux_demo = get_option('redux_demo');
  $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'metallex-fonts1', metallex_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts2', metallex_fonts_url2(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts3', metallex_fonts_url3(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts4', metallex_fonts_url4(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts5', metallex_fonts_url5(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts6', metallex_fonts_url6(), array(), '1.0.0' );
    wp_enqueue_style( 'metallex-fonts7', metallex_fonts_url7(), array(), '1.0.0' );
    wp_enqueue_style( 'effects-style', get_template_directory_uri().'/css/effects_style.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/js/plugins/owl.carousel-2/assets/owl.carousel.css');
    wp_enqueue_style( 'owl-theme-default', get_template_directory_uri().'/js/plugins/owl.carousel-2/assets/owl.theme.default.min.css');
    wp_enqueue_style( 'metallex-css', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style( 'metallex-style', get_stylesheet_uri(), array(), '2018-06-23' );


if(isset($metallex_redux_demo['rtl']) && $metallex_redux_demo['rtl']==1){
  wp_enqueue_style( 'rtl', get_template_directory_uri().'/rtl.css');  }

if(isset($metallex_redux_demo['chosen-color']) && $metallex_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    } 

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  //Javascript 
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("touchSwipe", get_template_directory_uri()."/js/jquery.touchSwipe.min.js",array(),false,true);
    wp_enqueue_script("responsive-bootstrap-carousel", get_template_directory_uri()."/js/responsive_bootstrap_carousel.js",array(),false,true);
    wp_enqueue_script('jquery-meanmenu', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js',array(),false,true);
    wp_enqueue_script("metallex-custom", get_template_directory_uri()."/js/custom.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/plugins/owl.carousel-2/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("metallex-theme", get_template_directory_uri()."/js/theme.js",array(),false,true);
    wp_enqueue_script("metallex-scroll", get_template_directory_uri()."/js/scroll.js",array(),false,true);
    wp_enqueue_script("accordion", get_template_directory_uri()."/js/accordion.js",array(),false,true);
    wp_enqueue_script("isotope", get_template_directory_uri()."/js/isotope.min.js",array(),false,true);
    wp_enqueue_script("fancybox-pack", get_template_directory_uri()."/js/jquery.fancybox.pack.js",array(),false,true);
    wp_enqueue_script("metallex-main", get_template_directory_uri()."/js/main.js",array(),false,true);
    wp_enqueue_script("metallex-homepage2", get_template_directory_uri()."/js/homepage2.js",array(),false,true);
    wp_enqueue_script("metallex-homepage3", get_template_directory_uri()."/js/homepage3.js",array(),false,true);
    wp_enqueue_script("metallex-homepage4", get_template_directory_uri()."/js/homepage4.js",array(),false,true);
    wp_enqueue_script("metallex-homepage5", get_template_directory_uri()."/js/homepage5.js",array(),false,true);
   }
add_action( 'wp_enqueue_scripts', 'metallex_theme_scripts_styles' );

// After VC Init
add_action( 'vc_after_init', 'metallex_after_init_actions' );
 
function metallex_after_init_actions() {
     
    // Remove VC Elements
    if( function_exists('vc_remove_element') ){ 
         
        vc_remove_element( 'vc_btn' );
        vc_remove_element( 'vc_media_grid' );
        vc_remove_element( 'vc_images_carousel' );
        vc_remove_element( 'vc_gallery' );
        vc_remove_element( 'vc_single_image' );
        vc_remove_element( 'vc_toggle' );
        vc_remove_element( 'vc_pinterest' );
        vc_remove_element( 'vc_googleplus' );
        vc_remove_element( 'vc_tweetmeme' );
        vc_remove_element( 'vc_facebook' );
        vc_remove_element( 'vc_hoverbox' );
        vc_remove_element( 'vc_message' );
        vc_remove_element( 'vc_text_separator' );
        vc_remove_element( 'vc_zigzag' );
        vc_remove_element( 'vc_separator' );
        vc_remove_element( 'vc_icon' );
        vc_remove_element( 'vc_custom_heading' );
        vc_remove_element( 'vc_tta_section' );
        vc_remove_element( 'vc_tta_pageable' );
        vc_remove_element( 'vc_tta_accordion' );
        vc_remove_element( 'vc_tta_tour' );
        vc_remove_element( 'vc_tta_tabs' );
        vc_remove_element( 'vc_pie' );
        vc_remove_element( 'vc_progress_bar' );
        vc_remove_element( 'vc_flickr' );
        vc_remove_element( 'vc_gmaps' );
        vc_remove_element( 'vc_video' );
        vc_remove_element( 'vc_posts_slider' );
        vc_remove_element( 'vc_widget_sidebar' );
        vc_remove_element( 'vc_cta' );
        vc_remove_element( 'vc_wp_rss' );
        vc_remove_element( 'vc_wp_archives' );
        vc_remove_element( 'vc_wp_categories' );
        vc_remove_element( 'vc_wp_links' );
        vc_remove_element( 'vc_wp_posts' );
        vc_remove_element( 'vc_wp_text' );
        vc_remove_element( 'vc_wp_custommenu' );
        vc_remove_element( 'vc_wp_tagcloud' );
        vc_remove_element( 'vc_wp_pages' );
        vc_remove_element( 'vc_wp_calendar' );
        vc_remove_element( 'vc_wp_recentcomments' );
        vc_remove_element( 'vc_wp_meta' );
        vc_remove_element( 'vc_wp_search' );
        vc_remove_element( 'vc_line_chart' );
        vc_remove_element( 'vc_round_chart' );
        vc_remove_element( 'vc_cta_button2' );
        vc_remove_element( 'vc_cta_button' );
        vc_remove_element( 'vc_button2' );
        vc_remove_element( 'vc_button' );
        vc_remove_element( 'vc_carousel' );
        vc_remove_element( 'vc_posts_grid' );
        vc_remove_element( 'vc_accordion_tab' );
        vc_remove_element( 'vc_accordion' );
        vc_remove_element( 'vc_tab' );
        vc_remove_element( 'vc_tour' );
        vc_remove_element( 'vc_tabs' );
        vc_remove_element( 'vc_masonry_media_grid' );
        vc_remove_element( 'vc_masonry_grid' );
        vc_remove_element( 'vc_basic_grid' );
        vc_remove_element( 'vc_empty_space' );   
    }    
}


//Custom Excerpt Function
function metallex_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
// Widget Sidebar
function metallex_widgets_init() {
  register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'metallex' ),
        'id'            => 'sidebar-1',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'metallex' ),        
    'before_widget' => '<div id="%1$s" class="full_width widget mbot45 %2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="fnt_25 mbot25">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
        'name'          => esc_html__( 'Solutions Sidebar', 'metallex' ),
        'id'            => 'sidebar-2',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'metallex' ),        
    'before_widget' => '<div id="%1$s" class="full_width mbot45">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="fnt_25 mbot25">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'metallex' ),
        'id'            => 'sidebar-shop',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'metallex' ),        
    'before_widget' => '<div id="%1$s" class="full_width mbot45">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h4 class="fnt_25">',        
    'after_title'   => '</h4>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget Area', 'metallex' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'metallex' ),
    'before_widget' => '<aside class="widget-footer">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6>',
    'after_title'   => '</h6>',
  ) );
  
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget Area', 'metallex' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'metallex' ),
    'before_widget' => '<aside class="widget-footer">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6>',
    'after_title'   => '</h6>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget Area', 'metallex' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'metallex' ),
    'before_widget' => '<aside class="widget-footer">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6>',
    'after_title'   => '</h6>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget Area', 'metallex' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'metallex' ),
    'before_widget' => '<aside class="widget-footer">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h6>',
    'after_title'   => '</h6>',
  ) );
}
add_action( 'widgets_init', 'metallex_widgets_init' );


//function tag widgets
function metallex_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'metallex_tag_cloud_widget' );

function metallex_excerpt() {
  $metallex_redux_demo = get_option('redux_demo');
  if(isset($metallex_redux_demo['blog_excerpt'])){
    $limit = $metallex_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function metallex_excerpt2() {
  $metallex_redux_demo = get_option('redux_demo');
  if(isset($metallex_redux_demo['solutions_excerpt'])){
    $limit = $metallex_redux_demo['solutions_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function metallex_excerpt3() {
  $metallex_redux_demo = get_option('redux_demo');
  if(isset($metallex_redux_demo['solutions_excerpt2'])){
    $limit = $metallex_redux_demo['solutions_excerpt2'];
  }else{
    $limit = 15;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
function metallex_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left" aria-hidden="true"></i>', 'metallex' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right" aria-hidden="true"></i>', 'metallex' ),ENT_QUOTES),   
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function metallex_search_form( $form ) {
    $form = '
  <form  method="get" class="search-form" action="' . esc_url(home_url('/')) . '"> 
            <input type="search" class="form-control" placeholder="'.esc_attr__('Search', 'metallex').'" value="' . get_search_query() . '" name="s"> 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'metallex_search_form' );
//Custom comment List:

// Comment Form
function metallex_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
   <?php if(get_avatar($comment,$size='70' ) != ''){?>
   <div class="comment_list_div">
   <span class="cmt_photo"><?php echo get_avatar($comment,$size='70' ); ?></span>
      <div class="cmt_info">
        <h6><?php printf( get_comment_author_link()) ?></h6>
        <div class="gray_color1 comment_text"><?php comment_text() ?></div>
        <ul>
          <li class="commentdate"><?php the_time(get_option( 'date_format' ));?>  </li>
          <li><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></li>
        </ul>
      </div>
    </div>
     <?php }else{ ?>
     <div class="comment_list_div">
      <div class="cmt_info comment-fullwidth">
        <h6><?php printf( get_comment_author_link()) ?></h6>
        <div class="gray_color1 comment_text"><?php comment_text() ?></div>
        <ul>
          <li class="nobackground"><?php the_time(get_option( 'date_format' ));?>  </li>
          <li><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></li>
        </ul>
      </div>
    </div>
     <?php }?>
<?php
}

function metallex_woo_related_products_limit() {
  global $product;
  
  $args['posts_per_page'] = 6;
  return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'metallex_related_products_args' );
  function metallex_related_products_args( $args ) {
  $args['posts_per_page'] = 3; // 3 related products
  return $args;
}


function metallex_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'metallex_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'metallex' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'metallex' ) => 'type2',
                                esc_html__( 'Section Slider', 'metallex' ) => 'slider',
                                esc_html__( 'Section Slider 2', 'metallex' ) => 'slider2',
                                esc_html__( 'Section Slider 3', 'metallex' ) => 'slider3',
                                esc_html__( 'Section Slider 4', 'metallex' ) => 'slider4',
                                esc_html__( 'Section Slider 5', 'metallex' ) => 'slider5',
                                esc_html__( 'Section Mission', 'metallex' ) => 'mission',
                                esc_html__( 'Section Gray BG', 'metallex' ) => 'graybg',
                                esc_html__( 'Section Gray BG 2', 'metallex' ) => 'graybg2',
                                esc_html__( 'Section default', 'metallex' ) => 'graybg3',
                                esc_html__( 'Section Team', 'metallex' ) => 'team',
                                esc_html__( 'Section Team 2', 'metallex' ) => 'team2',
                                esc_html__( 'Team Page', 'metallex' ) => 'team3',
                                esc_html__( 'Section Counter', 'metallex' ) => 'counter',
                                esc_html__( 'Section Banner', 'metallex' ) => 'banner',
                                esc_html__( 'Section Expert', 'metallex' ) => 'expert_bg',
                                esc_html__( 'Section Testinomial', 'metallex' ) => 'testinomial',
                                esc_html__( 'Page Testinomial', 'metallex' ) => 'testinomial2',
                                esc_html__( 'Section Worker', 'metallex' ) => 'worker_bg',
                                esc_html__( 'Section Service', 'metallex' ) => 'service',
                                esc_html__( 'Section About', 'metallex' ) => 'about_award',
                                esc_html__( 'Section Speciality', 'metallex' ) => 'speciality',
                                esc_html__( 'Section FAQ', 'metallex' ) => 'faq',
                                esc_html__( 'Section Contact', 'metallex' ) => 'contact',
                             ),
                             'description' => esc_html__( 'Select type row', 'metallex' )
      )); 

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'metallex'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "metallex"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'metallex'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "metallex"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Desc', 'metallex'),
                              "param_name" => "ses_desc",
                              "value" => "",
                              "description" => esc_html__("Section Desc, Leave a blank do not show frontend.", "metallex"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'metallex' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'metallex' )
      ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Link Btn', 'metallex'),
                              "param_name" => "ses_link1",
                              "value" => "",
                              "description" => esc_html__("Link Btn of Section, Leave a blank do not show frontend.", "metallex"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Text Btn', 'metallex'),
                              "param_name" => "ses_btn1",
                              "value" => "",
                              "description" => esc_html__("Text Button of Section, Leave a blank do not show frontend.", "metallex"),   
    ));
// Add new Param in Column  
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Title', 'metallex'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of column", "metallex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column Subtitle', 'metallex'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Subtitle of column", "metallex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Container Class', 'metallex'),
                              "param_name" => "wap_class",
                              "value" => "",
                              "description" => esc_html__("Container Class", "metallex"),      
                            ) 
    );
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Column id', 'metallex'),
                              "param_name" => "column_id",
                              "value" => "",
                              "description" => esc_html__("Column ID, Only use for content slider.", "metallex"),      
                            ) 
    );  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'metallex' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'metallex' ) => 'none',
                                esc_html__( 'Column', 'metallex' ) => 'column',
                                esc_html__( 'Accordion', 'metallex' ) => 'accordion',
                                esc_html__( 'Choose Us', 'metallex' ) => 'choose',
                                esc_html__( 'FAQ', 'metallex' ) => 'faq',

                             ),
                             'description' => esc_html__( 'Select type section content', 'metallex' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'metallex' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'metallex' )
      )); 
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'metallex_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function metallex_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'metallex' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'metallex' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'metallex' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ),
      array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'metallex' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Woocommerce', 'metallex' ), // The plugin name.
            'slug'               => 'woocommerce',
            'source'             => get_template_directory_uri() . '/framework/plugins/woocommerce.zip', // The plugin source. 
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        array(
            'name'                     => esc_html__( 'Metallex Common', 'metallex' ),
            'slug'                     => 'metallex-common',
            'required'                 => true,
            'source'                   => get_template_directory_uri() . '/framework/plugins/metallex-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'metallex' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'metallex' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'metallex' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'metallex' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'metallex' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'metallex' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'metallex' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'metallex' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'metallex' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'metallex' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'metallex' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'metallex' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'metallex' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'metallex' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'metallex' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'metallex' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'metallex' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}




function metallex_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Metallex',
            'import_file_url'            => 'http://shtheme.com/import/metallex/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/metallex/widgets.json',
            'import_preview_image_url'   => 'http://shtheme.com/import/metallex/Image-Preview.jpg',
            'import_notice'              => esc_html__( 'Import data example metallex', 'metallex' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'metallex_import_files' );




function metallex_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Page One' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'metallex_after_import_setup' );


?>