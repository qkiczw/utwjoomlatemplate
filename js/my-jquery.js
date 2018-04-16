// You might need this, usually it's autoloaded   
jQuery.noConflict();

// Replace $ with jQuery
jQuery(document).ready(function() {
    let JQueryscheduleIcons = jQuery('.schedule-icons');
   JQueryscheduleIcons.on('click', function() {console.log('test klika!!!')})
});

const jQwindow = jQuery(window);

function testme() {
    console.log(jQwindow.scrollTop())
    if(jQwindow.scrollTop() > 500){
        console.log('tu jest 500');
    }
};

jQwindow.on('scroll', testme);