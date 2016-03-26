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
}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails'); 

?>




<?php
/*--- Enable jQuery Plugin ---*/

wp_deregister_script('jquery');

wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-latest.min.js','','',true);
?>

<?php
/*--- Enable jQuery Plugin ---*/
function enqueue_unslider() {
    wp_enqueue_script( //function to enqueue script
        'unslider', //name of our script (id)
        get_template_directory_uri() . '/js/unslider.js', //file loc
        array('jquery'), //dependencies
        '', //version - left blank
        true //load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_unslider');
?>



