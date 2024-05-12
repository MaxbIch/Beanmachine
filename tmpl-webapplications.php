<?php /* Template Name: Web Applications */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <?php
        $post_id = get_the_ID();
        $design_description = get_post_meta($post_id, '_vd_design_description', true);
        $design_title = get_post_meta($post_id, '_vd_design_title', true);
        $design_btn_link = get_post_meta($post_id, '_vd_design_btn_link', true);
        $design_btn_title = get_post_meta($post_id, '_vd_design_btn_title', true);
    ?>

    <section class="vd_section vd_design_section vd_app_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-design-col vd-apps-col">
                    <div class="vd-design-description"><?php echo $design_description; ?></div>
                    <div class="vd-design-title"><?php echo $design_title; ?></div>
                    <a class="design-btn vd-design-primary" href="<?php echo $design_btn_link; ?>"><?php echo $design_btn_title; ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php
        $design_technology = get_post_meta($post_id, '_vd_design_technologies', true);
    ?>

    <section class="vd_section vd_app_cont">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-design-coll vd-design-coll">
                    <?php foreach ($design_technology as $single_design_technology) : ?>

                        <?php
                        $img = $single_design_technology['technology_design_img'];
                        $img_url = wp_get_attachment_image_url($img, 'full');
                        $technology_design_title = $single_design_technology['technology_design_title'];
                        $technology_design_subtitle = $single_design_technology['technology_design_subtitle'];
                        $technology_design_position = $single_design_technology['right_position'];

                        ?>

                        <div class="col-12 vd-single-design-app vd-single-design  <?php if($technology_design_position){ ?>vd-decription-to-right<?php } ?>">
                            <img class="vd-technology-design-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                            <h3 class="vd-technology-design-tittle"><?php echo $technology_design_title; ?></h3>
                            <div class="vd-technology-design-sub">
                                <?php echo $technology_design_subtitle; ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<!--        <img class="aaa" src="--><?php //echo get_template_directory_uri(); ?><!--/image/bg-agile-topp-mob.png" alt="">-->
    </section>



    <?php
    $guide_title = get_post_meta($post_id, '_vd_guide_title', true);
    $guide_desc = get_post_meta($post_id, '_vd_guide_desc', true);
    $guide_cont_desc = get_post_meta($post_id, '_vd_guide_cont_desc', true);
    $guide_cont_images = get_post_meta($post_id, '_vd_guide_cont_images', true);
    ?>


    <img class="saveUI saveAppTop" src="<?php echo get_template_directory_uri(); ?>/image/LINE.png" alt="">
    <section class="vd_section vd_guide_section vd_guide_app_section">
        <div class="vd-container">
            <div class="row">
                <div class="guide-cont">
                    <div class="description-content"><?php echo $guide_cont_desc; ?></div>
                    <div class="description-media">
                        <?php foreach ($guide_cont_images as $single_guide_cont_images) : ?>

                            <?php
                                $img = $single_guide_cont_images['guide_cont_img'];
                                $img_url = wp_get_attachment_image_url($img, 'full');
                            ?>

                        <img class="vd-guide-cont-images" src="<?php echo $img_url; ?>" alt="technology-photo">

                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 vd-guide-col vd-applic-col">
                    <h3 class="vd-ui-title vd-applic-title"><?php echo $guide_title; ?></h3>
                    <div class="vd-ui-desc"><?php echo $guide_desc; ?></div>
<!--                    <img class="guide-active ill-active" src="--><?php //echo get_template_directory_uri(); ?><!--/image/Planetapp.png" alt="">-->
                </div>
            </div>
        </div>
    </section>
    <img class="saveUI saveAppBottom" src="<?php echo get_template_directory_uri(); ?>/image/LINE.png" alt="">

    <section class="vd-footer-singele-bg vd-footer-singele-bg-process vd-footer-ui-bg-process">
        <img class="sky_agile_img sky-footer-process" src="<?php echo get_template_directory_uri(); ?>/image/sky-footer-process.png" alt="">
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>

