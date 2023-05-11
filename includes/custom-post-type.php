<?php
function arch_custom_post_type(){
    $service_label  = array (
        'name'          => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'       => __('Add Service', 'textdomain'),
        'add_new_item'  => __('Add New Service', 'textdomain'),
        'edit_item'     => __('Edit Service', 'textdomain'),
        'all_items'     => __('Services', 'textdomain')
    );
    $service_args = array(  
            'labels'              => $service_label,
            'public'              => true,
            'menu_icon'            => 'dashicons-admin-site',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'taxonomies'           => array('category'),
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail')
    );
    register_post_type( 'services_post', $service_args );

    $project_label  = array (
        'name'          => __('Project', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'       => __('Add Project', 'textdomain'),
        'add_new_item'  => __('Add New Project', 'textdomain'),
        'edit_item'     => __('Edit Project', 'textdomain'),
        'all_items'     => __('Project', 'textdomain')
    );
    $project_args = array(  
            'labels'              => $project_label,
            'public'              => true,
            'menu_icon'            => 'dashicons-admin-site',
            'capability_type'     => 'post',
            'show_ui'             => true,
            'taxonomies'           => array('category'),
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail')
    );
    register_post_type( 'project_post', $project_args );
}




add_action( 'init', 'arch_custom_post_type');