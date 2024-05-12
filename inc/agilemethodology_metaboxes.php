<?php

// Register "Agile Methodology" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_agile_meta_boxes' );

function vd_register_agile_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Agile page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-agilemethodology.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Agile section settings',
            ],
            [
                'name' => 'Agile description',
                'id' => '_vd_agile_description',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_agile_title',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Agile content first section',
            ],
            [
                'name' => 'Agile btn title',
                'id' => '_vd_agile_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile btn link',
                'id' => '_vd_agile_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile title',
                'id' => '_vd_agile_cont_title',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Agile content',
                'id' => '_vd_agile_cont_description',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Agile content second section',
            ],
            [
                'name' => 'Agile btn title',
                'id' => '_vd_agile_btn_title_one',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile btn link',
                'id' => '_vd_agile_btn_link_one',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile title',
                'id' => '_vd_agile_cont_title_one',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Agile content',
                'id' => '_vd_agile_cont_description_one',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Agile content third section',
            ],
            [
                'name' => 'Agile btn title',
                'id' => '_vd_agile_btn_title_two',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile btn link',
                'id' => '_vd_agile_btn_link_two',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile title',
                'id' => '_vd_agile_cont_title_two',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Agile content',
                'id' => '_vd_agile_cont_description_two',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Agile content fourth section',
            ],
            [
                'name' => 'Agile btn title',
                'id' => '_vd_agile_btn_title_three',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile btn link',
                'id' => '_vd_agile_btn_link_three',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Agile title',
                'id' => '_vd_agile_cont_title_three',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Agile content',
                'id' => '_vd_agile_cont_description_three',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
        ],
    ];
    return $meta_boxes;
}

?>