<?php
  get_header();
  /*
  Template name: Home
*/
?>	

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<?php the_field('main_caption_text'); ?>				
				</div>
				<div class="col-lg-8 col-lg-offset-2 himg">
					<?php if( get_field('main_caption_image') ): ?>
						<img src="<?php the_field('main_caption_image'); ?>" class="img-responsive"/>
					<?php endif; ?>
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 			<?php
                $argsh = array('post_type' => 'homethree', 'order' => 'DESC', 'posts_per_page' => 3,);
                $the_queryh = new WP_Query($argsh);
                if ($the_queryh->have_posts()) {
                    while ($the_queryh->have_posts()) {
                    $the_queryh->the_post();
			?>
				<div class="col-md-4">
 					<?php the_field('icon_fontawesome'); ?>
 					<h4><?php the_title(); ?></h4>
 					<?php the_content(); ?>
 					<!-- <p><br/><a href="#" class="btn btn-theme">More Info</a></p> -->
 				</div>
			<?php
            }}
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>		 				
	 		</div>
	 	</div><! --/container -->
	 </div><! --/service -->
	 
	 
	
	 
<?php
  get_footer();
?>