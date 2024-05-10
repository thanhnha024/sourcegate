<?php

/**
 * The Template for displaying all single posts
 */
$metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php
while (have_posts()) : the_post();
?>
  <?php $page_image = get_post_meta(get_the_ID(), '_cmb_page_image', true); ?>
  <?php if ($page_image) { ?>
    <section class="inner-banner" style="background: url(<?php echo esc_url($page_image) ?>) no-repeat center top;">
    <?php } else { ?>
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
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
              <?php if (has_post_thumbnail()) { ?>
                <div class="full_width">

                  <div class="wdt_img news_img shadow_effect effect-apollo"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><span class="news_Date news_Date1"><?php the_time(get_option('date_format')); ?></span></a>
                  </div>
                </div>
              <?php } ?>
              <div class="post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
                <?php wp_link_pages(array(
                  'before'      => '<div class="page-links">' . esc_html__('Pages:', 'metallex'),
                  'after'       => '</div>',
                  'link_before' => '<span class="page-number">',
                  'link_after'  => '</span>',
                )); ?>
              </div>
              <?php
              if (comments_open() || get_comments_number()) {
                comments_template();
              }
              ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
              <div class="plft30">
                <?php get_sidebar(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php
    get_footer();
    ?>
