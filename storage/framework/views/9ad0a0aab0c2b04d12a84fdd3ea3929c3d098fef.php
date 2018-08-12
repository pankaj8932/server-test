<?php $__env->startSection('content'); ?>
<div class="banner-area py-4 my-5 bg-light">
	<div class="row">
		<div class="col-xs-12 col-md-4 text-center">
			<div class="banner-single">
				<h3 class="fa fa-recycle"></h3>
				<h4 class="title">Free Return</h4>
				<p>30-Days Money back Grauntee</p>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<div class="banner-single">
				<h3 class="fa fa-mobile"></h3>
				<h4 class="title">Member Discount</h4>
				<p>30-Days Money back Grauntee</p>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 text-center">
			<div class="banner-single last">
				<h3 class="fa fa-life-ring"></h3>
				<h4 class="title">Support 24/7</h4>
				<p>30-Days Money back Grauntee</p>
			</div>
		</div>
	</div>
</div>

<div class="product-area">
	<div class="row">
		<div class="col-md-8">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" href="#featured" role="tab" data-toggle="tab">Top Sales</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Special</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#references" role="tab" data-toggle="tab">Most Liked</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane  active" id="featured">
					<div class="row">
						<?php if($result['top_seller']['success']==1): ?>
							<?php $__currentLoopData = $result['top_seller']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$top_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
					<?php endif; ?>
				  </div>
				</div>
				<div role="tabpanel" class="tab-pane " id="buzz">
					<div class="row">
					<?php if($result['special']['success']==1): ?>
							<?php $__currentLoopData = $result['special']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$special): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-xs-12 col-md-4">
								<div class="card product-card">
									<a href="<?php echo e(URL::to('/productDetail/'.$special->products_id)); ?>">
										<img class="card-img-top" src="<?php echo e(asset('').$special->products_image); ?>" alt="<?php echo e($special->products_name); ?>">
									</a>

									<div class="card-body">
										<h5 class="card-title"><?php echo e($special->products_name); ?></h5>
<!--												<p><span class="line-clamp">game with Play station 4TM free and get a voucher discount.</span> </p>-->
										<table class="table">
											<tbody>
												<tr>
													<td align="left">
														<span class="price line-through"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($special->products_price); ?></span>
														<span class="price discounted"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($special->products_price); ?></span>
													</td>
													<td align="right">
															<a href="" class="fa fa-heart active"></a>
													</td>
												</tr>
											</tbody>
										</table>
										<button  href="" class="btn btn-block btn-secondary cart" products_id="<?php echo e($special->products_id); ?>">Add To Cart</button>
										<a href="<?php echo e(URL::to('/productDetail/'.$special->products_id)); ?>" class="btn btn-block btn-link">View</a>
									</div>
									<div class="product_added" <?php if(in_array($top_seller->products_id, $result['cartArray'])): ?>  style="display: block;" <?php endif; ?>>This div is only for addedd product.</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane " id="references">
					<div class="row">
					<?php if($result['most_liked']['success']==1): ?>
						<?php $__currentLoopData = $result['most_liked']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$most_liked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-xs-12 col-md-4">
								<div class="card product-card">
									<a href="<?php echo e(URL::to('/productDetail/'.$most_liked->products_id)); ?>">
										<img class="card-img-top" src="<?php echo e(asset('').$most_liked->products_image); ?>" alt="<?php echo e($most_liked->products_name); ?>">
									</a>

									<div class="card-body">
										<h5 class="card-title"><?php echo e($most_liked->products_name); ?></h5>
<!--												<p><span class="line-clamp">game with Play station 4TM free and get a voucher discount.</span> </p>-->
										<table class="table">
											<tbody>
												<tr>
													<td align="left">
															<span class="price discounted"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($most_liked->products_price); ?></span>
													</td>
													<td align="right">
															<a href="" class="fa fa-heart active"></a>
													</td>
												</tr>
											</tbody>
										</table>
										<button  href="" class="btn btn-block btn-secondary cart" products_id="<?php echo e($most_liked->products_id); ?>">Add To Cart</button>
										<a href="<?php echo e(URL::to('/productDetail/'.$most_liked->products_id)); ?>" class="btn btn-block btn-link">View</a>
										<div class="product_added" <?php if(in_array($top_seller->products_id, $result['cartArray'])): ?>  style="display: block;" <?php endif; ?>>This div is only for addedd product.</div>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
			<div class="col-md-4">
				<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
	</div>
</div>


<div class="col-lg-3">
	<!-- <?php echo $__env->make('common.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
	
</div>			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>