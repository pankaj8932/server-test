<nav id="navbar" class="navbar-top-area navbar-dark">

    <div class="container">
    	<div class="row">
            <div class="col-12 col-sm-3 option-left">
                <fieldset class="change-language">
                    <select name="change_language" id="change_language">
                    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $languages_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                               
                        <option value="<?php echo e($languages_data->code); ?>" data-class="<?php echo e($languages_data->code); ?>" data-style="background-image: url(<?php echo e(asset('').$languages_data->image); ?>);" <?php if(session('locale')==$languages_data->code): ?> selected <?php endif; ?>><?php echo e($languages_data->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </select>
                </fieldset>
            </div>
            <div class="col-12 col-sm-9 option-right">
                <ul class="navbar-nav">
                	
                    <?php if(Auth::guard('customer')->check()): ?>
                        <li class="nav-item"><?php echo e(auth()->guard('customer')->user()->customers_firstname); ?> <?php echo e(auth()->guard('customer')->user()->customers_lastname); ?></li>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/wishlist')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Wishlist'); ?></a> </li>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/myorders')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Orders'); ?></a> </li>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/myProfile')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Profile'); ?></a> </li>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/myAddress')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Shipping Address'); ?></a> </li>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/customerLogout')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Logout'); ?></a> </li>
                    <?php else: ?>
                    	<li class="nav-item"> <a href="<?php echo e(URL::to('/login')); ?>" class="nav-link -before"><?php echo app('translator')->getFromJson('website.Login/Register'); ?></a> </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>   
    </div>
</nav>


