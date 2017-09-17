<?php
  get_header();
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

	 <div class="container mtb">
	 	<div class="row">
		 	<div class="col-lg-10 col-lg-offset-1 centered">
				<?php if( have_rows('slider_images_product_inner') ): ?>
					<ul id="bxproduct">
					<?php while( have_rows('slider_images_product_inner') ): the_row(); 
						$p_inner_image = get_sub_field('image_slide_inner');
						?>
						<li>
							<img src="<?php echo $p_inner_image; ?>" alt="Slider Image" />
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
		 	</div>
		 	
		 	<div class="col-lg-10 col-lg-offset-1">
			 	<div class="spacing"></div>
			 	<?php the_field('common_main_content_product_inner');?>
		 	</div>

		 	<div class="col-lg-10 col-lg-offset-1">
			 	<div class="spacing"></div>
			 	<h4>Our&nbsp;<?php the_title(); ?>&nbsp;List</h4>
			 	<div class="hline"></div>
		 		<div id="accordion">
		  		<?php 
		  		$mp=0;
		  		if( have_rows('main_product') ): 
					while( have_rows('main_product') ): the_row();
					$mp++;
		  			?>
				  <h3><?php the_sub_field('main_product_name'); ?></h3>
				  <div class="content-wrapper-inner">
				  	<div class="content-wrapper-inner-top">
				  		<div class="content-image-inner col-lg-2">
					  		<?php if( get_sub_field('featured_product_image') ): ?>
								<img src="<?php the_sub_field('featured_product_image'); ?>" alt="Product Main Image" class="img-responsive"/>
							<?php endif; ?>
						  </div>
						  <div class="content-text-inner col-lg-10">
						  	<h4><?php the_sub_field('main_product_name'); ?></h4>
						  	<div class="hline"></div>
						  	<?php the_sub_field('product_description'); ?>
						  	<?php 
						  		if( have_rows('sub_product_list') ): 
						  			?>
						    <h4>List Of Products</h4>
						    <div class="hline"></div>
						    <?php 
								endif; ?>
						    <div class="sub-product-list row">
						    <?php 
						    	$sp=0;
						  		if( have_rows('sub_product_list') ): 
									while( have_rows('sub_product_list') ): the_row();
									$sp++;
						  			?>
								  	<div class="col-lg-4">
											<a data-fancybox data-src="#product-content<?php echo $mp; ?>-<?php echo $sp; ?>" href="javascript:;">
												<?php if( get_sub_field('sub_product_image') ): ?>
													<img src="<?php the_sub_field('sub_product_image'); ?>" alt="Sub Product Image" class="img-responsive" style="width: 60px;height: 60px;"/>
												<?php endif; ?>
												<?php the_sub_field('sub_product_name'); ?>
											</a>

											<div style="display: none;width: 60%;" id="product-content<?php echo $mp; ?>-<?php echo $sp; ?>">
												<div class="row">
													<div class="col-lg-3">
														<?php if( get_sub_field('sub_product_image') ): ?>
															<img src="<?php the_sub_field('sub_product_image'); ?>" alt="Sub Product Image" class="img-responsive"/>
														<?php endif; ?>
														<p>
														<?php if( get_sub_field('upload_sub_product_detail_document') ): ?>
															<a href="<?php the_sub_field('upload_sub_product_detail_document'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pdf.png"> <?php the_sub_field('sub_product_name'); ?></a>
														<?php endif; ?>
														</p>
													</div> <!-- end of col 3 -->
													<div class="col-lg-9">
														<h4><?php the_sub_field('sub_product_name'); ?></h4>
														<div class="hline"></div>
														<?php the_sub_field('sub_product_content'); ?>
													</div> <!-- end of col 9 -->
												</div><!-- row -->
											</div>
								  	</div> <!-- end of 4 -->
							    <?php 
							  		endwhile;
									endif; ?>
							</div><!-- end of sub-product-list -->
						  </div><!-- end of col-10 -->
				  	</div><!-- end of content-wrapper-inner-top -->
				  </div> <!-- end of content-wrapper-inner -->
			    <?php endwhile;
					endif; ?>
				</div> <!-- end of accordian -->
		 	</div><!-- end of col -->
		 	
	 	</div><! --/row -->

	 </div><! --/container -->
	 	 

<?php
	get_footer();
?>
	
