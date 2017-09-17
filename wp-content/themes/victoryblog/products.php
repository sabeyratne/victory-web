<?php
  get_header();
  /*
  Template name: Products
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
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container">
	 	<div class="row">
		 	<div class="col-lg-8 col-lg-offset-2 centered">
		 		<?php 
					$post_product_object = get_post( $post_id );
					echo $post_product_object->post_content;
	 			?>
		 		<br>
		 		<?php if($post_product_object != 0){?>
		 		<div class="hline"></div>
		 		<?php }?>
		 	</div>
	 	</div>
	 </div><! --/container -->
	 
	<!-- *****************************************************************************************************************
	 Products
	 ***************************************************************************************************************** -->
	 <div id="product">
	 	<div class="container">
 			<div class="row centered">
	 			<?php
		            $p=1;
		            $args_products = array('post_type' => 'products', 'order' => 'ASC', 'posts_per_page' => -1);
		            $the_query_products = new WP_Query($args_products);
		            if ($the_query_products->have_posts()) {
		                while ($the_query_products->have_posts()) {
		                $the_query_products->the_post();
		                if($p%4==0){ 
		                $p++;
	            ?>
			</div> <!-- row -->
			<div class="row centered">
				<?php }?>
					<div class="col-md-4">
						<?php the_field('icon_[fontawesome]'); ?>
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
						<p><br/><a href="<?php echo get_permalink(get_the_ID()); ?>" class="btn btn-theme">More Info</a></p>
					</div>
				<?php
	            $p++;
	            }
	            }
	            /* Restore original Post Data */
	            wp_reset_postdata();
	            ?>

	 		</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/products -->
	 	 

<?php
  get_footer();
?>
	
