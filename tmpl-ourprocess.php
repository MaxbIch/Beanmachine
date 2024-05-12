<?php /* Template Name: Our Process page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
        $post_id = get_the_ID();
        $process_description = get_post_meta($post_id, '_vd_process_description', true);
        $process_title = get_post_meta($post_id, '_vd_process_title', true);
        $process_cont = get_post_meta($post_id, '_vd_process_cont', true);
        $process_btn_link = get_post_meta($post_id, '_vd_process_btn_link', true);
        $process_btn_title = get_post_meta($post_id, '_vd_process_btn_title', true);
    ?>

    <section class="vd_section vd_process_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-process-col">
                    <div class="vd-process-description"><?php echo $process_description; ?></div>
                    <div class="vd-process-title"><?php echo $process_title; ?></div>
                    <div class="vd-proces-cont">
                        <div class="vd-process-cont"><?php echo $process_cont; ?></div>
                    </div>
                    <div class="proces-btn">
                        <a class="process-btn vd-process-primary" href="<?php echo $process_btn_link; ?>">
                            <?php echo $process_btn_title; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $drop_title = get_post_meta($post_id, '_vd_drop_title', true);
        $drop_desc = get_post_meta($post_id, '_vd_drop_desc', true);
        $dropdowns = get_post_meta($post_id, '_vd_dropdowns', true);
    ?>

    <section class="vd_section vd_drop_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12  vd-drop-col">
                    <div class="dropdown-title">
                        <h2 class="vd-drop-title"><?php echo $drop_title; ?></h2>
                        <div class="vd-drop-desc"><?php echo $drop_desc; ?></div>
                    </div>
                    <?php foreach ($dropdowns as $single_dropdown) : ?>
                        <?php
                        $dropdown_single_title = $single_dropdown['dropdown_single_title'];
                        $dropdown_btn_title = $single_dropdown['dropdown_btn_title'];
                        $dropdown_single_open_cont = $single_dropdown['dropdown_single_open_cont'];

                        ?>
                        <div class="dropdown-cont vd-single-dropdown">

                            <div class="vd-detect-wrap">
                                <a class="dropdown-btn vd-dropdown-primary" href="javascript:void(0);"><?php echo $dropdown_btn_title; ?></a>
                                <div class="dropdown-cont-title"><?php echo $dropdown_single_title; ?></div>
                            </div>

                            <div class="dropdown-cont-open"><?php echo $dropdown_single_open_cont; ?></div>

                            <div class="vd-arrow-wrap">
                                <img class="dropdown-active vd-drop-arrow" src="<?php echo get_template_directory_uri(); ?>/image/Arrow.svg" alt="Open-arrow">
                                <img class="dropdown-close vd-drop-arrow" src="<?php echo get_template_directory_uri(); ?>/image/arrow-close.png" alt="Close-arrow">
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <style>

        /* Extra fix */
        .vd-drop-desc {
            margin-top: 20px;
        }

        .vd-arrow-wrap {
            position: absolute;
            right: 0;
            top: 70px;
            width: 28px;
            height: 28px;
        }
        .vd-arrow-wrap .vd-drop-arrow {
            margin: 0 0 0 0;
            float: none;
        }
        .vd-single-dropdown {
            position: relative;
            display: flex;
            justify-content: space-between;
        }
        .vd-single-dropdown .dropdown-cont-title {
            min-height: 80px;
        }
        .dropdown-cont-open {
            padding: 40px 80px 0 0;
        }
        .vd-detect-wrap {
            width: 100%;
            max-width: 320px;
        }
        .vd-detect-wrap .agile-btn,
        .vd-detect-wrap .dropdown-btn {
            
        }

        @media screen and (max-width: 991px) {
            .vd-single-dropdown{
                flex-direction: column;
            }
            .dropdown-cont-open {
                padding: 0;
            }
            .vd-drop-col {
                margin: 55px 0 80px 0;
            }
        }


    </style>

    <script>
        jQuery(document).ready(function(){

            jQuery('.vd-single-dropdown').on('click',function() {

                if (jQuery(this).hasClass("dropdown-cont-active")) {

                    jQuery(this).toggleClass("dropdown-cont-active");

                } else {

                    jQuery(".dropdown-cont").removeClass("dropdown-cont-active");
                    jQuery(this).toggleClass("dropdown-cont-active");

                }

            });

            // jQuery('.vd-single-dropdown').on('click',function() {
            //     jQuery(this).toggleClass("dropdown-cont-active");
            // });

        });
    </script>


    <?php
    $post_id = get_the_ID();
    $guide_title = get_post_meta($post_id, '_vd_guide_title', true);
    $guide_btn_link = get_post_meta($post_id, '_vd_guide_btn_link', true);
    $guide_btn_title = get_post_meta($post_id, '_vd_guide_btn_title', true);
    ?>

    <section class="vd_section vd_guide_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-guide-col vd-pros-col">
                    <h3 class="vd-guide-title"><?php echo $guide_title; ?></h3>
                    <a class="guide-btn vd-guide-primary" href="<?php echo $guide_btn_link; ?>"><?php echo $guide_btn_title; ?></a>
<!--                    <img class="guide-active" src="--><?php //echo get_template_directory_uri(); ?><!--/image/Visual.png" alt="">-->
                </div>
            </div>
        </div>
    </section>

    <section class="vd-footer-singele-bg vd-footer-singele-bg-process">
        <img class="sky_agile_img sky-footer-process" src="<?php echo get_template_directory_uri(); ?>/image/sky-footer-process.png" alt="">
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>