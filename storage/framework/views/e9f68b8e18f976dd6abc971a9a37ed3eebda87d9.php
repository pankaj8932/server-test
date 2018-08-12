<?php $__env->startSection('content'); ?>


	<div class="col-lg-12"><br>

	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">Login</li>
	</ol>
	<br>
	
		<h4>Login</h4>
		<div class="row">
			<div class="col-lg-6">
				<form name="signup" enctype="multipart/form-data" class="form-validate"  action="<?php echo e(URL::to('/customerLogin')); ?>" method="post">
				 <!-- if email or password are not correct -->
				<?php if( count($errors) > 0): ?>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  <?php echo e($error); ?>

						</div>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

				<?php if(Session::has('loginError')): ?>
					<div class="alert alert-danger" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						  <?php echo session('loginError'); ?>

					</div>
				<?php endif; ?>
				<?php if(Auth::Check()): ?>
					logged in
				<?php endif; ?>
				
				
					<div class="form-row">
						<div class="form-group col-md-12">
						  <label for="inputEmail4" class="col-form-label">Email</label>
						  <input type="email" name="email" class="form-control email-validate" id="email">
						  <span class="help-block error-content" hidden>Please enter your valid email address.</span>
						</div>
						<div class="form-group col-md-12">
						  <label for="inputPassword4" class="col-form-label">Password</label>
						  <input type="password" name="password" class="form-control field-validate" id="password">
						  <span class="help-block error-content" hidden>This field is required.</span>
						</div>
					</div>
               		<p class=" d-flex justify-content-end">Forgot <a href="<?php echo e(URL::to('/forgotPassword')); ?>" class="blue-text ml-1"> Password?</a></p>

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			
			<div class="col-lg-6">
				<p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>

                <div class="row my-3 d-flex justify-content-center">
                    <!--Facebook-->
                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook blue-text text-center"></i></button>
                    <!--Google +-->
                    <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fa fa-google-plus blue-text"></i></button>
                </div>
                <hr class="featurette-divider">
                <p class="text-center">Don't have account? <a href="<?php echo e(URL::to('/signup')); ?>" class="blue-text ml-1"> Sign Up</a></p>
			</div>
		</div>
		


		
	</div>
			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>