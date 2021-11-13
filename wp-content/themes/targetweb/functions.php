<?php 




function tgw_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'tgw_setup' );


// Hook d'inclusion de Css et Script 
function tgw_enqueue_script() {

  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css');

   wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.bundle.min.js');

}

// Hook d'ajout de support de fonctionnalité au template 
add_action( 'wp_enqueue_scripts', 'tgw_enqueue_script' );



// Creation du cpt 
function tgw_create_recette_postype(){

    $args = array(
            'labels'      => array(
                'name'          => __('Recettes', 'textdomain'),
                'singular_name' => __('Recette', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'show_in_rest' => true,
                        // 'rewrite'     => array( 'slug' => 'recettes' ), // my custom slug

            'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
    );

    register_post_type('recette', $args);



}


// Hook de postype
add_action('init', 'tgw_create_recette_postype');

function tgw_type_plat_taxonomy(){
        $args = array(
        'hierarchical'      => true,
        'labels'      => array(
            'name'          => __('Types de plat','plural description' ,'textdomain'),
            'singular_name' => __('Type de plat','singular_name description' ,'textdomain'),
        ),
                    'public'      => true,
                    'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
 
    register_taxonomy( 'type-plat', array( 'recette', 'post' ), $args );

}


// Hook de taxonomy
add_action('init', 'tgw_type_plat_taxonomy');

// function wporg_add_custom_post_types($query) {
//     if ( is_home() && $query->is_main_query() ) {
//         $query->set( 'post_type', array( 'post', 'page', 'recette' ) );
//     }
//     return $query;
// }
// add_action('pre_get_posts', 'wporg_add_custom_post_types');


add_action( 'after_switch_theme', 'flush_rewrite_rules' );



