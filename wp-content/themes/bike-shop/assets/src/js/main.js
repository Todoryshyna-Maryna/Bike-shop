var $ = jQuery.noConflict();
$('.info-button').on('click', function() {
    $(this).find('.info-container').fadeToggle();
});