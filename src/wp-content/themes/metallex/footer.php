<?php $metallex_redux_demo = get_option('redux_demo');?> 
<footer class="full_width">
<?php if(isset($metallex_redux_demo['footer_template'])){ echo do_shortcode($metallex_redux_demo['footer_template']); }?>
      <!-- Footer_Container Start-->
      <div class="ftr_mid full_width padtb_81_30">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr_txt_div mbot30">
            <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                        <?php endif; ?>   
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mbot30 service_link_desk">
              <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                        <?php endif; ?>   
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mbot30 quick_link_mob">
              <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                        <?php endif; ?>   
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mbot30 service_link_mob">
              <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                        <?php endif; ?>   
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 mbot30 quick_link_desk">
              <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                        <?php endif; ?>   
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mbot30 get_touch">
              <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                        <?php endif; ?>   
            </div>
          </div>
        </div>
      </div>
      <!-- Footer_Container End-->
      <!-- Copyright Start-->
      <div class="ftr_btm full_width">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 txt_center">
              <p><?php if(isset($metallex_redux_demo['footer_text'])){?>
                        <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'Copyright metallex 2018. All rights reserved.', 'metallex' );
                        }
                        ?> </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 text-right txt_center">
              <p><?php if(isset($metallex_redux_demo['footer_author'])){?>
                        <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['footer_author'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'Created by: Shtheme', 'metallex' );
                        }
                        ?> </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End-->
    </footer>
    <!-- =========footer end============-->
<?php if(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '3'){?>
<div class="search_overlay"><a href="javascript:void(0)" class="close_search"><?php echo esc_html__( ' ', 'metallex' );?></a>
      <div class="search_main_container">
        <h4><?php echo esc_html__( 'Search', 'metallex' );?></h4>
        <form action="<?php echo esc_url(home_url('/')); ?>">
          <input type="text" placeholder="<?php echo esc_html__( 'Search...', 'metallex' );?>" class="search_lightbox_input" name="s" id="s">
          <input type="submit" class="search_lghtbox_btn">
        </form>
      </div>
    </div>
<?php } elseif(isset($metallex_redux_demo['header_select']) && $metallex_redux_demo['header_select']== '5'){?>

<div class="search_overlay vari_5_search"><a href="javascript:void(0)" class="close_search"><?php echo esc_html__( ' ', 'metallex' );?></a>
      <div class="search_main_container">
        <h4><?php echo esc_html__( 'Search', 'metallex' );?></h4>
        <form>
          <input type="text" placeholder="<?php echo esc_html__( 'Search...', 'metallex' );?>" class="search_lightbox_input" name="s" id="s">
          <input type="button" class="search_lghtbox_btn">
        </form>
      </div>
    </div>

<?php }else{ ?>
<div class="search_overlay vari_2_search"><a href="javascript:void(0)" class="close_search"><?php echo esc_html__( ' ', 'metallex' );?></a>
      <div class="search_main_container">
        <h4><?php echo esc_html__( 'Search', 'metallex' );?></h4>
        <form action="<?php echo esc_url(home_url('/')); ?>">
          <input type="text" placeholder="<?php echo esc_html__( 'Search...', 'metallex' );?>" class="search_lightbox_input" name="s" id="s">
          <input type="submit" class="search_lghtbox_btn">
        </form>
      </div>
    </div>
    <?php } ?>
    <?php wp_footer(); ?>
  </body>
</html>