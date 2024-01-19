<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UpGo_Tech_TW
 */

?>

<header id="masthead">

	<div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php //bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$upgo_tech_tw_description = get_bloginfo( 'description', 'display' );
		if ( $upgo_tech_tw_description || is_customize_preview() ) :
			?>
			<p><?php echo $upgo_tech_tw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>
	
	<div class="menu-side-bar-container">
		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'upgo-tech-tw' ); ?>">
			<div class="hamburger" id="hamburgerIcon">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
			<!-- <button id="menu_toggle" aria-controls="primary-menu" aria-expanded="false">				
				<?php //esc_html_e( 'Primary Menu', 'upgo-tech-tw' ); ?>
			</button> -->
			<?php
			wp_nav_menu( 
				array( 
					'theme_location' => 'menu-1', 
					'container_class' => 'menu-side-bar-container', 
				) 
			);
			
			?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
