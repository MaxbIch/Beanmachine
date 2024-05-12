<?php /* Template Name: BuilderPage */ ?>

<?php get_header(); ?>

<?php the_post();

$page_sections = get_post_meta($post->ID, '_vd_page_sections', true);

if (!empty($page_sections)) {
    foreach ($page_sections as $section) {
        call_user_func('vd_render_' . $section['type'], $section['id']);
    }
}
?>

<?php get_footer(); ?>