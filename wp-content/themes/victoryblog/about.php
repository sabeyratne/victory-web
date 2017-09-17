<?php
  get_header();
  /*
  Template name: About
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
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<?php $about_main_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
	 			<img class="img-responsive" src="<?php echo $about_main_pic; ?>" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
	 			<?php 
					$post_object = get_post( $post_id );
					echo $post_object->post_content;
	 			?>
		 		
 				<p><br/><a href="<?php echo get_page_link(9); ?>" class="btn btn-theme">Contact Us</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

	<!-- *****************************************************************************************************************
	 TEEAM MEMBERS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row centered">
		 	<h3 class="mb">MEET OUR TEAM</h3>

		 	<?php
		 		$argst = array('post_type' => 'team', 'order' => 'ASC', 'posts_per_page' => -1,);
	                $the_queryt = new WP_Query($argst);
	                if ($the_queryt->have_posts()) {
	                    while ($the_queryt->have_posts()) {
	                    $the_queryt->the_post();
	                    $team_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		 	?>
		 		<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="he-wrap tpl6">
						<img src="<?php echo $team_pic; ?>" alt="team pic">
						<div class="he-view">
							<div class="bg a0" data-animate="fadeIn">
	                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
	                            <a href="mailto:<?php the_field('designation'); ?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
	                            <a href="tel:<?php the_field('designation'); ?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-phone" aria-hidden="true"></i></a>
	                    	</div><!-- he bg -->
						</div><!-- he view -->		
					</div><!-- he wrap -->
					<h4><?php the_title(); ?></h4>
					<h5 class="ctitle"><?php the_field('designation'); ?></h5>
					<?php the_content(); ?>
					<div class="hline"></div>
			 	</div><! --/col-lg-3 -->
		 	<?php
	            }}
	            /* Restore original Post Data */
	            wp_reset_postdata();
		 	?>	 	
		 	
	 	</div><! --/row -->
	 </div><! --/container -->
	 
<?php
  get_footer();
?>
	 
