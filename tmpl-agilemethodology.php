<?php /* Template Name: Agile Methodology page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <?php
    $post_id = get_the_ID();
    $agile_description = get_post_meta($post_id, '_vd_agile_description', true);
    $agile_title = get_post_meta($post_id, '_vd_agile_title', true);
    ?>

    <section class="vd_section vd_agile_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-agile-col">
                    <div class="vd-agile-description"><?php echo $agile_description; ?></div>
                    <div class="vd-agile-title"><?php echo $agile_title; ?></div>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="agile-main-gif" src="https://assets8.lottiefiles.com/packages/lf20_y5xoegxv/Agile Methodology Lottie/lf30_wxjzhaic.json" background="transparent" speed="1" loop  autoplay></lottie-player>
                </div>
            </div>
        </div>
    </section>





    <?php
    $post_id = get_the_ID();
    $agile_btn_link = get_post_meta($post_id, '_vd_agile_btn_link', true);
    $agile_btn_title = get_post_meta($post_id, '_vd_agile_btn_title', true);
    $agile_cont_title = get_post_meta($post_id, '_vd_agile_cont_title', true);
    $agile_cont_description = get_post_meta($post_id, '_vd_agile_cont_description', true);

    $agile_btn_link_one = get_post_meta($post_id, '_vd_agile_btn_link_one', true);
    $agile_btn_title_one = get_post_meta($post_id, '_vd_agile_btn_title_one', true);
    $agile_cont_title_one = get_post_meta($post_id, '_vd_agile_cont_title_one', true);
    $agile_cont_description_one = get_post_meta($post_id, '_vd_agile_cont_description_one', true);

    $agile_btn_link_two = get_post_meta($post_id, '_vd_agile_btn_link_two', true);
    $agile_btn_title_two = get_post_meta($post_id, '_vd_agile_btn_title_two', true);
    $agile_cont_title_two = get_post_meta($post_id, '_vd_agile_cont_title_two', true);
    $agile_cont_description_two = get_post_meta($post_id, '_vd_agile_cont_description_two', true);

    $agile_btn_link_three = get_post_meta($post_id, '_vd_agile_btn_link_three', true);
    $agile_btn_title_three = get_post_meta($post_id, '_vd_agile_btn_title_three', true);
    $agile_cont_title_three = get_post_meta($post_id, '_vd_agile_cont_title_three', true);
    $agile_cont_description_three = get_post_meta($post_id, '_vd_agile_cont_description_three', true);
    ?>

    <section class="vd_section vd_agile_cont_section">
        <div class="rowqwe">
            <div class="vd-container">
                <div class="row">
                    <div class="col-12 vd-agile-cont-col">
                        <div class="vd-agile-cont-col_one">
                            <a class="agile-btn vd-agile-primary" href="<?php echo $agile_btn_link; ?>"><?php echo $agile_btn_title; ?></a>
                            <div class="vd-agile-title vd-agile-title-cont"><?php echo $agile_cont_title; ?></div>
                            <div class="vd-agile-cont-description"><?php echo $agile_cont_description; ?></div>
                        </div>
                        <div class="vd-agile-cont-col_two">
                            <a class="agile-btn vd-agile-primary" href="<?php echo $agile_btn_link_one; ?>"><?php echo $agile_btn_title_one; ?></a>
                            <div class="vd-agile-title vd-agile-title-cont"><?php echo $agile_cont_title_one; ?></div>
                            <div class="vd-agile-cont-description-two"><?php echo $agile_cont_description_one; ?></div>
                        </div>
                        <div class="vd-agile-cont-col_three">
                            <a class="agile-btn vd-agile-primary" href="<?php echo $agile_btn_link_two; ?>"><?php echo $agile_btn_title_two; ?></a>
                            <div class="vd-agile-title vd-agile-title-cont"><?php echo $agile_cont_title_two; ?></div>
                            <div class="vd-agile-cont-description"><?php echo $agile_cont_description_two; ?></div>
                            <img class="sky_cont_img sky_cont_img_agile" src="<?php echo get_template_directory_uri(); ?>/image/Small illustrationagile.png" alt="">
                        </div>
                        <div class="vd-agile-cont-col_four">
                            <a class="agile-btn vd-agile-primary" href="<?php echo $agile_btn_link_three; ?>"><?php echo $agile_btn_title_three; ?></a>
                            <div class="vd-agile-title vd-agile-title-cont"><?php echo $agile_cont_title_three; ?></div>
                            <div class="vd-agile-cont-description-four"><?php echo $agile_cont_description_three; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="vd-footer-singele-bg"></section>

<?php endwhile; ?>

<?php get_footer(); ?>
