<?php
/**
 * Archive Template
 */
?>
<div class="vd-headerBlog"><?php get_header(); ?></div>

    <?php
        $settings = get_option('vd_main_settings');
        $blank_title = $settings['_vd_blank_title'];
        $blank_link_text = $settings['_vd_blank_link_text'];
        $choose_articles = $settings['_vd_choose_articles'];
    ?>

    <section class="vd-archive">
        <img class="background-sky-blog" src="<?php echo get_template_directory_uri(); ?>/image/sky_for_blog.png" alt="">
        <div class="container vd-featured-article-wrap blog-featured-article-wrap">
            <div class="row blog-top">
<!--                --><?php
//                    // Featured article query
//
//                    $featured_query = new WP_Query( array(
//                        'posts_per_page' => 1,
//                        'post__in' => $choose_articles,
//                        'post_type' => 'post',
//                        'post_status' => 'publish'
//                    ));
//
//                    var_dump($choose_articles);
//                ?>
<!---->
<!--                --><?php //if ( $featured_query->have_posts() ) : ?>
<!--                    --><?php //while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>

                        <div class="blog-top-left-part col-12 col-md-6">
                            <div class="vd-recent-title blog-recent-title "><?php echo get_the_title($choose_articles); ?></div>
                            <div class="vd-short-description blog-short-description"><?php the_excerpt($choose_articles); ?></div>
                            <?php
                                $top_post = get_post($choose_articles);
                                $top_slug = $top_post->post_name;
                            ?>
                            <div class="blog-identify-list identify-list" slugtrigger="<?php echo $top_slug; ?>-banner">
                                <?php
                                $cats = get_the_category($choose_articles);

                                foreach ($cats as $single_cat) : ?>
                                    <?php
                                    $cat_name =  $single_cat->name;
                                    ?>
                                    <div class="vd-single-cat-name blog-vd-single-cat-name"><?php echo $cat_name; ?></div>
                                <?php endforeach; ?>

                            </div>
                            <div class="vd-bottom-featured-info blog-bottom-featured-info">
                                <div class="vd-author-info blog-author-info">
                                    By <?php
                                        $author_id = get_post_field ('post_author', $choose_articles);
                                        $display_name = get_the_author_meta( 'display_name' , $author_id );
                                        echo $display_name;
                                    ?>
                                </div>
                                <a class="blog-read-more" href="<?php the_permalink($choose_articles); ?>">Read more<img class="vd-technology-services-link-img vd-technology-blog-link-img" src="<?php echo get_template_directory_uri(); ?>/image/ArrowBlogTop.png" alt=""></a>
                            </div>
                        </div>
                        <div class="blog-top-right-part col-12 col-md-6">
                            <?php  $img_url = wp_get_attachment_url( get_post_thumbnail_id($choose_articles), 'thumbnail' ); ?>
                            <img  class="blog-top-right-part-img" src="<?php echo $img_url; ?>" alt="Featured article image">
                        </div>

<!--                    --><?php //endwhile;
//                    wp_reset_postdata();
//                endif; ?>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 vd-category-menu">
                    <h4 class="categories-trigger">Feed the machine</h4>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'categoryMenu',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ] ); ?>
                </div>
            </div>
        </div>
        <div class="vd-category-result-container">
<!--            <img class="background-sky-blog" src="--><?php //echo get_template_directory_uri(); ?><!--/image/sky_middle_for_blok.png" alt="">-->
            <div class="container">
<!--                <div class="row vd-recipe-row latest-articles">-->
<!--                    <div class="col-12">-->
<!--                        <h3>Latest Articles</h3>-->
<!--                    </div>-->
<!--                    <div class="col-12 vd-related-query vd_all_blog_section">-->
<!---->
<!--                        --><?php
//                            $args_last = array(
//                                'posts_per_page' => 2,
//                                'post_type' => 'post',
//                                'order' => 'DESC',
//                                'orderby' => 'date'
//                            );
//                            $query = new WP_Query( $args_last );
//                        ?>
<!---->
<!--                        --><?php //if ( $query->have_posts() ) : ?>
<!--                            --><?php //$num = 0; ?>
<!--                            --><?php //while ( $query->have_posts() ) : $query->the_post(); ?>
<!--                                --><?php //$num += 1; ?>
<!--                                <div class="post_wrap --><?php //if (($num % 2) == 0 ){ echo "post_wrap_col-5"; } ?><!--" >-->
<!--                                    --><?php // $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<!--                                    <img src="--><?php //echo $img_url; ?><!--" alt="Post image">-->
<!--                                    <div class="identify-list">-->
<!--                                        --><?php
//                                        $cats = get_the_category($recent["ID"]);
//
//                                        foreach ($cats as $single_cat) : ?>
<!--                                            --><?php
//                                            $cat_name =  $single_cat->name;
//                                            ?>
<!--                                            <div class="vd-single-cat-name">--><?php //echo $cat_name; ?><!--</div>-->
<!--                                        --><?php //endforeach; ?>
<!---->
<!--                                    </div>-->
<!--                                    <div class="vd-recent-title">--><?php //echo get_the_title(); ?><!--</div>-->
<!--                                    <div class="vd-short-description">--><?php //the_excerpt(); ?><!--</div>-->
<!--                                    <a href="--><?php //the_permalink(); ?><!--">Read more</a>-->
<!--                                </div>-->
<!--                            --><?php //endwhile;
//                            wp_reset_postdata();
//                        endif; ?>
<!--                    </div>-->
<!--                </div>-->
                <div class="row vd-recipe-row">
