<?php /* Template Name: Thx */ ?>

<div class="hide-error"><?php get_header(); ?></div>

<?php while ( have_posts() ) : the_post(); ?>


    <?php

    $post_id = get_the_ID();
    $design_title = get_post_meta($post_id, '_vd_design_title', true);
    $design_description = get_post_meta($post_id, '_vd_design_description', true);
    $design_btn_link = get_post_meta($post_id, '_vd_design_btn_link', true);
    $design_btn_title = get_post_meta($post_id, '_vd_design_btn_title', true);


    ?>

    <section class="vd_section vd_thx_section">
        <div class="error-logo">
            <a class="logo-wrap" href="<?php echo get_site_url(); ?>">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/image/White.png" alt="">
            </a>
        </div>
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-design-col vd-error-col">
                    <div class="vd-design-title vd-design-error-title"><?php echo $design_title; ?></div>
                    <div class="vd-design-description error-desc thx-desc "><?php echo $design_description; ?></div>
                    <a class="vd-technology-services-link error-link" href="<?php echo $design_btn_link; ?>">
                        <div class="vd-technology-services-link  vd-error-services-link"><?php echo $design_btn_title; ?>
                            <img class="vd-technology-services-link-img" src="<?php echo get_template_directory_uri(); ?>/image/arrow-services-learn.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<!--<div class="hide-error">--><?php //get_footer(); ?><!--</div>-->
