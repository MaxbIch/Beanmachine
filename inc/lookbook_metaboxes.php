<?php

// Register "LookBook" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_look_book_meta_boxes' );

function vd_register_look_book_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Look Book page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-lookbook.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Our projects description section settings',
            ],
            [
                'name' => 'General title',
                'id' => '_vd_general_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'General description',
                'id' => '_vd_general_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'General button text',
                'id' => '_vd_general_btn_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'General link',
                'id' => '_vd_general_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'type' => 'heading',
                'name' => 'Featured projects section settings',
            ],
            [
                'name' => 'Featured projects header',
                'id' => '_vd_look_book_featured_projects_header',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Featured projects',
                'id' => '_vd_look_book_featured_projects_slider',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add project',
                'fields' => [
                    [
                        'name' => 'Project number',
                        'id' => 'look_book_project_number',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project title',
                        'id' => 'look_book_project_title',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project description',
                        'id' => 'look_book_project_dscrptn',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 2,
                        ],
                    ],
                    [
                        'name' => 'Technologies used',
                        'id' => 'look_book_technologies_used',
                        'clone' => true,
                        'sort_clone' => true,
                        'type' => 'group',
                        'add_button' => '+ Add project',
                        'fields' => [
                            [
                                'name' => 'Technologies title',
                                'id' => 'technologies_title',
                                'type' => 'text',
                                'size' => 100,
                            ],
                        ],
                    ],
                    [
                        'name' => 'First button title for project',
                        'id' => 'look_book_first_button_title_for_project',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'First link for project',
                        'id' => 'look_book_first_link_for_project',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Second button title for project',
                        'id' => 'look_book_second_button_title_for_project',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Second link for project',
                        'id' => 'look_book_second_link_for_project',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Allow link of project',
                        'id' => 'disable_link_proj',
                        'type' => 'checkbox',
                    ],
                    [
                        'name' => 'Project illustration',
                        'id' => 'look_book_project_illustration',
                        'type' => 'single_image',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Our latest projects section settings',
            ],
            [
                'name' => 'Our projects title',
                'id' => '_vd_look_book_out_projects_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our projects btn text',
                'id' => '_vd_look_book_out_projects_btn_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our projects btn link',
                'id' => '_vd_look_book_out_projects_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our latest projects ',
                'id' => '_vd_look_book_out_latest_projects',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add project',
                'fields' => [
                    [
                        'name' => 'Project title',
                        'id' => 'look_book_project_title',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project description',
                        'id' => 'look_book_project_dscrptn',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 2,
                        ],
                    ],
                    [
                        'name' => 'Project link',
                        'id' => 'look_book_project_link',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Project image',
                        'id' => 'look_book_project_img',
                        'type' => 'single_image',
                    ],
                ],
            ],
        ],
    ];
    return $meta_boxes;
}

?>