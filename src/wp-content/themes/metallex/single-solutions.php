<?php
/**
 * The Template for displaying all single posts
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($metallex_redux_demo['solutions_image']['url']) && $metallex_redux_demo['solutions_image']['url'] != ''){?>
<section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['solutions_image']['url']);?>) no-repeat center top;">
<?php }else{ ?>
<section class="inner-banner">
<?php } ?>
        <div class="thm-container">
            <h2><?php the_title(); ?></h2>
            <div class="breadcumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'metallex' );?></a>
                <i class="fa fa-angle-right"></i>
                <span><?php the_title(); ?></span>
            </div><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </section>
    <!-- =========breadcum end============-->
<div class="full_wrapper padtb_100_100">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="full_width mbot50">
              <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'solutions',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new metallex_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="service_nav %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
            </div>
            <?php get_sidebar('solution');?>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
            <div class="plft30">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php endwhile; ?>
   <?php
get_footer();
?>