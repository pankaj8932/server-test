<?php $__env->startSection('content'); ?>

<div class="col-lg-12">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
		<li class="breadcrumb-item active">Product Detail</li>
	</ol>
		
	<div class="row">
		
		<div class="col-lg-4">
			<div class="row">
				<div class="col-lg-12" id="slider">
						<div id="product-slider" class="carousel slide">
							<!-- main slider carousel items -->
							<div class="carousel-inner">
							
							<!-- default image -->
							<div class="active item carousel-item" data-slide-number="0">
								<img class="img-thumbnail" src="<?php echo e(asset('').$result['detail']['product_data'][0]->products_image); ?>" alt="img-fluid">
							</div>
								
							<?php $__currentLoopData = $result['detail']['product_data'][0]->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								<div class="item carousel-item" data-slide-number="<?php echo e(++$key); ?>">
									<img class="img-thumbnail" src="<?php echo e(asset('').$images->image); ?>" alt="img-fluid">
								</div>
								
							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
							
							<a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
													
							<div class="carousel-indicators row">
								<div class=" active col-xs-6 col-md-3" data-slide-to="0" data-target="#product-slider">
									<a id="carousel-selector-0 thumbnail" class="selected" >
										<img class="img-thumbnail " src="<?php echo e(asset('').$result['detail']['product_data'][0]->products_image); ?>" alt="img-fluid">
									</a>
								</div>
								<?php $__currentLoopData = $result['detail']['product_data'][0]->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
									<div class=" col-xs-6 col-md-3" data-slide-to="<?php echo e(++$key); ?>" data-target="#product-slider">
										<a id="carousel-selector-1 thumbnail" >
											<img class="img-thumbnail " src="<?php echo e(asset('').$images->image); ?>" alt="img-fluid">
										</a>
									</div>
									
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
					</div>
				</div>

			</div>
			
		</div>
		
		<div class="col-lg-8">
		
			<h3><?php echo e($result['detail']['product_data'][0]->products_name); ?> <a href="#"><i class="fa <?php if($result['detail']['product_data'][0]->isLiked==0): ?> fa-heart-o <?php else: ?> fa-heart <?php endif; ?>"></i></a></h3>
			<p><strong>Categories: </strong><a href="<?php echo e(URL::to('/shop?categories_id='.$result['detail']['product_data'][0]->categories_id)); ?>"><?php echo e($result['detail']['product_data'][0]->categories_name); ?></a></p>
			
			<h3><span <?php if(!empty($result['detail']['product_data'][0]->discount_price)): ?> style="text-decoration: line-through"  <?php endif; ?> ><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($result['detail']['product_data'][0]->products_price); ?></span>
			<?php if(!empty($result['detail']['product_data'][0]->discount_price)): ?> <?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($result['detail']['product_data'][0]->discount_price); ?>  <?php endif; ?> 
			</h3>
			<!--discount_price-->
			
			<form name="attributes" method="post" id="add-Product-form">
			
			<input type="hidden" name="products_id" value="<?php echo e($result['detail']['product_data'][0]->products_id); ?>">
			<?php if(count($result['detail']['product_data'][0]->attributes)>0): ?>
		 	 <div class="form-row">
		 	 
		 	 <?php $__currentLoopData = $result['detail']['product_data'][0]->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributes_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			 <input type="hidden" name="option_name[]" value="<?php echo e($attributes_data['option']['name']); ?>" >
			  <div class="form-group col-md-6 form-row">
				<label for="<?php echo e($attributes_data['option']['name']); ?>" class="col-sm-2 col-form-label"><?php echo e($attributes_data['option']['name']); ?></label>
				
				
			 
				<div class="col-sm-9">
					<select name="<?php echo e($attributes_data['option']['name']); ?>" class="form-control">
					 <?php $__currentLoopData = $attributes_data['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!--
					 <input type="hidden" name="option_price[]" value="<?php echo e($values_data['price']); ?>" >
			 	<input type="hidden" name="option_prefix[]" value="<?php echo e($values_data['price_prefix']); ?>" >
-->
						<option value="<?php echo e($values_data['id']); ?>"><?php echo e($values_data['value']); ?></option>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>
			  </div>
			   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>
			<p><strong>Products Description</strong>
			<br>
				<?=stripslashes($result['detail']['product_data'][0]->products_description)?>
			</p>
			
			<div class="col-md-12">
			<hr class="featurette-divider">
			</div>
			<div class="row">
				<div class="form-group col-md-6 form-row">
					<label for="color" class="col-sm-3 col-form-label">Quantity </label>
					<div class="col-sm-9">
						 <div class="input-group">
						  <span class="input-group-btn qtyminus">
							<button class="btn btn-secondary " type="button">-</button>
						  </span>
						  <input type="text" name="quantity" value="1" class="form-control qty" placeholder="" aria-label="">
						  <span class="input-group-btn qtyplus">
							<button class="btn btn-secondary " type="button">+</button>
						  </span>
						</div>
					</div>
				  </div>
			  	  <div class="form-group col-md-6 text-right">
					<button class="btn btn-primary cart" type="button" products_id="<?php echo e($result['detail']['product_data'][0]->products_id); ?>">Add To Cart</button>
				  </div>
			</div>
			
			</form>
		</div>


	</div>
	
	<div class="row">
			
			<?php $__currentLoopData = $result['simliar_products']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$simliar_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($result['detail']['product_data'][0]->products_id != $simliar_products->products_id): ?>
				<?php if(++$key<=5): ?>
<!--
				<div class="card item grid-group-item col-lg-3" >
					<a href="<?php echo e(URL::to('/productDetail/'.$simliar_products->products_id)); ?>">
						<img class="card-img-top" src="<?php echo e(asset('').$simliar_products->products_image); ?>" alt="Card image cap">
					</a>

					<div class="card-body">
					    <h4 class="card-title"><?php echo e($simliar_products->products_name); ?></h4>
						<p class="card-text"><span <?php if(!empty($simliar_products->discount_price)): ?> style="text-decoration: line-through;" <?php endif; ?>><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($simliar_products->products_price); ?></span> &nbsp;
						<?php if(!empty($simliar_products->discount_price)): ?>
						<span><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($simliar_products->discount_price); ?></span>
						<?php endif; ?> &nbsp;&nbsp;&nbsp;
						<i class="fa fa-heart"></i></p>
						<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail/'.$simliar_products->products_id)); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
					</div>
				</div>
-->
				<div class="col-xs-12 col-md-3">
					<div class="card product-card">
						<a href="<?php echo e(URL::to('/productDetail/'.$simliar_products->products_id)); ?>">
							<img class="card-img-top" src="<?php echo e(asset('').$simliar_products->products_image); ?>" alt="<?php echo e($simliar_products->products_name); ?>">
						</a>

						<div class="card-body">
							<h5 class="card-title"><?php echo e($simliar_products->products_name); ?></h5>
<!--												<p><span class="line-clamp">game with Play station 4TM free and get a voucher discount.</span> </p>-->
							<table class="table">
								<tbody>
									<tr>
										<td align="left">
											<span class="price" <?php if(!empty($simliar_products->discount_price)): ?> style="text-decoration: line-through;" <?php endif; ?>><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($simliar_products->products_price); ?></span>
											<?php if(!empty($simliar_products->discount_price)): ?>
												<span class="price discounted"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($simliar_products->discount_price); ?></span>
											<?php endif; ?>
										</td>
										<td align="right">
												<a href="" class="fa fa-heart active"></a>
										</td>
									</tr>
								</tbody>
							</table>
							<button  href="" class="btn btn-block btn-secondary cart" products_id="<?php echo e($simliar_products->products_id); ?>">Add To Cart</button>
							<a href="<?php echo e(URL::to('/productDetail/'.$simliar_products->products_id)); ?>" class="btn btn-block btn-link">View</a>
						</div>
					</div>
				</div>
						
					<?php endif; ?>		
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			   
			</div>


</div>



			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>