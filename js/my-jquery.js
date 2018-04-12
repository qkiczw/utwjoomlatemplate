// You might need this, usually it's autoloaded   
jQuery.noConflict();

// Replace $ with jQuery
jQuery(document).ready(function() {
    let JQueryscheduleIcons = jQuery('.schedule-icons');
   JQueryscheduleIcons.on('click', function() {console.log('test klika!!!')})
});