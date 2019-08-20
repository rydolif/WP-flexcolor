<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//------------------Register Custom Post портфолио----------------------
    function reviews_post_type() {
        $labels = array(
            'name'                  => _x( 'Отзывы', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Отзывы', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Отзывы', 'text_domain' ),
            'all_items'             => __( 'Отзывы', 'text_domain' ),
            'add_new_item'          => __( 'Добавить отзыв', 'text_domain' ),
            'add_new'               => __( 'Добавить отзыв', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Отзывы', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title','editor','thumbnail'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'reviews', $args );
    }
    add_action( 'init', 'reviews_post_type', 0 );

