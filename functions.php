<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('Footer Left'),
        'id' => 'footer-left',
        'description' => 'Widget for the left side of our footer', 
        'before_widget' => '<div class="widget-sidebar widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('Footer Middle'),
        'id' => 'footer-middle',
        'description' => 'Widget for the middle of our footer', 
        'before_widget' => '<div class="widget-sidebar widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('Footer Right'),
        'id' => 'footer-right',
        'description' => 'Widget for the right side of our footer', 
        'before_widget' => '<div class="widget-sidebar widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('Front Page Sidebar'),
        'id' => 'front-page',
        'description' => 'Widget for the front page sidebar', 
        'before_widget' => '<div class="widget-sidebar widget-frontpage">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('slideshow'),
        'id' => 'slideshow',
        'description' => 'Widget for the front page slideshow', 
        'before_widget' => '<div class="widget-sidebar widget-slideshow">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    register_sidebar( array(
        'name' => ('profile'),
        'id' => 'Profile',
        'description' => 'Widget for the profile', 
        'before_widget' => '<div class="widget-sidebar widget-profile">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails'); 

function slider_tutorial() {
$labels = array(
    'name'               => _x( 'Slides', 'post type general name' ),
    'singular_name'      => _x( 'Slide', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'slides' ),
    'add_new_item'       => __( 'Add Slide' ),
    'edit_item'          => __( 'Edit Slides' ),
    'new_item'           => __( 'New Slide' ),
    'all_items'          => __( 'All Slides' ),
    'view_item'          => __( 'View Slides' ),
    'search_items'       => __( 'Search Slides' ),
    'not_found'          => __( 'No slides found' ),
    'not_found_in_trash' => __( 'No slides found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Slider'

);
$args = array(
/*--- Begin Arguments Options ---*/

'labels' => $labels,
'description'   => 'Slides for our Unslider integration',
'public'        => true,
'menu_position' => 6,
'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt'),
'has_archive'   => true,

);
register_post_type( 'slider', $args ); 
}
add_action( 'init', 'slider_tutorial' );

?>