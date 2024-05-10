<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>

<?php if (isset($metallex_redux_demo['product_image']['url']) && $metallex_redux_demo['product_image']['url'] != '') { ?>
	<section class="inner-banner" style="background: url(<?php echo esc_url($metallex_redux_demo['product_image']['url']); ?>) no-repeat center top;">
	<?php } else { ?>
		<section class="inner-banner">
		<?php } ?>
		<div class="thm-container">
			<h2><?php if (isset($metallex_redux_demo['product_title'])) { ?>
					<?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['product_title'])); ?>
				<?php } else { ?>
				<?php echo esc_html__('Shop', 'metallex');
					}
				?></h2>
			<div class="breadcumb">
				<a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'metallex'); ?></a>
				<i class="fa fa-angle-right"></i>
				<span><?php if (isset($metallex_redux_demo['product_title'])) { ?>
						<?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['product_title'])); ?>
					<?php } else { ?>
					<?php echo esc_html__('Shop', 'metallex');
							}
					?></span>
			</div><!-- /.breadcumb -->
		</div><!-- /.thm-container -->
		</section>
		<div class="full_width padtb_100_20">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<?php
						/**
						 * woocommerce_sidebar hook.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						do_action('woocommerce_sidebar');
						?>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 col_margin">
						<?php if (have_posts()) : ?>
							<?php woocommerce_product_loop_start(); ?>

							<?php woocommerce_product_subcategories(); ?>

							<?php while (have_posts()) : the_post(); ?>

								<?php wc_get_template_part('content', 'product'); ?>
							<?php endwhile; // end of the loop. 
							?>

							<?php woocommerce_product_loop_end(); ?>

							<?php
							/**
							 * woocommerce_after_shop_loop hook.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action('woocommerce_after_shop_loop');
							?>

						<?php elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>

							<?php wc_get_template('loop/no-products-found.php'); ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer('shop'); ?>
