<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php wp_title(''); bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'startup' ); ?></a>

	<header>

		<?php if ( has_nav_menu ('main-menu') ) : ?>

			<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

		<?php endif; ?>

	</header>
