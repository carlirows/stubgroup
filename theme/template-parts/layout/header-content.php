<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stubgroup
 */

?>

<header id="masthead" class="flex justify-between">

	<div>
	<?php
		if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
		}
	?>	
	</div>

	<?php if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
    	<div id="header-widget-area" class="hw-widget widget-area flex" role="complementary">
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
