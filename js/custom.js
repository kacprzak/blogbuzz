// Fix for the home button highlight bug
jQuery(document).ready(function(){
    jQuery('li > a.active').parent().addClass('active');
});
