<?php
  get_header();
  /*
  Template name: Contact
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
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div id="contactwrap"></div> <!-- this contains the google map -->
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Just Get In Touch!</h4>
	 			<div class="hline"></div>
		 			<p>Use this to give your Questions, Feedback or Details. We will get back to you as soon as possible.</p>
					<?php echo do_shortcode( '[contact-form-7 id="78" title="Contact form 1"]' ); ?>

			</div><! --/col-lg-8 -->
	 		
	 		<div class="col-lg-4 vic-address">
		 		<h4>Our Address</h4>
		 		<div class="hline"></div>

		 		<?php 
					$post_object = get_post( $post_id );
					echo $post_object->post_content;
	 			?>
		 			
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->


	<?php
  get_footer();
?>