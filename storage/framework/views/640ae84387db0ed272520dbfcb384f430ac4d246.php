<!-- scripts -->
<script src="<?php echo asset('resources/views/themes/black/views/js/jquery-3.2.1.slim.min.js'); ?>" crossorigin="anonymous"></script>


<!--<script src="<?php echo asset('resources/views/themes/black/views/js/jquery-3.2.1.js'); ?>"></script>-->


<script src="<?php echo asset('resources/views/themes/black/views/js/popper.min.js'); ?>"></script>
<script src="<?php echo asset('resources/views/themes/black/views/js/bootstrap.min.js'); ?>"></script>

<script src="<?php echo asset('resources/views/themes/black/views/js/bootstrap-slider.min.js'); ?>"></script>


<!--- google map-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&key=AIzaSyCQq_d3bPGfsIAlenXUG5RtZsKZKzOmrMw"></script>

<script type="application/javascript">
	$( document ).ready( function () {
		
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

			if(error=="has error"){
				return false;
			}

		});

		//focus form field
		jQuery(document).on('keyup change', '.field-validate', function(e){

			if(this.value == '') {
				
				jQuery(this).closest(".form-group").addClass('has-error');
				jQuery(this).next(".error-content").removeAttr('hidden');
			}else{
				jQuery(this).closest(".form-group").removeClass('has-error');
				jQuery(this).next(".error-content").attr('hidden');
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
		})
		
		
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
		
	});
	
	
</script>