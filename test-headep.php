

<?php /* Template Name: Test header page */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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

                <?php wp_nav_menu( [
                    'theme_location'  => 'headerMenuLeft',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => 'd-flex',
                    'container_id'    => '',
                    'menu_class'      => 'menu left-part',
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
                                'walker'          => '',
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


<section class="vd_section vd_drop_section">
    <div class="vd-container">
        <div class="row">
            <div class="col-12 vd-process-col vd-drop-col">
                <div class="dropdown-title">
                    <div class="vd-drop-title"><?php echo $drop_title; ?></div>
                    <div class="vd-drop-desc"><?php echo $drop_desc; ?></div>
                </div>
                <?php foreach ($dropdowns as $single_dropdown) : ?>
                    <?php
                    $dropdown_single_title = $single_dropdown['dropdown_single_title'];
                    $dropdown_btn_link = $single_dropdown['dropdown_btn_link'];
                    $dropdown_btn_title = $single_dropdown['dropdown_btn_title'];
                    $dropdown_single_open_cont = $single_dropdown['dropdown_single_open_cont'];

                    ?>
                    <div class="dropdown-cont">
                        <img class="dropdown-active" src="<?php echo get_template_directory_uri(); ?>/image/Arrow.svg" alt="">
                        <img class="dropdown-close" src="<?php echo get_template_directory_uri(); ?>/image/arrow-close.png" alt="">
                        <a class="dropdown-btn vd-dropdown-primary" href="<?php echo $dropdown_btn_link; ?>"><?php echo $dropdown_btn_title; ?></a>
                        <div class="dropdown-cont-title"><?php echo $dropdown_single_title; ?></div>
                        <div class="dropdown-cont-open"><?php echo $dropdown_single_open_cont; ?></div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function(){

        jQuery('.dropdown-active, .dropdown-close').on('click',function() {
            jQuery(".dropdown-cont").toggleClass("dropdown-cont-active");
        });

    });
</script>


<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>

<style>
    .dividing-line {
        display: flex;
        z-index: 100;
        height: 1px;
        max-width: 1312px;
        width: calc(100vw - 30px);
        background-color: aqua;
        position: absolute;
    }
    .vd-header li:hover .dividing-line{
        display: flex;
    }
</style>