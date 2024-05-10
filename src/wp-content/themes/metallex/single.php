<?php
/**
 * The Template for displaying all single posts
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php $post_facebook = get_post_meta(get_the_ID(),'_cmb_post_facebook', true); ?>
<?php $post_twitter = get_post_meta(get_the_ID(),'_cmb_post_twitter', true); ?>
<?php $post_google = get_post_meta(get_the_ID(),'_cmb_post_google', true); ?>
<?php $post_linkedin = get_post_meta(get_the_ID(),'_cmb_post_linkedin', true); ?>
<?php $post_sidebar = get_post_meta(get_the_ID(),'_cmb_post_sidebar', true); ?>

<?php if(isset($metallex_redux_demo['blog_image']['url']) && $metallex_redux_demo['blog_image']['url'] != ''){?>
<section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['blog_image']['url']);?>) no-repeat center top;">
<?php }else{ ?>
<section class="inner-banner">
<?php } ?>
        <div class="thm-container">
            <h2><?php the_title(); ?></h2>
        </div><!-- /.thm-container -->
    </section>
    
    <!-- =========breadcum end============-->
    <!-- =========inner-pages medium content start============-->
    <div class="full_wrapper padtb_100_100">
      <div class="container">
        <div class="row">
        <?php if($post_sidebar=='left'){ ?>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <?php get_sidebar();?>
          </div>
          <?php } ?>
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
          <?php if($post_sidebar=='left'){ ?>
              <div class="plft30">
              <?php } ?>
              <div class="full_width">
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="wdt_img news_img shadow_effect effect-apollo"><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?><span class="news_Date news_Date1"><?php the_time(get_option( 'date_format' ));?></span></a>
                </div>
                <?php } ?>
                <ul class="blog_icon_list">
                <?php if ( is_sticky() )
     echo '<li class="featured-post">' . esc_html__( 'Sticky', 'metallex' ) . '</li>';
     ?>
                  <li class="blog-user_icon"><?php if(isset($metallex_redux_demo['blog_by'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['blog_by']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'By :', 'metallex' );
                                    }
                                    ?>  <?php the_author(); ?></li>
                  <li class="blog-lawn_icon"><?php 
                                        // Show all category for post
                                        $i = 1; foreach((get_the_category()) as $category) { 
                                        if ($i == 1){echo ''; }else {echo '/ ';}
                                            echo '<a href="'.get_category_link($category->cat_ID).'" rel="category">'.$category->category_nicename . ' '.'</a>'; 
                                            
                                            $i++;
                                        } ?></li>
                  <li class="blog-cmt_icon"><?php comments_popup_link(); ?></li>
                </ul>
                </div>
                <div class="post-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages(); ?>
                </div>
                <?php if($post_facebook || $post_twitter || $post_google || $post_linkedin){ ?>
              <div class="social_plugin">
                <ul>
                  <li><a href="#" class="share_plugin"><img src="<?php echo get_template_directory_uri();?>/images/news_detail_page/share_icon.jpg" ></a></li>
                  <?php if($post_twitter){ ?>
                  <li><a href="<?php echo esc_url($post_twitter) ?>" class="twitter_plugin"><?php echo esc_html__( 'Twitter', 'metallex' );?></a></li>
                  <?php } ?>
                  <?php if($post_facebook){ ?>
                  <li><a href="<?php echo esc_url($post_facebook) ?>" class="facebook_plugin"><?php echo esc_html__( 'Facebook', 'metallex' );?></a></li>
                  <?php } ?>
                  <?php if($post_google){ ?>
                  <li><a href="<?php echo esc_url($post_google) ?>" class="google_plugin"><?php echo esc_html__( 'Google+', 'metallex' );?></a></li>
                  <?php } ?>
                  <?php if($post_linkedin){ ?>
                  <li><a href="<?php echo esc_url($post_linkedin) ?>" class="linkedin_plugin"><?php echo esc_html__( 'Linkedin', 'metallex' );?></a></li>
                  <?php } ?>
                </ul>
             </div>
              <?php } ?>
            <?php comments_template();?>
            <?php if($post_sidebar=='left'){ ?>
              </div>
              <?php } ?>
          </div>
          <?php if($post_sidebar!='left'){ ?>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="plft30">
            <?php get_sidebar();?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
<?php endwhile; ?>
   <?php
get_footer();
?>