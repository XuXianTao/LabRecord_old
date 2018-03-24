jQuery(document).keyup(function(event) {
	if(event.keyCode == 13) { 
		jQuery("#btn1").trigger("click");
	}
});
