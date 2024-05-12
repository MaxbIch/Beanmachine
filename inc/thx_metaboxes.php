<?php

// Register "Thx" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_thx_meta_boxes' );

function vd_register_thx_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Design page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-thx.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'design section settings',
            ],

            [
                'name' => 'Main title',
                'id' => '_vd_design_title',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Services description',
                'id' => '_vd_design_description',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Design btn title',
                'id' => '_vd_design_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Design btn link',
                'id' => '_vd_design_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
        ],
    ];
    return $meta_boxes;
}

?>