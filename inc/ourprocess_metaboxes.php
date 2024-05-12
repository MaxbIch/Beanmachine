<?php

// Register "Our Process" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_process_meta_boxes' );

function vd_register_process_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Agile page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-ourprocess.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Process section settings',
            ],
            [
                'name' => 'Process description',
                'id' => '_vd_process_description',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_process_title',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Process content description',
                'id' => '_vd_process_cont',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Process btn title',
                'id' => '_vd_process_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Process btn link',
                'id' => '_vd_process_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'type' => 'heading',
                'name' => 'Process dropdown menu section settings',
            ],
            [
                'name' => 'Dropdown title',
                'id' => '_vd_drop_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Dropdown title',
                'id' => '_vd_drop_desc',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Dropdown content',
                'id' => '_vd_dropdowns',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add dropdown menu',
                'max_clone' => '10',
                'fields' => [
                    [
                        'name' => 'Dropdown btn title',
                        'id' => 'dropdown_btn_title',
                        'type' => 'text',
                        'size' => 100,
                    ],
                    [
                        'name' => 'Dropdown title',
                        'id' => 'dropdown_single_title',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 5,
                        ],
                    ],
                    [
                        'name' => 'Dropdown single open content',
                        'id' => 'dropdown_single_open_cont',
                        'type'    => 'wysiwyg',
                        'options' => [
                            'textarea_rows' => 5,
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Guide title',
                'id' => '_vd_guide_title',
                'type' => 'text',
            ],
            [
                'name' => 'Guide btn title',
                'id' => '_vd_guide_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Guide btn link',
                'id' => '_vd_guide_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
        ],
    ];
    return $meta_boxes;
}

?>