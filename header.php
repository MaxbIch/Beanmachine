<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
	</head>

	<body <?php body_class( $class ); ?>>
		<?php

		    $settings = get_option('vd_main_settings');
		    $site_logo = $settings['_vd_site_logo'];
            $site_logo_url = wp_get_attachment_image_url($site_logo, 'full');

		?>
		<header class="vd-header">

            <div class="vd-container">
                <div class="row vd-head-row nav_bar">
                    <div class="col-12 col-lg-4 vd-head-col vd-mob-close">
                        <?php $walker = new Menu_With_Description; ?>
                        <?php wp_nav_menu( [
                            'theme_location'  => 'headerMenuLeft',
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
                            'walker'          => $walker,
                        ] ); ?>

                    </div>
                    <div class="col-8 col-lg-4">

                        <a class="logo-wrap" href="<?php echo get_site_url(); ?>">
                            <img class="vd-main-header-logo" src="<?php echo $site_logo_url; ?>" alt="site-logo">
                        </a>

                    </div>
                    <div class="col-4 col-lg-4 vd-head-col">

                        <?php wp_nav_menu( [
                            'theme_location'  => 'headerMenuRight',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'd-flex vd-mob-close',
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

                        <div class="vd-mobile-menu">
                            <div class="burger-menu">
                                <a href="#" class="burger-menu_button"></a>

                                <div class="burger-menu_overlay"></div>

                                <nav class="burger-menu_nav">

                                    <div class="vd-close-menu-mob"></div>

                                    <?php wp_nav_menu( [
                                        'theme_location'  => 'headerMobile',
                                        'menu'            => '',
                                        'container'       => 'div',
                                        'container_class' => 'd-flex vd-mob-header-list',
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
                                        'walker'          => $walker,
                                    ] ); ?>

                                    </div>
                                </nav>

                            </div>
                        </div>

                    </div>
                <div class="dividing-line"></div>

            </div>


            </div>
            
		</header>

        <div class="vd-preloader">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_bj2ijohq.json" background="transparent" speed="1" style="width: 100px; height: 100px;" loop  autoplay></lottie-player>
        </div>


 