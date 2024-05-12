<?php /* Template Name: Custom Wordpress */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <?php
    $post_id = get_the_ID();
    $design_description = get_post_meta($post_id, '_vd_design_description', true);
    $design_title = get_post_meta($post_id, '_vd_design_title', true);
    $design_btn_link = get_post_meta($post_id, '_vd_design_btn_link', true);
    $design_btn_title = get_post_meta($post_id, '_vd_design_btn_title', true);
    ?>

    <section class="vd_section vd_design_section vd_cust_section">

        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-design-col vd-cust-col">
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

    <section class="vd_section vd_design_cont">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-design-coll">
                    <?php foreach ($design_technology as $single_design_technology) : ?>

                        <?php
                        $img = $single_design_technology['technology_design_img'];
                        $img_url = wp_get_attachment_image_url($img, 'full');
                        $technology_design_title = $single_design_technology['technology_design_title'];
                        $technology_design_subtitle = $single_design_technology['technology_design_subtitle'];
                        $technology_design_position = $single_design_technology['right_position'];

                        ?>

                        <div class="col-12 vd-single-design <?php if($technology_design_position){ ?>vd-decription-to-right<?php } ?>">
                            <img class="vd-technology-design-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                            <h3 class="vd-technology-design-tittle"><?php echo $technology_design_title; ?></h3>
                            <div class="vd-technology-design-sub vd-sub-grey">
                                <?php echo $technology_design_subtitle; ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <img class="saveUI saveCust" src="<?php echo get_template_directory_uri(); ?>/image/LINE.png" alt="">



    <?php
    $card_design_tittle = get_post_meta($post_id, '_vd_card_design_tittle', true);
    $top_cards_technology = get_post_meta($post_id, '_vd_top_cards_technology', true);
    $bottom_cards_technology = get_post_meta($post_id, '_vd_bottom_cards_technology', true);

    ?>

    <section class="card-section wp-card">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-card-coll-top">
                    <div class="vd-card-design-tittle"><?php echo $card_design_tittle; ?></div>

                    <?php foreach ($top_cards_technology as $single_top_cards_technology) : ?>

                        <?php

                        $img = $single_top_cards_technology['top_cards_technology_img'];
                        $img_url = wp_get_attachment_image_url($img, 'full');
                        $top_card_design_title = $single_top_cards_technology['top_card_design_title'];

                        ?>

                        <div class="col-12 vd-single-card">
                            <img class="vd-card-technology-design-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                            <div class="vd-card-technology-design-tittle"><?php echo $top_card_design_title; ?></div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="col-12 vd-card-coll-bottom">

                    <?php foreach ($bottom_cards_technology as $single_bottom_cards_technology) : ?>

                        <?php
                        $img = $single_bottom_cards_technology['bottom_cards_technology_img'];
                        $img_url = wp_get_attachment_image_url($img, 'full');
                        $bottom_card_design_title = $single_bottom_cards_technology['bottom_card_design_title'];

                        ?>

                        <div class="col-12 vd-single-card">
                            <img class="vd-card-technology-design-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                            <div class="vd-card-technology-design-tittle"><?php echo $bottom_card_design_title; ?></div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <?php
    $agile_btn_link_two = get_post_meta($post_id, '_vd_agile_btn_link_two', true);
    $agile_btn_title_two = get_post_meta($post_id, '_vd_agile_btn_title_two', true);
    $agile_cont_title_two = get_post_meta($post_id, '_vd_agile_cont_title_two', true);
    $agile_cont_description_two = get_post_meta($post_id, '_vd_agile_cont_description_two', true);

    ?>



    <?php
    $guide_title = get_post_meta($post_id, '_vd_guide_title', true);
    $guide_desc = get_post_meta($post_id, '_vd_guide_desc', true);
    ?>

    <section class="vd_section vd_guide_section vd_ui_section vd_guide_ill_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-guide-col vd-custwp-col">
                    <h3 class="vd-ui-title vd-custwp-tittle"><?php echo $guide_title; ?></h3>
                    <div class="vd-ui-desc"><?php echo $guide_desc; ?></div>
<!--                    <img class="guide-active ill-active" src="--><?php //echo get_template_directory_uri(); ?><!--/image/Planetill.png" alt="">-->
                </div>
            </div>
        </div>
    </section>

    <section class="vd-footer-singele-bg vd-footer-singele-bg-process vd-footer-ui-bg-process">
        <img class="sky_agile_img sky-footer-process" src="<?php echo get_template_directory_uri(); ?>/image/sky-footer-process.png" alt="">
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>

