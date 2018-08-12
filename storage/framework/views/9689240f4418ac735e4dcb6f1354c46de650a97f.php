<?php
				$qunatity=0;
?>
<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php 
	$qunatity 	  += $cart_data->customers_basket_quantity;?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<a href="#" id="dropdownMenuButton" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
		<span class="badge badge-secondary"><?php echo e($qunatity); ?></span>
        <p class="top-title"><?php echo app('translator')->getFromJson('website.My Cart'); ?></p>
<?php if(count($cart)>0): ?>
	  <p class="cart-total-items"><?php echo e(count($cart)); ?>&nbsp;<?php echo app('translator')->getFromJson('website.items'); ?></p>
<?php else: ?> <p class="cart-total-items">(0)&nbsp;<?php echo app('translator')->getFromJson('website.item'); ?></p>
<?php endif; ?> </a>

<?php if(count($cart)>0): ?>
<div class="shopping-cart dropdown-menu" style="pointer-events:auto !important;"  aria-labelledby="dropdownMenuButton">
  <ul class="shopping-cart-items">
	<?php
	$total_amount=0;
	$qunatity=0;
	?>
	<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php 
	$total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
	$qunatity 	  += $cart_data->customers_basket_quantity;?>
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
  <a class="btn btn-primary" href="<?php echo e(URL::to('/myCart')); ?>"><?php echo app('translator')->getFromJson('website.View Cart'); ?></a>
  <a class="btn btn-secondary" href="<?php echo e(URL::to('/checkout')); ?>"> <?php echo app('translator')->getFromJson('website.Checkout'); ?></a>
  </div>
</div>
<?php endif; ?>
