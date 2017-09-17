<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h3><?php the_title(); ?></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<div class="container">
	<div class="row">
	<section id="primary" class="content-area col-lg-8">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'victoryblog' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
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
