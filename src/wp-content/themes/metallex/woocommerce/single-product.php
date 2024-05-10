<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */
$metallex_redux_demo = get_option('redux_demo');
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
            <h2><?php if (isset($metallex_redux_demo['product_single_title'])) { ?>
                    <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['product_single_title'])); ?>
                <?php } else { ?>
                <?php echo esc_html__('Product Details', 'metallex');
                }
                ?></h2>
            <div class="breadcumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'metallex'); ?></a>
                <i class="fa fa-angle-right"></i>
                <span><?php if (isset($metallex_redux_demo['product_single_title'])) { ?>
                        <?php echo htmlspecialchars_decode(esc_attr($metallex_redux_demo['product_single_title'])); ?>
                    <?php } else { ?>
                    <?php echo esc_html__('Product Details', 'metallex');
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
                        <div class="plft30">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php wc_get_template_part('content', 'single-product'); ?>

                            <?php endwhile; // end of the loop. 
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <?php get_footer('shop'); ?>
