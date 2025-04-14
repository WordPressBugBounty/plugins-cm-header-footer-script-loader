jQuery(document).ready(function($) {
    $('a:has(.cmseparator)').replaceWith(function() {
        return $(this).contents();
    });
	$('.cmhfsl-cleanup-button').trigger('click');
});