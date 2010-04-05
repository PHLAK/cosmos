/* --------------------------------- */
/* -----| SEARCH AUTOPOPULATE |----- */
/* --------------------------------- */
$(document).ready(function() {
	$siteSearch = $('#siteSearch');
	$defaultSearchValue = 'Type product name or description, item number or part number here';
	

	if ($siteSearch.val() == '') {
		$siteSearch.css('color','#999');
		$siteSearch.val($defaultSearchValue);
	}
	
	if ($siteSearch.val() == $defaultSearchValue) {
		$siteSearch.css('color','#999');
	}
	
	$siteSearch.click(function(){
		if ($(this).val() == $defaultSearchValue) {
			$(this).val('');
			$(this).css('color','#333');
		}
	});
	
	$siteSearch.blur(function(){
		if ($(this).val() == '') {
			$(this).css('color','#999');
			$(this).val($defaultSearchValue);
		} else if ($(this).val() == $defaultSearchValue) {
			$(this).css('color','#999');		
		} else {
			$(this).css('color','#333');
		}
	});
});


// ------------------------------------ //
// -----| DISMISS MESSAGE BUTTON |----- //
// ------------------------------------ //

$('.dismiss-message').click(function(){
	$(this).parent().slideUp();
	return false;
});


// --------------------------- //
// -----| MISCELLANEOUS |----- //
// --------------------------- //

$('.js-required').removeClass('js-required');
