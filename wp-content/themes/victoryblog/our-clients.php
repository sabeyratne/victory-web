<?php
  get_header();
  /*
  Template name: Our Clients
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
	 OUR CLIENTS
	 ***************************************************************************************************************** -->
		 <div class="container mtb">
		 	<div class="row">

				 		<?php
			                $argsc = array('post_type' => 'clients', 'order' => 'ASC', 'posts_per_page' => -1,);
			                $the_queryc = new WP_Query($argsc);
			                $i=0;
			                if ($the_queryc->have_posts()) {
			                    while ($the_queryc->have_posts()) {
			                    $the_queryc->the_post();
			                    $client_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
			                    $i++;
						?>
							<div class="col-lg-3">
								<a data-fancybox data-src="#hidden-content<?php echo $i; ?>" href="javascript:;">
									<img src="<?php echo $client_pic;?>" class="img-responsive">
								</a>
								<div style="display: none;width: 60%;" id="hidden-content<?php echo $i; ?>">
									<div class="row">
										<div class="col-lg-4">
											<img src="<?php echo $client_pic;?>" class="img-responsive">
										</div> <!-- end of col 4 -->
										<div class="col-lg-8">
											<?php the_content(); ?>
										</div> <!-- end of col 8 -->
									</div><!-- row -->
								</div>
							</div>
						<?php
			            }
			        	}
			            /* Restore original Post Data */
			            wp_reset_postdata();
			            ?>	

		 	</div><! --/row -->
		 </div><! --/container -->
	 
<?php
  get_footer();
?>
	 
