<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-lg-3">

	<?php echo $__env->make('common.filters', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><br>

	<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<div class="col-lg-9">
	<br>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">Shop</li>
	</ol>
	<br>

	<h4>All Products</h4>

	<div class="col-lg-12">
		<form class="form-inline row">
		  <div class="form-group col-lg-5 row">
			<label for="staticEmail" class="col-sm-2 col-form-label"><strong>Sort</strong></label>
			<div class="col-sm-10">
				<select class="form-control" name="sort">
					<option value="desc">Newest</option>
					<option value="atoz">A - Z</option>
					<option value="desc">Z - A</option>
					<option value="desc">Price: High To Low</option>
					<option value="desc">Price: Low To High</option>
					<option value="desc">Top Seller</option>
					<option value="desc">Special Products</option>
					<option value="desc">Most Liked</option>
				</select>
			</div>
		  </div>

		<div class="form-group  col-lg-5 row">
			<label for="staticEmail" class="col-sm-2 col-form-label"><strong>Display</strong></label>
			<div class="col-sm-10">
				<div class="btn-group">

					<a href="#" id="list" class="btn btn-default btn-sm">
						<i class="fa fa-list active" aria-hidden="true"></i>
					</a> 

					<a href="#" id="grid" class="btn btn-default btn-sm">
						<i class="fa fa-th-large" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		  </div>

		  <div class="form-group  col-lg-3 row text-right">
			<label for="staticEmail" class="col-sm-4 col-form-label"><strong>Limit</strong></label>
			<div class="col-sm-7">
				<select class="form-control" name="limit">
					<option value="15">15</option>
					<option value="30">30</option>
					<option value="60">60</option>
				</select>
			</div>
		  </div>

		</form>

		<br>

	</div>

<?php if($result['products']['success']==1): ?>
	<div class="row list_product" id="listing_products">
		<?php $__currentLoopData = $result['products']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$top_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-xs-12 col-md-4">
			<div class="card product-card">
				<a href="<?php echo e(URL::to('/productDetail/'.$top_seller->products_id)); ?>">
					<img class="card-img-top" src="<?php echo e(asset('').$top_seller->products_image); ?>" alt="<?php echo e($top_seller->products_name); ?>">
				</a>

				<div class="card-body">
					<h5 class="card-title"><?php echo e($top_seller->products_name); ?></h5>
<!--												<p><span class="line-clamp">game with Play station 4TM free and get a voucher discount.</span> </p>-->
					<table class="table">
						<tbody>
							<tr>
								<td align="left">
									<span class="price discounted"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($top_seller->products_price); ?></span>
								</td>
								<td align="right">
									<a href="" class="fa fa-heart active"></a>
								</td>
							</tr>
						</tbody>
					</table>
						<button  href="" class="btn btn-block btn-secondary cart" products_id="<?php echo e($top_seller->products_id); ?>">Add To Cart</button>

					<a href="<?php echo e(URL::to('/productDetail/'.$top_seller->products_id)); ?>" class="btn btn-block btn-link">View</a>
				</div>
				<div class="product_added" <?php if(in_array($top_seller->products_id, $result['cartArray'])): ?>  style="display: block;" <?php endif; ?>>This div is only for addedd product.</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  
	</div>
<?php endif; ?>
</div>
</div>	
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>