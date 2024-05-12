 <?php /* Template Name: Home page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
    $post_id = get_the_ID();
    $hero_title = get_post_meta($post_id, '_vd_hero_title', true);
    $hero_description = get_post_meta($post_id, '_vd_hero_desc', true);
    $hero_btn_title = get_post_meta($post_id, '_vd_hero_btn_text', true);
    $hero_btn_link = get_post_meta($post_id, '_vd_hero_btn_link', true);
    ?>

    <section class="vd_section vd_home_hero_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-hero-col">
                    <h2><?php echo $hero_title; ?></h2>
                    <div class="vd-hero-description"><?php echo $hero_description; ?></div>
                    <a class="btn vd-primary" href="<?php echo $hero_btn_link; ?>"><?php echo $hero_btn_title; ?></a>
                </div>
            </div>
        </div>
    </section>


    <?php
    $short_description = get_post_meta($post_id, '_vd_description', true);
    ?>

    <section class="vd_section vd_short_description_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-short-col">
                    <div class="vd-short-description"><?php echo $short_description; ?></div>
                </div>
            </div>
        </div>
    </section>


    <?php
    $stack_title = get_post_meta($post_id, '_vd_stack_title', true);
    $technologies = get_post_meta($post_id, '_vd_technologies', true);
    ?>

    <section class="vd_section vd_our_stack_section">
        <img class="vd-sky-2" src="<?php echo get_template_directory_uri(); ?>/image/Sky-2.png" alt="sky-bg-2">
        <div class="vd-container">
            <div class="row">
                <div class="col-12">
                    <h3><?php echo $stack_title; ?></h3>
                </div>
                <?php foreach ($technologies as $single_technology) : ?>
                    <?php
                    $img = $single_technology['technology_img'];
                    $img_url = wp_get_attachment_image_url($img, 'full');
                    $technology_title = $single_technology['technology_title'];
                    $technology_subtitle = $single_technology['technology_subtitle'];
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 vd-technology-col">
                        <img class="vd-technology-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                        <h5><?php echo $technology_title; ?></h5>
                        <div class="vd-technology-sub"><?php echo $technology_subtitle; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <img class="vd-ufo-2 vd-desktop-ufo" src="<?php echo get_template_directory_uri(); ?>/image/ufo_2.png" alt="ufo-img-2">
        <img class="vd-ufo-2 vd-mob-ufo" src="<?php echo get_template_directory_uri(); ?>/image/ufo_2_mob.png" alt="ufo-img-2">
    </section>


    <?php
    $about_title = get_post_meta($post_id, '_vd_about_title', true);
    $destinations = get_post_meta($post_id, '_vd_destinations', true);
    $clients_logos = get_post_meta($post_id, '_vd_clients_logo', true);
    $planet_title = get_post_meta($post_id, '_vd_planet_title', true);
    $planet_description = get_post_meta($post_id, '_vd_planet_description', true);
    ?>

    <section class="vd_section vd_about_us_section">
        <img class="vd-sky-2" src="<?php echo get_template_directory_uri(); ?>/image/Sky-3.png" alt="sky-bg-3">
        <div class="vd-container">
            <div class="row">
                <div class="col-12">
                    <h3><?php echo $about_title; ?></h3>
                </div>
                <?php foreach ($destinations as $index => $single_destination) : ?>
                    <?php
                    $destinations_title = $single_destination['destinations_title'];
                    $destinations_description = $single_destination['destinations_description'];
                    $destinations_link = $single_destination['destinations_link'];
                    $disable_link_projJ = $single_destination['disable_link_proj'];
                    $disable_link_proJ = get_post_meta(get_the_id(), $disable_link_projJ, true);

                    ?>
                    <div class="col-12 vd-destinations-<?php echo $index; ?>">
                        <div class="vd-destinations-box">
                            <h4><?php echo $destinations_title; ?></h4>
                            <div class="vd-destinations-description"><?php echo apply_filters( 'the_content',$destinations_description ); ?></div>

                            <?php if ($disable_link_proJ) : ?>

                            <?php else : ?>

                                <a href="<?php echo $destinations_link; ?>" class="vd-circle-btn"></a>

                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row vd-logos-row">
                <div class="col-12 vd-logos-wrap">
                    <?php foreach ($clients_logos as $single_logo) : ?>
                        <?php
                        $img = $single_logo['client_img'];
                        $img_url = wp_get_attachment_image_url($img, 'full');
                        ?>
                        <img class="vd-logo-img" src="<?php echo $img_url; ?>" alt="client-logo">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="vd-container vd-planet-container">
            <div class="row vd-planet-row">
                <div class="col-12">
                    <h3><?php echo $planet_title; ?></h3>
                </div>
                <div class="col-12 vd-planet-wrap">
                    <div class="vd-planet-description"><?php echo $planet_description; ?></div>
                </div>
<!--                <img class="vd-stack-planet vd-desktop-ufo" src="--><?php //echo get_template_directory_uri(); ?><!--/image/react-planet.png" alt="stack-planet">-->
<!--                <img class="vd-stack-planet vd-mob-ufo" src="--><?php //echo get_template_directory_uri(); ?><!--/image/mob-stack-planet.png" alt="stack-planet">-->
                <div class="vd-stack-planet vd-desktop-ufo">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_rv3apn8r.json" background="transparent" speed="1" style="width: 800px; height: 800px;" loop  autoplay></lottie-player>
                </div>
                <div class="vd-stack-planet vd-mob-ufo">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_rv3apn8r.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop  autoplay></lottie-player>
                </div>
            </div>

        </div>
    </section>


    <?php
    $_vd_out_projects_title = get_post_meta($post_id, '_vd_out_projects_title', true);
    $_vd_out_projects_btn_link = get_post_meta($post_id, '_vd_out_projects_btn_link', true);
    $_vd_out_projects_btn_text = get_post_meta($post_id, '_vd_out_projects_btn_text', true);
    $_vd_out_latest_projects = get_post_meta($post_id, '_vd_out_latest_projects', true);
    ?>

    <section class="vd_section vd_our_latest_projects">
        <div class="vd-container our-latest-projects">
            <div class="row our-projects">
                <div class="col-6 our-project our-project-title">
                    <div class="project-title">
                        <h3><?php echo $_vd_out_projects_title; ?></h3>
                        <a class="btn vd-primary" href="<?php echo $_vd_out_projects_btn_link; ?>"><?php echo $_vd_out_projects_btn_text; ?></a>
                    </div>
                </div>
                <?php foreach ($_vd_out_latest_projects as $single_project) : ?>
                    <?php
                    $title = $single_project['project_title'];
                    $description = $single_project['project_dscrptn'];
                    $link = $single_project['project_link'];
                    $img = $single_project['project_img'];
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


    <?php
    $_vd_our_philosophy_title = get_post_meta($post_id, '_vd_our_philosophy_title', true);
    $_vd_our_philosophy_btn_link = get_post_meta($post_id, '_vd_our_philosophy_btn_link', true);
    $_vd_our_philosophy_btn_title = get_post_meta($post_id, '_vd_our_philosophy_btn_title', true);
    $_vd_our_philosophy_dscrptn = get_post_meta($post_id, '_vd_our_philosophy_dscrptn', true);
    ?>

    <section class="vd_section vd_our_philosophy">
        <div class="vd-container our-philosophy">
            <div class="row our-philosophy-info">
                <div class="col-7 our-philosophy-title">
                    <h3><?php echo $_vd_our_philosophy_title; ?></h3>
                </div>
                <div class="col-5 our-philosophy-description">
                    <div class="our-philosophy-dscrptn"><?php echo $_vd_our_philosophy_dscrptn; ?></div>
                </div>
                <div class="col-12 link_our_philosophy">
                    <a class="btn vd-primary" href="<?php echo $_vd_our_philosophy_btn_link; ?>"><?php echo $_vd_our_philosophy_btn_title; ?></a>
                </div>
            </div>
        </div>
        <img class="sky_our_philosophy" src="<?php echo get_template_directory_uri(); ?>/image/Sky_for_philosophy_setion.png" alt="">
        <img class="planet planet_desktop" src="<?php echo get_template_directory_uri(); ?>/image/planet_desktop.png" alt="">
        <img class="planet planet_mobile" src="<?php echo get_template_directory_uri(); ?>/image/planet_mobile.png" alt="">
    </section>


    <section class="home_footer fake_footer">
        <img class="sky_img" src="<?php echo get_template_directory_uri(); ?>/image/Sky_for_footer.png" alt="">
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>