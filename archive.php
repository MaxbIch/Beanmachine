<?php
/**
 * Archive Template
 */

get_header(); ?>

    <section class="vd-archive">
        
        <h1>Archive</h1>

        <div class="vd-container">
            <div class="row">
                <div class="col-12 vd-category-menu">
<!--                    <div id="vd-mob-menu-trigger" class="categories-trigger">All categories</div>-->
                    <?php wp_nav_menu( [
                        'theme_location'  => 'categoryMenu',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => 'd-flex',
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
                <div class="col-12">
                    <h1>RECENT ARTICLES</h1>
                </div>
            </div>
            <div class="row vd-recipe-row">
                <div class="col-12 vd-related-query vd_recent_blog_section">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="post_wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php  $img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                    <img src="<?php echo $img_url; ?>" alt="Post image">
                                    <div class="identify-list">
                                        <?php
                                        $cats = get_the_category($recent["ID"]);
                                        $cat_name = $cats[0]->name;
                                        ?>
                                        <?php echo $cat_name; ?>
                                    </div>
                                    <div class="vd-include-info">
                                        <div class="vd-recent-title"><?php echo wp_trim_words(get_the_title(), 8); ?></div>
                                        <div class="vd-info-box"><?php
                                            $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true );
                                            if ( ! empty( $post_views_count ) ) {
                                                echo $post_views_count;
                                            }
                                            ?> views • <?php echo get_the_date('M d, Y'); ?></div>
                                    </div>
                                </a>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <div class="col-12 vd-pagi">
                    <div class="pagination">

                        <?php
                        $args = [
                            'prev_text'    => sprintf( '<i></i> %1$s', __( '<< PREV', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'NEXT >>', 'text-domain' ) ),
                        ];
                        ?>

                        <?php echo paginate_links($args) ?>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="blog_footer fake_footer">
        <img class="cont-bot" src="<?php echo get_template_directory_uri(); ?>/image/sky_contact_footer_desctop.png" alt="">
    </section>

<?php get_footer(); ?>