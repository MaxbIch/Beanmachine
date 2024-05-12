
<?php get_header(); ?>

    <?php
    $post_id = get_the_ID();
    $prefix = '_vd_project_';

    // project fields

    $title = get_the_title($post_id);
    $site_title = get_post_meta($post_id, $prefix . 'site_title', true);
    $short_dscrptn = get_post_meta($post_id, $prefix . 'short_dscrptn', true);
    $site_btn_title = get_post_meta($post_id, $prefix . 'site_btn_title', true);
    $site_btn_link = get_post_meta($post_id, $prefix . 'site_btn_link', true);
    $site_general_screenshot = get_post_meta($post_id, $prefix . 'site_general_screenshot', true);
    $site_general_screenshot_url = wp_get_attachment_image_url($site_general_screenshot, 'full');
    $client_information_title_first = get_post_meta($post_id, $prefix . 'client_information_title_first', true);
    $client_information_dscrptn_first = get_post_meta($post_id, $prefix . 'client_information_dscrptn_first', true);
    $client_information_title_second = get_post_meta($post_id, $prefix . 'client_information_title_second', true);
    $client_information_dscrptn_second = get_post_meta($post_id, $prefix . 'client_information_dscrptn_second', true);
    $client_information_title_third = get_post_meta($post_id, $prefix . 'client_information_title_third', true);
    $client_information_dscrptn_third = get_post_meta($post_id, $prefix . 'client_information_dscrptn_third', true);
    $client_information_title_fourth = get_post_meta($post_id, $prefix . 'client_information_title_fourth', true);
    $client_information_dscrptn_fourth = get_post_meta($post_id, $prefix . 'client_information_dscrptn_fourth', true);
    ?>

    <section class="vd_inner_section vd_project_banner_section">
        <img class="sky-inner-project-banner" src="<?php echo get_template_directory_uri(); ?>/image/sky_inner_project_banner.png" alt="">
        <div class="vd-container vd-project-banner-container">
            <div class="row row-back-btn row-text">
                <div class="col">
