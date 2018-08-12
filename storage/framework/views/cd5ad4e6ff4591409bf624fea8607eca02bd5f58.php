<!-- scripts -->
<script src="<?php echo asset('public/js/app.js'); ?>"></script>
<script src="<?php echo asset('public/js/jquery-ui.js'); ?>"></script>

<!-- owl carousel -->
<script src="<?php echo asset('public/js/owl.carousel.js'); ?>"></script>

<!--- google map-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&key=AIzaSyCQq_d3bPGfsIAlenXUG5RtZsKZKzOmrMw"></script>

<!--- one signal-->
<?php if(Request::path() == 'checkout'): ?>	
<!------- //paypal -------->

<script type="text/javascript">
window.onload = function(e){ 
 	
	var paypal_public_key = document.getElementById('paypal_public_key').value;
	var acount_type = document.getElementById('paypal_environment').value;
	
	if(acount_type=='Test'){
		var paypal_environment = 'sandbox'
	}else if(acount_type=='Live'){
		var paypal_environment = 'production'
	}
	
     paypal.Button.render({			
		env: paypal_environment, // sandbox | production		
		style: {
            label: 'checkout',
            size:  'small',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'gold'      // gold | blue | silver | black
        },
		
		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		
		client: {
			sandbox:     paypal_public_key,
			production:  paypal_public_key
		},

		// Show the buyer a 'Pay Now' button in the checkout flow
		commit: true,

		// payment() is called when the button is clicked
		payment: function(data, actions) {
			var payment_currency = document.getElementById('payment_currency').value;
			var total_price = '<?php echo number_format((float)$total_price+0, 2, '.', '');?>';
			
			// Make a call to the REST api to create the payment
			return actions.payment.create({
				payment: {
					transactions: [
						{
							amount: { total: total_price, currency: payment_currency }
						}
					]
				}
			});
		},

		// onAuthorize() is called when the buyer approves the payment
		onAuthorize: function(data, actions) {

			// Make a call to the REST api to execute the payment
			return actions.payment.execute().then(function() {
			   	jQuery('#update_cart_form').prepend('<input type="hidden" name="nonce" value='+JSON.stringify(data)+'>');
				jQuery("#update_cart_form").submit();
			});
		}

	}, '#paypal_button');
};
</script>

<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function(e) {
	
	braintree.setup(
		// Replace this with a client token from your server
		" <?php print session('braintree_token')?>",
		"dropin", {
		container: "payment-form"
	});
	
	 
});
</script> 


<script src="<?php echo asset('public/js/stripe_card.js'); ?>" data-rel-js></script> 

