<?php
/**
 * @package WordPress
 * @subpackage WPTemplate
 * @since WPTemplate 1.0
 */

if ( ! function_exists( 'wptemplate_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own twentysixteen_setup() function to override in a child theme.
     *
     * @since Twenty Sixteen 1.0
     */
    function wptemplate_setup() {

        load_theme_textdomain( 'wptemplate' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 240,
                'width'       => 240,
                'flex-height' => true,
            )
        );

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1200, 9999 );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'primary' => __( 'Main Menu', 'wptemplate' ),
                'social'  => __( 'Social Links Menu', 'wptemplate' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'status',
                'audio',
                'chat',
            )
        );



        // Add support for custom color scheme.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => __( 'Dark Gray', 'wptemplate' ),
                    'slug'  => 'dark-gray',
                    'color' => '#1a1a1a',
                ),
                array(
                    'name'  => __( 'Medium Gray', 'wptemplate' ),
                    'slug'  => 'medium-gray',
                    'color' => '#686868',
                ),
                array(
                    'name'  => __( 'Light Gray', 'wptemplate' ),
                    'slug'  => 'light-gray',
                    'color' => '#e5e5e5',
                ),
                array(
                    'name'  => __( 'White', 'wptemplate' ),
                    'slug'  => 'white',
                    'color' => '#fff',
                ),
                array(
                    'name'  => __( 'Blue Gray', 'wptemplate' ),
                    'slug'  => 'blue-gray',
                    'color' => '#4d545c',
                ),
                array(
                    'name'  => __( 'Bright Blue', 'wptemplate' ),
                    'slug'  => 'bright-blue',
                    'color' => '#007acc',
                ),
                array(
                    'name'  => __( 'Light Blue', 'wptemplate' ),
                    'slug'  => 'light-blue',
                    'color' => '#9adffd',
                ),
                array(
                    'name'  => __( 'Dark Brown', 'wptemplate' ),
                    'slug'  => 'dark-brown',
                    'color' => '#402b30',
                ),
                array(
                    'name'  => __( 'Medium Brown', 'wptemplate' ),
                    'slug'  => 'medium-brown',
                    'color' => '#774e24',
                ),
                array(
                    'name'  => __( 'Dark Red', 'wptemplate' ),
                    'slug'  => 'dark-red',
                    'color' => '#640c1f',
                ),
                array(
                    'name'  => __( 'Bright Red', 'wptemplate' ),
                    'slug'  => 'bright-red',
                    'color' => '#ff675f',
                ),
                array(
                    'name'  => __( 'Yellow', 'wptemplate' ),
                    'slug'  => 'yellow',
                    'color' => '#ffef8e',
                ),
            )
        );

        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'wptemplate_setup' );


/**
 * Registers a widget area.
 */
function wptemplate_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'wptemplate' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'wptemplate' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Content Bottom 1', 'wptemplate' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wptemplate' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Content Bottom 2', 'wptemplate' ),
            'id'            => 'sidebar-3',
            'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wptemplate' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'wptemplate_widgets_init' );


/**
 * Adds custom classes to the array of body classes.
 */
function wptemplate_body_classes( $classes ) {
    // Adds a class of custom-background-image to sites with a custom background image.
    if ( get_background_image() ) {
        $classes[] = 'custom-background-image';
    }

    // Adds a class of group-blog to sites with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of no-sidebar to sites without active sidebar.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter( 'body_class', 'wptemplate_body_classes' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


function wtemplate_scripts() {
    wp_enqueue_style( 'wtemplate-style', get_stylesheet_uri() );
    wp_enqueue_style( 'wtemplate-clean', get_template_directory_uri() . '/css/clean-blog.min.css' );
    wp_enqueue_style( 'wtemplate-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'wtemplate-fontawesome', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_style( 'wtemplate-font1', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" );
    wp_enqueue_style( 'wtemplate-font2', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" );

    wp_enqueue_script( 'wtemplate-jq', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'wtemplate-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'wtemplate-clean', get_template_directory_uri() . '/js/clean-blog.min.js');

    /* API */
    if(is_page(27)):
        // Charge mon script perso
        wp_enqueue_script( 'wptemplateapi', get_template_directory_uri() . '/js/api/wptemplateapi.js', array(), '1', true );

        // envoie le Nonce + l'url ROOT de l'API en frontend
        wp_localize_script( 'wptemplateapi', 'WP_API_Settings', array( 'root' => esc_url_raw( rest_url() ), 'nonce' => wp_create_nonce( 'wp_rest' ) ) );

    endif;
}

add_action( 'wp_enqueue_scripts', 'wtemplate_scripts' );

/*
 *  USE API
 */

/*function get($resource, array $params = array()){
    $apiUrl = home_url().'/wp-json';
    $json = file_get_contents($apiUrl.$resource.'?'.http_build_query($params));
    $result = json_decode($json);
    return $result;
}*/
