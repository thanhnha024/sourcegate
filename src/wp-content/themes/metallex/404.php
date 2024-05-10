<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?> 
<?php if(isset($metallex_redux_demo['blog_image']['url']) && $metallex_redux_demo['blog_image']['url'] != ''){?>
<section class="inner-banner section-404" style="background: url(<?php echo esc_url($metallex_redux_demo['blog_image']['url']);?>) no-repeat center top;">
<?php }else{ ?>
<section class="inner-banner section-404">
<?php } ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 m-auto text-center">
              <h1 class="display-1 title-404"><?php if(isset($metallex_redux_demo['404_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['404_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404 Page', 'metallex' );
                                    }
                                    ?></h1>
              <h4 class="desc-404"><?php if(isset($metallex_redux_demo['404_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['404_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Oops! This Server Page not be found.', 'metallex' );
                                    }
                                    ?></h4>
              <a class="view-all hvr-bounce-to-right news_read_btn button-404" href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($redux_demo['404_text'])){?>
                                    <?php echo wp_specialchars_decode($redux_demo['404_text']);?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Back To Home page', 'metallex' );
                                    }
                                    ?></a>
            </div>
          </div>
        </div>
      </section>
  <?php get_footer(); ?>