

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


    <?php
        $post_id = get_the_ID();
        $author_id = $post_id->post_author;
        $url = wp_get_attachment_url( get_post_thumbnail_id($post_id), 'full' );
    ?>

    <section class="blog_common_section">
        <img class="background-sky-inner-blog" src="<?php echo get_template_directory_uri(); ?>/image/sky_for_blog.png" alt="background-sky-inner-blog">
        <div class="vd-container">
            <div class="row blog_common_section_banner">
                <div class="col-12 blog_common_section_banner_button_href">
                    <div class="back-link">
                        <a class="purple-text" href="<?php echo get_site_url(); ?>/blog/">Back</a>
                    </div>
                    <div class="blog-but">
                        <?php $cats = get_the_category($post_id); ?>
                        <?php foreach ($cats as $cat) : ?>
                            <?php $cat_name = $cat->name; ?>
                            <div class="contact_subtitle single-post-cat"><?php echo $cat_name; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 vd-main-top-inner-info">
                    <div class="blog_common_section_banner_title"><?php echo get_the_title( $post_id ); ?></div>
                    <div class="blog_common_section_banner_descpr"><?php the_excerpt(); ?></div>
                    <div class="blog_common_section_banner_author">By <?php echo get_the_author_meta('display_name', $author_id); ?></div>
                    <img class="blog_common_section_banner_img" src="<?php echo $url; ?>" alt="blog_common_section_banner_img">
                </div>
            </div>
        </div>
    </section>


    <?php
    $post_id = get_the_ID();
    $vd_inner_content_sections = get_post_meta($post_id, '_vd_inner_content_sections', true);
    $vd_inner_content_section_bold_descpr = get_post_meta($post_id, '_vd_inner_content_section_bold_descpr', true);
    $vd_inner_content_section_bold = get_post_meta($post_id, '_vd_inner_content_section_bold', true);
    $vd_inner_content_section_bold_check = get_post_meta(get_the_id(), '_vd_inner_content_section_bold_check', true);
    ?>

    <section class="inner-content-section">
        <div class="vd-container">
            <div class="row inner-content">
                <div class="col-12 inner-content-section-desc">
                    <div class="inner-main_content_section">
                        <?php echo $vd_inner_content_sections; ?>
                    </div>

                    <?php if ($vd_inner_content_section_bold_check) : ?>

                    <?php else : ?>

                        <div class="inner_content_section_bold"><?php echo $vd_inner_content_section_bold; ?>
<!--                            <div class="blog_common_section_banner_authorr">By --><?php //echo get_the_author_meta('display_name', $author_id); ?><!--</div>-->
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $socials = get_post_meta($post_id, '_vd_socials', true);
    $disable_social = get_post_meta(get_the_id(), '_vd_disable_social', true);

    ?>

    <?php if ($disable_social) : ?>

    <?php else : ?>

        <section class="share_section">
            <div class="container">
                <div class="row social-section">
                    <div class="col-12 social-section-cont">
                        <div class="social-title">Share : </div>
                        <?php foreach ($socials as $single_social) : ?>
                            <?php
                            $img = $single_social['social_img'];
                            $img_url = wp_get_attachment_image_url($img, 'full');
                            $vd_social_link = $single_social['_vd_social_link'];
                            ?>
                            <div>
                                <a class="social_link" href="<?php echo $vd_social_link; ?>"><img class="socials-img" src="<?php echo $img_url; ?>" alt="technology-photo"></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>

    <section class="vd-footer-singele-bg">
        <img class="background-sky-inner-blog" src="<?php echo get_template_directory_uri(); ?>/image/sky_contact_footer_desctop.png" alt="">
    </section>
<?php endwhile; ?>
<style>
    .single-post-cat.single-post-cat-hidden {
        display: none;
    }
    .single-post-cat-plus:hover {
        cursor: pointer;
    }
</style>
<script>
    const hideShowCats1 = () => {

        jQuery('.single-post-cat-plus').remove();

        jQuery('.single-post-cat').removeClass('single-post-cat-hidden');

        jQuery('.blog-but').each((index1, element1) => {

            const catNumber1 = jQuery('.single-post-cat', element1).length;

            let catWrapperWidth1 = jQuery(element1).outerWidth(true);

            let visibleCatNumber1 = 0;

            const plusButtonWidth1 = 50;

            catWrapperWidth1 = catWrapperWidth1 - plusButtonWidth1;

            jQuery('.single-post-cat', element1).each((internalIndex1, internalEmenet1) => {

                const singleCatWidth1 = jQuery(internalEmenet1).outerWidth(true);

                catWrapperWidth1 = catWrapperWidth1 - singleCatWidth1;

                if (catWrapperWidth1 >= 0) {

                    visibleCatNumber1++;

                } else {

                    return false;

                }

            })

            if (visibleCatNumber1 < catNumber1) {

                const plusCats1 = catNumber1 - visibleCatNumber1;

                const hideIndex1 = visibleCatNumber1 - 1;

                jQuery('.single-post-cat', element1).each((internalIndex1, internalEmenet1) => {

                    if (internalIndex1 > hideIndex1) {

                        jQuery(internalEmenet1).addClass('single-post-cat-hidden');

                    }

                });

                jQuery(element1).append('<div class="contact_subtitle single-post-cat single-post-cat-plus">+' + plusCats1 + '</div>')

                jQuery('.single-post-cat-plus').on('click',function() {
                    jQuery(this).hide();
                    jQuery('.single-post-cat').removeClass('single-post-cat-hidden');
                    // const someSlug1 = jQuery(this).parent().attr('slugtrigger');
                    // jQuery(`.blog-but[slugtrigger="${someSlug}"] .single-post-cat`).removeClass('single-post-cat-hidden');

                });

            }

        })


    }

    jQuery(window).on('load', hideShowCats1);
    jQuery(window).on('resize', hideShowCats1);

</script>

<?php get_footer(); ?>

