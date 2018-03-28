<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // get custom meta-value
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // get custom meta-value

	$search_enabled = get_theme_mod( 'search_enabled', '1' ); // get custom meta-value
?>

<body <?php body_class(); ?>>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'startup' ); ?></a>

	<header>
		<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light <?php echo $navbar_scheme; if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // get custom meta-value

						if ( isset( $header_logo ) && ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'startup' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
						/** Loading WordPress Custom Menu (theme_location) **/
						wp_nav_menu( array(
							'theme_location'  => 'main-menu',
							'container'       => '',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
