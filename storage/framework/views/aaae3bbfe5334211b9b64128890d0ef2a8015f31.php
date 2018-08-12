<!doctype html>

<html>



<!-- meta contains meta taga, css and fontawesome icons etc -->

<?php echo $__env->make('common.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- ./end of meta -->

<!--dir="rtl"-->

<body dir="<?php echo e(session('direction')); ?>">

	<!-- header -->

		<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- ./end of header -->
		<?php echo $__env->yieldContent('content'); ?>
	

	<section class="newsletter-content bg-primary">
    	<?php echo $__env->make('common.newsletter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </section>
    <?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- all js scripts including custom js -->

	<?php echo $__env->make('common.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- ./end of js scripts -->

</body>

</html>

