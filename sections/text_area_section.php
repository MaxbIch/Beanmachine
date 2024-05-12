<?php

function vd_render_single_post_section($section_id = '') {

    $prefix = '_vd_single_post_section_' . $section_id . '_';
    $enable = get_post_meta(get_the_id(), $prefix . 'enable', true);

    if ($enable != true) {
        return;
    }

    $title = get_post_meta(get_the_id(), $prefix . 'title', true);
    $description = get_post_meta(get_the_id(), $prefix . 'description' , true);
    $about_image = get_post_meta(get_the_id(), $prefix . 'about_image' , true);
    ?>

    <section class="vd_section vd-single-post-section">
            <?php echo $title; ?>
            <?php echo $description; ?>
            <?php echo $about_image; ?>
    </section>

    <?php
}

function vd_metaboxes_single_post_section($section_id = '') {

    $prefix = '_vd_single_post_section_' . $section_id . '_';
    $meta_boxes = [
        'id' => 'single_post_section_' . $section_id,
        'title' => 'Single post section ' . $section_id,
        'post_types' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => [
            [
                'name' => 'Display section',
                'id' => $prefix . 'enable',
                'type' => 'checkbox'
            ],
            [
                'name' => 'Title',
                'id' => $prefix . 'title',
                'type' => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Description',
                'id' => $prefix . 'description',
                'type' => 'wysiwyg',
                'options' => [
                    'textarea_rows' => 2,
                ],
            ],
            [
                'name' => 'Images',
                'id' => $prefix . 'about_image',
                'clone' => true,
                'sort_clone' => true,
                'type' => 'group',
                'add_button' => '+ Add images',
                'max_clone' => '5',
                'fields' => [
                    [
                        'name' => 'add image ',
                        'id' => 'img',
                        'type' => 'single_image',
                    ],
                ],
            ],
        ]
    ];

    return $meta_boxes;

}