<script type="application/javascript">
(function() {
  'use strict';

  var elements = stripe.elements({
    fonts: [
      {
        cssSrc: 'https://fonts.googleapis.com/css?family=Source+Code+Pro',
      },
    ],
    // Stripe's examples are localized to specific languages, but if
    // you wish to have Elements automatically detect your user's locale,
    // use `locale: 'auto'` instead.
    locale: window.__exampleLocale
  });

  // Floating labels
  var inputs = document.querySelectorAll('.cell.example.example2 .input');
  Array.prototype.forEach.call(inputs, function(input) {
    input.addEventListener('focus', function() {
      input.classList.add('focused');
    });
    input.addEventListener('blur', function() {
      input.classList.remove('focused');
    });
    input.addEventListener('keyup', function() {
      if (input.value.length === 0) {
        input.classList.add('empty');
      } else {
        input.classList.remove('empty');
      }
    });
  });

  var elementStyles = {
    base: {
      color: '#32325D',
      fontWeight: 500,
      fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
      fontSize: '16px',
      fontSmoothing: 'antialiased',

      '::placeholder': {
        color: '#CFD7DF',
      },
      ':-webkit-autofill': {
        color: '#e39f48',
      },
    },
    invalid: {
      color: '#E25950',

      '::placeholder': {
        color: '#FFCCA5',
      },
    },
  };

  var elementClasses = {
    focus: 'focused',
    empty: 'empty',
    invalid: 'invalid',
  };

  var cardNumber = elements.create('cardNumber', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardNumber.mount('#example2-card-number');

  var cardExpiry = elements.create('cardExpiry', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardExpiry.mount('#example2-card-expiry');

  var cardCvc = elements.create('cardCvc', {
    style: elementStyles,
    classes: elementClasses,
  });
  cardCvc.mount('#example2-card-cvc');

  registerElements([cardNumber, cardExpiry, cardCvc], 'example2');
})();
</script> 
<?php endif; ?> 

<script type="application/javascript">

<?php if(Request::path() != 'shop'): ?>	
  jQuery(function() {
    jQuery( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
<?php endif; ?>

jQuery( document ).ready( function () {
	jQuery('#loader').hide();
	
	//$('.datepicker').datepicker();
	//fcm 
	
	// Initialize Firebase
      /*var config = {
        apiKey: "AIzaSyDPfcLn01NjwAQvBO0mSJ4g7sp9LiKTzog",
        authDomain: "ecommerceshop-189012.firebaseapp.com",
        databaseURL: "https://ecommerceshop-189012.firebaseio.com",
        projectId: "ecommerceshop-189012",
        storageBucket: "ecommerceshop-189012.appspot.com",
        messagingSenderId: "50877237723"
      };
      firebase.initializeApp(config);
	  
	  // Retrieve Firebase Messaging object.
	  const messaging = firebase.messaging();
	  
	  // Add the public key generated from the console here.
	  messaging.usePublicVapidKey("AAAAC9iFCds:APA91bHfEtriJ6tx24XJF8XWzXQKaEDbLFNeTBZMryPjG6eN5awqnPMn-uj59Y8HmxmEItSikQNaIsKxavjI94z5HzzcjTJfS7tQT127CsmXlu73pUai8dKsFjbgQvC9Iv_s4VQsnVok");
	  
	  messaging.requestPermission().then(function() {
	 	console.log('Notification permission granted.');
	  // TODO(developer): Retrieve an Instance ID token for use with FCM.
	  // ...
	  }).catch(function(err) {
	 	 console.log('Unable to get permission to notify.', err);
	  });
	  
	  messaging.getToken().then(function(currentToken) {
    if (currentToken) {
      sendTokenToServer(currentToken);
      updateUIForPushEnabled(currentToken);
    } else {
      // Show permission request.
      console.log('No Instance ID token available. Request permission to generate one.');
      // Show permission UI.
      updateUIForPushPermissionRequired();
      setTokenSentToServer(false);
    }
  }).catch(function(err) {
    console.log('An error occurred while retrieving token. ', err);
    showToken('Error retrieving Instance ID token. ', err);
    setTokenSentToServer(false);
  });
  
	<?php if($result['commonContent']['setting'][54]->value=='onesignal'): ?>
	 OneSignal.push(function () {
	  OneSignal.registerForPushNotifications();
	  OneSignal.on('subscriptionChange', function (isSubscribed) {
	   if (isSubscribed) {
		OneSignal.getUserId(function (userId) {
		 device_id = userId;
		 //ajax request
		 //console.log(device_id);
		 jQuery.ajax({
			url: '<?php echo e(URL::to("/subscribeNotification")); ?>',
			type: "POST",
			data: '&device_id='+device_id,			
			success: function (res) {},
		});
		 
		 //$scope.oneSignalCookie();
		});
	   }
	  });
	
	 });*/
	<?php endif; ?>
	
	//load google map
	<?php if(Request::path() == 'myContactUs'): ?>		
		initialize();
	<?php endif; ?>	
	
	<?php if(Request::path() == 'checkout'): ?>		
		getZonesBilling();	
		paymentMethods();
	<?php endif; ?>
	

	$.noConflict();
	
	//stripe_ajax
	jQuery(document).on('click', '#stripe_ajax', function(e){
		jQuery('#loader').css('display','flex');
		jQuery.ajax({
			url: '<?php echo e(URL::to("/stripeForm")); ?>',
			type: "POST",
			//data: '&products_id='+products_id,
			
			success: function (res) {
				if(res.trim() == "already added"){					
				}else{
					jQuery('.head-cart-content').html(res);	
					jQuery(parent).removeClass('cart');
					jQuery(parent).addClass('active');
				}
				message = "<?php echo app('translator')->getFromJson('website.Product is added'); ?>";			
				notification(message);
				jQuery('#loader').hide();
			},
		});
	});	
	
	//commeents
	jQuery(document).on('focusout','#order_comments', function(e){
		jQuery('#loader').css('display','flex');
		var comments = jQuery('#order_comments').val();
		jQuery.ajax({
			url: '<?php echo e(URL::to("/commentsOrder")); ?>',
			type: "POST",
			data: '&comments='+comments,
			async: false,
			success: function (res) {	
				jQuery('#loader').hide();			
			},
		});		
	});
	
	
	//cash_on_delivery_button
	jQuery(document).on('click', '#cash_on_delivery_button', function(e){	
		jQuery('#loader').css('display','flex');
		jQuery("#update_cart_form").submit();
	});	
	
		
	//shipping_mehtods_form
	/*jQuery(document).on('submit', '#payment_mehtods_form', function(e){
		jQuery('.error_payment').hide();		
		var checked = jQuery(".payment_method:checked").length > 0;
		if (!checked){
			jQuery('.error_payment').show();
			return false;
		}				
	});*/
	
	//shipping_mehtods_form
	jQuery(document).on('submit', '#shipping_mehtods_form', function(e){
		jQuery('.error_shipping').hide();		
		var checked = jQuery(".shipping_data:checked").length > 0;
		if (!checked){
			jQuery('.error_shipping').show();
			return false;
		}				
	});
	
	//update_cart
	jQuery(document).on('click', '#update_cart', function(e){	
		jQuery('#loader').css('display','flex');
		jQuery("#update_cart_form").submit();
	});	
	
	//shipping_data
	
	jQuery(document).on('click', '.shipping_data', function(e){	
		getZonesBilling();		
	});	
	
	//billling method
	jQuery(document).on('click', '#same_billing_address', function(e){	
	
		if(jQuery(this).prop('checked') == true){
			jQuery(".same_address").attr('readonly','readonly');
			jQuery(".same_address_select").attr('disabled','disabled');
						
		}else{
			jQuery(".same_address").removeAttr('readonly');
			jQuery(".same_address_select").removeAttr('disabled');
		}
	});	
	
	//apply_coupon_cart
	jQuery(document).on('submit', '#apply_coupon', function(e){
		jQuery('#coupon_code').remove('error');
		jQuery('#coupon_require_error').hide();
		jQuery('#loader').css('display','flex');
		
		if(jQuery('#coupon_code').val().length > 0){		
			var formData = jQuery(this).serialize();
			jQuery.ajax({
				url: '<?php echo e(URL::to("/apply_coupon")); ?>',
				type: "POST",
				data: formData,
				success: function (res) {
					var obj = JSON.parse(res);	
					var message = obj.message;
					jQuery('#loader').hide();
					if(obj.success==0){
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==2){			
						jQuery("#coupon_error").html(message).show();
						return false;
					}else if(obj.success==1){						
						window.location.reload(true);	
					}					
				},
			});
		}else{
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
			return false;
		}
		jQuery('#loader').hide();
		return false;
	});
	
	//coupon_code
	jQuery(document).on('keyup', '#coupon_code', function(e){
		jQuery("#coupon_error").hide();
		if(jQuery(this).val().length >0){			
			jQuery('#coupon_code').removeClass('error');
			jQuery('#coupon_require_error').hide();
		}else{
			jQuery('#coupon_code').addClass('error');
			jQuery('#coupon_require_error').show();
		}
		
	});
	
	//test
	jQuery(document).on('click', '#myFunction', function(e){
		var message = 'sadsad';		
		notification(message);
	});

	<?php if(!empty($result['detail']['product_data'][0]->attributes)): ?>
		<?php $__currentLoopData = $result['detail']['product_data'][0]->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributes_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php echo e($attributes_data['option']['name']); ?>();
	
	function <?php echo e($attributes_data['option']['name']); ?>(){
		var value_price = jQuery('option:selected', ".<?php echo e($attributes_data['option']['name']); ?>").attr('value_price');
		jQuery("#<?php echo e($attributes_data['option']['name']); ?>").val(value_price);
	}
		
	//change_options
	jQuery(document).on('change', '.<?php echo e($attributes_data['option']['name']); ?>', function(e){
		
		var <?php echo e($attributes_data['option']['name']); ?> = jQuery("#<?php echo e($attributes_data['option']['name']); ?>").val();
		
		var value_price = jQuery('option:selected', this).attr('value_price');
		var prefix = jQuery('option:selected', this).attr('prefix');
		var current_price = jQuery('#products_price').val();
		
		if(prefix.trim() == '+' ){
			var current_price = current_price - <?php echo e($attributes_data['option']['name']); ?>;
			var total_price = parseInt(current_price) + parseInt(value_price);
		
		}else if(prefix.trim() == '-' ){
			var total_price = current_price - value_price;
		}
		
		//var change_price = '<?=$web_setting[19]->value?>'+total_price;
		
		jQuery("#<?php echo e($attributes_data['option']['name']); ?>").val(value_price);
		jQuery('#products_price').val(total_price);
		
		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = qty * products_price; 
		jQuery('.total_price').html('<?=$web_setting[19]->value?>'+total_price);
		
	});
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

	//change language
	function changeLanguage(locale){
		jQuery('#loader').css('display','flex');								
		jQuery.ajax({			
			url: '<?php echo e(URL::to("/language")); ?>',			
			type: "POST",			
			data: '&locale='+locale,
			//dataType:"json",			
						
			success: function (res) {	
				window.location.reload(true);		
			},			
		});	
		
	};
	
	jQuery( function() {
		jQuery.widget( "custom.iconselectmenu", jQuery.ui.selectmenu, {
		  _renderItem: function( ul, item ) {
			var li = jQuery( "<li>" ),
			  wrapper = jQuery( "<div>", { text: item.label } );
	 
			if ( item.disabled ) {
			  li.addClass( "ui-state-disabled" );
			}
	 
			jQuery( "<span>", {
			  style: item.element.attr( "data-style" ),
			  "class": "ui-icon " + item.element.attr( "data-class" )
			})
			  .appendTo( wrapper );
	 
			return li.append( wrapper ).appendTo( ul );
		  }
		});
	 

		
		jQuery("#change_language")
		.iconselectmenu({
		  create: function (event, ui) {
			  var widget = jQuery(this).iconselectmenu("widget");
			  $span = jQuery('<span id="' + this.id + '_image" class="ui-selectmenu-image"> ').html("&nbsp;").appendTo(widget);
			  $span.attr("style", jQuery(this).children(":selected").data("style"));
			  
		  },		  		 
		  change: function (event, ui) {
			  jQuery("#" + this.id + '_image').attr("style", ui.item.element.data("style"));
			  var locale = jQuery(this).val();
			  changeLanguage(locale);
			  
		  }
		}).iconselectmenu("menuWidget").addClass("ui-menu-icons customicons");
		
  } );
  
	jQuery( function() {
    	jQuery( "#category_id" ).selectmenu();
	});
	
	//is_liked
	jQuery(document).on('click', '.is_liked', function(e){
		var products_id = jQuery(this).attr('products_id');
		var selector = jQuery(this);
		jQuery('#loader').css('display','flex');						
		jQuery.ajax({			
			url: '<?php echo e(URL::to("/likeMyProduct")); ?>',			
			type: "POST",			
			data: '&products_id='+products_id,			
						
			success: function (res) {			
				//jQuery('.head-cart-content').html(res);	
				var obj = JSON.parse(res);	
				var message = obj.message;
				
				if(obj.success==0){
					
				}else if(obj.success==2){
					jQuery(selector).removeClass('fa-heart-o');
					jQuery(selector).addClass('fa-heart');
					jQuery(selector).children('span').html(obj.total_likes);
					//jQuery(selector).children('span').html(obj.total_likes+" <?php echo app('translator')->getFromJson('website.Likes'); ?>");
				}else if(obj.success==1){
					jQuery(selector).removeClass('fa-heart');
					jQuery(selector).addClass('fa-heart-o');
					
					jQuery(selector).children('span').html(obj.total_likes);
					//jQuery(selector).children('span').html(obj.total_likes+" <?php echo app('translator')->getFromJson('website.Likes'); ?>");
				}	
				jQuery('#loader').hide();
				notification(message);
						
			},			
		});	
		
	});
	
	//wishlist_liked
	jQuery(document).on('click', '.wishlist_liked', function(e){
		var products_id = jQuery(this).attr('products_id');
		var selector = jQuery(this);
		jQuery('#loader').css('display','flex');						
		jQuery.ajax({			
			url: '<?php echo e(URL::to("/likeMyProduct")); ?>',			
			type: "POST",			
			data: '&products_id='+products_id,			
						
			success: function (res) {				
				var obj = JSON.parse(res);	
				var message = obj.message;
				
				if(obj.success==0){
					
				}else if(obj.success==2){
					jQuery(selector).removeClass('fa-heart-o');
					jQuery(selector).addClass('fa-heart');
					jQuery(selector).next('span').html(obj.total_likes+" <?php echo app('translator')->getFromJson('website.Likes'); ?>");
				}else if(obj.success==1){
					jQuery(selector).parents('.wihslist-product').remove();
					jQuery(selector).removeClass('fa-heart');
					jQuery(selector).addClass('fa-heart-o');
					jQuery(selector).next('span').html(obj.total_likes+" <?php echo app('translator')->getFromJson('website.Likes'); ?>");
				}	
				jQuery('#loader').hide();
			},			
		});	
		
	});

	<?php if(session('direction')=='rtl'): ?>
		var direction = true; 
	<?php else: ?>
		var direction = false;
	<?php endif; ?>
	//product slider
	jQuery(".owl_featured").owlCarousel({
		margin:10,
		loop:false,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	

	jQuery("#owl_special").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});

	jQuery("#owl_liked").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
	
	jQuery("#owl_brands").owlCarousel({
		loop:false,
		margin:10,
		nav:true,
		rtl:direction,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:6
			}
		}
	});

	jQuery( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
	jQuery( ".owl-next").html('<i class="fa fa-angle-right"></i>');


//change_language
jQuery(document).on('click', '.change_language', function(e){
	jQuery('#loader').css('display','flex');
	var languages_id = jQuery(this).attr('languages_id');
	jQuery.ajax({
		url: '<?php echo e(URL::to("/change_language")); ?>',
		type: "POST",
		data: '&languages_id='+languages_id,
		success: function (res) {
			jQuery('#loader').hide();
		},
	});
});	


//default product attribute
jQuery(document).on('click', '.cart', function(e){	
	var parent = jQuery(this);
	var products_id = jQuery(this).attr('products_id');
	var message ;
	jQuery.ajax({
		url: '<?php echo e(URL::to("/addToCart")); ?>',
		type: "POST",
		data: '&products_id='+products_id,		
		success: function (res) {
			if(res.trim() == "already added"){							
			}else{
				jQuery('.head-cart-content').html(res);				
				jQuery(parent).removeClass('cart');
				jQuery(parent).addClass('active');
				jQuery(parent).html("<?php echo app('translator')->getFromJson('website.Added'); ?>");
			}
			message = "<?php echo app('translator')->getFromJson('website.Product is added'); ?>";			
			notification(message);
		},
	});

});

//sortby
jQuery(document).on('change', '.sortby', function(e){	
	jQuery('#loader').css('display','flex');
	jQuery("#load_products_form").submit();
});
	

//load more products
jQuery(document).on('click', '#load_products', function(e){	
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var formData = jQuery("#load_products_form").serialize();
	jQuery.ajax({
		url: '<?php echo e(URL::to("/filterProducts")); ?>',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){						
				jQuery('#load_products').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-products').append(res);
			}			
			jQuery('#loader').hide();
		},
	});
});

//sortby
jQuery(document).on('change', '.sortbywishlist', function(e){	
	jQuery('#loader').css('display','flex');
	jQuery("#load_wishlist_form").submit();
});
	

//load more products
jQuery(document).on('click', '#load_wishlist', function(e){	
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var formData = jQuery("#load_wishlist_form").serialize();
	jQuery.ajax({
		url: '<?php echo e(URL::to("/loadMoreWishlist")); ?>',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){						
				jQuery('#load_wishlist').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-wishlist').append(res);
			}
			jQuery('#loader').hide();
		},
	});
});



//sortbynews
jQuery(document).on('change', '.sortbynews', function(e){	
	jQuery('#loader').css('display','flex');
	jQuery("#load_news_form").submit();
});

//load more news
jQuery(document).on('click', '#load_news', function(e){	
	jQuery('#loader').css('display','flex');
	var page_number = jQuery('#page_number').val();
	var formData = jQuery("#load_news_form").serialize();
	jQuery.ajax({
		url: '<?php echo e(URL::to("/loadMoreNews")); ?>',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){						
				jQuery('#load_news').hide();
				jQuery('#loaded_content').show();
			}else{
				page_number++;
				jQuery('#page_number').val(page_number);
				jQuery('#listing-news').append(res);
			}
			jQuery('#loader').hide();
		},
	});
});


