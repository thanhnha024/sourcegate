<?php
/*
 * Template Name: Solutions Template
 * Description: A Page Template with a Page Builder design.
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
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

<div class="full_wrapper padtb_96_20">
      <div class="container">
        <h3 class="mbot25 fnt_dark_color"><?php if(isset($metallex_redux_demo['solutions_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['solutions_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'What We Offer', 'metallex' );
                                    }
                                    ?></h3>
        <p class="mbot75"><?php if(isset($metallex_redux_demo['solutions_subtitle'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['solutions_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in', 'metallex' );
                                    }
                                    ?></p>
        <div class="row">
        <?php 
            $args = array(   
                      'post_type' => 'solutions',   
                      'paged' => $paged,
                    );  
                    $wp_query = new WP_Query($args);
                    $i = 1;
                    while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
    ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 enitre_mouse mbot75">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="shadow_effect effect-apollo mbot25"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="<?php echo esc_attr__( 'Image', 'metallex' );?>" class="img-responsive"></a></div>
            <?php } ?>
            <h4 class="mbot10"><?php the_title(); ?></h4>
            <p class="mbot12 line_he2"><?php if(isset($metallex_redux_demo['solutions_excerpt'])){?>
                                <?php echo esc_attr(metallex_excerpt2($metallex_redux_demo['solutions_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(metallex_excerpt2(30)); 
                                }
                                ?></p><a href="<?php the_permalink();?>" class="read_more"><?php if(isset($metallex_redux_demo['read_more2'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['read_more2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read more', 'metallex' );
                                    }
                                    ?></a>
          </div>
          
          <?php 
                    endwhile;?>
        </div>
      </div>
    </div>
    <?php
get_footer();
?>