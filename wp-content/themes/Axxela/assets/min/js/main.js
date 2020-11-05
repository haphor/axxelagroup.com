jQuery(document).ready(function() {
    /*targeting the footer ul and adding a class*/
    jQuery('footer nav > ul').addClass('footer-toggle');
    jQuery('.footer-extra').addClass('footer-toggle');

    /* Check width on page load*/
    if (jQuery(window).width() < 801) {
        /*targeting the footer toggling element and adding a class when screen size less than 801*/
        jQuery('footer .fusion-widget-area .widget-title').addClass('footer-btn');
    } else {}
});

jQuery(window).resize(function() {
    /*If browser resized, check width again */
    if (jQuery(window).width() < 801) {
        /*targeting the footer toggling element and adding a class when screen size less than 801*/
        jQuery('footer .fusion-widget-area .widget-title').addClass('footer-btn');
    } else {
        jQuery('footer .fusion-widget-area .widget-title').removeClass('footer-btn');
    }
});

jQuery(document).ready(function() {
    /*footer accordion fucntion*/
    jQuery(".footer-btn").click(function() {
        jQuery(this).siblings().children('.footer-toggle').slideToggle(); //this depends on the relation between toggler and the footer ul
        jQuery(this).toggleClass('turn');
        jQuery('.footer-toggle').not(jQuery(this).siblings().children('.footer-toggle')).slideUp();
        jQuery('.footer-btn').not(jQuery(this)).removeClass('turn');
    });

    jQuery("#load-more").click(function() {
        jQuery("#more-content").slideToggle();
        var newText = jQuery(this).text() == "Show Less" ? "Learn More" : "Show Less";
        jQuery(this).text(newText);
    });
    var marquee = jQuery('div.marquee');
    marquee.each(function() {
        var mar = jQuery(this),indent = mar.width();
        mar.marquee = function() {
            indent--;
            mar.css('text-indent',indent);
            if (indent < -1 * mar.children('div.marquee-text').width()) {
                indent = mar.width();
            }
        };
        mar.data('interval',setInterval(mar.marquee,1000/60));
    });
});