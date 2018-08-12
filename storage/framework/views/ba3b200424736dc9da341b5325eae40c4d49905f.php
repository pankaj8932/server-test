<nav class="navbar navbar-expand-lg top-header">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/')); ?>">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/shop')); ?>">Shop</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/contacUs')); ?>">Contact Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/aboutUs')); ?>">About Us</a>
            </li>
            
          </ul>
          <ul class="navbar-nav">
			  <li class="nav-item dropdown dropdown-language">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				
				<img src="<?php echo e(asset('').'resources/assets/images/language_flags/english.jpg'); ?>">
				 English</a>
				<div class="dropdown-menu" aria-labelledby="dropdown08">
				  <a class="dropdown-item" href="#">
				 	 <img src="<?php echo e(asset('').'resources/assets/images/language_flags/arabic.jpg'); ?>">Arabic</a>
				  <a class="dropdown-item" href="#">
				  	<img src="<?php echo e(asset('').'resources/assets/images/language_flags/english.jpg'); ?>"> English</a>
				  <a class="dropdown-item" href="#">
				  	<img src="<?php echo e(asset('').'resources/assets/images/language_flags/german.jpg'); ?>"> German</a>
				</div>
			  </li>
			  
			  <li class="nav-item dropdown">
			  	<?php if(Auth::check()): ?>
			  	
				  <a class="nav-link" href="<?php echo e(URL::to('/logout')); ?>">Logout</a>
			  	<?php else: ?>
				  <a class="nav-link" href="<?php echo e(URL::to('/login')); ?>">Login</a>
			  	
				<?php endif; ?>
				<!--<a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Login</a>
				<div class="dropdown-menu" aria-labelledby="dropdown08">
			  	
				<section class="form-elegant">

					<div class="card">

						<div class="card-body mx-4">

							<div class="text-center">
								<h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>
							</div>
							
							<form name="login_form" class="form-validate" enctype="multipart/form-data" >
								
								<div class="md-form">
									<label for="Form-email1">Your email</label>
									<input type="text" id="Form-email1" class="form-control field-validate">
									<span class="help-block hidden">Please enter your valid email address.</span>
								</div>

								<div class="md-form pb-3">
									<label for="Form-pass1">Your password</label>
									<input type="password" id="Form-pass1" class="form-control field-validate">
									<span class="help-block hidden">This field is required.</span>
									<p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
								</div>
							</form>
							
							<div class="text-center mb-3">
								<button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
							</div>
							<p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>

								<div class="row my-3 d-flex justify-content-center">
									<!--Facebook
									<button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook blue-text text-center"></i></button>
								
									<!--Google
									<button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-google-plus blue-text"></i></button>
								</div>

						</div>

						<!--Footer
						<div class="modal-footer mx-5 pt-3 mb-1">
							<p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="<?php echo e(URL::to('/signup')); ?>" class="blue-text ml-1"> Sign Up</a></p>
						</div>

					</div>
					<!--/Form without header

				</section>
            
				  
				</div>-->
			  </li>
		 </ul>
        </div>
      </div>
    </nav>
    
   <div class="logo-cart">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 site-logo">
						<a href="<?php echo e(URL::to('/')); ?>">
						 <img src="<?php echo e(asset('').'resources/assets/images/site_logo/logo-blue-v1.png'); ?>">
						</a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 search-content">
						<form name="search_product" enctype="multipart/form-data" method="post" action="search_products.php">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Search Products" aria-describedby="basic-addon2">
							  <span class="input-group-addon" id="basic-addon2">Search</span>
							</div>
						</form>
					</div>

					<div class="colo-xs-12 col-sm-4 col-md-3 cart-btn">
						<button type="button" class="btn btn-theme btn-block dropdown-toggle shopping-cart" id="dropdown-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-shopping-cart margin-right-md"></i>
							<span class="cart-total-items">5 Items</span>
							<!--<span class="cart-total-items">Empty Cart</span>-->
						</button>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-cart" style="">
							<div id="cart-contents" style="display: block;">
							<table class="table table-condensed table-striped table-cart" id="cart-items">
							  <tbody>
								<tr>
								  <td><span class="cart-item-image"><img src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt=""></span></td>
								  <td>Canon 1100d<br>
									1 x <i class="fa fa-usd"></i>2,250.00</td>
								  <td class="text-right text-bold"><i class="fa fa-usd"></i>2,250.00</td>
								</tr>
								<tr>
								  <td><span class="cart-item-image"><img src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt=""></span></td>
								  <td>Computer Set 1<br>
									1 x <i class="fa fa-usd"></i>2,500.00</td>
								  <td class="text-right text-bold"><i class="fa fa-usd"></i>2,500.00</td>
								</tr>
								<tr>
								  <td><span class="cart-item-image"><img src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt=""></span></td>
								  <td>Computer Set 2<br>
									1 x <i class="fa fa-usd"></i>1,799.00</td>
								  <td class="text-right text-bold"><i class="fa fa-usd"></i>1,799.00</td>
								</tr>
								<tr>
								  <td><span class="cart-item-image"><img src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt=""></span></td>
								  <td>Hard Disk<br>
									1 x <i class="fa fa-usd"></i>470.00</td>
								  <td class="text-right text-bold"><i class="fa fa-usd"></i>470.00</td>
								</tr>
								<tr>
								  <td><span class="cart-item-image"><img src="<?php echo e(asset('').'resources/assets/images/product_images/1502107398.pPOLO2-26314766_alternate1_v360x480.jpg'); ?>" alt=""></span></td>
								  <td>Laptop<br>
									1 x <i class="fa fa-usd"></i>2,399.00</td>
								  <td class="text-right text-bold"><i class="fa fa-usd"></i>2,399.00</td>
								</tr>
							  </tbody>
							  <tfoot>
								<tr class="text-bold">
								  <td colspan="2">Total Items</td>
								  <td class="text-right">5</td>
								</tr>
								<tr class="text-bold">
								  <td colspan="2">Total</td>
								  <td class="text-right"><i class="fa fa-usd"></i>9,418.00</td>
								</tr>
							  </tfoot>
							</table>

							<div id="cart-links" class="text-center margin-bottom-md">
								<div class="btn-group btn-group-justified" role="group" aria-label="View Cart and Checkout Button">
									<div class="btn-group">
										<a class="btn btn-default btn-sm" href="<?php echo e(URL::to('/myCart')); ?>"><i class="fa fa-shopping-cart"></i> View Cart</a>
									</div>
									<div class="btn-group">
										<a class="btn btn-default btn-sm" href="<?php echo e(URL::to('/checkout')); ?>"><i class="fa fa-check"></i> Checkout</a>
									</div>
								</div>
							</div>
							</div>

							<div id="cart-empty" style="display: none;">Please add item to the cart first</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExample09">
	  <ul class="navbar-nav mr-auto">
		 <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/')); ?>">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/shop')); ?>">Shop</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/contacUs')); ?>">Contact Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(URL::to('/aboutUs')); ?>">About Us</a>
            </li>
		<!--<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown09">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div>
		</li>-->
	  </ul>
	</div>
	</nav>
	<br>

</div>