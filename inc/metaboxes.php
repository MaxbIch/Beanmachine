<?php

/* define the settings pages */
add_filter('mb_settings_pages', 'vd_options_pages');

function vd_options_pages($settings_pages) {

    $settings_pages[] = array(
        'id'          => 'vd-main-settings',
        'option_name' => 'vd_main_settings',
        'menu_title'  => 'Site Settings',
    );

    return $settings_pages;

}

// Register the footer settings
add_filter( 'rwmb_meta_boxes', 'vd_register_settings_meta_boxes' );

function vd_register_settings_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = [
        'title' => 'Header Settings',
        'settings_pages' => 'vd-main-settings',
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Main Settings',
            ],
            [
                'name' => 'Site logo',
                'id' => '_vd_site_logo',
                'type' => 'single_image',
            ],
        ],
    ];
    $meta_boxes[] = [
        'title' => 'Footer Settings',
        'settings_pages' => 'vd-main-settings',
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Request Settings',
            ],
            [
                'name' => 'Request text',
                'id' => '_vd_footer_request_text',
                'type' => 'text',
            ],
            [
                'name' => 'Request btn text',
                'id' => '_vd_footer_request_btn_text',
                'type' => 'text',
            ],
            [
                'name' => 'Request btn link',
                'id' => '_vd_footer_request_btn_link',
                'type' => 'text',
            ],
            [
                'type' => 'heading',
                'name' => 'Main Settings',
            ],
            [
                'name' => 'Footer logo',
                'id' => '_vd_footer_logo',
                'type' => 'single_image',
            ],
            [
                'name' => 'Site description',
                'id' => '_vd_footer_desc',
                'type' => 'text',
            ],
            [
                'name' => 'Copyright text',
                'id' => '_vd_footer_copyright',
                'type' => 'text',
            ],
        ],
    ];
    $meta_boxes[] = [
        'title' => 'Blog Settings',
        'settings_pages' => 'vd-main-settings',
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Featured article',
            ],
            [
                'name' => 'Choose featured articles',
                'id' => '_vd_choose_articles',
                'field_type' => 'select_advanced',
                'type' => 'post',
                'multiple' => false,
                'post_type' => 'post',
            ],
            [
                'type' => 'heading',
                'name' => 'Poster in footer',
            ],
            [
                'name' => 'Poster text',
                'id' => '_vd_blank_title',
                'type' => 'text',
            ],
            [
                'name' => 'Poster link text',
                'id' => '_vd_blank_link',
                'type' => 'text',
            ],
            [
                'name' => 'Poster link',
                'id' => '_vd_blank_link_text',
                'type' => 'text',
            ],
        ],
    ];

    return $meta_boxes;
}


// Register the settings pages

add_filter( 'rwmb_meta_boxes', 'vd_register_page_meta_boxes' );

function vd_register_page_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Footer Settings',
        'post_types' => ['page', 'projects', 'post'],
        'fields' => [
            [
                'name' => 'Disable footer row with request',
                'id' => '_vd_disable_footer_form',
                'type' => 'checkbox',
            ],
        ],
    ];
    return $meta_boxes;
}



// Register the posts settings

add_filter( 'rwmb_meta_boxes', 'vd_register_posts_meta_boxes' );

function vd_register_posts_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Post additional fields',
        'post_types' => 'post',
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Preface section settings',
            ],
            [
                'name' => 'Page Content',
                'id' => '_vd_inner_content_sections',
                'type'    => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 5,
                ],
            ],
            [
                'name' => 'Text with background',
                'id' => '_vd_inner_content_section_bold',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Disable text with background section',
                'id' => '_vd_inner_content_section_bold_check',
                'type' => 'checkbox',
            ],
            [
                'name' => 'Disable social section',
                'id' => '_vd_disable_social',
                'type' => 'checkbox',
            ],
            [
                'name' => 'Social images',
                'id' => '_vd_socials',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '6',
                'fields' => [
                    [
                        'name' => 'Technology photo',
                        'id' => 'social_img',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Social link',
                        'id' => '_vd_social_link',
                        'type' => 'text',
                        'size' => 100,
                    ],
                ],
            ],
        ],
    ];
    return $meta_boxes;
}





?>