//apply attributes
jQuery(document).on('click', '#apply_options_btn', function(e){				
	jQuery('#loader').css('display','flex');	
	jQuery('#page_number').val(0);
	jQuery('#filters_applied').val(1);
	var formData = jQuery("#load_products_form").serialize();		
	jQuery.ajax({
		url: '<?php echo e(URL::to("/filterProducts")); ?>',
		type: "POST",
		data: formData,
		success: function (res) {
			if(jQuery.trim().res==0){						
				jQuery('#load_products').hide();
			}else{
				jQuery('#listing-products').html(res);
			}
			jQuery('#page_number').val(1);
			jQuery('#loader').hide();
		},
	});					
});

//add-to-Cart with custom options
jQuery(document).on('click', '.add-to-Cart', function(e){	
	jQuery('#loader').css('display','flex');
	var formData = jQuery("#add-Product-form").serialize();
	var url = jQuery('#checkout_url').val();
	var message;
	jQuery.ajax({
		url: '<?php echo e(URL::to("/addToCart")); ?>',
		type: "POST",
		data: formData,
		
		success: function (res) {
			if(res.trim() == "already added"){
				//notification
				message = 'Product is added!';
			}else{
				jQuery('.head-cart-content').html(res);
				message = 'Product is added!';
				jQuery(parent).addClass('active');
			}
				if(url.trim()=='true'){
					window.location.href = '<?php echo e(URL::to("/checkout")); ?>';
				}else{
					window.location.href = '<?php echo e(URL::to("/myCart")); ?>';
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
			jQuery(this).next(".error-content").attr('hidden', true);
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

			jQuery(this).next(".error-content").attr('hidden', true);

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
					}else if(res=='error'){
						jQuery('.password').closest(".form-group").addClass('has-error');						
						jQuery('#re_password').closest('.re-password-content').children('.error-content-password').removeAttr('hidden');						
						error = "has error";
					}
				}else{
					jQuery(this).closest(".form-group").removeClass('has-error');
					jQuery(this).next(".error-content").attr('hidden', true);
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
			jQuery(this).next(".error-content").attr('hidden', true);
		}
	});



	//

	jQuery(".email-validate").each(function() {

		var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

		if(this.value != '' && validEmail.test(this.value)) {

			jQuery(this).closest(".form-group").removeClass('has-error');

			jQuery(this).next(".error-content").attr('hidden', true);



		}else{

			jQuery(this).closest(".form-group").addClass('has-error');

			jQuery(this).next(".error-content").removeAttr('hidden');

			error = "has error";

		}

	});

	
	jQuery(".checkbox-validate").each(function() {
		
		if(jQuery(this).prop('checked') == true){
			jQuery(this).closest(".form-group").removeClass('has-error');
			jQuery(this).closest('.checkbox-parent').children('.error-content').attr('hidden', true);						
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
		console.log(this.value);
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});



//focus form field
jQuery(document).on('keyup', '.number-validate', function(e){
	if(this.value == '' || isNaN(this.value)) {
		jQuery(this).closest(".form-group").addClass('has-error');
		jQuery(this).next(".error-content").removeAttr('hidden');
	}else{
		jQuery(this).closest(".form-group").removeClass('has-error');
		jQuery(this).next(".error-content").attr('hidden', true);
	}
});

//match password
jQuery(document).on('keyup focusout', '.password', function(e){

	if(this.value == '') {				

		jQuery(this).closest(".form-group").addClass('has-error');

		jQuery(this).next(".error-content").removeAttr('hidden');

	}else{

		jQuery(this).closest(".form-group").removeClass('has-error');

		jQuery(this).next(".error-content").attr('hidden', true);

	}

});



jQuery(document).on('keyup focusout', '.email-validate', function(e){

	var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

	if(this.value != '' && validEmail.test(this.value)) {

		jQuery(this).closest(".form-group").removeClass('has-error');

		jQuery(this).next(".error-content").attr('hidden', true);



	}else{

		jQuery(this).closest(".form-group").addClass('has-error');

		jQuery(this).next(".error-content").removeAttr('hidden');

		error = "has error";

	}

});

	

	
jQuery(document).on('keyup','.qty',function(){
	var minimum = '1';
	var maximum = jQuery(this).attr('max');
	var current = jQuery(this).val();	
	
	if( parseInt(current) > parseInt(maximum)){
		jQuery(this).val(maximum);
	}
	
	if(current<minimum){
		jQuery(this).val(minimum);
	}	
});
	

	//sorting grid/list
	jQuery(document).on('click','#list',function(){		
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-products, .load-more-area').hide();		
			jQuery( '#listing-products' ).removeClass( 'products-3x' );
			jQuery( '#listing-products' ).addClass( 'products-list' );
			jQuery( '#grid' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );		
			jQuery('#listing-products, .load-more-area').fadeIn(1000);	
		}
	});

	jQuery(document).on('click','#grid',function(){	
		if (!jQuery(this).hasClass('active')){ 		
			jQuery('#listing-products, .load-more-area').hide();	
			jQuery( '#listing-products' ).removeClass( 'products-list' );
			jQuery( '#listing-products' ).addClass( 'products-3x' );
			jQuery( '#list' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-products, .load-more-area').fadeIn(1000);
		}
	});

	//sorting grid/list
	jQuery(document).on('click','#list_wishlist',function(){		
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-wishlist, .load-more-area').hide();		
			jQuery( '#listing-wishlist' ).removeClass( 'products-5x' );
			jQuery( '#listing-wishlist' ).addClass( 'products-list' );
			jQuery( '#grid_wishlist' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );		
			jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);	
		}
	});

	jQuery(document).on('click','#grid_wishlist',function(){	
		if (!jQuery(this).hasClass('active')){ 		
			jQuery('#listing-wishlist, .load-more-area').hide();	
			jQuery( '#listing-wishlist' ).removeClass( 'products-list' );
			jQuery( '#listing-wishlist' ).addClass( 'products-5x' );
			jQuery( '#list_wishlist' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-wishlist, .load-more-area').fadeIn(1000);
		}
	});
	
	//sorting grid/list
	jQuery(document).on('click','#list_news',function(){		
		if (!jQuery(this).hasClass('active')) {
			jQuery('#listing-news, .load-more-area').hide();		
			jQuery( '#listing-news' ).removeClass( 'products-12x' );
			jQuery( '#listing-news' ).addClass( 'products-list' );
			jQuery( '#grid' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );		
			jQuery('#listing-news, .load-more-area').fadeIn(1000);	
		}
	});

	jQuery(document).on('click','#grid_news',function(){	
		if (!jQuery(this).hasClass('active')){ 		
			jQuery('#listing-news, .load-more-area').hide();	
			jQuery( '#listing-news' ).removeClass( 'products-list' );
			jQuery( '#listing-news' ).addClass( 'products-12x' );
			jQuery( '#list' ).removeClass( 'active' );
			jQuery( this ).addClass( 'active' );
			jQuery('#listing-news, .load-more-area').fadeIn(1000);
		}
	});
	
	/*$(".show_commentsandnotes_container").click(function () {
		$('.commentsandnotes_bg').fadeIn(1000, function() {
		   $('.commentsandnotes_bg').addClass('show');
		});
		$('.commentsandnotes_container').fadeIn(1000, function() {
		   $('.commentsandnotes_container').addClass('show');
		});
	});
	$(".commentsandnotes_bg").click(function () {
		$('.commentsandnotes_bg').fadeOut(1000, function() { 
		   $('.commentsandnotes_bg').removeClass('show');
		});
		$('.commentsandnotes_container').fadeOut(1000, function() { 
		   $('.commentsandnotes_container').removeClass('show'); 
		});
	});*/
	

	
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
			<?php if(!empty($result['detail']['product_data'][0]->products_quantity)): ?>				
			if(currentVal < <?php echo e($result['detail']['product_data'][0]->products_quantity); ?> ){
				// Increment
				jQuery(this).prev('.qty').val(currentVal + 1);					
			}				
			<?php endif; ?>

		} else {
			// Otherwise put a 0 there
			jQuery(this).prev('.qty').val(0);
		}
		
		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = qty * products_price; 
		jQuery('.total_price').html('<?=$web_setting[19]->value?>'+total_price.toFixed(2));

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
		if (!isNaN(currentVal) && currentVal > 1) {
			// Decrement one
			jQuery(this).next('.qty').val(currentVal - 1);
		} else {
			
			// Otherwise put a 0 there
			jQuery(this).next('.qty').val(1);

		}
		
		var qty = jQuery('.qty').val();
		var products_price = jQuery('#products_price').val();
		var total_price = qty * products_price; 
		jQuery('.total_price').html('<?=$web_setting[19]->value?>'+total_price.toFixed(2));

	});

	
	//cart page
	<?php if( !empty($result['cart']) and count($result['cart']) > 0): ?>
			<?php $__currentLoopData = $result['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	// This button will increment the value
	jQuery('.qtypluscart_<?php echo e($products->customers_basket_id); ?>').click(function(e){
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
		
		/*var qty = jQuery(this).prev('.qty').val();
		var total_price = qty * <?php echo e($products->final_price); ?>; 
		var discount_price = qty * <?php if(!empty($products->discount_price)): ?> <?php echo e($products->discount_price); ?> <?php endif; ?>;
		jQuery('.cart_item_price_<?php echo e($products->customers_basket_id); ?>').val(total_price);
		jQuery('.cart_price_<?php echo e($products->customers_basket_id); ?>').html('<?=$web_setting[19]->value?>'+total_price);	
		jQuery('.discount_price_<?php echo e($products->customers_basket_id); ?>').val(discount_price);		
		cart_item_price();*/

	});

	// This button will decrement the value till 0
	jQuery(".qtyminus_<?php echo e($products->customers_basket_id); ?>").click(function(e) {
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = jQuery(this).attr('field');
		// Get its current value
		var currentVal = parseInt(jQuery(this).next('.qty').val());
		// If it isn't undefined or its greater than 0
		if (!isNaN(currentVal) && currentVal > 1) {
			// Decrement one
			jQuery(this).next('.qty').val(currentVal - 1);
		} else {
			// Otherwise put a 0 there
			jQuery(this).next('.qty').val(1);
		}
		
		/*var qty = jQuery(this).next('.qty').val();
		var total_price = qty * <?php echo e($products->final_price); ?>; 
		var discount_price = qty * <?php if(!empty($products->discount_price)): ?> <?php echo e($products->discount_price); ?> <?php endif; ?>;
		jQuery('.cart_item_price_<?php echo e($products->customers_basket_id); ?>').val(total_price);
		jQuery('.cart_price_<?php echo e($products->customers_basket_id); ?>').html('<?=$web_setting[19]->value?>'+total_price);
		jQuery('.discount_price_<?php echo e($products->customers_basket_id); ?>').val(discount_price);
		cart_item_price();*/
	});

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
	
	function cart_item_price(){
		
		var subtotal = 0;
		jQuery(".cart_item_price").each(function() {
			subtotal= parseFloat(subtotal) + parseFloat(jQuery(this).val());				
		});
		jQuery('#subtotal').html('<?=$web_setting[19]->value?>'+subtotal);
		
		var discount = 0;			
		jQuery(".discount_price_hidden").each(function() {
			discount =  parseFloat(discount) - parseFloat(jQuery(this).val());				
		});
		
		jQuery('.discount_price').val(Math.abs(discount));
		
		jQuery('#discount').html('<?=$web_setting[19]->value?>'+Math.abs(discount));
		
		//total value
		var total_price = parseFloat(subtotal) - parseFloat(discount);
		jQuery('#total_price').html('<?=$web_setting[19]->value?>'+total_price);
	};
	
	//default_address
	jQuery(document).on('click', '.default_address', function(e){
		jQuery('#loader').css('display','flex');
		var address_id = jQuery(this).attr('address_id');
		jQuery.ajax({
			url: '<?php echo e(URL::to("/myDefaultAddress")); ?>',
			type: "POST",
			data: '&address_id='+address_id,
			
			success: function (res) {
				 window.location = 'myAddress?action=default';
			},

		});

	});

	

	//deleteMyAddress
	jQuery(document).on('click', '.deleteMyAddress', function(e){
		jQuery('#loader').css('display','flex');
		var address_id = jQuery(this).attr('address_id');
		jQuery.ajax({
			url: '<?php echo e(URL::to("/deleteMyAddress")); ?>',
			type: "POST",
			data: '&address_id='+address_id,
			
			success: function (res) {
				window.location = 'myAddress?action=detele';
			},
		});
	});



	 jQuery( function() {
	  var maximum_price = jQuery( ".maximum_price" ).val();
	  jQuery( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: maximum_price,
		values: [ 0, maximum_price ],
		slide: function( event, ui ) {
	   /*jQuery( "#amount" ).val( "<?php echo e($web_setting[19]->value); ?>" + ui.values[ 0 ] + " - <?php echo e($web_setting[19]->value); ?>" + ui.values[ 1 ] );*/
	   jQuery('#min_price').val("<?php echo e($web_setting[19]->value); ?>" + ui.values[ 0 ] );
	   jQuery('#max_price').val("<?php echo e($web_setting[19]->value); ?>" + ui.values[ 1 ] );
	   
	   jQuery('#min_price_show').val( ui.values[ 0 ] );
	   jQuery('#max_price_show').val( ui.values[ 1 ] );
		}
	  });	   
	   jQuery( "#min_price_show" ).val( jQuery( "#slider-range" ).slider( "values", 0 ) );	   
	   jQuery( "#max_price_show" ).val(jQuery( "#slider-range" ).slider( "values", 1 ) );
	 });
 
		

