// You might need this, usually it's autoloaded   
jQuery.noConflict();

// Replace $ with jQuery
jQuery(document).ready(function() {
    const jQwindow = jQuery(window);
    let JQueryScheduleIcons = jQuery('.schedule-icons');
    const JQAboutUsIcon1 = jQuery('.about-us-icon1');
    const JQAboutUsIcon2 = jQuery('.about-us-icon2');
    const JQAboutUsIcon3 = jQuery('.about-us-icon3');
    
    JQueryScheduleIcons.on('click', function() {console.log('test klika!!!')})

    function setMenuFixed() {
        if (jQwindow.scrollTop() > 400){
            jQuery('.navbar').addClass('fixed-top');
            jQuery('.about-us-img').animate({left: '0px'}, 1000);
            jQuery('.utw-logo-min').fadeIn('slow');
            jQuery('.navbar-brand-text').fadeOut('fast');

            console.log('od góry: ' + jQwindow.scrollTop() + 'px');
            
        } else{
            jQuery('.navbar').removeClass('fixed-top');
            jQuery('.utw-logo-min').fadeOut();
            jQuery('.navbar-brand-text').fadeIn();
        }
    }

    function scheduleIconsShow() {
        if(jQwindow.scrollTop() > 1100){
            jQuery('.schedule-icon1').animate({left:0}, 1000);
            jQuery('.schedule-icon2').animate({left:0}, 1500);
        }
    }

    function aboutUsIconsAnimation() {
        if (jQwindow.scrollTop() > 720) {
            console.log('tu wiezdzaja piksele!!!!')
            // JQAboutUsIcon1.fadeIn(500, function () {
            //     JQAboutUsIcon2.fadeIn(150, function () {
            //         JQAboutUsIcon3.fadeIn(150);
            //     });
            // });
            JQAboutUsIcon1.animate({opacity:1}, 1500);
            JQAboutUsIcon2.animate({opacity:1}, 2000);
            JQAboutUsIcon3.animate({opacity:1}, 2500);
}}

    jQwindow.on('scroll', setMenuFixed);
    jQwindow.on('scroll', scheduleIconsShow);
    jQwindow.on('scroll', aboutUsIconsAnimation);
});
