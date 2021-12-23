(function($) {

	$(document).ready(function(){

		var validate = false;

		jQuery(".edit-zipcode-btn").click(function(e){
			e.preventDefault();
			var city = jQuery(this).data("city");
			jQuery("#ModalPopup .modal-title").text("Edit Zipcodes");
			jQuery("#ModalPopup").show();
			jQuery.ajax({
		        url: ajaxObj.ajaxurl,
		        data: {
		            action: 'editwpdasform',
		            city: city
		        },
		        type: 'POST',
		        success: function(response){
		        	if(response.length > 0 ){
		        		jQuery("#ModalPopup .modal-body").html(response);
		        	}
		        }
		    });
		});

		jQuery(".delete-zipcode-btn").click(function(e){
			e.preventDefault();
			var city = jQuery(this).data("city");
			jQuery("#ModalPopup .modal-title").text("Delete Zipcodes");
			jQuery("#ModalPopup").show();
			jQuery.ajax({
		        url: ajaxObj.ajaxurl,
		        data: {
		            action: 'deletewpdasform',
		            city: city
		        },
		        type: 'POST',
		        success: function(response){
		        	if(response.length > 0 ){
		        		jQuery("#ModalPopup .modal-body").html(response);
		        	}
		        }
		    });
		});
	});

	jQuery("#addnewzipcode").click(function(e){
		jQuery("#ModalPopup .modal-title").text("Add Zipcodes");
		jQuery("#ModalPopup").show();
		jQuery.ajax({
	        url: ajaxObj.ajaxurl,
	        data: {
	            action: 'newzipcodeform',
	        },
	        type: 'POST',
	        success: function(response){
	        	//console.log(response);
	        	jQuery("#ModalPopup .modal-body").html(response);
	        }
	    });
	});

	jQuery(document).on('click','.btn-modal-close',function(){
		jQuery("#ModalPopup").hide();
	});

	jQuery(document).on('click','#updatezipcode',function(){
		 var validate = false;
		 jQuery('#updatezipcodeform .required').each(function(){
		 	if( jQuery(this).val() == "" ){
		 		jQuery(".msg-editform").removeClass('success-msg');
		 		jQuery(".msg-editform").addClass('error-msg');
		 		jQuery(".msg-editform").html("(*) - Please fill the required fields");
		 		validate = true;
		 		return false;
		 	}
		 });

		 if(validate != true ){
		 	jQuery.ajax({
		        url: ajaxObj.ajaxurl,
		        data: jQuery("#updatezipcodeform").serialize() + "&action=updatezipcodesdata",
		        type: 'POST',
		        success: function(response){
                    //console.log(response);
		        	if(response == 'success'){
		        		jQuery(".msg-editform").removeClass('error-msg');
		        		jQuery(".msg-editform").addClass('success-msg');
		        		jQuery(".msg-editform").html("Zipcodes updated successfully");
		        		setTimeout(function(){
						    window.location.reload();
						},3000);
		        	}else{
		        		jQuery(".msg-editform").removeClass('success-msg');
		        		jQuery(".msg-editform").addClass('error-msg');
		        		jQuery(".msg-editform").html("Something went wrong. please try again!");
		        	}
		        }
		    });
		 }
		
	});

	jQuery(document).on('click','#deletezipcodes',function(){
		var chekcount = jQuery('#deletezipcodeform .form-field:checked').length;
		if( chekcount == 0 ){
			jQuery(".msg-deleteform").removeClass('success-msg');
    		jQuery(".msg-deleteform").addClass('error-msg');
    		jQuery(".msg-deleteform").html("None of the zipcodes selected to DELETE");
		}else{
			jQuery.ajax({
		        url: ajaxObj.ajaxurl,
		        data: jQuery("#deletezipcodeform").serialize() + "&action=deletezipcodesdata",
		        type: 'POST',
		        success: function(response){
		        	if(response == 'success'){
		        		jQuery(".msg-deleteform").removeClass('error-msg');
		        		jQuery(".msg-deleteform").addClass('success-msg');
		        		jQuery(".msg-deleteform").html("Zipcode(s) Deleted Successfully");
		        		setTimeout(function(){
						    window.location.reload();
						},3000);
		        	}else{
		        		jQuery(".msg-deleteform").removeClass('success-msg');
		        		jQuery(".msg-deleteform").addClass('error-msg');
		        		jQuery(".msg-deleteform").html("Something went wrong. please try again!");
		        	}
		        }
		    });
		}

	});

	jQuery(document).on('change','#new_city',function(){
		var newcity = jQuery(this).val();
		var html = '';

			html += '<div class="form-row grid-2">';
				html += '<div class="form-group">';
					html += '<label>Tax Group</label>';
					html += '<input type="text" name="tax_group" class="form-field" value="WESTCHESTER FUEL TAX">';
				html += '</div>';
				html += '<div class="form-group inner-row">';
                    html += '<div class="form-col">';
					    html += '<input type="radio" name="fuel_service" class="form-field w-auto" value="2" checked>';
                        html += '<label>Boil & Fuel Service</label>';
                    html += '</div>';
                    html += '<div class="form-col">';
                        html += '<input type="radio" name="fuel_service" class="form-field w-auto" value="1">';
                        html += '<label>Fuel ONLY</label>';
                    html += '</div>';
				html += '</div>';
			html += '</div>';

			html += '<div class="form-row grid-2">';
				html += '<div class="form-group">';
					html += '<label>Minimum Delivery Gallons</label>';
					html += '<input type="text" name="gallons" class="form-field" value="">';
				html += '</div>';
			html += '</div>';

		if(newcity.length > 0 ){
			jQuery('#ModalPopup .newfields').empty();
			jQuery('#ModalPopup .newfields').html(html);
		}else{
			jQuery('#ModalPopup .newfields').empty();
		}
	});

	jQuery(document).on('click','#createzipcodedata',function(){
		var zipfield = jQuery('#ModalPopup .required').val();
		if(zipfield.length > 0 ){
			jQuery.ajax({
		        url: ajaxObj.ajaxurl,
		        data: jQuery("#addzipcodesform").serialize() + "&action=addzipcodesdata",
		        type: 'POST',
		        success: function(response){
		        	jQuery(".msg-addform").removeClass('error-msg');
	        		jQuery(".msg-addform").addClass('success-msg');
	        		jQuery(".msg-addform").html("Zipcodes created successfully");
	        		setTimeout(function(){
					    window.location.reload();
					},3000);
		        },
		    });
		}else{
			jQuery(".msg-addform").removeClass('success-msg');
	 		jQuery(".msg-addform").addClass('error-msg');
	 		jQuery(".msg-addform").html("(*) - Please fill the required fields");
		}
	});
	

}(jQuery));