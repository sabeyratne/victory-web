<?php
  get_header();
  /*
  Template name: blog
*/
  $postid = get_the_ID();
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
	 	
	 		<! -- BLOG POSTS LIST -->
	 		<div class="col-lg-8">

	 		<?php
                $argblog = array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => -1);
                $the_queryblog = new WP_Query($argblog);
                if ($the_queryblog->have_posts()) {
                    while ($the_queryblog->have_posts()) {
                    $the_queryblog->the_post();
                    $blog_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			?>

		 		<p><img class="img-responsive" src="<?php echo $blog_pic;?>"></p>
		 		<a href="<?php echo get_permalink(get_the_ID()); ?>"><h3 class="ctitle"><?php the_title(); ?></h3></a>
		 		<p><csmall>Posted: <?php the_time('F jS, Y') ?></csmall> | <csmall2>By: <?php the_author(); ?> - <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></csmall2></p>
		 		<p><?php the_excerpt(); ?></p>
		 		<p><a href="<?php echo get_permalink(get_the_ID()); ?>" class="blog-read-more">Read More</a></p>
		 		<div class="hline"></div>
		 		<div class="spacing"></div>

	 		<?php
            }}
            /* Restore original Post Data */
            wp_reset_postdata();
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
get_footer();
?>