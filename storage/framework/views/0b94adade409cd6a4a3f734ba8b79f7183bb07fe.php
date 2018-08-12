<?php $__env->startSection('content'); ?>

<div class="col-lg-3">
	<?php echo $__env->make('common.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

	<div class="col-lg-9">
	<br>
	<ol class="breadcrumb">
	  <li class="breadcrumb-item active">Home</li>
	</ol>
	<br>
		<div class="row">
			<div class="col-lg-9">
				<h4> Top Seller </h4>
			</div>
			
			
			<div class="col-lg-1" style="width:  auto">
				<a class="carousel-control-prev" href="#sellerCarousel" role="button" data-slide="prev"> <i style="color: #444444" class="fa fa-angle-left"></i> </a>
				<a style="color: #444444" class="carousel-control-next" href="#sellerCarousel" role="button" data-slide="next" > <i class="fa fa-angle-right"></i> </a>
			</div>
			<div class="col-lg-2">
				<a href="shop">View All</a>
			</div>
		</div>
		
		<div id="sellerCarousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			 <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			  <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
		  </div>
		  
		</div>

		<hr class="featurette-divider">
		<div class="row">
			<div class="col-lg-9">
				<h4>Special Poducts</h4>
			</div>
			
			
			<div class="col-lg-1" style="width:  auto">
				<a class="carousel-control-prev" href="#specialCarousel" role="button" data-slide="prev"> <i style="color: #444444" class="fa fa-angle-left"></i> </a>
				<a style="color: #444444" class="carousel-control-next" href="#specialCarousel" role="button" data-slide="next" > <i class="fa fa-angle-right"></i> </a>
			</div>
			<div class="col-lg-2">
				<a href="shop">View All</a>
			</div>
		</div>
		<div id="specialCarousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			 <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			  <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>

		<hr class="featurette-divider">
		
		<div class="row">
			<div class="col-lg-9">
				<h4>Most Liked</h4>
			</div>
			
			
			<div class="col-lg-1" style="width:  auto">
				<a class="carousel-control-prev" href="#likedCarousel" role="button" data-slide="prev"> <i style="color: #444444" class="fa fa-angle-left"></i> </a>
				<a style="color: #444444" class="carousel-control-next" href="#likedCarousel" role="button" data-slide="next" > <i class="fa fa-angle-right"></i> </a>
			</div>
			<div class="col-lg-2">
				<a href="shop">View All</a>
			</div>
		</div>
		<div id="likedCarousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class="card-deck">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			 <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card ">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
			<div class="carousel-item">
			  <div class="card-deck ">
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			  <div class="card">
				<img class="card-img-top" src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt="Card image cap">
				<div class="card-body">
				  <h4 class="card-title">Product Name</h4>
					<p class="card-text"><span>29 USD</span> &nbsp;&nbsp;&nbsp;<i class="fa fa-heart"></i></p>
					<p class="card-text"><button type="button" class="btn btn-primary" style="font-size: 14px;">Add To Cart</button> | <a href="<?php echo e(URL::to('/productDetail')); ?>" type="button" class="btn btn-primary" style="font-size: 14px;">View Detail</a></p>
				</div>
			  </div>
			</div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>