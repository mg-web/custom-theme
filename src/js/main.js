function header_height(){
    // Adjusts the 'margin-top' of the body to the height of the sticky header.
    let headSize = jQuery('#site-header').height() + "px";

    jQuery('body').css('margin-top', headSize);
}

jQuery(document).ready(function(){
    header_height();
});