<!--                    <a href="--><?php //echo ; ?><!--">--><?php //echo ; ?><!--Back</a>-->
                    <div class="back-link">
                        <a class="purple-text" href="#">Back</a>
                    </div>
                </div>
            </div>
            <div class="row row-site-text row-text">
                <div class="col site-title">
                    <h1><?php echo $site_title; ?></h1>
                </div>
            </div>
            <div class="row row-text row-short-dscrptn">
                <div class="col short-dscrptn">
                    <div class="purple-text"><?php echo $short_dscrptn; ?></div>
                </div>
                <div class="col">
                    <div class="link-site">
                        <a class="purple-text" href="<?php echo $site_btn_link; ?>"><?php echo $site_btn_title; ?></a>
                    </div>
                </div>
            </div>
            <div class="row img">
                <div  class="site-general-screenshot">
                    <img class="fix" src="<?php echo $site_general_screenshot_url; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="vd-container client-info-container ">
            <div class="row client-info-top-row">
                <div class="col client-col">
                    <div class="info-container-left">
                        <div>
                            <div class="client-information-title purple-text"><?php echo $client_information_title_first; ?></div>
                            <div class="purple-text-200"><?php echo $client_information_dscrptn_first; ?></div>
                        </div>
                        <div>
                            <div class="client-information-title purple-text"><?php echo $client_information_title_third; ?></div>
                            <div class="purple-text-200"><?php echo $client_information_dscrptn_third; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col deliverables-col-right">
                    <div class="info-container-right">
                        <div>
                            <div class="client-information-title purple-text"><?php echo $client_information_title_second; ?></div>
                            <div class="purple-text-200"><?php echo $client_information_dscrptn_second; ?></div>
                        </div>
                        <div>
                            <div class="client-information-title purple-text"><?php echo $client_information_title_fourth; ?></div>
                            <div class="purple-text-200"><?php echo $client_information_dscrptn_fourth; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    $site_screenshot_first = get_post_meta($post_id, $prefix . 'site_screenshot_first', true);
    $site_screenshot_first_url = wp_get_attachment_image_url($site_screenshot_first, 'full');
    $text_website_description = get_post_meta($post_id, $prefix . 'text_website_description', true);
    $site_screenshot_second = get_post_meta($post_id, $prefix . 'site_screenshot_second', true);
    $site_screenshot_second_url = wp_get_attachment_image_url($site_screenshot_second, 'full');
    $site_screenshot_third = get_post_meta($post_id, $prefix . 'site_screenshot_third', true);
    $site_screenshot_third_url = wp_get_attachment_image_url($site_screenshot_third, 'full');
    $enable_s_bottom_level_desc_section = get_post_meta($post_id, $prefix . 'enable_s_bottom_level_desc_section', true);
    ?>

    <section class="vd_inner_section vd_website_description_with_first_collage_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-5">
                    <div class="img-case">
                        <img class="fix" src="<?php echo $site_screenshot_first_url; ?>" alt="">
                    </div>
                </div>
                <div class="col-7">
                    <div class="purple-text-200">
                        <?php echo $text_website_description; ?>
                    </div>
                </div>

                <?php if ($enable_s_bottom_level_desc_section) { ?>

                    <div class="col-7">
                        <div class="img-case">
                            <img class="fix" src="<?php echo $site_screenshot_second_url; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="img-case">
                            <img class="fix" src="<?php echo $site_screenshot_third_url; ?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


    <?php
    $top_text_dscrptn_website_success = get_post_meta($post_id, $prefix . 'top_text_dscrptn_website_success', true);
    $central_bold_text_dscrptn_website_success = get_post_meta($post_id, $prefix . 'central_bold_text_dscrptn_website_success', true);
    $bottom_text_dscrptn_website_success = get_post_meta($post_id, $prefix . 'bottom_text_dscrptn_website_success', true);
    $enable_describing_site_desc_section = get_post_meta($post_id, $prefix . 'enable_describing_site_desc_section', true);
    ?>



        <section class="vd_inner_section vd_text_describing_site_success_section">
            <div class="vd-container">
                <div class="row">
                    <div class="col top-text-describing-site-success purple-text-200"><?php echo $top_text_dscrptn_website_success; ?></div>
                </div>

                <?php if ($enable_describing_site_desc_section) { ?>

                <div class="row central-row">
                    <div class="col-6">
                        <div class="central-bold-text"><?php echo $central_bold_text_dscrptn_website_success; ?></div>
                        <div class="purple-text-200"><?php echo $bottom_text_dscrptn_website_success; ?></div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </section>





    <?php
    $collage_image_first = get_post_meta($post_id, $prefix . 'collage_image_first', true);
    $collage_image_first_url = wp_get_attachment_image_url($collage_image_first, 'full');
    $collage_image_second = get_post_meta($post_id, $prefix . 'collage_image_second', true);
    $collage_image_second_url = wp_get_attachment_image_url($collage_image_second, 'full');
    $collage_image_third = get_post_meta($post_id, $prefix . 'collage_image_third', true);
    $collage_image_third_url = wp_get_attachment_image_url($collage_image_third, 'full');
    $enable_s_top_level_website_section = get_post_meta($post_id, $prefix . 'enable_s_top_level_website_section', true);
    ?>

    <section class="vd_inner_section vd_website_image_collage_section">
        <div class="vd-container">
            <div class="row">

                <?php if ($enable_s_top_level_website_section) { ?>

                <div class="col-6 img-col">
                    <div>
                        <img class="fix" src="<?php echo $collage_image_first_url; ?>" alt="">
                    </div>
                </div>
                <div class="col-6 img-col">
                    <div>
                        <img class="fix" src="<?php echo $collage_image_second_url; ?>" alt="">
                    </div>
                </div>
                <?php } ?>
                <div class="col-12 img-col">
                    <div>
                        <img class="fix" src="<?php echo $collage_image_third_url; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    $title_first_slider = get_post_meta($post_id, $prefix . 'title_first_slider', true);
    $description_first_slider = get_post_meta($post_id, $prefix . 'description_first_slider', true);
    $first_inner_slider = get_post_meta($post_id, $prefix . 'first_inner_slider', true);
    ?>

    <section class="vd_inner_section first_slider_section">
        <div class="vd-container">
                <div class="row text-first-slider-row">
                    <div class="title-first-slider"><?php echo $title_first_slider; ?></div>
                    <div class="description-first-title purple-text-200"><?php echo $description_first_slider; ?></div>
                </div>
        </div>
        <div class="first-slider-container">
                <div class="slider-row">
                    <div class="slick-init-inner-first-slider">
                        <?php foreach ($first_inner_slider as $single_slide) : ?>
                        <?php
                        $website_screenshot = $single_slide['website_screenshot'];
                        $website_screenshot_url = wp_get_attachment_image_url($website_screenshot, 'full');
                        ?>
                        <div class="single-slide-img">
                            <img class="fix" src="<?php echo $website_screenshot_url; ?>" alt="">
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function () {
            jQuery('.slick-init-inner-first-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                infinite: true,
                speed: 500,
                fade: false,
                variableWidth: true,
                centerMode: true,
            });
        });
    </script>


    <?php
    $website_collage_header = get_post_meta($post_id, $prefix . 'website_collage_header', true);
    $website_collage_description = get_post_meta($post_id, $prefix . 'website_collage_description', true);
    $website_screenshot_first = get_post_meta($post_id, $prefix . 'website_screenshot_first', true);
    $website_screenshot_first_url = wp_get_attachment_image_url($website_screenshot_first, 'full');
    $website_screenshot_second = get_post_meta($post_id, $prefix . 'website_screenshot_second', true);
    $website_screenshot_second_url = wp_get_attachment_image_url($website_screenshot_second, 'full');
    $enable_first_collage_section = get_post_meta($post_id, $prefix . 'enable_first_collage_section', true);
    ?>

    <?php if ($enable_first_collage_section) { ?>

    <section class="vd_inner_section vd_website_description_with_first_collage_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-7">
                    <div class="purple-text-200">
                        <h4><?php echo $website_collage_header; ?></h4>
                        <?php echo $website_collage_description; ?>
                    </div>
                </div>
                <div class="col-5">
                    <div class="img-case">
                        <img class="fix" src="<?php echo $website_screenshot_first_url; ?>" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="img-case">
                        <img class="fix" src="<?php echo $website_screenshot_second_url; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php } ?>

    <?php
        $title_second_slider = get_post_meta($post_id, $prefix . 'title_second_slider', true);
        $description_second_slider = get_post_meta($post_id, $prefix . 'description_second_slider', true);
        $second_inner_slider = get_post_meta($post_id, $prefix . 'second_inner_slider', true);
        $enable_s_slider = get_post_meta($post_id, $prefix . 'enable_s_slider', true);
    ?>

    <?php if ($enable_s_slider) { ?>

        <section class="vd_inner_section vd_thats_where_bean_machine_slider_section">
            <div class="vd-container">
                <div class="row text-second-slider">
                    <div class="col-6">
                        <div class="title-second-slider">
                            <?php echo $title_second_slider; ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="description-second-slider purple-text-200">
                            <?php echo $description_second_slider; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vd-container second-slider-container">
                <div class="slick-init-inner-second-slider">
                    <?php foreach ($second_inner_slider as $single_slide) : ?>
                        <?php
                        $website_mobile_screenshot = $single_slide['website_mobile_screenshot'];
                        $website_mobile_screenshot_url = wp_get_attachment_image_url($website_mobile_screenshot, 'full');
                        ?>
                        <div class="single-mobile-screenshot">
                            <img class="fix" src="<?php echo $website_mobile_screenshot_url; ?>" alt="">
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function () {
                jQuery('.slick-init-inner-second-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    infinite: true,
                    speed: 500,
                    fade: false,
                    variableWidth: true,
                    centerMode: true,
                });
            });
        </script>

    <?php } ?>


    <?php
    $central_text_question = get_post_meta($post_id, $prefix . 'central_text_question', true);
    $right_text_response = get_post_meta($post_id, $prefix . 'right_text_response', true);
    ?>

    <section class="vd_inner_section last_text_section">
        <div class="vd-container last-text-container">
            <div class="row">
                <div class="last-text-question"><?php echo $central_text_question; ?></div>
            </div>
            <div class="row last-text-row">
                <div class="col-6 last-text-response-col">
                    <div ><?php echo $right_text_response; ?></div>
                </div>
            </div>
        </div>
    </section>


    <?php
    $title_next_project = get_post_meta($post_id, $prefix . 'title_next_project', true);
    $next_project_btn_title = get_post_meta($post_id, $prefix . 'next_project_btn_title', true);
    $next_project_btn_link = get_post_meta($post_id, $prefix . 'next_project_btn_link', true);
    $next_project_screenshot = get_post_meta($post_id, $prefix . 'next_project_screenshot', true);
    $next_project_screenshot_url = wp_get_attachment_image_url($next_project_screenshot, 'full');
    ?>

    <section class="vd_inner_section">
        <div class="vd-container next-project-container">
            <div class="row next-project-title-row">
                <div class="col-6">
                    <div class="next-project-title"><?php echo $title_next_project; ?></div>
                </div>
                <div class="col-6 link-next-project-col">
                    <div class="link-next-project">
                        <a class="purple-text" href="<?php echo $next_project_btn_link; ?>"><?php echo $next_project_btn_title; ?></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div>
                    <img class="fix" src="<?php echo $next_project_screenshot_url; ?>" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="vd_inner_section inner_footer fake_footer">
        <img class="cont-bot" src="<?php echo get_template_directory_uri(); ?>/image/sky_contact_footer_desctop.png" alt="">
    </section>

<?php get_footer(); ?>