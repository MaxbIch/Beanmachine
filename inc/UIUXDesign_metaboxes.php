<?php

// Register "UIUXDesign" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_design_meta_boxes' );

function vd_register_design_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Design page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-UIUXDesign.php'],
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
                'name' => 'Card tittle',
                'id' => '_vd_card_design_tittle',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Top line cards',
                'id' => '_vd_top_cards_technology',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '2',
                'fields' => [
                    [
                        'name' => 'Top cards img',
                        'id' => 'top_cards_technology_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Top card title',
                        'id' => 'top_card_design_title',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'name' => 'Bottom line cards',
                'id' => '_vd_bottom_cards_technology',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '3',
                'fields' => [
                    [
                        'name' => 'Bottom cards img',
                        'id' => 'bottom_cards_technology_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Bottom card title',
                        'id' => 'bottom_card_design_title',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'name' => 'Step title',
                'id' => '_vd_agile_cont_title_two',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Step content',
                'id' => '_vd_agile_cont_description_two',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
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