<?php

// Register "WebApplications" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_applications_meta_boxes' );

function vd_register_applications_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Design page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-webapplications.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'design section settings',
            ],
            [
                'name' => 'Design description',
                'id' => '_vd_design_description',
                'type' => 'text',
                'size' => 100,
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
            [
                'name' => 'Our technologies',
                'id' => '_vd_design_technologies',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '10',
                'fields' => [
                    [
                        'name' => 'Technology design photo',
                        'id' => 'technology_design_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Technology design title',
                        'id' => 'technology_design_title',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Move description to right?',
                        'id' => 'right_position',
                        'type' => 'checkbox',
                    ],
                    [
                        'name' => 'Technology design subtitle',
                        'id' => 'technology_design_subtitle',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'name' => 'Guide content',
                'id' => '_vd_guide_cont_desc',
                'type' => 'text',
            ],
            [
                'name' => 'Our systems',
                'id' => '_vd_guide_cont_images',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '5',
                'fields' => [
                    [
                        'name' => 'Technology design photo',
                        'id' => 'guide_cont_img',
                        'type' => 'single_image',
                    ],
                ],
            ],
            [
                'name' => 'Design title',
                'id' => '_vd_guide_title',
                'type' => 'text',
            ],
        ],
    ];
    return $meta_boxes;
}

?>