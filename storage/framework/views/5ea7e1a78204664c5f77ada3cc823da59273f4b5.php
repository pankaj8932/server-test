<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
<?php echo $__env->make('common.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- ./end of meta -->

<body>
	<!-- wrapper -->
    
	<!-- header -->
	<?php echo $__env->make('common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
   <?php if(Request::path() == '/' or Request::path() == 'index' or Request::path() == 'home'): ?>
  	 <?php echo $__env->make('common.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <?php endif; ?>
	
	<!-- ./end of header -->
    <div class="container site-content">
        <div class="row">
			<!-- dynamic content -->
			<?php echo $__env->yieldContent('content'); ?>
			<!-- ./end of dynamic content -->
		</div>
	</div>
    
    <?php echo $__env->make('common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- ./wrapper -->
	
	<!-- all js scripts including custom js -->
	<?php echo $__env->make('common.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- ./end of js scripts -->
    
</body>
</html>
