<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stubgroup
 */

?>

<header id="masthead" class="flex flex-col md:flex-row justify-between">

	<div class="ml-auto mr-auto  md:ml-12 lg:ml-24 my-4 md:my-10 lg:max-w-none max-w-44">
	<?php
		if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
		}
	?>	
	</div>

	<?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
    	<div id="header-widget-area" class="hw-widget widget-area flex flex-col md:flex-row my-4 md:my-10" role="complementary">
        	<?php dynamic_sidebar( 'header-widget-area' ); ?>
    	</div>
	<?php endif; ?>
	<!-- <nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'stubgroup' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stubgroup' ); ?></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav>#site-navigation -->

</header><!-- #masthead -->
