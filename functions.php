<?php

// Debug mod

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


// Running theme setup functions, such as enabling support for the title tag and so on

add_action('after_setup_theme', 'vd_theme_setup');

function vd_theme_setup() {

    add_theme_support('title-tag');

    // Adding for translation function

    __('Enter your city', 'beanmachine');

}


/*
* Add languages setup
*/

function beanmachine_one_setup(){

    load_theme_textdomain('beanmachine', get_template_directory() . '/languages');

}

add_action( 'after_setup_theme', 'beanmachine_one_setup' );



// Add thumbnails to post

add_theme_support( 'post-thumbnails' );


// Add scripts and styles

add_action('wp_enqueue_scripts', 'beanmachine_styles');

function beanmachine_styles() {

    wp_enqueue_style( 'beanmachine-style', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0' );

    wp_enqueue_style( 'beanmachine-media-style', get_template_directory_uri() . '/css/media.css', array(), '1.0.0' );

}

add_action('wp_enqueue_scripts', 'beanmachine_scripts');

function beanmachine_scripts() {

    wp_enqueue_script('beanmachine-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0');

    wp_localize_script('beanmachine_scripts', 'vd_data', []);

}


// Register  navigation menus

add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'headerMenuLeft' => 'Header Menu Left',
        'headerMenuRight' => 'Header Menu Right',
        'headerMobile' => 'Header Menu Mobile',
        'footerServices' => 'Footer Services',
        'footerCompany' => 'Footer Company',
        'categoryMenu' => 'Category Menu',
    ] );
} );


// Upload SVG

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    else
        $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
    if( $dosvg ){
        if( current_user_can('manage_options') ){
            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }
    return $data;
}


// Admin CSS

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo '<style>
    #meta-box-notification {
    display: none;
    }
  </style>';
}


// Register  site settings

function vd_register_options_pages($settings_pages) {

    $settings_pages[] = array(
        'id'          => 'vd-site-settings-main',
        'option_name' => 'vd_site_settings_main',
        'menu_title'  => 'Site Settings',
        'icon_url'    => 'dashicons-edit',
        'style'       => 'boxes',
        'columns'     => 1,
        'position'    => 68,
    );

    return $settings_pages;

}



// Include files

include 'inc/sections_handler.php';
include 'inc/metaboxes.php';
include 'inc/home_metaboxes.php';
include 'inc/about_metaboxes.php';
include 'inc/contact_metaboxes.php';
include 'inc/lookbook_metaboxes.php';
include 'inc/projects_metaboxes.php';
include 'inc/proj_metaboxes.php';
include 'inc/agilemethodology_metaboxes.php';
include 'inc/ourprocess_metaboxes.php';
include 'inc/services-metaboxes.php';
include 'inc/UIUXDesign_metaboxes.php';
include 'inc/webapplications_metaboxes.php';
include 'inc/mobileapplications-metaboxes.php';
include 'inc/customwordpress-metaboxes.php';
include 'inc/internalteam_metaboxes.php';
include 'inc/404_metaboxes.php';
include 'inc/thx_metaboxes.php';



// Hide admin bar for subscribers

add_action('set_current_user', 'cc_hide_admin_bar');

function cc_hide_admin_bar() {
    if (!current_user_can('edit_posts')) {
        show_admin_bar(false);
    }
}


// Register the Projects custom type
add_action('init', 'vd_create_projects_type');

function vd_create_projects_type() {
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'menu_icon' => 'dashicons-screenoptions',
            'public' => true,
            'taxonomies' => ['project_category'],
            'has_archive' => true,
            'supports' => ['title', 'thumbnail','page-attributes','author'],
        )
    );

    register_taxonomy( 'project_category', [ 'projects' ], [
        'labels'                => [
            'name'              => 'Categories',
            'singular_name'     => 'Category',
            'search_items'      => 'Search Categories',
            'all_items'         => 'All Categories',
            'view_item '        => 'View Category',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Category',
        ],
        'public'                => true,
        'hierarchical'          => false,
    ] );

}

// Add despription to navigation menu

class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


?>