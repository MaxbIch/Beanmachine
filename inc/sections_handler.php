<?php

$sections_path = get_template_directory() . '/sections';

foreach (scandir($sections_path) as $filename) {
    $path = $sections_path . '/' . $filename;
    if (is_file($path)) {
        require $path;
    }
}

add_filter('rwmb_meta_boxes', 'vd_register_meta_boxes');

function vd_register_meta_boxes($meta_boxes) {

    $prefix = '_vd_';

    $meta_boxes[] = [
        'id' => 'page_sections',
        'title' => 'Sections',
        'post_types' => ['page', 'projects', 'post'],
        'context' => 'side',
        'priority' => 'high',
        'fields' => [
            [
//                'name' => 'Display section',
                'id' => $prefix . 'page_sections',
                'type' => 'group',
                'clone' => true,
                'sort_clone' => true,
                'fields' => [
                    [
//                        'name' => 'section',
                        'id' => 'type',
                        'type' => 'select_advanced',
                        'options' => get_sections()
                    ],
                    [
                        'id' => 'id',
                        'type' => 'text',
                        'size' => 2,
                        'attributes' => [
                            'readonly' => true,
                            'class' => 'reaonly-html'
                        ],
                    ]
                ]
            ]
        ]
    ];

    return array_merge($meta_boxes, vd_get_sections_metaboxes($prefix));
}

function get_sections() {

    global $sections_path;

    $files = array_diff(scandir($sections_path), ['.', '..']);

    $keys = array_map(function($file) {
        return substr($file, 0, strpos($file, '.'));
    }, $files);

    $values = array_map(function($file) {
        return ucfirst(str_replace('_', ' ', $file));
    }, $keys);

    return array_combine($keys, $values);
    
}

function vd_get_sections_metaboxes($prefix) {
    $post_id = false;

    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } elseif (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    }

    if ($post_id) {
        $page_sections = get_post_meta($post_id, $prefix . 'page_sections', true);
    }

    if (!empty($page_sections)) {
        foreach ($page_sections as $section) {
            $metabox[] = call_user_func('vd_metaboxes_' . $section['type'], $section['id']);
        }
    }

    return !empty($metabox) ? array_filter($metabox) : [];
}

add_action('save_post', 'vd_save_section_id');

function vd_save_section_id($post_id) {
    $meta_field = '_vd_page_sections';
    //clean_post_cache( $post_id );

//    if (get_page_template_slug($post_id) != 'tmpl-flexible.php') {
//        delete_post_meta($post_id, $meta_field);
//        return;
//    }

    $sections_data = filter_input(INPUT_POST, $meta_field, FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);   

    if (!empty($sections_data)) {
        $ids = array_column($sections_data, 'id');
        
        foreach ($sections_data as $key => $value) {
            $data[] = [
                'id' => isset($value['id']) && !empty($value['id']) ? $value['id'] : vd_generate_id($key + 1, $ids),
                'type' => $value['type']
            ];
        }

        update_post_meta($post_id, $meta_field, $data);
    }
}

function vd_generate_id($id, $ids) {
    if (!in_array($id, $ids)) {
        return $id;
    } else {
        $id++;
        return vd_generate_id($id, $ids);
    }
}