<!--                    <div class="col-12">-->
<!--                        <h3>All news</h3>-->
<!--                    </div>-->
                    <div class="col-12 vd-related-query vd_all_blog_section">

    <!--                    --><?php
    //                    $args_all = array(
    //                        'posts_per_page' => 4,
    //                        'post_type' => 'post',
    //                        'order' => 'ASC',
    //                        'orderby' => 'date'
    //                    );
    //                    $query_all = new WP_Query( $args_all );
    //                    ?>


                        <?php if (have_posts() ) : ?>
                            <?php $num = 0; ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php $num += 1; ?>
                                <div class="post_wrap <?php if(($num % 2) == 0){ echo "post_wrap_left"; } if(((($num % 2) == 0) || (($num % 3) == 0)) && (($num % 4) != 0)){ echo " post_wrap_col-5"; }?>">
                                    <?php  $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                    <img class="image <?php if(($num % 2) == 0){ echo "image_2"; } if(((($num % 2) == 0) || (($num % 3) == 0)) && (($num % 4) != 0)){ echo " image_3"; }?>" src="<?php echo $img_url; ?>" alt="Post image">
                                    <?php
                                        $post = get_post();
                                        $slug = $post->post_name;
                                    ?>
                                    <div class="identify-list" slugtrigger="<?php echo $slug; ?>">
                                        <?php
                                        $cats = get_the_category($recent["ID"]);

                                        foreach ($cats as $single_cat) : ?>
                                            <?php
                                            $cat_name =  $single_cat->name;
                                            ?>
                                           <div class="vd-single-cat-name"><?php echo $cat_name; ?></div>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="vd-recent-title"><?php echo get_the_title(); ?></div>
                                    <div class="vd-short-description"><?php the_excerpt(); ?></div>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>

                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                    <div class="col-12 vd-pagi">
                        <div class="pagination">

                            <?php
                            $args = [
                                'prev_text'    => sprintf( '<i></i> %1$s', __( '<', 'text-domain' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( '>', 'text-domain' ) ),
                            ];
                            ?>

                            <?php echo paginate_links($args) ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-our-philosophy-section">
            <div class="container">
                <img class="planet-for-blog" src="<?php echo get_template_directory_uri(); ?>/image/planet_for_blog.png" alt="">
                <div class="blog-bottom-text">
                    <h3><?php echo $blank_title; ?></h3>
                </div>
                <div class="blog-bottom-link">
                    <a class="btn vd-primary vd-primary-new" href="<?php echo $blank_link_text; ?>">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_footer fake_footer">
        <img class="cont-bot" src="<?php echo get_template_directory_uri(); ?>/image/sky_contact_footer_desctop.png" alt="">
    </section>

    <style>
        .vd-single-cat-name.vd-single-cat-name-hidden {
            display: none;
        }
        .vd-single-cat-name-plus:hover {
            cursor: pointer;
        }
    </style>

    <script>
        // Hide header on Blog Pade

        let lastScroll = 0;
        const header = document.querySelector('.vd-headerBlog');
        const scrollPosition = () => window.pageYOffset || document.documentElement.scrollTop;
        const  containHide = () => header.classList.contains('hideHeaderBlog');

        window.addEventListener('scroll', () =>{
            if (scrollPosition() > lastScroll && !containHide()){
                header.classList.add('hideHeaderBlog')
            }
            else if (scrollPosition() < lastScroll && containHide()){
                header.classList.remove('hideHeaderBlog')
            }

            lastScroll = scrollPosition()
        })

        const hideShowCats = () => {

            jQuery('.vd-single-cat-name-plus').remove();

            jQuery('.vd-single-cat-name').removeClass('vd-single-cat-name-hidden');

            jQuery('.identify-list').each((index, element) => {

                const catNumber = jQuery('.vd-single-cat-name', element).length;

                let catWrapperWidth = jQuery(element).outerWidth(true);

                let visibleCatNumber = 0;

                const plusButtonWidth = 50;

                catWrapperWidth = catWrapperWidth - plusButtonWidth;

                jQuery('.vd-single-cat-name', element).each((internalIndex, internalEmenet) => {

                    const singleCatWidth = jQuery(internalEmenet).outerWidth(true);

                    catWrapperWidth = catWrapperWidth - singleCatWidth;

                    if (catWrapperWidth >= 0) {

                        visibleCatNumber++;

                    } else {

                        return false;

                    }

                })

                if (visibleCatNumber < catNumber) {

                    const plusCats = catNumber - visibleCatNumber;

                    const hideIndex = visibleCatNumber - 1;

                    jQuery('.vd-single-cat-name', element).each((internalIndex, internalEmenet) => {

                        if (internalIndex > hideIndex) {

                            jQuery(internalEmenet).addClass('vd-single-cat-name-hidden');

                        }

                    });

                    jQuery(element).append('<div class="vd-single-cat-name vd-single-cat-name-plus">+' + plusCats + '</div>')

                    jQuery('.vd-single-cat-name-plus').on('click',function() {
                        jQuery(this).hide();
                        const someSlug = jQuery(this).parent().attr('slugtrigger');
                        jQuery(`.identify-list[slugtrigger="${someSlug}"] .vd-single-cat-name`).removeClass('vd-single-cat-name-hidden');
                    });

                }

            })


        }

        jQuery(window).on('load', hideShowCats);
        jQuery(window).on('resize', hideShowCats);

    </script>


<?php get_footer(); ?>

