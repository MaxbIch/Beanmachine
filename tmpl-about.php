<?php /* Template Name: About page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
    $post_id = get_the_ID();
    $_vd_preface = get_post_meta($post_id, '_vd_preface', true);
    $_vd_preface_text = get_post_meta($post_id, '_vd_preface_text', true);
    $_vd_preface_link = get_post_meta($post_id, '_vd_preface_link', true);
    $_vd_preface_btn_text = get_post_meta($post_id, '_vd_preface_btn_text', true);
    $_vd_preface_title = get_post_meta($post_id, '_vd_preface_title', true);
    $_vd_preface_dscrptn = get_post_meta($post_id, '_vd_preface_dscrptn', true);
    ?>

    <section class="vd_section vd_preface_section">
        <div class="vd-container vd-preface-container">
            <div class="row vd-preface-top-row">
                <div class="col-6 vd-preface-text">
                    <div class="purple-text top-preface"><?php echo $_vd_preface; ?></div>
                    <div class="top-preface-text">
                        <h3><?php echo $_vd_preface_text; ?></h3>
                    </div>
                    <div class="toppContBut">
                        <a class="btn vd-primary" href="<?php echo $_vd_preface_link; ?>"><?php echo $_vd_preface_btn_text; ?></a>
                    </div>

                </div>
                <div class="col-6 block-animation">
                    <div>
<!--                        <video class="animation" id="gif1">-->
<!--                            <source src="--><?php //echo get_template_directory_uri(); ?><!--/image/video/balloons_video_start.mp4">-->
<!--                        </video>-->
<!--                        <div class="animation" id="gif1">-->
<!--                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>-->
<!--                            <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_db1zwwjj.json" background="transparent" speed="1"  autoplay></lottie-player>-->
<!--                        </div>-->
                        <div class="animation" id="gif1">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_aqoekoov.json" background="transparent" speed="1" autoplay></lottie-player>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row vd-preface-bottom-row">
                <div class="col-6 vd-preface-text">
                    <div class="bottom-text">
                        <div class="toppContZagBot">
                            <h3><?php echo $_vd_preface_title; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 block-animation">
                    <div class="gif">
<!--                        <video class="animation" id="gif2">-->
<!--                            <source src="--><?php //echo get_template_directory_uri(); ?><!--/image/video/balloons_video_finish.mp4">-->
<!--                        </video>-->
<!--                        <div class="animation" id="gif2">-->
<!--                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>-->
<!--                            <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_loxb4bgu.json" background="transparent" speed="1" autoplay></lottie-player>-->
<!--                        </div>-->
                        <div class="purple-text toppContTxt"><?php echo $_vd_preface_dscrptn; ?></div>
                    </div>
                </div>
                </div>
        </div>
<!--        <img class="sky-preface" src="--><?php //echo get_template_directory_uri(); ?><!--/image/sky_preface.png" alt="">-->
        <img class="bckgrnd-preface" src="<?php echo get_template_directory_uri(); ?>/image/AboutBack.png" alt="">
    </section>

    <script src="<?php echo get_template_directory_uri(); ?>/js/proc.js"></script>


    <?php
    $_vd_top_section_heading = get_post_meta($post_id, '_vd_top_section_heading', true);
    $_vd_top_section_dscrptn = get_post_meta($post_id, '_vd_top_section_dscrptn', true);
    $_vd_bottom_section_heading = get_post_meta($post_id, '_vd_bottom_section_heading', true);
    $_vd_managers_name = get_post_meta($post_id, '_vd_managers_name', true);
    $_vd_managers_position = get_post_meta($post_id, '_vd_managers_position', true);
    $_vd_another_managers_name = get_post_meta($post_id, '_vd_another_managers_name', true);
    $_vd_another_managers_position = get_post_meta($post_id, '_vd_another_managers_position', true);
    $_vd_bottom_section_dscrptn = get_post_meta($post_id, '_vd_bottom_section_dscrptn', true);
    $_vd_our_motto = get_post_meta($post_id, '_vd_our_motto', true);

    ?>

    <section class="vd_section vd_our_team_and_partners_section">
        <div class="vd-container vd-our-team-and-partners-container">
            <div class="row row-our-team">
                <div class="col-6">
                    <div class="section-heading">
                        <h3><?php echo $_vd_top_section_heading; ?></h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="purple-text top-section-description"><?php echo $_vd_top_section_dscrptn; ?></div>
                </div>
            </div>
            <img class="sky-our-team-and-partners" src="<?php echo get_template_directory_uri(); ?>/image/sky_outTeamAndPartners.png" alt="">
            <img class="planet-our-team-and-partners" src="<?php echo get_template_directory_uri(); ?>/image/planet_outTeamAndPartners.png" alt="">
            <div class="row row-our-partners midInfoCentr">
                <div class="col-6 col-our-partners">
                    <div class="section-heading">
                        <h3><?php echo $_vd_bottom_section_heading; ?></h3>
                    </div>
                    <div class="managers-info">
                        <div class="first-manager">
                            <div class="managers-name">
                                <h5><?php echo $_vd_managers_name; ?></h5>
                            </div>
                            <div class="manager-position"><?php echo $_vd_managers_position; ?></div>
                        </div>
                        <div class="another-manager">
                            <div class="managers-name">
                                <h5><?php echo $_vd_another_managers_name; ?></h5>
                            </div>
                            <div class="contactInfo12"><?php echo $_vd_another_managers_position; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-our-partners">
                    <div class="bottom-section-description-motto">
                        <div class="purple-text bottom-section-description"><?php echo $_vd_bottom_section_dscrptn; ?></div>
                        <div class="purple-text our-motto"><?php echo $_vd_our_motto; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--    <section class="about_footer fake_footer"></section>-->

<?php endwhile; ?>

<?php get_footer(); ?>
