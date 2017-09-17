<?php
/**
 * The template for displaying the footer
 * Contains the closing of the div and all content.
 * @package victoryblog
 */

?>

<?php if ( ! is_page( 11 ) ) { ?>
<!-- *****************************************************************************************************************
	 TESTIMONIALS
	 ***************************************************************************************************************** -->
 <div id="twrap" class="testimonials-wrap">
 	<div class="container centered">
 		<div class="row">
 			<div class="col-lg-8 col-lg-offset-2">
	 			<div>
	 				<ul id="bxtesti">
	 				<?php
		                $argste = array('post_type' => 'testimonials', 'order' => 'DESC', 'posts_per_page' => -1,);
		                $the_queryte = new WP_Query($argste);
		                if ($the_queryte->have_posts()) {
		                    while ($the_queryte->have_posts()) {
		                    $the_queryte->the_post();
					?>
						<li>
							<i class="fa fa-comment-o"></i>
							<?php the_content(); ?>
							<h4><br/><?php the_title(); ?></h4>
							<p><?php the_field('company_designation'); ?></p>
						</li>
					<?php
		            }}
		            /* Restore original Post Data */
		            wp_reset_postdata();
		            ?>	
					</ul>
	 			</div>
 			</div>
 		</div><! --/row -->
 	</div><! --/container -->
 </div><! --/twrap -->
 
<!-- *****************************************************************************************************************
 OUR BRANDS
 ***************************************************************************************************************** -->
 <div id="cwrap" class="client-wrapper">
	 <div class="container">
	 	<div class="row centered">
		 	<h3>OUR BRANDS</h3>
			 	<ul id="bxbrand">
			 		<?php
		                $args = array('post_type' => 'brands', 'order' => 'DESC', 'posts_per_page' => -1,);
		                $the_query = new WP_Query($args);
		                if ($the_query->have_posts()) {
		                    while ($the_query->have_posts()) {
		                    $the_query->the_post();
		                    $brand_pic = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					?>
						<li>
							<img src="<?php echo $brand_pic;?>" class="img-responsive">
						</li>
					<?php
		            }}
		            /* Restore original Post Data */
		            wp_reset_postdata();
		            ?>	
			 	</ul>
	 	</div><! --/row -->
	 </div><! --/container -->
 </div><! --/cwrap -->

 <?php } ?>

<!-- *****************************************************************************************************************
 FOOTER
 ***************************************************************************************************************** -->
<div id="footerwrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p>&copy; <?php echo get_theme_mod('copyright'); ?></p>
				<p>
					<?php echo get_theme_mod('address'); ?><br/>
					<?php echo get_theme_mod('phnno'); ?><br/>
					<a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a>
				</p>
				<p>
					<a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
					<a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
					<a href="<?php echo get_theme_mod('youtube'); ?>" target="_blank"><i class="fa fa-youtube-square"></i></a>
				</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->
</div><! --/footerwrap -->

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-hand-o-up"></i></a>

	 <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/retina-1.1.0.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.hoverdir.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.hoverex.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.prettyPhoto.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.isotope.min.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.bxslider.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.vide.js"></script>
  	<?php if ( is_page( 9 ) ) { ?>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEn1fpEiEgFzXVAWIOZuGo3ealCPgLx0o"></script>
  	<script type="text/javascript">
  		/*Google Map*/
		function initialize() {
			var vic = {lat: <?php the_field('latitude'); ?>, lng: <?php the_field('longitude'); ?>};
			var map = new google.maps.Map(document.getElementById('contactwrap'), {
				streetViewControl: true,
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: true,
				overviewMapControl: true,
				rotateControl: true,
				zoom: 19,
				mapTypeId:google.maps.MapTypeId.ROADMAP,
				center: vic
			});
			//var image = '../assets/img/victory-fevicon.png';
			var marker = new google.maps.Marker({
			  position: vic,
			  map: map,
			 // icon: image,
			  title:'No.26, 8th lane, Nawala, Sri Lanka'
			});
		}
  	</script>
  	<?php } ?>
  	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<?php wp_footer(); ?>
  </body>
</html>
