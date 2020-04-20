<?php
/*
Plugin Name: Worship Services CPT
Description: This plugin will set-up the custom post types for Worship Services for 
a church service to include videos and notes along with the videos. 
Author: Lance Howell
Author URI: "https://www.lancehowell.com/contact-us/
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
            
            if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'group_5e75029c08c7f',
                    'title' => 'Worship Service Fields',
                    'fields' => array(
                        array(
                            'key' => 'field_5e75d2fa8c32a',
                            'label' => 'Welcome Message',
                            'name' => 'welcome_message',
                            'type' => 'textarea',
                            'instructions' => 'Enter in a welcome message or devotion theme to introduce what you are talking about.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => 'br',
                            'acfe_textarea_code' => 0,
                        ),
                        array(
                            'key' => 'field_5e75eedb7fb0a',
                            'label' => 'Announcements',
                            'name' => 'announcements',
                            'type' => 'wysiwyg',
                            'instructions' => 'Enter any announcements.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'tabs' => 'visual',
                            'toolbar' => 'basic',
                            'media_upload' => 1,
                            'delay' => 0,
                        ),
                        array(
                            'key' => 'field_5e75e9fdfbc91',
                            'label' => 'Reading Reference',
                            'name' => 'reading_reference',
                            'type' => 'text',
                            'instructions' => 'Enter the Bible Verse Reference.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e75ea90fbc92',
                            'label' => 'Reading Verse',
                            'name' => 'reading_verse',
                            'type' => 'textarea',
                            'instructions' => 'Reading Verse.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => 'br',
                            'acfe_textarea_code' => 0,
                        ),
                        array(
                            'key' => 'field_5e75e621941ce',
                            'label' => 'Message Title',
                            'name' => 'message_title',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e75e63e941cf',
                            'label' => 'Message Video Link',
                            'name' => 'message_video_link',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_5e75edcbba447',
                            'label' => 'Download Study Guide Title',
                            'name' => 'download_study_guide_title',
                            'type' => 'text',
                            'instructions' => 'Enter the Title of the Study Guide.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e75ee2bba448',
                            'label' => 'Study Guide URL',
                            'name' => 'study_guide_url',
                            'type' => 'url',
                            'instructions' => 'Link to the study guide.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_5e75ee54ba449',
                            'label' => 'Download Additional Resources Title',
                            'name' => 'download_additional_resources_title',
                            'type' => 'text',
                            'instructions' => 'Title of Additional Resources',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_5e75ee9fba44a',
                            'label' => 'Link to Additional Resource',
                            'name' => 'link_to_additional_resource',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'acfe_permissions' => '',
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'worship_service',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'acf_after_title',
                    'style' => 'default',
                    'label_placement' => 'left',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                    'acfe_display_title' => '',
                    'acfe_autosync' => '',
                    'acfe_permissions' => '',
                    'acfe_form' => 0,
                    'acfe_meta' => '',
                    'acfe_note' => '',
                ));
                
                endif;

?>