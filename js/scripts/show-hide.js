$(document).ready(function() {
	var $showHideButton = $('*[data-toggle-button]');
	$showHideButton.on("click", function(){
		$(this).addClass('clicked');
		var $showHideItem = $(this).data('toggle-button');
		$('body').find('*[data-toggle-content='+$showHideItem+']').toggleClass('enabled');
	});
});