<nav class="navbar navbar-top navbar-expand-lg navbar-light bg-light">

	<div class="container">
		<a class="navbar-brand" href="#">Welcome to our Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

			<span class="navbar-toggler-icon"></span>

		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav ml-auto">
		
			<?php if(Auth::check()): ?>
				<li class="nav-item">
					<a class="nav-link -before"><strong><?php echo e(auth()->user()->customers_firstname); ?> <?php echo e(auth()->user()->customers_lastname); ?></strong></a>
				</li>
				<li class="nav-item">
					<a href="<?php echo e(URL::to('/myOrder')); ?>" class="nav-link -before">Orders</a>
				</li>
				<li class="nav-item">
						<a href="<?php echo e(URL::to('/myProfile')); ?>" class="nav-link -before">Profile</a>
						</li>
						<li class="nav-item">
						<a href="<?php echo e(URL::to('/myAddress')); ?>" class="nav-link -before">Shipping Address</a>
						</li>
				<li class="nav-item">
					<a href="<?php echo e(URL::to('/customerLogout')); ?>" class="nav-link -before">Logout</a>
				</li>

			<?php else: ?>
				<li class="nav-item">
					<a href="<?php echo e(URL::to('/login')); ?>" class="nav-link -before">Login/Register</a>
				</li>
			<?php endif; ?>

			<!-- <li class="nav-item">

				<a class="nav-link" href="<?php echo e(URL::to('/shop')); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Shop</a>

			</li> -->

			<!-- <li class="nav-item dropdown">

				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

					<i class="fa fa-user" aria-hidden="true"></i>My Account

				</a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<?php if(Auth::check()): ?>

						<a class="dropdown-item" href="<?php echo e(URL::to('/myOrder')); ?>">Orders</a>

						<a class="dropdown-item" href="<?php echo e(URL::to('/myProfile')); ?>">Profile</a>

						<a class="dropdown-item" href="<?php echo e(URL::to('/myAddress')); ?>">Shipping Address</a>

						<a class="dropdown-item" href="<?php echo e(URL::to('/customerLogout')); ?>">Logout</a>

					<?php else: ?>

						<a class="dropdown-item" href="<?php echo e(URL::to('/login')); ?>">Login</a>			

					<?php endif; ?>

				</div>

			</li> -->

			<li class="nav-item dropdown">

				<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<?php if($languages_data->is_default == '1'): ?>

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

						<?php echo e($languages_data->name); ?>


					</a>

				<?php endif; ?>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<div class="dropdown-menu" aria-labelledby="navbarDropdown">

					<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					  <span class="dropdown-item change_language" languages_id = '<?php echo e($languages_data->languages_id); ?>' href="">

						 <img src="<?php echo e(asset('').$languages_data->image); ?>"><?php echo e($languages_data->name); ?>


					  </span>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</div>

			</li>
			<!-- <li class="nav-item">
				<a href="#" class="nav-link nav-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link nav-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link nav-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link nav-icon"><i class="fa fa-skype" aria-hidden="true"></i></a>
			</li> -->
			
		</ul>

	</div>

	</div>

</nav>





