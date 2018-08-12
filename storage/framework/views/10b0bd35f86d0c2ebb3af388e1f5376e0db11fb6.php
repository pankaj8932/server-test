<!-- scripts -->



<script src="<?php echo asset('public/js/app.js'); ?>"></script>
<script src="<?php echo asset('public/js/bootstrap-select.js'); ?>"></script>



<!--- google map-->

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&key=AIzaSyCQq_d3bPGfsIAlenXUG5RtZsKZKzOmrMw"></script>



<script type="application/javascript">

	$( document ).ready( function () {
	
		jQuery('.selectpicker').selectpicker({
		  style: 'btn-info',
		  size: 4
		});
	//getZones();

	//change_language

	jQuery(document).on('click', '.change_language', function(e){

		jQuery("#loader").show();

		var languages_id = jQuery(this).attr('languages_id');

		console.log(languages_id);

		jQuery.ajax({

			url: '<?php echo e(URL::to("/change_language")); ?>',

			type: "POST",

			data: '&languages_id='+languages_id,

			//async: false,

			success: function (res) {

				//jQuery('.head-cart-content').html(res);

				alert('language is addedd');

			},

		});



	});

		

	//default product attribute

	jQuery(document).on('click', '.cart', function(e){

		jQuery("#loader").show();

		var products_id = jQuery(this).attr('products_id');

		console.log(products_id);

		jQuery.ajax({

			url: '<?php echo e(URL::to("/addToCart")); ?>',

			type: "POST",

			data: '&products_id='+products_id,

			//async: false,

			success: function (res) {

				if(res.trim() == "already added"){

					alert('Product is already added');

				}else{

					jQuery('.head-cart-content').html(res);

					alert('Product is addedd');

				}

					//$('.addError').hide();

					//$('#addAttributeModal').modal('hide');

					//$("#content_"+products_options_id+'_'+language_id).parent('tbody').html(res);

			},

			//cache: false,

			//contentType: false,

			//processData: false

		});



	});

		

		//add-to-Cart with custom options

		jQuery(document).on('click', '.add-to-Cart', function(e){

			

			jQuery("#loader").show();

			var formData = jQuery("#add-Product-form").serialize();

			//console.log(formData);

			jQuery.ajax({

				url: '<?php echo e(URL::to("/addToCart")); ?>',

				type: "POST",

				data: formData,

				//async: false,

				success: function (res) {

					if(res.trim() == "already added"){

						alert('Product is already added');

					}else{

						jQuery('.head-cart-content').html(res);

						alert('Product is addedd');

					}

				},

			});



		});

		

		//validate form

		jQuery(document).on('submit', '.form-validate', function(e){

			var error = "";



			//to validate text field

			jQuery(".field-validate").each(function() {


				if(this.value == '') {

					jQuery(this).closest(".form-group").addClass('has-error');

					jQuery(this).next(".error-content").removeAttr('hidden');

					error = "has error";

				}else{

					jQuery(this).closest(".form-group").removeClass('has-error');

					jQuery(this).next(".error-content").attr('hidden');

				}

			});
			
			//gender-validation
			jQuery(".gender-validation").each(function() {
				
				if(this.value == '') {

					jQuery(this).closest(".form-group").addClass('has-error');

					jQuery(this).next(".error-content").removeAttr('hidden');

					error = "has error";

				}else{

					jQuery(this).closest(".form-group").removeClass('has-error');

					jQuery(this).next(".error-content").attr('hidden');

				}

			});
			
			
			
			var check = 0;
			jQuery(".password").each(function() {

				if(this.value == '') {

					jQuery(this).closest(".form-group").addClass('has-error');

					jQuery(this).next(".error-content").removeAttr('hidden');

					error = "has error";
						
				}else{
					if(check == 1){
						 var res = passwordMatch();

							if(res=='matched'){

								jQuery('.password').closest(".form-group").removeClass('has-error');
								
								jQuery('#re_password').closest('.re-password-content').children('.error-content-password').add('hidden');
								//jQuery(this).next(".error-content-password").attr('hidden');
								//alert('match');
								
							}else if(res=='error'){
								
								jQuery('.password').closest(".form-group").addClass('has-error');
								//jQuery('#re_password').closest(".form-group").removeClass('has-error');
								
								jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');
								
								//jQuery(this).next(".error-content").attr('hidden');
								error = "has error";
								//alert('error');
							}

						}else{
							jQuery(this).closest(".form-group").removeClass('has-error');
							jQuery(this).next(".error-content").attr('hidden');
						}


						 check++;
					}

			});
			

			jQuery(".number-validate").each(function() {

				if(this.value == '' || isNaN(this.value)) {

					jQuery(this).closest(".form-group").addClass('has-error');

					jQuery(this).next(".error-content").removeAttr('hidden');

					error = "has error";

				}else{

					jQuery(this).closest(".form-group").removeClass('has-error');

					jQuery(this).next(".error-content").attr('hidden');

				}

			});



			//

			jQuery(".email-validate").each(function() {

				var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

				if(this.value != '' && validEmail.test(this.value)) {

					jQuery(this).closest(".form-group").removeClass('has-error');

					jQuery(this).next(".error-content").attr('hidden');



				}else{

					jQuery(this).closest(".form-group").addClass('has-error');

					jQuery(this).next(".error-content").removeAttr('hidden');

					error = "has error";

				}

			});

			
			jQuery(".checkbox-validate").each(function() {
				
				if(jQuery(this).prop('checked') == true){
					jQuery(this).closest(".form-group").removeClass('has-error');
					jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden');
					//jQuery(this).next(".error-content").attr('hidden');
								
				}else{
					jQuery(this).closest(".form-group").addClass('has-error');
					jQuery(this).closest('.checkbox-parent').children('.error-content').removeAttr('hidden');

					error = "has error";
				}

			});



			if(error=="has error"){

				return false;

			}



		});



		//focus form field

		jQuery(document).on('keyup focusout', '.field-validate', function(e){

			if(this.value == '') {				

				jQuery(this).closest(".form-group").addClass('has-error');

				jQuery(this).next(".error-content").removeAttr('hidden');

			}else{

				jQuery(this).closest(".form-group").removeClass('has-error');
				jQuery(this).next(".error-content").attr('hidden');
				console.log('asd');

			}


		});



		//focus form field

		jQuery(document).on('keyup', '.number-validate', function(e){


			if(this.value == '' || isNaN(this.value)) {

				jQuery(this).closest(".form-group").addClass('has-error');

				jQuery(this).next(".error-content").removeAttr('hidden');

			}else{

				jQuery(this).closest(".form-group").removeClass('has-error');

				jQuery(this).next(".error-content").attr('hidden');

			}



		});
		
		//match password
		jQuery(document).on('keyup focusout', '.password', function(e){

			if(this.value == '') {				

				jQuery(this).closest(".form-group").addClass('has-error');

				jQuery(this).next(".error-content").removeAttr('hidden');

			}else{

				jQuery(this).closest(".form-group").removeClass('has-error');

				jQuery(this).next(".error-content").attr('hidden');

			}

		});



		jQuery(document).on('keyup focusout', '.email-validate', function(e){

			var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

			if(this.value != '' && validEmail.test(this.value)) {

				jQuery(this).closest(".form-group").removeClass('has-error');

				jQuery(this).next(".error-content").attr('hidden');



			}else{

				jQuery(this).closest(".form-group").addClass('has-error');

				jQuery(this).next(".error-content").removeAttr('hidden');

				error = "has error";

			}

		});

		

		

		

		//sorting grid/list

		jQuery( '#list' ).click( function ( event ) {

			event.preventDefault();

			jQuery( '#listing-products .item' ).removeClass( 'col-lg-4' );

			jQuery( '#listing-products .item img' ).removeClass( 'card-img-top' );

			jQuery( '#listing-products .item' ).addClass( 'media' );

			jQuery( '#listing-products .item' ).addClass( 'list-group-item' );

			

		} );

		

		jQuery( '#grid' ).click( function ( event ) {

			event.preventDefault();		

			jQuery( '#listing-products .item' ).removeClass( 'media' );

			jQuery( '#listing-products .item' ).removeClass( 'list-group-item' );

			jQuery( '#listing-products .item' ).addClass( 'col-lg-4' );

			jQuery( '#listing-products .item img' ).addClass( 'grid-group-item' );	

		} );

		

		

		// This button will increment the value

		jQuery('.qtyplus').click(function(e){

			// Stop acting like a button

			e.preventDefault();

			// Get the field name

			fieldName = jQuery(this).attr('field');

			// Get its current value

			var currentVal = parseInt(jQuery(this).prev('.qty').val());

			// If is not undefined

			if (!isNaN(currentVal)) {

				// Increment

				jQuery(this).prev('.qty').val(currentVal + 1);

			} else {

				// Otherwise put a 0 there

				jQuery(this).prev('.qty').val(0);

			}

		});

		// This button will decrement the value till 0

		jQuery(".qtyminus").click(function(e) {

			// Stop acting like a button

			e.preventDefault();

			// Get the field name

			fieldName = jQuery(this).attr('field');

			// Get its current value

			var currentVal = parseInt(jQuery(this).next('.qty').val());

			// If it isn't undefined or its greater than 0

			if (!isNaN(currentVal) && currentVal > 0) {

				// Decrement one

				jQuery(this).next('.qty').val(currentVal - 1);

			} else {

				// Otherwise put a 0 there

				jQuery(this).next('.qty').val(0);

			}

		});

		//list
		$(document).on('click', '#list', function(e){		
			jQuery('#listing_products').removeClass('grid_product');
			jQuery('#listing_products').addClass('list_product');	
		});
		
		//grid
		$(document).on('click', '#grid', function(e){
			jQuery('#listing_products').removeClass('list_product');
			jQuery('#listing_products').addClass('grid_product');
		});

		//default_address

		$(document).on('click', '.default_address', function(e){

			jQuery("#loader").show();

			var address_id = jQuery(this).attr('address_id');

			//console.log(products_id);

			jQuery.ajax({

				url: '<?php echo e(URL::to("/myDefaultAddress")); ?>',

				type: "POST",

				data: '&address_id='+address_id,

				//async: false,

				success: function (res) {

					 window.location = 'myAddress?action=default';

				},

			});

		});

		

		//deleteMyAddress

		$(document).on('click', '.deleteMyAddress', function(e){

			jQuery("#loader").show();

			var address_id = jQuery(this).attr('address_id');

			//console.log(products_id);

			jQuery.ajax({

				url: '<?php echo e(URL::to("/deleteMyAddress")); ?>',

				type: "POST",

				data: '&address_id='+address_id,

				//async: false,

				success: function (res) {

					window.location = 'myAddress?action=detele';

				},

			});

		});

		

		

		$.noConflict();

		jQuery( document ).ready(function( $ ) {

		 	// With JQuery

			jQuery("#ex2").slider();

			jQuery("#ex2").on("slide", function(slideEvt) {

				jQuery("#ex6SliderVal").text(slideEvt.value);

			});

		});

		

		//tooltip enable

		$(function () {

		  $('[data-toggle="tooltip"]').tooltip()

		});

		

		

function initialize(location){	



	var address = 'Faisalabad, Pakistan';

	var map = new google.maps.Map(document.getElementById('googleMap'), { 

		mapTypeId: google.maps.MapTypeId.TERRAIN,

		zoom: 13

	});

	

	var geocoder = new google.maps.Geocoder();

	

	geocoder.geocode({

		'address': address

	}, 

	function(results, status) {

		if(status == google.maps.GeocoderStatus.OK) {

		 new google.maps.Marker({

			position: results[0].geometry.location,

			map: map

		 });

		 map.setCenter(results[0].geometry.location);

		}

	});

   }

	jQuery('.dropdown-menu').on('click', function(event){

		// The event won't be propagated up to the document NODE and 

		// therefore delegated events won't be fired

		event.stopPropagation();

	});

});

function passwordMatch(){
	
	var password = jQuery('#password').val();
	var re_password = jQuery('#re_password').val();	
	
	if(password == re_password){
		return 'matched';
	}else{
		return 'error';
	}
}

function getZones() {

	jQuery("#loader").show();

	var country_id = jQuery('#entry_country_id').val();

	jQuery.ajax({

		url: '<?php echo e(URL::to("/ajaxZones")); ?>',

		type: "POST",

		//data: '&country_id='+country_id,

		 data: {'country_id': country_id},

		//async: false,

		success: function (res) {

			//console.log(res);

			var i;

			var showData = [];

			for (i = 0; i < res.length; ++i) {

				var j = i + 1; 

				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>"; 



			}

			showData.push("<option value='other'>Other</option>");

			jQuery("#entry_zone_id").html(showData);

		},
	});



};


</script>