<?php

// Register "About" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_about_meta_boxes' );

function vd_register_about_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'About page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-about.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Preface section settings',
            ],
            [
                'name' => 'Preface title',
                'id' => '_vd_preface',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Preface text',
                'id' => '_vd_preface_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Preface link',
                'id' => '_vd_preface_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Preface button text',
                'id' => '_vd_preface_btn_text',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Preface bottom title',
                'id' => '_vd_preface_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Preface button description',
                'id' => '_vd_preface_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Our Team and Partners section settings',
            ],
            [
                'name' => 'Top section heading',
                'id' => '_vd_top_section_heading',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Top section description',
                'id' => '_vd_top_section_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 7,
                    ],
            ],
            [
                'name' => 'Bottom section heading',
                'id' => '_vd_bottom_section_heading',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Manager name',
                'id' => '_vd_managers_name',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Manager position',
                'id' => '_vd_managers_position',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Another manager name',
                'id' => '_vd_another_managers_name',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Another manager position',
                'id' => '_vd_another_managers_position',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Bottom section description',
                'id' => '_vd_bottom_section_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 6,
                    ],
            ],
            [
                'name' => 'Our motto',
                'id' => '_vd_our_motto',
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