<header class="header">

	<div class="container">

		<div class="row align-items-center">

			<div class="col-sm-12 col-md-3">

				<a href="<?php echo e(URL::to('/')); ?>">

					<img src="<?php echo e(asset('').'resources/assets/images/site_logo/logo-blue-v1.png'); ?>">

				</a>

			</div>

			<div class="col-sm-12 col-md-6">

				<form class="form-inline" action="search_products.php">

					<!-- <div class="dropdown">

						<a class="btn bg-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							All Categories

						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

						<?php $__currentLoopData = $result['commonContent']['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<?php if(count($categories_data->sub_categories)>0): ?>

								<?php $__currentLoopData = $categories_data->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<a class="dropdown-item" href="#"><?php echo e($sub_categories_data->sub_name); ?></a>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php endif; ?>						

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div> 

						

					</div>-->

					<div class="search-date">
						<select class="selectpicker">
							<option>All Categories</option>
							<option>Ketchup</option>
							<option>Relish</option>
						</select>
	
						<input type="search" placeholder="Search entire store here..." aria-label="Search">
						<button type="submit" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>

				</form>

			</div>

			<div class="col-sm-12 col-md-3">

				<ul class="top-right-list">

					
					<li class="dropdown head-cart-content">

							<a href="#" id="dropdownMenuButton" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

								<span class="badge badge-secondary"><?php echo e(count($result['commonContent']['cart'])); ?></span>
								
								<i class="fa fa-shopping-cart"></i>
								<strong>My Cart</strong> <br>

								<?php if(count($result['commonContent']['cart'])>0): ?>

									<span class="cart-total-items"><?php echo e(count($result['commonContent']['cart'])); ?>&nbsp;item(s)</span>

								<?php else: ?>

									<span class="cart-total-items">(0)&nbsp;item(s)</span>

								<?php endif; ?>

							</a>

							<?php if(count($result['commonContent']['cart'])>0): ?>

							<div class="shopping-cart dropdown-menu" aria-labelledby="dropdownMenuButton">

								<ul class="shopping-cart-items">

									<?php

										$total_amount=0;

										$qunatity=0;

									?>

									<?php $__currentLoopData = $result['commonContent']['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<?php 

											$total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;

											$qunatity 	  += $cart_data->customers_basket_quantity;

										?>

										<li class="clearfix">

											<img src="<?php echo e(asset('').$cart_data->image); ?>" alt="<?php echo e($cart_data->products_name); ?>" width="70px"/>

											<span class="item-name"><?php echo e($cart_data->products_name); ?></span>

											<span class="item-price"> <?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($cart_data->final_price*$cart_data->customers_basket_quantity); ?></span>

											<span class="item-quantity">Quantity: <?php echo e($cart_data->customers_basket_quantity); ?></span>

										</li>



									 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



										<li class="clearfix">

											<span>Total Items:</span>

											<span><?php echo e($qunatity); ?></span><br>

											<span>Total Price:</span>

											<span><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($total_amount); ?></span>

										</li>

									</ul>

								<a class="btn btn-default btn-sm" href="<?php echo e(URL::to('/myCart')); ?>"><i class="fa fa-shopping-cart"></i> View Cart</a>

								<a class="btn btn-secondary btn-sm" href="<?php echo e(URL::to('/checkout')); ?>"><i class="fa fa-check"></i> Checkout</a>

							</div>

							<?php endif; ?>

					</li>

				</ul>

				

			</div>

		</div>

	</div>

</header>





<nav class="navbar navbar-expand-lg main-navbar py-0 navbar-dark bg-primary">

	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

			Menu

		</button>

		<div class="collapse navbar-collapse" id="navbarNav">

			<ul class="navbar-nav">

				<li class="nav-item dropdown">

					<a class="nav-link first" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

						ALL CATEGORIES

						<i class="fa fa-align-right" aria-hidden="true"></i>

					</a>

					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

					<?php $__currentLoopData = $result['commonContent']['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<li class="dropdown-submenu"><a class="dropdown-item" href="#">

						<?php echo e($categories_data->name); ?>


								<i class="fa fa-angle-right pull-right" aria-hidden="true"></i>

						</a>

							<?php if(count($categories_data->sub_categories)>0): ?>

							<ul class="dropdown-menu">

								<?php $__currentLoopData = $categories_data->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<li><a class="dropdown-item" href="<?php echo e(URL::to('/shop')); ?>?category_id=<?php echo e($sub_categories_data->sub_id); ?>"><?php echo e($sub_categories_data->sub_name); ?></a></li>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!--

								<li><a class="dropdown-item" href="#">Another submenu action</a></li>

				

				

								<li class="dropdown-submenu"><a class="dropdown-item" href="#">Subsubmenu

										<i class="fa fa-angle-right pull-right" aria-hidden="true"></i>

								</a>

								<ul class="dropdown-menu">

									<li><a class="dropdown-item" href="#">Subsubmenu action</a></li>

									<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>

								</ul>

								</li>

								<li class="dropdown-submenu"><a class="dropdown-item" href="#">Second subsubmenu

										<i class="fa fa-angle-right pull-right" aria-hidden="true"></i>

								</a>

								<ul class="dropdown-menu">

									<li><a class="dropdown-item" href="#">Subsubmenu action</a></li>

									<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>

								</ul>

								</li>

-->

							</ul>

							<?php endif; ?>

						</li>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</ul>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="<?php echo e(URL::to('/')); ?>">HOME</a>

				</li>

				<li class="nav-item">

					<a class="nav-link" href="<?php echo e(URL::to('/shop')); ?>">SHOP</a>

				</li>

			</ul>

		</div>

	</div>

</nav>

<style>

	.product_added{

		display: none;

	}

</style>

