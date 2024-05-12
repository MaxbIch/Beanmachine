<?php

// Register "Services" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_services_meta_boxes' );

function vd_register_services_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Services page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-services.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Services section settings',
            ],
            [
                'name' => 'Services description',
                'id' => '_vd_services_description',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Main title',
                'id' => '_vd_services_title',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Our technologies',
                'id' => '_vd_services_technologies',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '10',
                'fields' => [
                    [
                        'name' => 'Technology services photo',
                        'id' => 'technology_services_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Technology services title',
                        'id' => 'technology_services_title',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Move description to right?',
                        'id' => 'right_position',
                        'type' => 'checkbox',
                    ],
                    [
                        'name' => 'Technology services subtitle',
                        'id' => 'technology_services_subtitle',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Technology service link href',
                        'id' => 'technology_services_link_href',
                        'type' => 'text',
                    ],
                ],
            ],
        ],
    ];
    return $meta_boxes;
}

?>