<?php 

	$settings = get_option('vd_main_settings');
    $disable_footer = get_post_meta(get_the_id(), '_vd_disable_footer_form', true);
    $footer_request_text = $settings['_vd_footer_request_text'];
    $footer_request_btn_text = $settings['_vd_footer_request_btn_text'];
    $footer_request_btn_link = $settings['_vd_footer_request_btn_link'];
    $footer_logo = $settings['_vd_footer_logo'];
    $footer_logo_url = wp_get_attachment_image_url($footer_logo, 'full');
    $footer_desc = $settings['_vd_footer_desc'];
    $footer_copyright = $settings['_vd_footer_copyright'];


?>

    <footer>

        <div class="vd-container">

            <?php if ($disable_footer) : ?>

            <?php else : ?>

                <div class="row vd-top-footer-row">
                    <div class="col-12">
                        <div class="fake_h1"><?php echo $footer_request_text; ?></div>
                        <a class="btn vd-primary" href="<?php echo $footer_request_btn_link; ?>"><?php echo $footer_request_btn_text; ?></a>
                    </div>
                </div>

            <?php endif; ?>

            <div class="row vd-main-footer-row">
                <div class="col-12 col-md-6 vd-foot-site-info">
                    <a class="logo-wrap" href="<?php echo get_site_url(); ?>">
                        <img class="vd-main-header-logo" src="<?php echo $footer_logo_url; ?>" alt="site-logo">
                    </a>
                    <div class="vd-site-description"><?php echo $footer_desc; ?></div>
                </div>
                <div class="col-12 col-md-6 vd-foot-menu">
                    <div class="footer-titles">
                        <p>Services</p>
                        <p>Company</p>
                    </div>
                    <div class="menu_container">
                        <div class="services_menu">
                            <?php wp_nav_menu( [
                                'theme_location'  => 'footerServices',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'd-flex',
                                'container_id'    => '',
                                'menu_class'      => 'menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] ); ?>
                        </div>
                        <div class="company_menu">
                            <?php wp_nav_menu( [
                                'theme_location'  => 'footerCompany',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'd-flex',
                                'container_id'    => '',
                                'menu_class'      => 'menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 vd-copyright-col">
                    <div class="vd-copyright">© <?php echo date('Y'); ?> <?php echo $footer_copyright; ?></div>
                </div>
            </div>
        </div>
    </footer>

	<?php wp_footer(); ?>

	</body>

</html>
