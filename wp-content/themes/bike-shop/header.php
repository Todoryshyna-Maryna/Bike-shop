<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bike-shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">
	    <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
        <div class="m-container">

            <div class="navigation-top">
                <div class="wrap">
                    <div class="bikeshop-logo"><?php the_custom_logo(); ?></div>

                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bike-shop' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
	                    <?php global $woocommerce; ?>
                        <a class="wc-menu-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
                           title="<?php _e('Cart View', 'bike-shop'); ?>">
		                    <?php echo sprintf(_n('BASKET (%d)', 'BASKET (%d)', $woocommerce->cart->cart_contents_count, 'bike-shop'),
			                    $woocommerce->cart->cart_contents_count);?>
<!--		                    --><?php //echo $woocommerce->cart->get_cart_total(); ?>
                        </a>

                    </nav><!-- #site-navigation -->

                </div><!-- .wrap -->
                <div class="header-text">

                    <h1 class="site-title">
                        <a href="<?php echo get_option( 'home' ); ?>">
							<?php bloginfo( 'name' ); ?></a>
                    </h1>
                    <div class="description">
						<?php bloginfo( 'description' ); ?>
                    </div>

                </div>
            </div><!-- .navigation-top -->

        </div><!-- .site-branding -->


    </header><!-- #masthead -->

    <div id="content" class="site-content">