<header id="header" class="header-area navbar-dark bg-primary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm-12 col-md-4 col-lg-3"> <a href="<?php echo e(URL::to('/')); ?>" class="logo"> <img src="<?php echo e(asset('').'public/images/logo-blue-v1.png'); ?>"> </a> </div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-5 px-0">
      
        <form class="form-inline" action="<?php echo e(URL::to('/shop')); ?>" method="get">
           <div class="search-categories">
            <select id="category_id" name="category_id">
              <option value="all"><?php echo app('translator')->getFromJson('website.All Categories'); ?></option>
              

                    <?php $__currentLoopData = $result['commonContent']['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <?php if(count($categories_data->sub_categories)>0): ?>
                    
                            <?php $__currentLoopData = $categories_data->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                                
                    		<option value="<?php echo e($sub_categories_data->sub_id); ?>" <?php if($sub_categories_data->sub_id==app('request')->input('category_id')): ?> selected <?php endif; ?>><?php echo e($sub_categories_data->sub_name); ?></option>
                    
                    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                        <?php endif; ?>	
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						
            </select>
            <input type="search"  name="search" placeholder="<?php echo app('translator')->getFromJson('website.Search entire store here'); ?>..." value="<?php echo e(app('request')->input('search')); ?>" aria-label="Search">
            <button type="submit" class="btn btn-secondary"><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
      <div class="col-12 col-sm-12 col-lg-4">
        <ul class="top-right-list">
        
            <!--<li class="phone-header">
                <p class="top-title">Call Us Free:</p>
                <p class="phone-number">888 9436 6000</p>
            </li>-->
            
            
            <li class="dropdown-header dropdown head-cart-content">
				<?php $qunatity=0; ?>
                
                <?php $__currentLoopData = $result['commonContent']['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php $qunatity += $cart_data->customers_basket_quantity; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <a href="#" id="dropdownMenuButton" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span class="badge badge-secondary"><?php echo e($qunatity); ?></span>
                    
                    <p class="top-title"><?php echo app('translator')->getFromJson('website.My Cart'); ?></p>
                    
                    <?php if(count($result['commonContent']['cart'])>0): ?>
                    
                        <p class="cart-total-items"><?php echo e(count($result['commonContent']['cart'])); ?>&nbsp;<?php echo app('translator')->getFromJson('website.items'); ?></p>
                    <?php else: ?> 
                        <p class="cart-total-items">(0)&nbsp;<?php echo app('translator')->getFromJson('website.item'); ?></p>
                    <?php endif; ?> 
                </a>
            
                <?php if(count($result['commonContent']['cart'])>0): ?>
                
                <div class="shopping-cart dropdown-menu" style="pointer-events:auto !important;" aria-labelledby="dropdownMenuButton">
                
                    <ul class="shopping-cart-items" >
                        <?php
                            $total_amount=0;
                            $qunatity=0;
                        ?>
                        <?php $__currentLoopData = $result['commonContent']['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <?php 
						$total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
						$qunatity 	  += $cart_data->customers_basket_quantity; ?>
                        <li>
                        	<a href="javascript:void(0)" class="close" onClick="delete_cart_product(<?php echo e($cart_data->customers_basket_id); ?>)"><img class="icon" src="<?php echo e(asset('').'public/images/close.png'); ?>" alt="icon"></a>	
                            <div class="item-thumb"> <img src="<?php echo e(asset('').$cart_data->image); ?>" alt="<?php echo e($cart_data->products_name); ?>"/> </div>
                            <h2 class="item-name"><?php echo e($cart_data->products_name); ?></h2>
                            <span class="item-quantity"><?php echo app('translator')->getFromJson('website.Qty'); ?>&nbsp;:&nbsp;<?php echo e($cart_data->customers_basket_quantity); ?></span>
                            <span class="item-price"> <?php echo e($web_setting[19]->value); ?><?php echo e($cart_data->final_price*$cart_data->customers_basket_quantity); ?></span>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                    </ul>
                    <div class="tt-summary">
                    	<p><?php echo app('translator')->getFromJson('website.items'); ?><span><?php echo e($qunatity); ?></span></p>
                      	<p><?php echo app('translator')->getFromJson('website.SubTotal'); ?><span><?php echo e($web_setting[19]->value); ?><?php echo e($total_amount); ?></span></p>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-dark" href="<?php echo e(URL::to('/myCart')); ?>"><?php echo app('translator')->getFromJson('website.View Cart'); ?></a>
                        <a class="btn btn-secondary" href="<?php echo e(URL::to('/checkout')); ?>"><?php echo app('translator')->getFromJson('website.Checkout'); ?></a>
                    </div>
                </div>
                
				<?php else: ?>
                    
                <div class="shopping-cart shopping-cart-empty dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <ul class="shopping-cart-items">
                        <li><?php echo app('translator')->getFromJson('website.You have no items in your shopping cart'); ?></li>
                    </ul>
                </div>
                <?php endif; ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
</header>


<nav class="navbar navbar-area navbar-expand-lg pb-0 navbar-dark bg-primary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <?php echo app('translator')->getFromJson('website.Menu'); ?> </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown dropdown-first"> <a class="nav-link first" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-align-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.All Categories'); ?>  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
            <?php $__currentLoopData = $result['commonContent']['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <li class="dropdown-smenu">
                
                	<a class="dropdown-item" href="#"><?php echo e($categories_data->name); ?> <i class="fa fa-angle-right " aria-hidden="true"></i> </a> <?php if(count($categories_data->sub_categories)>0): ?>
                    
                    <ul class="dropdown-menu dropdown-submenu">
                        <?php $__currentLoopData = $categories_data->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <li class="dropdown-smenu">
                        	<a class="dropdown-item" href="<?php echo e(URL::to('/shop')); ?>?category_id=<?php echo e($sub_categories_data->sub_id); ?>"><?php echo e($sub_categories_data->sub_name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </ul>
                <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo e(URL::to('/shop')); ?>"><?php echo app('translator')->getFromJson('website.Shop'); ?></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo e(URL::to('/newsCategories')); ?>"><?php echo app('translator')->getFromJson('website.News'); ?></a> </li>
        <li class="nav-item dropdown dropdown-second">
        	<a class="nav-link" id="navbarDropdownMenuLink0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->getFromJson('website.infoPages'); ?></a>
        
        	<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink0">
                <?php if(count($result['commonContent']['pages'])): ?>
                <?php $__currentLoopData = $result['commonContent']['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li> <a href="<?php echo e(URL::to('/page?name='.$page->slug)); ?>" class="dropdown-item"><?php echo e($page->name); ?></a> </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>  
          	</ul>
        </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo e(URL::to('/myContactUs')); ?>"><?php echo app('translator')->getFromJson('website.Contact Us'); ?></a> </li>
        <li class="nav-item last"><span class="nav-link">Hotline<strong>(888 9436 6000)</strong></span></li>
      </ul>
    </div>
  </div>
</nav>
