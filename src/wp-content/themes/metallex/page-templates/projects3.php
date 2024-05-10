<?php
/*
 * Template Name: Project Lightbox Template
 * Description: A Page Template with a Page Builder design.
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php if(isset($metallex_redux_demo['projects_image']['url']) && $metallex_redux_demo['projects_image']['url'] != ''){?>
<section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['projects_image']['url']);?>) no-repeat center top;">
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
    <div class="full_wrapper padtb_85_70">
      <div class="container">
        <div class="row">
          <div class="filter-section">
            <div class="col-sm-12 col-xs-12">
              <div class="filter-container isotopeFilters">
                <ul class="list-inline filter">
                  <li class="active"><a href="#" data-filter="*"><?php echo esc_html__( 'All Projects', 'metallex' );?> </a></li>
                  <?php 
              $categories = get_terms('type');   
               foreach( (array)$categories as $categorie){
                  $cat_name = $categorie->name;
                  $cat_slug = $categorie->slug;
          ?>
                  <li class="cat-item cat-item-1"><a href="#" data-filter=".<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- /nimble-portfolio-filter-->
          <div class="portfolio-section port-col project_classic">
            <div class="isotopeContainer">
            <?php 
            $args = array(   
                      'post_type' => 'projects',   
                      'paged' => $paged,
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    $cates = get_the_terms(get_the_ID(),'type');
                    $cate_name ='';
                    $cate_slug = '';
                    foreach((array)$cates as $cate){
                    $cate_name .= $cate->name.'/ ' ;
                    $cate_slug .= $cate->slug .' ';     
                    } 
    $portfolio_video = get_post_meta(get_the_ID(),'_cmb_portfolio_video', true);
    ?>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project_img mbot30 effect-goliath isotopeSelector <?php echo esc_attr($cate_slug);?>">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="shadow_effect black_overlay"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"   class="img-responsive"></div>
                <?php } ?>
                <div class="project_txt_btn"><a data-title="<?php the_title(); ?>" href="<?php the_permalink();?>" class="lightbox lens_icon"><?php echo esc_html__( 'view project', 'metallex' );?></a>
                  <h6><?php the_title(); ?></h6>
                </div>
              </div>
              
              <?php 
                    endwhile;?>
            </div>
          </div>
          <div aria-label="Page navigation" class="project-pagination1" style="margin-left:15px;">
              <?php metallex_pagination();?>
          </div>
          <!-- /nimble-portfolio-->
        </div>
      </div>
    </div>
    <?php
get_footer();
?>