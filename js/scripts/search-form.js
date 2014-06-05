/* Infield Form Labels =================================================================*/
$(document).ready(function(){
	var innerLabel = $('label.infield');
	var innerLabelInput = $('input.infield');
	var searchSubmit = $('button.search-submit');
	innerLabel.each(function() {
		var stolen = $(this).text();
		var sibValue = $(this).siblings('input').val();
		if (sibValue!=''){
			$(this).siblings('input').attr('value', sibValue);
		}else{
			$(this).siblings('input').attr('value', stolen);
		}
	});
	innerLabelInput.focus(function() { 
		if (this.value == this.defaultValue){ 
			this.value = ''; 
		} 
		if(this.value != this.defaultValue){ 
			this.select(); 
			searchSubmit.addClass("visible");
		} 
	}); 
	innerLabelInput.blur(function() { 
		if (this.value == ''){ 
			this.value = this.defaultValue; 
			searchSubmit.removeClass("visible");
		}
	});	

	var searchToggle = $('#searchToggle');
	searchToggle.on("click", function(){
		$(this).toggleClass('ls-i-close');
	});

});