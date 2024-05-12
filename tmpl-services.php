<?php /* Template Name: Services page */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>




    <?php
        $post_id = get_the_ID();
        $services_description = get_post_meta($post_id, '_vd_services_description', true);
        $services_title = get_post_meta($post_id, '_vd_services_title', true);
    ?>



    <section class="vd_section vd_services_section">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-services-col">
                    <div class="vd-services-description"><?php echo $services_description; ?></div>
                    <div class="vd-services-title"><?php echo $services_title; ?></div>
                </div>
            </div>
        </div>
        <div class="services-back">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_1xgzsmjf.json" background="transparent" speed="1" loop  autoplay></lottie-player>
        </div>
    </section>


    <?php
    $services_technology = get_post_meta($post_id, '_vd_services_technologies', true);
    ?>

    <section class="vd_section vd_services_cont">
        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-services-coll">
                    <?php foreach ($services_technology as $single_services_technology) : ?>
                        <?php
                            $img = $single_services_technology['technology_services_img'];
                            $img_url = wp_get_attachment_image_url($img, 'full');
                            $technology_services_title = $single_services_technology['technology_services_title'];
                            $technology_services_subtitle = $single_services_technology['technology_services_subtitle'];
                            $technology_services_link_href = $single_services_technology['technology_services_link_href'];
                            $technology_services_position = $single_services_technology['right_position'];

                            ?>

                        <div class="col-12 vd-single-services <?php if($technology_services_position){ ?>vd-decription-to-right<?php } ?>">
                            <img class="vd-technology-services-img" src="<?php echo $img_url; ?>" alt="technology-photo">
                            <h3 class="vd-technology-services-tittle"><?php echo $technology_services_title; ?></h3>
                            <div class="vd-technology-services-sub">
                                <?php echo $technology_services_subtitle; ?>
                                <a class="vd-technology-services-link" href="<?php echo $technology_services_link_href; ?>"><div class="vd-technology-services-link">Learn more<img class="vd-technology-services-link-img" src="<?php echo get_template_directory_uri(); ?>/image/arrow-services-learn.png" alt=""></div></a>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="vd-footer-singele-bg vd-footer-singele-services-bg"></section>


<?php endwhile; ?>

<?php get_footer(); ?>