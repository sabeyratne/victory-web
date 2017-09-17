<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything
 * @package victoryblog
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/victory-fevicon.png"/>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/victory-fevicon.png"/>
    <link rel="shortcut icon" type="images/ico" href="<?php echo get_template_directory_uri(); ?>/assets/img/victory-fevicon.png"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/victory-fevicon.png" type="image/ico"/>

    <?php
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
      function theme_slug_render_title() {
    ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
      }
      add_action( 'wp_head', 'theme_slug_render_title' );
    }
    ?>

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css" rel="stylesheet">

     <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

  </head>

  <body <?php if ( is_page( 9 ) ) { ?>onload="initialize();"<?php } ?>>
    <div class="se-pre-con"></div>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url();?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/victory_logo.png" alt="Logo" class="img-responsive"/>
          </a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <?php 
             $defaults = array(
                'theme_location'  => '',
                'menu'            => 'Primary Menu',
                'container'       => 'ul',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav navbar-nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              );          
              wp_nav_menu( $defaults );
            ?> 
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <?php wp_head(); ?>

