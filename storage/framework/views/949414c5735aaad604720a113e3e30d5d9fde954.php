<?php $__env->startSection('content'); ?>

<!--<div class="col-lg-3">
	<?php echo $__env->make('common.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>-->

	<div class="col-lg-12">
	<br>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">Shopping cart</li>
	</ol>
	<div class="row">
	<div class="col-lg-9">
		<h4>Shopping cart </h4>
		<table class="table table-responsive" >
			  <thead>
				<tr>
				  <th>Product Name</th>
				  <th>Detail</th>
				  <th></th>
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
				  <td><a href="#" class="badge bg-danger" data-toggle="tooltip" data-placement="bottom" title="Remove item">X</a></td>
				  <td>
					  <form method='POST' action='#' style="width: 120px">
						<div class="input-group">
						  <span class="input-group-btn qtyminus">
							<button class="btn btn-secondary " type="button">-</button>
						  </span>
						  <input type="text" value="1" class="form-control qty" placeholder="" aria-label="">
						  <span class="input-group-btn qtyplus">
							<button class="btn btn-secondary " type="button">+</button>
						  </span>
						</div>
					  </form>
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
					<td><a href="#" class="badge bg-danger" data-toggle="tooltip" data-placement="bottom" title="Remove item">X</a></td>
				  <td>
					  <form method='POST' action='#' style="width: 120px">
						<div class="input-group">
						  <span class="input-group-btn qtyminus">
							<button class="btn btn-secondary " type="button">-</button>
						  </span>
						  <input type="text" value="1" class="form-control qty" placeholder="" aria-label="">
						  <span class="input-group-btn qtyplus">
							<button class="btn btn-secondary " type="button">+</button>
						  </span>
						</div>
					  </form>
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
					<td><a href="#" class="badge bg-danger" data-toggle="tooltip" data-placement="bottom" title="Remove item">X</a></td>
				  <td>
				  	  <form method='POST' action='#' style="width: 120px">
						<div class="input-group">
						  <span class="input-group-btn qtyminus">
							<button class="btn btn-secondary " type="button">-</button>
						  </span>
						  <input type="text" value="1" class="form-control qty" placeholder="" aria-label="">
						  <span class="input-group-btn qtyplus">
							<button class="btn btn-secondary " type="button">+</button>
						  </span>
						</div>
					  </form>
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
			   		<td><a href="#" class="badge bg-danger" data-toggle="tooltip" data-placement="bottom" title="Remove item">X</a></td>
				   <td>
				      <form method='POST' action='#' style="width: 120px">
						<div class="input-group">
						  <span class="input-group-btn qtyminus">
							<button class="btn btn-secondary " type="button">-</button>
						  </span>
						  <input type="text" value="1" class="form-control qty" placeholder="" aria-label="">
						  <span class="input-group-btn qtyplus">
							<button class="btn btn-secondary " type="button">+</button>
						  </span>
						</div>
					  </form>
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
		
		   <hr class="featurette-divider">
		<div class="row">
				<div class="col-lg-6">
					<a href="<?php echo e(URL::to('/shop')); ?>" class="btn btn-default">Back To Shopping</a>
				</div>
			<div class="col-lg-6 text-right" >
				<button class="btn btn-primary">Update Cart</button>
				<a href="<?php echo e(URL::to('/checkout')); ?>" class="btn btn-success" >Checkout</a>
			</div>
		</div>
				
	</div>



			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>