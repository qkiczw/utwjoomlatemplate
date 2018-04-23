// You might need this, usually it's autoloaded   
jQuery.noConflict();

// Replace $ with jQuery
jQuery(document).ready(function() {
    const jQwindow = jQuery(window);
    let JQueryScheduleIcons = jQuery('.schedule-icons');
    
    JQueryScheduleIcons.on('click', function() {console.log('test klika!!!')})

    function setMenuFixed() {
        if (jQwindow.scrollTop() > 400){
            jQuery('.navbar').addClass('fixed-top');
            jQuery('.about-us-img').animate({left: '0px'}, "slow");
            // jQuery('.utw-logo-min').css('display', 'block');
            jQuery('.utw-logo-min').fadeIn('slow');
            jQuery('.navbar-brand-text').fadeOut('fast');
            
        } else{
            jQuery('.navbar').removeClass('fixed-top');
            jQuery('.utw-logo-min').fadeOut();
            jQuery('.navbar-brand-text').fadeIn();
        }
    }
    jQwindow.on('scroll', setMenuFixed);
});
