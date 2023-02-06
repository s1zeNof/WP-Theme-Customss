<?php 

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . "/dist/css/style.css", array(), time() );

    wp_enqueue_style('bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);

    wp_enqueue_script('jquery', get_template_directory_uri() .'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', array('jquery'), false, true);

    wp_enqueue_script( 'js', get_template_directory_uri() . "/dist/index.js", array(), false, true);

    wp_enqueue_script( 'poper_js', "https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js");

    wp_enqueue_script( 'bootstrap_js', "https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js");

    
    
} );

/*Menus*/

add_action( 'after_setup_theme', function() {

    add_theme_support( 'title-tag' );

});

register_nav_menus(
    array(
        'head-menu' => "header menu"
    )
);

register_nav_menus(
    array(
        'footer-company' => "footer company"
    )
);

register_nav_menus(
    array(
        'footer-support' => "footer support"
    )
);

register_nav_menus(
    array(
        'footer-legal' => "footer legal"
    )
);
/*----------End of Menus----------*/

/* Custom Logo */
function customss_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'customss_logo_setup' );
/*-------End of Custom Logo-------*/
   
/*--- Copyright ---*/

add_action('customize_register','customss_customize_resigter');
function customss_customize_resigter($wp_customize) {
    
    $wp_customize->add_section('footer', array(
        'title' => 'Footer', 'customss',
        'priority' => 30,
    ));

    
    $setting_name = 'footer_text';

    $wp_customize->add_setting($setting_name, array (
       'default' => '',
       'sanitize_callback' => 'sanitize_textarea_field',
       'transport' => 'postMessage' 
    ));

    
    $wp_customize->add_control($setting_name, array (
        'section' => 'footer',
        'type' => 'text',
        'label' => 'Copyright text',
    ));

    
    $wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.social_links',
        'render_callback' => function() use ($setting_name) {
            return nl2br (esc_html(get_theme_mod($setting_name)));
        }
));
}

/*Social Icons*/

    /*Widget*/

    function customss_register_widgets() {
  
        register_sidebar( array(
         'name' => __( 'After Content Widget Area', 'customss' ),
         'id' => 'after-content-widget-area',
         'description' => __( 'Widget area after the content', 'customss' ),
         'before_widget' => '
        
       <div id="%1$s" class="widget-container %2$s">',
         'after_widget' => '</div>
        
        
       ',
         'before_title' => '
        
       <h3 class="widget-title">',
         'after_title' => '</h3>
        
        
       ',
        
        ) );
        
       }
        
       add_action( 'widgets_init', 'customss_register_widgets' );