<?php
/*
 * Template Name: Other Page Template
 * Description: A Page Template with a Page Builder design.
 */
 $metallex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php $page_image = get_post_meta(get_the_ID(),'_cmb_page_image', true); ?>
<?php if($page_image){?>
<section class="inner-banner" style="background: url(<?php echo esc_url($page_image) ?>) no-repeat center top;">
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
<?php if (have_posts()){ ?>
	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	
	<?php }else {
		echo esc_html__( 'Page Canvas For Page Builder', 'metallex' );
	}?>
<?php get_footer(); ?>