//tooltip enable
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
});		

function initialize(location){	
	//var address = 'Faisalabad, Pakistan';
	var address = '40.730610, -73.935242';
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


//ready doument end
jQuery('.dropdown-menu').on('click', function(event){
	// The event won't be propagated up to the document NODE and 
	// therefore delegated events won't be fired
	event.stopPropagation();
});
		



jQuery(".index-tab").on('click', function(event){
	jQuery('.index-tab').removeClass('active');
	jQuery(this).addClass('active');
	var Index =	jQuery(this).attr("tab-name");

	if(Index == '#featured'){
		jQuery('#featured').addClass('active');
		jQuery('#special').removeClass('active');
		jQuery('#liked').removeClass('active');
	}
	else if(Index == '#special'){
		jQuery('#featured').removeClass('active');
		jQuery('#special').addClass('active');
		jQuery('#liked').removeClass('active');
	}
	else if(Index == '#liked'){
		jQuery('#featured').removeClass('active');
		jQuery('#special').removeClass('active');
		jQuery('#liked').addClass('active');
	}
});

function delete_cart_product(cart_id){
	jQuery('#loader').css('display','flex');
	var id = cart_id;
	jQuery.ajax({
		url: '<?php echo e(URL::to("/deleteCart")); ?>',
		type: "GET",
		data: '&id='+id+'&type=header cart',		
		success: function (res) {
			window.location.reload(true);
		},
	});
};

//paymentMethods
function paymentMethods(){
	//jQuery('#loader').css('display','flex');
	var payment_method = jQuery(".payment_method:checked").val();
	jQuery(".payment_btns").hide();
	
	jQuery("#"+payment_method+'_button').show();
	
	jQuery.ajax({
		url: '<?php echo e(URL::to("/paymentComponent")); ?>',
		type: "POST",
		data: '&payment_method='+payment_method,			
		success: function (res) {
			//jQuery('#loader').hide();
		},
	});
}

//notification
function notification(message) {
	jQuery('#message_content').html(message);
	var x = document.getElementById("message_content");
	x.className = "show";
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

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
	jQuery('#loader').css('display','flex');
	var country_id = jQuery('#entry_country_id').val();
	jQuery.ajax({
		url: '<?php echo e(URL::to("/ajaxZones")); ?>',
		type: "POST",
		//data: '&country_id='+country_id,
		 data: {'country_id': country_id},
		
		success: function (res) {
			var i;
			var showData = [];
			for (i = 0; i < res.length; ++i) {
				var j = i + 1; 
				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>"; 
			}
			showData.push("<option value='Other'><?php echo app('translator')->getFromJson('website.Other'); ?></option>");
			jQuery("#entry_zone_id").html(showData);
			jQuery('#loader').hide();
		},
	});

};

function getZonesBilling() {
	jQuery('#loader').css('display','flex');
	var country_id = jQuery('#billing_countries_id').val();
	jQuery.ajax({
		url: '<?php echo e(URL::to("/ajaxZones")); ?>',
		type: "POST",
		//data: '&country_id='+country_id,
		 data: {'country_id': country_id},
		
		success: function (res) {
			var i;
			var showData = [];
			for (i = 0; i < res.length; ++i) {
				var j = i + 1; 
				showData[i] = "<option value='"+res[i].zone_id+"'>"+res[i].zone_name+"</option>"; 
			}
			showData.push("<option value='Other'><?php echo app('translator')->getFromJson('website.Other'); ?></option>");
			jQuery("#billing_zone_id").html(showData);
			jQuery('#loader').hide();
		},
	});

};

function getZonesBilling() {
	var field_name = jQuery('.shipping_data:checked');
	var mehtod_name = jQuery(field_name).attr('method_name');
	var shipping_price = jQuery(field_name).attr('shipping_price');
	jQuery("#mehtod_name").val(mehtod_name);
	jQuery("#shipping_price").val(shipping_price);
}


/*function striptePyament(token) {
	
	jQuery.ajax({
		url: '<?php echo e(URL::to("/place_order")); ?>',
		type: "POST",
		data: '&token='+token,
		
		success: function (res) {
			if(res.trim() == "already added"){
				
				
			}else{
				jQuery('.head-cart-content').html(res);
				
				
				jQuery(parent).removeClass('cart');
				jQuery(parent).addClass('active');
			}
			message = 'Product is added!'
			notification(message);
		},
	});
}
*/
'use strict';

	;( function ( document, window, index )
	{
		var inputs = document.querySelectorAll( '.inputfile' );
		Array.prototype.forEach.call( inputs, function( input )
		{
			var label	 = input.nextElementSibling,
				labelVal = label.innerHTML;
			
			input.addEventListener( 'change', function( e )
			{
				var fileName = '';
				
				if( this.files && this.files.length > 1 )
					fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
				else
					fileName = e.target.value.split( '\\' ).pop();
	
				if( fileName )
					label.querySelector( 'span' ).innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});
	
			// Firefox bug fix
			input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
			input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
		});
	}( document, window, 0 ));
</script>
