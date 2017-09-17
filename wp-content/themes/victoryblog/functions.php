<?php
/**
 * victoryblog functions and definitions
 * @package victoryblog
 */

register_sidebar(array(
    'name' => __('Widget Area', 'Victory Blog'),
    'id' => 'sidebar-1'
));

//Title tag
add_theme_support( 'title-tag' );

// Site Logo
add_theme_support( 'custom-logo', array(
  'height'      => 54,
  'width'       => 130,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
) );

/*Sub Menu Class addtion*/
function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); 


// thubnail activate
add_theme_support('post-thumbnails');

/*change backend logo*/
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/victory_logo.png);
            padding-bottom: 30px;
            background-size: 80% 80%;
            width: auto !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// custom post_type
add_action( 'init', 'create_posttype' );

 function create_posttype() {  
  register_post_type('homethree', array(
        'label' => 'Home Featured',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'homethree'),
        'query_var' => true,
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
   register_post_type('products', array(
        'label' => 'Products',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'products'),
        'query_var' => true,
        'menu_icon' => 'dashicons-feedback',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
   register_post_type('testimonials', array(
        'label' => 'Testimonials',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonials'),
        'query_var' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
   register_post_type('clients', array(
        'label' => 'Our Clients',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'clients'),
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access-alt',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
   register_post_type('team', array(
        'label' => 'Our Team',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'team'),
        'query_var' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
   register_post_type('brands', array(
        'label' => 'Our Brands',
        'public' => true,
        'taxonomies' => array('category'),
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'brands'),
        'query_var' => true,
        'menu_icon' => 'dashicons-shield-alt',
        'supports' => array(
        'title',
        'editor',
        'revisions',
        'thumbnail',
        'page-attributes',)
     ) );
}

/*
function create_my_taxonomies() {
 
  register_taxonomy(
  'faq_types',
   'faq',
   array(
             "hierarchical" => true,
             "label" => "FAQ Types",
             "singular_label" => "faq types",
             'update_count_callback' => '_update_post_term_count',
             'query_var' => true,
             'rewrite' => array( 
                    'slug' => 'faq_types',
                     'with_front' => true 
                     ),
              'public' => true,
              'show_ui' => true,
              'show_admin_column' => true,
              'show_tagcloud' => true,
              '_builtin' => false,
              'show_in_nav_menus' => true)
    );
}
add_action('init', 'create_my_taxonomies', 0);
*/

/*Wysiwyg editor toolbar format*/

function my_toolbars( $toolbars ) {
  $toolbars['Full'] = array();
  $toolbars['Full'][1] = array('bold', 'italic', 'strikethrough', 'bullist', 'numlist', 'blockquote', 'hr', 'alignleft', 'aligncenter', 'alignright', 'link', 'unlink', 'wp_more', 'spellchecker', 'fullscreen', 'wp_adv' );
  $toolbars['Full'][2] = array('formatselect', 'underline', 'alignjustify', 'forecolor', 'pastetext', 'removeformat', 'charmap', 'outdent', 'indent', 'undo', 'redo', 'wp_help', 'code' );

  // remove the 'Basic' toolbar completely (if you want)
  unset( $toolbars['Basic' ] );
  // return $toolbars - IMPORTANT!
  return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars' , 'my_toolbars');

/*Theme options for common*/

add_action('customize_register', 'copyright');

function copyright($wp_customize) {

  /*Sections*/

$wp_customize->add_section( 'footer' , array(
  'title'      => __( 'Footer Section', 'victoryblog' ),
  'priority'   => 30,
) );

$wp_customize->add_section( 'socialmedia' , array(
  'title'      => __( 'Social Media Links', 'victoryblog' ),
  'priority'   => 40,
) );

/*Footer Section*/
/*Copyright section*/

 $wp_customize->add_setting( 'copyright', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'copyright', array(
 'label' => 'Copyright Text',
 'section' => 'footer',
 'type' => 'text'
 ) );

 /*Address section*/

 $wp_customize->add_setting( 'address', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'address', array(
 'label' => 'Address',
 'section' => 'footer',
 'type' => 'textarea'
 ) );

 /*Phone Number section*/

 $wp_customize->add_setting( 'phnno', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'phnno', array(
 'label' => 'Phone Numbers',
 'section' => 'footer',
 'type' => 'textarea'
 ) );

 /*Email section*/

 $wp_customize->add_setting( 'email', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'email', array(
 'label' => 'Email',
 'section' => 'footer',
 'type' => 'text'
 ) );

 /*Social Media Section*/
/*facebook section*/

 $wp_customize->add_setting( 'facebook', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'facebook', array(
 'label' => 'Facebook Link',
 'section' => 'socialmedia',
 'type' => 'text'
 ) );

 /*linkedin section*/

 $wp_customize->add_setting( 'linkedin', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'linkedin', array(
 'label' => 'Linkedin Link',
 'section' => 'socialmedia',
 'type' => 'text'
 ) );

/*youtube section*/

 $wp_customize->add_setting( 'youtube', array(
 'default' => '',
 'capability' => 'edit_theme_options'
 ) );

 $wp_customize->add_control( 'youtube', array(
 'label' => 'Youtube Link',
 'section' => 'socialmedia',
 'type' => 'text'
 ) );

}