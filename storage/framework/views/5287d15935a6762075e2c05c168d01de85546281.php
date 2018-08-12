<?php $__env->startSection('content'); ?>
<section class="site-content">
    <div class="container">
        <div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?php echo app('translator')->getFromJson('website.Shopping cart'); ?></h3>
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
                </ol>
            </div>
        </div>
        <div class="cart-area">
            <div class="row">
             	<?php 
					$price = 0;
				?>
				<?php if(count($result['cart']) > 0): ?>
                     
                <div class="col-12 col-lg-8 cart-left">
                    <div class="row">
                         <?php if(session()->has('message')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <?php echo e(session()->get('message')); ?>

                            </div>               
                        <?php endif; ?>
                    
                        <form method='POST' id="update_cart_form" action='<?php echo e(URL::to('/updateCart')); ?>' >
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th align="left"><?php echo app('translator')->getFromJson('website.items'); ?></th>
                                            <th align="right"><?php echo app('translator')->getFromJson('website.Price'); ?></th>
                                            <th align="right"><?php echo app('translator')->getFromJson('website.Qty'); ?></th>
                                            <th align="right"><?php echo app('translator')->getFromJson('website.SubTotal'); ?></th>
                                        </tr>
                                    </thead>
                                 
                                    <?php $__currentLoopData = $result['cart']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                    $price+= $products->final_price * $products->customers_basket_quantity;	
									//echo '<pre>'.print_r($result['cart'],true).'</pre>';				
                                    ?>
                                     
                                    <tbody>
                                        <tr>
                                            <td align="left" class="item">
                                                <input type="hidden" name="cart[]" value="<?php echo e($products->customers_basket_id); ?>">
                                                <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="cart-thumb">
                                                    <img class="img-fluid" src="<?php echo e(asset('').$products->image); ?>" alt="<?php echo e($products->products_name); ?>" alt="">
                                                </a>
                                                <div class="cart-product-detail">
                                                    <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="title">
                                                        <?php echo e($products->products_name); ?> <?php echo e($products->model); ?>

                                                    </a>
                                                    <ul>
                                                    <?php if(count($products->attributes) >0): ?>
                                                        <?php $__currentLoopData = $products->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($attributes->attribute_name); ?><span><?php echo e($attributes->attribute_value); ?></span></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </td>
                                        
                                            <td align="right" class="price"><span><?php echo e($web_setting[19]->value); ?><?php echo e($products->final_price+0); ?></span></td>
                                            <td align="right" class="Qty">
                                                <div class="input-group">
                                                  <span class="input-group-btn qtyminus_<?php echo e($products->customers_basket_id); ?>">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                  </span>
                                                  <input name="quantity[]" type="text" value="<?php echo e($products->customers_basket_quantity); ?>" class="form-control qty">                                                  
                                                  <span class="input-group-btn qtypluscart_<?php echo e($products->customers_basket_id); ?>">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                  </span>
                                                </div>
                                            </td>
                                        
                                            <td align="right" class="subtotal"><span class="cart_price_<?php echo e($products->customers_basket_id); ?>"><?php echo e($web_setting[19]->value); ?><?php echo e($products->final_price * $products->customers_basket_quantity); ?></span>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="4" class="buttons">
                                                <a href="<?php echo e(URL::to('/editcart?id='.$products->customers_basket_id)); ?>" class="btn btn-sm btn-default"><?php echo app('translator')->getFromJson('website.Edit'); ?></a>
                                                <a href="<?php echo e(URL::to('/deleteCart?id='.$products->customers_basket_id)); ?>" class="btn btn-sm btn-default"><?php echo app('translator')->getFromJson('website.Remove Item'); ?></a>
                                            </td>
                                        </tr> 
                                    </tbody>            
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </form>
                    </div>
                        
                    <div class="row button">
                        <div class="col-12 col-sm-6 left">                
                            <a href="<?php echo e(URL::to('/shop')); ?>" class="btn btn-dark"><?php echo app('translator')->getFromJson('website.Back To Shopping'); ?></a>
                        </div>
                        <div class="col-12 col-sm-6">
                            <button class="btn btn-dark" id="update_cart"><?php echo app('translator')->getFromJson('website.Update Cart'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 cart-right">
                	<div class="order-summary-outer">
                    	<div class="order-summary">
                            <div class="table-responsive">
                                <table class="table">
                                	<thead>
                                    	<tr>
                                        	<th align="left" colspan="2"><?php echo app('translator')->getFromJson('website.Order Summary'); ?> </th>
                                        </tr>
                                    </thead>
                                  	<tbody>
                                        <tr>
                                            <td align="left"><span><?php echo app('translator')->getFromJson('website.SubTotal'); ?></span></td>
                                            <td align="right" id="subtotal"><?php echo e($web_setting[19]->value); ?><?php echo e($price+0); ?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td align="left"><span><?php echo app('translator')->getFromJson('website.Discount(Coupon)'); ?></span></td>
                                            <td align="right" id="discount"><?php echo e($web_setting[19]->value); ?><?php echo e(number_format((float)session('coupon_discount'), 2, '.', '')+0); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="last" align="left"><span><?php echo app('translator')->getFromJson('website.Total'); ?></span></td>
                                            <td class="last" align="right" id="total_price"><?php echo e($web_setting[19]->value); ?><?php echo e($price+0-number_format((float)session('coupon_discount'), 2, '.', '')); ?></td>
                                        </tr>
                                	</tbody>
                                </table>
                            </div>
                        </div>                      
                        <div class="coupons">
                        	<!-- applied copuns -->
                            <?php if(count(session('coupon')) > 0 and !empty(session('coupon'))): ?>                       
                                <?php $__currentLoopData = session('coupon'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupons_show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                	<div class="alert alert-success">
                                    	<a href="<?php echo e(URL::to('/removeCoupon/'.$coupons_show->coupans_id)); ?>" class="close"><span aria-hidden="true">&times;</span></a>
                                    	<?php echo e($coupons_show->code); ?>

                                    </div>         
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                            <?php endif; ?>  
                            <form id="apply_coupon">
                                <div class="form-group">
                                    <label for="inputPassword2" class=""><?php echo app('translator')->getFromJson('website.Coupon Code'); ?></label>
                                    <input type="text" name="coupon_code" class="form-control" id="coupon_code">
                                </div>
                                <button type="submit" class="btn btn-sm btn-dark"><?php echo app('translator')->getFromJson('website.ApplyCoupon'); ?></button>
                                <div id="coupon_error" style="display: none"></div>
                                <div id="coupon_require_error" style="display: none"><?php echo app('translator')->getFromJson('website.Please enter a valid coupon code'); ?></div>
                            </form>
                            
                            
                        </div>
                        
                        <div class="buttons">
                        	<a href="<?php echo e(URL::to('/checkout')); ?>" class="btn btn-block btn-secondary" ><?php echo app('translator')->getFromJson('website.proceedToCheckout'); ?></a>
                        </div>
                    </div>
                </div>
                
                <?php else: ?>
                
                <div class="col-xs-12 col-sm-12 cart-empty">
                	<p><?php echo app('translator')->getFromJson('website.cartEmptyText'); ?></p>
                </div>
               <?php endif; ?>	
			</div>	
		</div>
	</div>
 </section>
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>