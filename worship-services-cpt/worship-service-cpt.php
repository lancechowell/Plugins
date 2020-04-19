<?php
/*
Plugin Name: Worship Services CPT
Author: Lance Howell
Description: This plugin will set-up the custom post types for Worship Services for 
             a church service to include videos and notes along with the videos. 
Version: 1.0
             */

            function cptui_register_my_cpts_worship_service() {

                /**
                 * Post Type: Worship Services.
                 */
            
                $labels = [
                    "name" => __( "Worship Services", "astra" ),
                    "singular_name" => __( "Worship Service", "astra" ),
                    "featured_image" => __( "Service Image", "astra" ),
                ];
            
                $args = [
                    "label" => __( "Worship Services", "astra" ),
                    "labels" => $labels,
                    "description" => "",
                    "public" => true,
                    "publicly_queryable" => true,
                    "show_ui" => true,
                    "show_in_rest" => true,
                    "rest_base" => "",
                    "rest_controller_class" => "WP_REST_Posts_Controller",
                    "has_archive" => true,
                    "show_in_menu" => true,
                    "show_in_nav_menus" => true,
                    "delete_with_user" => false,
                    "exclude_from_search" => false,
                    "capability_type" => "post",
                    "map_meta_cap" => true,
                    "hierarchical" => false,
                    "rewrite" => [ "slug" => "worship_service", "with_front" => true ],
                    "query_var" => true,
                    "supports" => [ "title", "thumbnail", "revisions", "page-attributes", "post-formats" ],
                    "taxonomies" => [ "service_topic" ],
                ];
            
                register_post_type( "worship_service", $args );
            }
            
            add_action( 'init', 'cptui_register_my_cpts_worship_service' );
            
