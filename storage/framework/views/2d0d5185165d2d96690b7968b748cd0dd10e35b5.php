<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
<?php echo $__env->make('common.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- ./end of meta -->

<body>
	<!-- header -->
		<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- ./end of header -->

	<section class="carousel">
		<div class="container">
			<?php if(Request::path() == '/' or Request::path() == 'index' or Request::path() == 'home'): ?>
				<?php echo $__env->make('common.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endif; ?>
		</div>
	</section>
   
	<section class="site-content">
		<div class="container">
			<!-- dynamic content -->
			<?php echo $__env->yieldContent('content'); ?>
			<!-- ./end of dynamic content -->
		</div>
	</section>

    <?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<!-- all js scripts including custom js -->
	<?php echo $__env->make('common.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- ./end of js scripts -->
    
</body>
</html>
