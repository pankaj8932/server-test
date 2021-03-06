<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php $__currentLoopData = $result['slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slides_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>" class="<?php if($key==0): ?> active <?php endif; ?>"></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
-->
	</ol>
	<div class="carousel-inner">
		<?php $__currentLoopData = $result['slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$slides_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  	
			<div class="carousel-item  <?php if($key==0): ?> active <?php endif; ?>">
			<?php if($slides_data->type == 'category'): ?>
				<a href="<?php echo e(URL::to('/category')); ?>">
			<?php elseif($slides_data->type == 'product'): ?>
				<a href="<?php echo e(URL::to('/productDetail')); ?>">
			<?php elseif($slides_data->type == 'most liked'): ?>
				<a href="<?php echo e(URL::to('/most_liked')); ?>">
			<?php elseif($slides_data->type == 'top seller'): ?>
				<a href="<?php echo e(URL::to('/top_seller')); ?>">
			<?php elseif($slides_data->type == 'deals'): ?>
				<a href="<?php echo e(URL::to('/deals')); ?>">
			<?php endif; ?>
				<img width="100%" class="first-slide"  src="<?php echo e(asset('').$slides_data->image); ?>" width="100%" alt="First slide">
				</a>
			</div>
					
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</div>
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>