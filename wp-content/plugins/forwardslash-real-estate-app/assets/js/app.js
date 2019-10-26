jQuery(document).ready(function($){

	$("#update-real-estate").click(function(){
		
		var title = $("#title").val();

		$.post(real_estate_obj.ajax_url, {
			_ajax_nonce: real_estate_obj.nonce,
			action: "real_estate",
			titleData: title 
		}, function(data){
			console.log(data);
		});

	});

});