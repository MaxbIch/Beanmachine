<?php /* Template Name: Look Book page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
    $post_id = get_the_ID();
    $_vd_general_title = get_post_meta($post_id, '_vd_general_title', true);
    $_vd_general_dscrptn = get_post_meta($post_id, '_vd_general_dscrptn', true);
    $_vd_general_link = get_post_meta($post_id, '_vd_general_link', true);
    $_vd_general_btn_text = get_post_meta($post_id, '_vd_general_btn_text', true);
    ?>

    <section class="vd_section vd_lookbool_our_projects_description_section">
        <div class="vd-container vd-lookbool-our-projects-description-container">
            <div class="row lookbool-our-projects-description-row-top">
                <div class="lookbook-general-title">
                    <h2><?php echo $_vd_general_title; ?></h2>
                </div>
            </div>
            <div class="row lookbool-our-projects-description-row-bottom">
                <div class="col-6 spaceship-lookbook-col">
                    <img class="spaceship-lookbook" src="<?php echo get_template_directory_uri(); ?>/image/spaceship_lookbook.png" alt="">
                </div>
                <div class="col-6 lookbool-description-col">
                    <div class="purple-text"><?php echo $_vd_general_dscrptn; ?></div>
                    <div>
                        <a class="btn vd-primary" href="<?php echo $_vd_general_link; ?>"><?php echo $_vd_general_btn_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="sky-lookbook" src="<?php echo get_template_directory_uri(); ?>/image/sky_lookbook.png" alt="">
        <img class="sky-spaceship-lookbook" src="<?php echo get_template_directory_uri(); ?>/image/sky_backgound_spaceship_lookbook.png" alt="">

    </section>


    <?php
    $_vd_look_book_featured_projects_header = get_post_meta(get_the_id(), '_vd_look_book_featured_projects_header', true);
    $_vd_look_book_featured_projects_slider = get_post_meta(get_the_id(), '_vd_look_book_featured_projects_slider', true);
    ?>

    <section class="vd_section vd_featured_projects_section">
        <div class="vd-container vd-featured-projects-container">
            <div class="row featured-projects-title-row">
                <div class="featured-projects-title">
                    <h3><?php echo $_vd_look_book_featured_projects_header; ?></h3>
                </div>
            </div>
            <div class="featured-projects-row">
                <div class="slick-init-<?php echo $post_id; ?>">
                    <?php foreach ($_vd_look_book_featured_projects_slider as $single_slide) : ?>
                        <?php
                        $project_number = $single_slide['look_book_project_number'];
                        $project_title = $single_slide['look_book_project_title'];
                        $project_dscrptn = $single_slide['look_book_project_dscrptn'];
                        $technologies_used = $single_slide['look_book_technologies_used'];
                        $first_button_title_for_project = $single_slide['look_book_first_button_title_for_project'];
                        $first_link_for_project = $single_slide['look_book_first_link_for_project'];
                        $second_button_title_for_project = $single_slide['look_book_second_button_title_for_project'];
                        $second_link_for_project = $single_slide['look_book_second_link_for_project'];
                        $project_illustration = $single_slide['look_book_project_illustration'];
                        $project_illustration_url = wp_get_attachment_image_url($project_illustration, 'full');
                        $disable_link_projj = $single_slide['disable_link_proj'];
                        $disable_link_proj = get_post_meta(get_the_id(), $disable_link_projj, true);



                        ?>
                        <div class="featured-projects-box">
                            <div class="featured-project-description">
                                <div class="number-featured-project"><?php echo $project_number; ?></div>
                                <div class="title-featured-project">
                                    <h4><?php echo $project_title; ?></h4>
                                </div>
                                <div class="dscrpn-featured-project"><?php echo $project_dscrptn; ?></div>
                                <div class="row technology-featured-project">
                                    <?php foreach ($technologies_used as $single_technology) :?>
                                        <?php
                                        $technologies_title = $single_technology['technologies_title'];
                                        ?>
                                        <div class=""><?php echo $technologies_title; ?></div>
                                    <?php endforeach;?>
                                </div>
                                <div class="links-featured-project">
                                    <div class="first-link-featured-project">
                                        <a class="purple-text btn vd-primary" href="<?php echo $first_link_for_project; ?>"><?php echo $first_button_title_for_project; ?></a>
                                    </div>

                                    <?php if ($disable_link_proj) : ?>

                                    <?php else : ?>

                                        <div class="second-link-featured-project ">
                                            <a href="<?php echo $second_link_for_project; ?>"><?php echo $second_button_title_for_project; ?></a>
                                            <a href="<?php echo $first_link_for_project; ?>"><img class="arr-blue" src="<?php echo get_template_directory_uri(); ?>/image/arr-blue.png" alt=""></a>
                                        </div>

                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="featured-projects-illustration">
                                <img src="<?php echo $project_illustration_url; ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <img class="sky-featured-projects" src="<?php echo get_template_directory_uri(); ?>/image/sky_featured_projects.png" alt="">
            <img class="sky-lookbook-slider-mobile" src="<?php echo get_template_directory_uri(); ?>/image/sky_background_lookbook_slider.png" alt="">
        </div>
    </section>

    <script>
        jQuery(document).ready(function () {
            jQuery('.slick-init-<?php echo $post_id; ?>').slick({
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
    $_vd_look_book_out_projects_title = get_post_meta($post_id, '_vd_look_book_out_projects_title', true);
    $_vd_look_book_out_projects_btn_link = get_post_meta($post_id, '_vd_look_book_out_projects_btn_link', true);
    $_vd_look_book_out_projects_btn_text = get_post_meta($post_id, '_vd_look_book_out_projects_btn_text', true);
    $_vd_look_book_out_latest_projects = get_post_meta($post_id, '_vd_look_book_out_latest_projects', true);
    ?>

    <section class="vd_section vd_our_latest_projects vd_look_book_our_latest_projects">
        <div class="vd-container our-latest-projects">
            <div class="row our-projects">
                <div class="col-6 our-project our-project-title">
                    <div class="project-title">
                        <h3><?php echo $_vd_look_book_out_projects_title; ?></h3>
                        <a class="btn vd-primary" href="<?php echo $_vd_look_book_out_projects_btn_link; ?>"><?php echo $_vd_look_book_out_projects_btn_text; ?></a>
                    </div>
                </div>
                <?php foreach ($_vd_look_book_out_latest_projects as $single_project) : ?>
                    <?php
                    $title = $single_project['look_book_project_title'];
                    $description = $single_project['look_book_project_dscrptn'];
                    $link = $single_project['look_book_project_link'];
                    $img = $single_project['look_book_project_img'];
                    $img_url = wp_get_attachment_image_url($img, 'full');
                    ?>
                    <div class="col-6 our-project our-project-dscrptn">
                        <div class="project-dscrptn">
                            <h3><?php echo $title; ?></h3>
                            <a class="vd-circle-btn" href="<?php echo $link; ?>"></a>
                        </div>
                        <p><?php echo $description; ?></p>
                        <div>
                            <img src="<?php echo $img_url; ?>" alt=""/>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section class="lookbook_footer fake_footer">
        <img src="<?php echo get_template_directory_uri(); ?>/image/sky_lookbook_footer.png" alt="">
    </section>


<?php endwhile; ?>

<?php get_footer(); ?>


