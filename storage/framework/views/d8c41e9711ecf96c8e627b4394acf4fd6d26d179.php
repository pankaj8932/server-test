<?php $__env->startSection('content'); ?>

<!--<div class="col-lg-3">
	<?php echo $__env->make('common.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>-->

	<div class="col-lg-12">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">Checkout</li>
	</ol>
	<div class="row">
	<div class="col-lg-9">
		<h4>Shopping cart </h4>
		
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  <li class="nav-item">
			<a class="nav-link active" id="shipping-tab" data-toggle="pill" href="#pills-shipping" role="tab" aria-controls="pills-shpping" aria-expanded="true">Shipping Address</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="billing-tab" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-expanded="true">Billing Address</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="shipping-methods-tab" data-toggle="pill" href="#pills-shipping-methods" role="tab" aria-controls="pills-shipping-methods" aria-expanded="true">Payment Methods</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-expanded="true">Payment Methods</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" id="order-tab" data-toggle="pill" href="#pills-order" role="tab" aria-controls="pills-order" aria-expanded="true">Order Detail</a>
		  </li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
		  <div class="tab-pane fade show active" id="pills-shipping" role="tabpanel" aria-labelledby="shipping-tab">
		  	
		  	<form name="signup" enctype="multipart/form-data" action="<?php echo e(URL::to('/processSignup')); ?>" method="post">
			<div class="form-row">
			  <div class="form-group col-md-6">
				<label for="firstName">First Name</label>
				<input type="text" class="form-control" id="shipping_firstname" name="shipping_firstname">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Last Name</label>
				<input type="text" class="form-control" id="shipping_lastname" name="shipping_lastname">
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">Company</label>
				<input type="text" class="form-control" id="shipping_company" name="shipping_company">
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">Address</label>
				<input type="text" class="form-control" id="shipping_address" name="shipping_address">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Country</label>
				  <select class="form-control" id="shipping_country" name="shipping_country">
					  <option value="" selected>Select Country</option>
					  <option value="">United State</option>
					  <option value="">Pakistan</option>
				  </select>
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">State</label>
				<select class="form-control" id="shipping_state" name="shipping_state">
					  <option value="" selected>Select State</option>
					  <option value="">Albama</option>
					  <option value="">California</option>
				  </select>
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">City</label>
				<input type="text" class="form-control" id="shipping_city" name="shipping_city">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Zip</label>
				<input type="text" class="form-control" id="shipping_zip" name="shipping_zip">
			  </div>
			  
			</div>		
			<button type="submit" id="billing-tab" class="btn btn-primary" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-expanded="true">Continue </button>
		</form>
		  	
		  </div>
		  <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="billing-tab">
		  	<form name="signup" enctype="multipart/form-data" action="<?php echo e(URL::to('/processSignup')); ?>" method="post">
			<div class="form-row">
			  <div class="form-group col-md-6">
				<label for="firstName">First Name</label>
				<input type="text" class="form-control" id="shipping_firstname" name="shipping_firstname">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Last Name</label>
				<input type="text" class="form-control" id="shipping_lastname" name="shipping_lastname">
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">Company</label>
				<input type="text" class="form-control" id="shipping_company" name="shipping_company">
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">Address</label>
				<input type="text" class="form-control" id="shipping_address" name="shipping_address">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Country</label>
				  <select class="form-control" id="shipping_country" name="shipping_country">
					  <option value="" selected>Select Country</option>
					  <option value="">United State</option>
					  <option value="">Pakistan</option>
				  </select>
			  </div>
			  <div class="form-group col-md-6">
				<label for="firstName">State</label>
				<select class="form-control" id="shipping_state" name="shipping_state">
					  <option value="" selected>Select State</option>
					  <option value="">Albama</option>
					  <option value="">California</option>
				  </select>
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">City</label>
				<input type="text" class="form-control" id="shipping_city" name="shipping_city">
			  </div>
			  <div class="form-group col-md-6">
				<label for="lastName">Zip</label>
				<input type="text" class="form-control" id="shipping_zip" name="shipping_zip">
			  </div>
			  
			</div>			
			<div class="form-group">
				<div class="form-check">
				  <label class="form-check-label">
					  <input class="form-check-input" type="checkbox" checked> Same shipping and billing address.
				  </label>
				</div>
			</div>
			<button type="submit" id="billing-tab" class="btn btn-primary" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-expanded="true">Continue </button>
		</form>
		  	
		  </div>
		  <div class="tab-pane fade" id="pills-shipping-methods" role="tabpanel" aria-labelledby="shipping-methods-tab">
			<p>Please select a prefered shipping method to use on this order.</p>
		  	<form name="shipping_mehtods" enctype="multipart/form-data">
				<div id="accordion" role="tablist">
				  <div class="card">
					<div class="card-header" role="tab" id="headingOne">
					  <h5 class="mb-0">
						<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  UPS Shipping
						</a>
					  </h5>
					</div>

					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="card-body">
						  <ul class="list">
							  <li><input type="radio" name="payment_method"> Next Day Air --- $90 </li>
							  <li><input type="radio" name="payment_method"> 2nd Day Air --- $50 </li>
							  <li><input type="radio" name="payment_method"> Ground --- $10 </li>
						  </ul>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" role="tab" id="headingTwo">
					  <h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  Free Shipping
						</a>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					  <div class="card-body">
						<ul class="list">
							<li><input type="radio" name="payment_method"> Free Shipping </li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" role="tab" id="headingThree">
					  <h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  Local Pickup
						</a>
					  </h5>
					</div>
					<div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					  <div class="card-body">
						<ul class="list">
							<li><input type="radio" name="payment_method"> Local Pickup </li>
						</ul>
					  </div>
					</div>
				  </div>

				  <div class="card">
					<div class="card-header" role="tab" id="headingFour">
					  <h5 class="mb-0">
						<a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						  Flate Rate
						</a>
					  </h5>
					</div>

					<div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					  <div class="card-body">
						  <ul class="list">
							<li><input type="radio" name="payment_method"> Flate Rate --- $10 </li>
						</ul>
					  </div>
					</div>
				  </div>

				</div>
				<br>

				<button type="submit" id="billing-tab" class="btn btn-primary" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-expanded="true">Continue </button>
			  </form>
		  </div>
		  <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="payment-tab">
		  	
		  	<p>Please select a prefered payment method to use on this order.</p>		  	
		  	<form name="shipping_mehtods" enctype="multipart/form-data">
				<ul class="list">
				  <li><input type="radio" name="shipping_method"> Paypal  </li>
				  <li><input type="radio" name="shipping_method"> Card Payment </li>
				  <li><input type="radio" name="shipping_method"> Stripe Payment </li>
				  <li><input type="radio" name="shipping_method"> Cash on Delivery </li>
				</ul><br>
				<button type="submit" id="billing-tab" class="btn btn-primary" data-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-expanded="true">Continue </button>
			</form>
			
		  </div>
		  
		  <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="order-tab">
		  	
		  	<table class="table table-responsive" >
			  <thead>
				<tr>
				  <th>Product Name</th>
				  <th>Detail</th>
				  <th>Quantity</th>
				  <th>Discount</th>
				  <th>Total</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>
				  	<a href="<?php echo e(URL::to('/productDetail')); ?>">
						<img width="100px" class="rounded img-thumbnail" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="">
					</a>
				  </td>
				  <td>
						<h6>
							<a href="<?php echo e(URL::to('/productDetail')); ?>">
								Unionbay Park 
							</a>
						</h6>
						<p>
							<strong>Size:</strong> Medium<br>

							<strong>Color:</strong> Red<br>

							<strong>Option:</strong> Option Value<br>

						</p>
				  </td>
				   <td>
					  $10
				  </td>
				  <td>$10</td>
				  <td>$100</td>
				</tr>
				<tr>
				  <td>
				  	<a href="<?php echo e(URL::to('/productDetail')); ?>">
						<img width="100px" class="rounded img-thumbnail" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="">
					</a>
				  </td>
				  <td>
						<h6>
							<a href="<?php echo e(URL::to('/productDetail')); ?>">
								Unionbay Park 
							</a>
						</h6>
						<p>
							<strong>Size:</strong> Medium<br>

							<strong>Color:</strong> Red<br>

							<strong>Option:</strong> Option Value<br>

						</p>
				  </td>
				   <td>
					  $10
				  </td>
				  <td>$10</td>
				  <td>$100</td>
				</tr>
				<tr>
				  <td>
				  	<a href="<?php echo e(URL::to('/productDetail')); ?>">
						<img width="100px" class="rounded img-thumbnail" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="">
					</a>
				  </td>
				  <td>
						<h6>
							<a href="<?php echo e(URL::to('/productDetail')); ?>">
								Unionbay Park 
							</a>
						</h6>
						<p>
							<strong>Size:</strong> Medium<br>

							<strong>Color:</strong> Red<br>

							<strong>Option:</strong> Option Value<br>

						</p>
				  </td>
				   <td>
					  $10
				  </td>
				  <td>$10</td>
				  <td>$100</td>
				</tr>
			
				
				
			  </tbody>
			</table>
	  		<hr class="featurette-divider">
				<div class="col-lg-8">
					<form class="form-inline">
					  <div class="form-group mx-sm-3">
						<label for="inputPassword2" class="">Coupon Code </label>
						<input type="text" class="form-control" id="coupon">
					  </div>
					  <button type="button" class="btn btn-primary">Apply</button>
					</form>
				</div>
			</div>
		  	
		  </div>
		</div>
		

			
				
		<div class="col-lg-3"><br>
			<h5>Order Summary </h5>
			<div class="table-responsive ">
				<table class="table order-table">
				  <tbody>
					<tr>
						<th style="width:50%">Subtotal:</th>
						<td valign="middle" align="center">$10.98</td>
					</tr>
					<tr>
						<th>Tax:</th>
						<td valign="middle" align="center">$0</td>
					</tr>
					<tr>
						<th>Shipping Cost:</th>
						<td valign="middle" align="center">$21.39</td>
					</tr>
					<tr>
						<th>Dicount(Coupon):</th>
						<td valign="middle" align="center">$1</td>
					</tr>
					<tr>
						<th>Total:</th>
						<td valign="middle" align="center">$31.82</td>
					</tr>
				</tbody>
				</table>
			  </div>
		</div>
		</div>
		
				
	</div>



			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>