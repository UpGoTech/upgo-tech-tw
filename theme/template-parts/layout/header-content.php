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
			<button class="menu_toggle" id="menu-button" aria-controls="primary-menu" aria-expanded="false">				
				<svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
				</svg>
				<?php //esc_html_e( 'Primary Menu', 'upgo-tech-tw' ); ?>
			</button>

			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location' => 'menu-1',
			// 		'menu_id'        => 'primary-menu',
			// 		'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			// 	)
			// );

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
