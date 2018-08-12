<?php $__env->startSection('content'); ?>

<!--<div class="col-lg-3">
	<?php echo $__env->make('common.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('common.banners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>-->

<div class="col-lg-12">
	<br>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
		<li class="breadcrumb-item active">Categories</li>
	</ol>
		
	<div class="row">
		
		

	</div>
	

</div>



			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>