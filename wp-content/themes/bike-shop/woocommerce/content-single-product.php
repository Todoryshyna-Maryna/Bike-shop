<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
/**
 * woocommerce_before_single_product hook.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();

	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="m-container content-main">
		<?php the_title( '<h1 class="product_title m-entry-title">', '</h1>' );
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );

		?>
        <div class="description-img">
            <img src="<?php echo the_field( 'add-img1' ); ?>" alt="">
        </div>
    </div>

	<?php echo woocommerce_template_single_add_to_cart(); ?>

    <div class="content-discription">
        <div class="summary entry-summary">

            <div class="summary-img">
                <img src="<?php echo the_field( 'add-img2' ); ?>" alt="">
            </div>
			<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
        </div><!-- .summary -->
    </div>

    <div class="m-container product-content">
        <div class="product-text">
            <h1><?php echo the_field( 'product-title' ); ?></h1>
            <p class="product-info"><?php echo the_field( 'product-info' ); ?></p>
        </div>
        <div class="product-gallery">
            <div class="info-button button1">
                <div class="icon-container"></div>
                <div class="info-container">
                    text1
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit,
                    sed do
                </div>
            </div>
            <div class="info-button button2">
                <div class="icon-container"></div>
                <div class="info-container">
                    text2
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing
                </div>
            </div>
            <div class="info-button button3">
                <div class="icon-container"></div>
                <div class="info-container">
                    text3
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit,
                    sed do
                </div>
            </div>
            <div class="info-button button4">
                <div class="icon-container"></div>
                <div class="info-container">
                    text4
                    Lorem ipsum dolor sit amet,
                </div>
            </div>
            <div class="info-button button5">
                <div class="icon-container"></div>
                <div class="info-container">text5</div>
            </div>
            <div class="info-button button6">
                <div class="icon-container"></div>
                <div class="info-container">text6</div>
            </div>

			<?php
			/**
			 * woocommerce_before_single_product_summary hook.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
        </div>
    </div>
</div><!-- #product-<?php the_ID(); ?> -->

<script>



</script>

<?php do_action( 'woocommerce_after_single_product' ); ?>
