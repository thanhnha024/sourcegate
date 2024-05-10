<?php
$metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if (isset($metallex_redux_demo['blog_image']['url']) && $metallex_redux_demo['blog_image']['url'] != '') { ?>
  <section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['blog_image']['url']); ?>) no-repeat center top;">
  <?php } else { ?>
    <section class="inner-banner">
    <?php } ?>
    <div class="thm-container">
      <h2><?php
          if (is_day()) :
            printf(esc_html__('Daily Archives: %s', 'metallex'), get_the_date());

          elseif (is_month()) :
            printf(esc_html__('Monthly Archives: %s', 'metallex'), get_the_date(_x('F Y', 'monthly archives date format', 'metallex')));

          elseif (is_year()) :
            printf(esc_html__('Yearly Archives: %s', 'metallex'), get_the_date(_x('Y', 'yearly archives date format', 'metallex')));

          else :
            echo esc_html__('Archives', 'metallex');

          endif;
          ?></h2>
    </div><!-- /.thm-container -->
    </section>

    <!-- =========inner-pages medium content start============-->
    <div class="full_wrapper padtb_100_95">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
            <?php
            while (have_posts()) : the_post();
            ?>
              <div class="full_width mbot80">
                <?php if (has_post_thumbnail()) { ?>
                  <div class="wdt_img news_img shadow_effect effect-apollo"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><span class="news_Date news_Date1"><?php the_time(get_option('date_format')); ?></span></a>
                  </div>
                <?php } ?>
                <ul class="blog_icon_list">
                  <?php if (is_sticky())
                    echo '<li class="featured-post">' . esc_html__('Sticky', 'metallex') . '</li>';
                  ?>
                  <li class="blog-user_icon"><?php if (isset($metallex_redux_demo['blog_by'])) { ?>
                      <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['blog_by'])); ?>
                    <?php } else { ?>
                    <?php echo esc_html__('By :', 'metallex');
                                              }
                    ?> <?php the_author(); ?></li>
                  <li class="blog-lawn_icon"><?php
                                              // Show all category for post
                                              $i = 1;
                                              foreach ((get_the_category()) as $category) {
                                                if ($i == 1) {
                                                  echo '';
                                                } else {
                                                  echo '/ ';
                                                }
                                                echo '<a href="' . get_category_link($category->cat_ID) . '" rel="category">' . $category->category_nicename . ' ' . '</a>';

                                                $i++;
                                              } ?></li>
                  <li class="blog-cmt_icon"><?php comments_popup_link(); ?></li>
                </ul>
                <h3 class="fnt_25 mbot20 news_head no_after"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="mbot25 gray_color1 clear-none"><?php if (isset($metallex_redux_demo['blog_excerpt'])) { ?>
                    <?php echo esc_attr(metallex_excerpt($metallex_redux_demo['blog_excerpt'])); ?>
                  <?php } else { ?>
                  <?php echo esc_attr(metallex_excerpt(50));
                                                          }
                  ?></p><a href="<?php the_permalink(); ?>" class="view-all hvr-bounce-to-right news_read_btn"><?php if (isset($metallex_redux_demo['read_more'])) { ?>
                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['read_more'])); ?>
                  <?php } else { ?>
                  <?php echo esc_html__('Read more', 'metallex');
                                                                                                                            }
                  ?></a>
              </div>

            <?php endwhile; ?>

            <div aria-label="Page navigation">
              <?php metallex_pagination(); ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <div class="plft30">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    get_footer();
    ?>
