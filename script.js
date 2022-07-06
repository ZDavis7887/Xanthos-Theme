
jQuery(document).ready(function(){
    jQuery('#logo').fadeIn(5000);
});
/////////////////////////////////////
jQuery(window).on("scroll", function() {
    if(jQuery(window).scrollTop() >10) {
        jQuery("#st-trigger-effects").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       jQuery("#st-trigger-effects").removeClass("active");
    }
    
    if(jQuery(window).scrollTop() >10) {
         jQuery("img.revologo").addClass("shrink");
    } else {
    jQuery("img.revologo").removeClass("shrink");
    }
jQuery('.overlayIframe')
	.click(function(){
			jQuery(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			jQuery(this).find('iframe').removeClass('clicked')});
});

