jQuery(document).ready(function($){

	$("#update-real-estate").on("click", function(){

		var formData = $("#real-estate-form-data").serialize();

		$.post(real_estate_obj.ajax_url, {
			_ajax_nonce: real_estate_obj.nonce,
			action: "real_estate",
			details: formData
		}, function(data){
			if(data == "success"){
				alert('Real Estate updated successfully.');
			}
		});

	});

});