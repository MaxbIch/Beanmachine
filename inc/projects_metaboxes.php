
<?php
// Register projects settings

add_filter('rwmb_meta_boxes', 'vd_project_meta_boxes');

function vd_project_meta_boxes($meta_boxes) {

    $prefix = '_vd_project_';

    $meta_boxes[] = [
        'title' => 'Inner Page',
        'post_types' => 'projects',
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Our projects description section settings',
            ],
            [
                'name' => 'Site title',
                'id' => $prefix . 'site_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Short description',
                'id' => $prefix . 'short_dscrptn',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 3,
                ],
            ],
            [
                'name' => 'Site button title',
                'id' => $prefix . 'site_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Site button link',
                'id' => $prefix . 'site_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Site general screenshot',
                'id' => $prefix . 'site_general_screenshot',
                'type' => 'single-image',
            ],
            [
                'name' => 'Client Information title #1',
                'id' => $prefix . 'client_information_title_first',
                'type' => 'text',
                'size' => 70,
            ],
            [
                'name' => 'Client Information description #1',
                'id' => $prefix . 'client_information_dscrptn_first',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Client Information title #2',
                'id' => $prefix . 'client_information_title_second',
                'type' => 'text',
                'size' => 70,
            ],
            [
                'name' => 'Client Information description #2',
                'id' => $prefix . 'client_information_dscrptn_second',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Client Information title #3',
                'id' => $prefix . 'client_information_title_third',
                'type' => 'text',
                'size' => 70,
            ],
            [
                'name' => 'Client Information description #3',
                'id' => $prefix . 'client_information_dscrptn_third',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Client Information title #4',
                'id' => $prefix . 'client_information_title_fourth',
                'type' => 'text',
                'size' => 70,
            ],
            [
                'name' => 'Client Information description #4',
                'id' => $prefix . 'client_information_dscrptn_fourth',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'type' => 'heading',
                'name' => 'Website description with first collage section settings',
            ],
            [
                'name' => 'Site screenshot #1',
                'id' => $prefix . 'site_screenshot_first',
                'type' => 'single-image',
            ],
            [
                'name' => 'Text website description',
                'id' => $prefix . 'text_website_description',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 7,
                ],
            ],
            [
                'name' => 'Site screenshot #2',
                'id' => $prefix . 'site_screenshot_second',
                'type' => 'single-image',
            ],[
                'name' => 'Site screenshot #3',
                'id' => $prefix . 'site_screenshot_third',
                'type' => 'single-image',
            ],
            [
                'name' => 'Enable bottom level description section?',
                'id' => $prefix . 'enable_s_bottom_level_desc_section',
                'type'    => 'checkbox',
            ],
            [
                'type' => 'heading',
                'name' => 'Text describing the site success section settings',
            ],
            [
                'name' => 'Top text describing the site success',
                'id' => $prefix . 'top_text_dscrptn_website_success',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 3,
                ],
            ],
            [
                'name' => 'Central bold text describing the site success',
                'id' => $prefix . 'central_bold_text_dscrptn_website_success',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Bottom text describing the site success',
                'id' => $prefix . 'bottom_text_dscrptn_website_success',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 3,
                ],
            ],
            [
                'name' => 'Enable describing site description section?',
                'id' => $prefix . 'enable_describing_site_desc_section',
                'type'    => 'checkbox',
            ],
            [
                'type' => 'heading',
                'name' => 'Collage of images on the site section settings',
            ],
            [
                'name' => 'Collage image #1',
                'id' => $prefix . 'collage_image_first',
                'type' => 'single-image',
            ],
            [
                'name' => 'Collage image #2',
                'id' => $prefix . 'collage_image_second',
                'type' => 'single-image',
            ],
            [
                'name' => 'Collage image #3',
                'id' => $prefix . 'collage_image_third',
                'type' => 'single-image',
            ],
            [
                'name' => 'Enable top level website images section?',
                'id' => $prefix . 'enable_s_top_level_website_section',
                'type'    => 'checkbox',
            ],
            [
                'type' => 'heading',
                'name' => 'First slider setting section',
            ],
            [
                'name' => 'Title for the first slider',
                'id' => $prefix . 'title_first_slider',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 1,
                ],
            ],
            [
                'name' => 'Description for the first slider',
                'id' => $prefix . 'description_first_slider',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Website screenshot for the first slider',
                'id' => $prefix . 'first_inner_slider',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add screenshot',
                'fields' => [
                    [
                        'name' => 'Website screenshot',
                        'id' => 'website_screenshot',
                        'type' => 'single-image',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Website screenshot with second collage section settings',
            ],
            [
                'name' => 'Website collage header',
                'id' => $prefix . 'website_collage_header',
                'type'    => 'text',
            ],
            [
                'name' => 'Website collage description',
                'id' => $prefix . 'website_collage_description',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 7,
                ],
            ],
            [
                'name' => 'Site screenshot #1',
                'id' => $prefix . 'website_screenshot_first',
                'type' => 'single-image',
            ],
            [
                'name' => 'Site screenshot #2',
                'id' => $prefix . 'website_screenshot_second',
                'type' => 'single-image',
            ],
            [
                'name' => 'Enable first collage section?',
                'id' => $prefix . 'enable_first_collage_section',
                'type'    => 'checkbox',
            ],
            [
                'type' => 'heading',
                'name' => 'Second slider setting section',
            ],
            [
                'name' => 'Enable second slider on page?',
                'id' => $prefix . 'enable_s_slider',
                'type'    => 'checkbox',
            ],

            [
                'name' => 'Title for the second slider',
                'id' => $prefix . 'title_second_slider',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Description for the second slider',
                'id' => $prefix . 'description_second_slider',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Website mobile screenshot for the second slider',
                'id' => $prefix . 'second_inner_slider',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add screenshot',
                'fields' => [
                    [
                        'name' => 'Website mobile screenshot',
                        'id' => 'website_mobile_screenshot',
                        'type' => 'single-image',
                    ],
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Last text setting section',
            ],
            [
                'name' => 'Central text-question',
                'id' => $prefix . 'central_text_question',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],[
                'name' => 'Right text-response',
                'id' => $prefix . 'right_text_response',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'type' => 'heading',
                'name' => 'Next project setting section',
            ],
            [
                'name' => 'Title next project',
                'id' => $prefix . 'title_next_project',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 1,
                ],
            ],
            [
                'name' => 'Next project button title',
                'id' => $prefix . 'next_project_btn_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Next project button link',
                'id' => $prefix . 'next_project_btn_link',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Next project general screenshot',
                'id' => $prefix . 'next_project_screenshot',
                'type' => 'single-image',
                'size' => 100,
            ],
        ],
    ];

    return $meta_boxes;
}

?>
