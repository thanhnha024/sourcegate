<?php
/**
 * The Template for displaying all single posts
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<?php if(isset($metallex_redux_demo['projects_image']['url']) && $metallex_redux_demo['projects_image']['url'] != ''){?>
<section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['projects_image']['url']);?>) no-repeat center top;">
<?php }else{ ?>
<section class="inner-banner">
<?php } ?>
        <div class="thm-container">
            <h2><?php if(isset($metallex_redux_demo['projects_single_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['projects_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'metallex' );
                                    }
                                    ?></h2>
            <div class="breadcumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'metallex' );?></a>
                <i class="fa fa-angle-right"></i>
                <span><?php if(isset($metallex_redux_demo['projects_single_title'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($metallex_redux_demo['projects_single_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'metallex' );
                                    }
                                    ?></span>
            </div><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </section>
    <!-- =========breadcum end============-->
                  <?php the_content(); ?>
                  <?php wp_link_pages(); ?>
<?php endwhile; ?>
   <?php
get_footer();
?>