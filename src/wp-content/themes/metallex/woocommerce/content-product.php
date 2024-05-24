<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php post_class('prd_list text-center enitre_mouse'); ?>>
	<span class="wdt_img shadow_effect effect-apollo mbot25">
	<?php if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink();?>">
	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="" class="img-responsive">
	</a>
	<?php } ?>
	</span>
    <h5 class="fnt_dark_color_c1 letter_spac0"><?php the_title(); ?></h5>
    <div class="shop-item-rate">
		        <?php

				if ( ! defined( 'ABSPATH' ) ) {
					exit; // Exit if accessed directly
				}

				global $product;

				if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
					return;
				}

				$rating_count = $product->get_rating_count();
				$review_count = $product->get_review_count();
				$average      = $product->get_average_rating();

				if ( $rating_count > 0 ) : ?>
                <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'woocommerce' ), $average ); ?>">
			<span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
				<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'woocommerce' ), '<span itemprop="bestRating">', '</span>' ); ?>
				<?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'woocommerce' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
			</span>
		</div>
	</div>
                <?php endif; ?>
            </div>

    <?php
	if ( $product->get_price() ) {
		echo '<span class="prd_price">'.  $product->get_price_html() . '</span>';
		echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		
		sprintf( '<a href="%s" title="Add to Cart" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="view-all hvr-bounce-to-right shop_add_cart %s product_type_%s">Add to cart</a>',
		    esc_url( $product->add_to_cart_url() ),
		    esc_attr( $product->id ),
		    esc_attr( $product->get_sku() ),
		    $product->is_purchasable() ? 'add_to_cart_button' : '',
		    esc_attr( $product->product_type ),
		    esc_html( $product->add_to_cart_text() )
		),
		$product );
	}
	else{
		echo '<a href="' . get_permalink( $product->get_id() ) . '" title="Read More" class="view-all hvr-bounce-to-right shop_add_cart add_to_cart_button product_type_simple readmore-zippy">Read More</a>';
	}
		

		
		 ?>
</div>
