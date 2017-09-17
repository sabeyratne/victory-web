<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package victoryblog
 */

get_header(); ?>

<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<?php
				if ( have_posts() ) : ?>
					<?php the_archive_title( '<h3>', '</h3>' );?>
				<?php endif; ?>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<div class="container">
	<div class="row">
	<div id="primary" class="content-area col-lg-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<section class="col-lg-4">
		<h4>Search</h4>
		 		<div class="hline"></div>
		 			<p>
		 				<form role="search" method="get" id="searchform"
						    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						    <div>
						        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
						        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Search something"/>
						        <!-- <input type="submit" id="searchsubmit"
						            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" /> -->
						    </div>
						</form>
		 			</p>
		<?php get_sidebar(); ?>
	</section>
	</div><!-- /row -->
	</div> <!-- /container -->
	<div class="spacing"></div>

<?php
get_footer();
