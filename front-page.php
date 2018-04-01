<?php
/**
 * Template Name: Front Page
 *
 * @package Startup
 *
 */

get_header(); ?>

   <main class="main" role="main">
   <?php // open the WordPress loop
   if (have_posts()) : while (have_posts()) : the_post();

   	// are there any rows within within our flexible content?
   	if( have_rows('layout') ):

   		// loop through all the rows of flexible content
   		while ( have_rows('layout') ) : the_row();

   		// EMAIL UPDATES
   		if( get_row_layout() == 'hero_image' )
   			get_template_part('template-parts/layouts/layout', 'slider');

   		// NEW PODCAST
   		if( get_row_layout() == 'three_columns' )
   			get_template_part('template-parts/layouts/layout', 'three_columns');

   		// SERVICES STRIPE
   		if( get_row_layout() == 'two_columns' )
   			get_template_part('template-parts/layouts/layout', 'two_columns');

   		endwhile; // close the loop of flexible content
   	endif; // close flexible content conditional

   endwhile; endif; // close the WordPress loop ?>

   <?php get_template_part('template-parts/layouts/layout-testimonials'); ?>

   <?php get_template_part('template-parts/layouts/layout-cta'); ?>

   </main>

<?php get_footer(); ?>
