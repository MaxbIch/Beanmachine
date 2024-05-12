<?php

// Register "Home" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_contact_meta_boxes' );

function vd_register_contact_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Home page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-home.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Hero section settings',
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_hero_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Description',
                'id' => '_vd_hero_desc',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Hero btn text',
                'id' => '_vd_hero_btn_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Hero btn link',
                'id' => '_vd_hero_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'type' => 'heading',
                'name' => 'Short description section settings',
            ],
            [
                'name' => 'Description',
                'id' => '_vd_description',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Our stack section settings',
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_stack_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our technologies',
                'id' => '_vd_technologies',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '4',
                'fields' => [
                    [
                        'name' => 'Technology photo',
                        'id' => 'technology_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Technology title',
                        'id' => 'technology_title',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Technology subtitle',
                        'id' => 'technology_subtitle',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'About us section settings',
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_about_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our destinations',
                'id' => '_vd_destinations',
                'clone' => true,
                'type' => 'group',
                'add_button' => '+ Add destinations',
                'max_clone' => '3',
                'fields' => [
                    [
                        'name' => 'Destinations title',
                        'id' => 'destinations_title',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Destinations description',
                        'id' => 'destinations_description',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 2,
                        ],
                    ],
                    [
                        'name' => 'Destinations link',
                        'id' => 'destinations_link',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Disable link of project',
                        'id' => 'disable_link_proj',
                        'type' => 'checkbox',
                    ],
                ],
            ],
            [
                'name' => 'Our clients logo',
                'id' => '_vd_clients_logo',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add logo',
                'fields' => [
                    [
                        'name' => 'Client logo',
                        'id' => 'client_img',
                        'type' => 'single_image',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Planet video section settings',
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_planet_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Description',
                'id' => '_vd_planet_description',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Our latest projects section settings',
            ],
            [
                'name' => 'Our projects title',
                'id' => '_vd_out_projects_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our projects btn text',
                'id' => '_vd_out_projects_btn_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our projects btn link',
                'id' => '_vd_out_projects_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our latest projects ',
                'id' => '_vd_out_latest_projects',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add project',
                'fields' => [
                    [
                        'name' => 'Project title',
                        'id' => 'project_title',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project description',
                        'id' => 'project_dscrptn',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 2,
                        ],
                    ],
                    [
                        'name' => 'Project link',
                        'id' => 'project_link',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project image',
                        'id' => 'project_img',
                        'type' => 'single_image',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Our philosophy section settings',
            ],
            [
                'name' => 'Philosophy title',
                'id' => '_vd_our_philosophy_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Philosophy button link',
                'id' => '_vd_our_philosophy_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Philosophy button title',
                'id' => '_vd_our_philosophy_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Philosophy description',
                'id' => '_vd_our_philosophy_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
        ],
    ];
    return $meta_boxes;
}

?>