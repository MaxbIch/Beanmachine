jQuery(document).ready(function() {

    // Header dividing line

    jQuery('header .menu-item-type-custom').hover(function() {
        jQuery('header').toggleClass("active-line");
    });

    // Mobile burger

    function burgerMenu(selector) {
        let menu = jQuery(selector);
        let button = menu.find('.burger-menu_button', '.burger-menu_lines');
        let links = menu.find('.burger-menu_link');
        let overlay = menu.find('.burger-menu_overlay');
        let mobClose = menu.find('.vd-close-menu-mob');

        button.on('click', (e) => {
            e.preventDefault();
            toggleMenu();
        });

        links.on('click', () => toggleMenu());
        overlay.on('click', () => toggleMenu());
        mobClose.on('click', () => toggleMenu());

        function toggleMenu(){
            menu.toggleClass('burger-menu_active');

            if (menu.hasClass('burger-menu_active')) {
                jQuery('body').css('overlow', 'hidden');
            } else {
                jQuery('body').css('overlow', 'visible');
            }
        }
    }

    burgerMenu('.burger-menu');


    // Disable preloader

    setTimeout(function() {
        jQuery('.vd-preloader').addClass('vd-site-load');
    }, 1500);

});





