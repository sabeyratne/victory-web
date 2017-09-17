<?php
get_header();
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package victoryblog
 */
 ?>

<?php
		while ( have_posts() ) : the_post();
?>

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

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- SINGLE POST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
	 			<?php $blog_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
		 		<p><img class="img-responsive" src="<?php echo $blog_pic;?>"></p>
		 		<a href="<?php echo get_permalink(get_the_ID()); ?>"><h3 class="ctitle"><?php the_title(); ?></h3></a>
		 		<p><csmall>Posted: <?php the_time('F jS, Y') ?></csmall> | <csmall2>By: <?php the_author(); ?> - <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></csmall2></p>
		 		<?php the_content(); ?>
		 		<div class="spacing"></div>
		 		
		 		<?php
			 		/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				<div class="spacing"></div>
				<?php
					// Previous/next post navigation.
					the_post_navigation( array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'victoryblog' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'victoryblog' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'victoryblog' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'victoryblog' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					) );

			 	?>
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
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
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

<?php
	endwhile;

get_footer();
?>
