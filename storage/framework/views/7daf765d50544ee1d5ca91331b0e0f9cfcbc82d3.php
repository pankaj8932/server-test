<!--
<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<i class="fa fa-shopping-cart margin-right-md"></i>
	<?php if(count($cart)>0): ?>
	<span class="cart-total-items"><?php echo e(count($cart)); ?> Item(s)</span>
	<?php else: ?>
	<span class="cart-total-items">Empty Cart</span>
	<?php endif; ?>
</button>
-->

<a href="#" id="dropdownMenuButton" class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

	<span class="badge badge-secondary"><?php echo e(count($cart)); ?></span>

	<i class="fa fa-shopping-cart"></i>
	<strong>My Cart</strong> <br>

	<?php if(count($cart)>0): ?>

		<span class="cart-total-items"><?php echo e(count($cart)); ?>&nbsp;item(s)</span>

	<?php else: ?>

		<span class="cart-total-items">(0)&nbsp;item(s)</span>

	<?php endif; ?>

</a>
<?php if(count($cart)>0): ?>
<div class="shopping-cart dropdown-menu" aria-labelledby="dropdownMenuButton">
	<ul class="shopping-cart-items">
	<?php
		$total_amount=0;
		$qunatity=0;
	?>
	<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-cart" style="display: none">
		<?php if(count($cart)>0): ?>
		<div id="cart-contents" style="display: block;">
		<table class="table table-condensed table-striped table-cart" id="cart-items">
		  <tbody>
		  <?php
			$total_amount=0;
			$qunatity=0;
			  ?>
		  <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			  <td><span class="cart-item-image"><img src="<?php echo e(asset('').$cart_data->image); ?>" alt=""></span></td>
			  <td><?php echo e($cart_data->products_name); ?><br>
				<?php echo e($cart_data->customers_basket_quantity); ?> x <?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($cart_data->final_price); ?>

			  </td>
			  <td class="text-right text-bold"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($cart_data->final_price*$cart_data->customers_basket_quantity); ?></td>
			</tr>
			<?php 
				$total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
				$qunatity 	  += $cart_data->customers_basket_quantity;
			?>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </tbody>
		  <tfoot>
			<tr class="text-bold">
			  <td colspan="2">Total Items</td>
			  <td class="text-right"><?php echo e($qunatity); ?></td>
			</tr>
			<tr class="text-bold">
			  <td colspan="2">Total</td>
			  <td class="text-right"><?php echo e($web_setting[0]->currency_symbol); ?><?php echo e($total_amount); ?></td>
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
		<?php else: ?>
		<div id="cart-empty" style="display: block;">Please add item to the cart first</div>
		<?php endif; ?>
	</div>

