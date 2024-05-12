<?php

// Register "Contact" metaboxes

add_filter( 'rwmb_meta_boxes', 'vd_register_contact_us_meta_boxes' );

function vd_register_contact_us_meta_boxes($meta_boxes) {
    $meta_boxes[] = [
        'title' => 'Contact page additional fields',
        'post_types' => 'page',
        'include' => [
            'template' => ['tmpl-contact.php'],
        ],
        'fields' => [
            [
                'type' => 'heading',
                'name' => 'Contact top section settings',
            ],
            [
                'name' => 'Contact title',
                'id' => '_vd_contact_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Description',
                'id' => '_vd_contact_desc',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'type' => 'heading',
                'name' => 'Form Contact section settings',
            ],
            [
                'name' => 'Contact form title',
                'id' => '_vd_contact_form_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Contact shortcode',
                'id' => '_vd_contact_shortcode',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Contacts title',
                'id' => '_vd_contacts_title',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Contact email',
                'id' => '_vd_contact_email',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Contact phone',
                'id' => '_vd_contact_phone',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Contacts locations',
                'id' => '_vd_contacts_locations',
                'type' => 'text',
                'size' => 100,
            ],
            [
                'name' => 'Our Cities',
                'id' => '_contacts',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add technology',
                'max_clone' => '5',
                'fields' => [
                    [
                        'name' => 'city',
                        'id' => 'contact_subtitle',
                        'type' => 'text',
                    ],
                ],
            ],
        ],
    ];
    return $meta_boxes;
}

?>