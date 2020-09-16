<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Justread
 */

get_header(); ?>
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-archive-hotel' ); ?>
	</aside><!-- #secondary -->
	<div id="primary" class="content-area">
		<!-- <header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header> --><!-- .page-header -->


		<!-- <div class="filter-hotel">
			<p>Search Hotel</p>
			<input class="filter-input" id="location" type="" name="" placeholder="Địa điểm">
			<input class="filter-input" id="so-nguoi" type="" name="" placeholder="Số người">
			<input class="filter-action" type="submit" name="" value="Search">
		</div> -->

		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'hotel' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->

		<?php the_posts_pagination(); ?>

	</div><!-- #primary -->

<?php

get_footer();
