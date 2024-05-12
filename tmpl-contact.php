

<?php /* Template Name: Contact page */ ?>


<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

    <?php
    $post_id = get_the_ID();
    $_vd_contact_title = get_post_meta($post_id, '_vd_contact_title', true);
    $_vd_contact_desc = get_post_meta($post_id, '_vd_contact_desc', true);

    ?>

    <section class="vd_section vd_cont_top_section">
        <img class="cont-top" src="<?php echo get_template_directory_uri(); ?>/image/ContTop.png" alt="">
        <img class="cont-mobile-top" src="<?php echo get_template_directory_uri(); ?>/image/contact-mobile-top.png" alt="">
        <div class="vd-container">
            <div class="row cont-top-row">
                <div class="col-12 vd-cont-col">
                    <h2><?php echo $_vd_contact_title; ?></h2>
                    <div class="col-12 vd-cont-col">
                        <div class="vd-top-description"><?php echo $_vd_contact_desc; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
    $contact_form_title = get_post_meta($post_id, '_vd_contact_form_title', true);
    $contact_shortcode = get_post_meta($post_id, '_vd_contact_shortcode', true);
    ?>

    <!--    <section class="vd_section vd_contact_form_section">-->
    <!--        -->
    <!--    </section>-->


    <?php
    $contacts = get_post_meta($post_id, '_contacts', true);
    $_vd_contacts_title = get_post_meta($post_id, '_vd_contacts_title', true);
    $_vd_contact_email = get_post_meta($post_id, '_vd_contact_email', true);
    $_vd_contact_phone = get_post_meta($post_id, '_vd_contact_phone', true);
    $_vd_contacts_locations = get_post_meta($post_id, '_vd_contacts_locations', true);

    ?>

    <section class="form_section">
        <img class="cont-mid" src="<?php echo get_template_directory_uri(); ?>/image/ContMid.png" alt="">
        <div class="vd-container vd-contact-form-container">
            <div class="row contact-form-row">
                <h4><?php echo $contact_form_title; ?></h4>
                <div><?php echo apply_filters( 'the_content', $contact_shortcode ); ?></div>
            </div>
        </div>
        <div class="vd-container">
            <div class="row contact_cont">
                <div class="col-6">
                    <div class="contact_title">
                        <h4><?php echo $_vd_contacts_title; ?></h4>
                    </div>
                    <div class="contact_email"><?php echo $_vd_contact_email;?></div>
                    <div class="contact_phone"><?php echo $_vd_contact_phone;?></div>
                </div>
                <div class="col-6">
                    <div class="contact_title ">
                        <h4><?php echo $_vd_contacts_locations;?></h4>
                    </div>
                    <?php foreach ($contacts as $single_contact) : ?>
                        <?php
                        $contact_subtitle = $single_contact['contact_subtitle'];
                        ?>
                        <div class="">
                            <div class="contact_subtitle"><?php echo $contact_subtitle; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_footer fake_footer">
        <img class="cont-bot" src="<?php echo get_template_directory_uri(); ?>/image/sky_contact_footer_desctop.png" alt="">
    </section>

    <script>const homeURL = "<?php echo get_site_url(); ?>";</script>
    <script>
        document.getElementById("submit_link_to_thank_page").onclick = function() {
            setTimeout(() => {
                if ( jQuery("form.wpcf7-form").hasClass("sent") ) {
                    document.location.href = `${homeURL}/thank-you/`;
                }
            }, "2000");
        }
    </script>
<?php endwhile; ?>

<?php get_footer(); ?>


