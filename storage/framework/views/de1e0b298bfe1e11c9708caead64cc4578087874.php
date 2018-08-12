<?php $__env->startSection('content'); ?>

<div class="col-xs-12 registration-area">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
		<li class="breadcrumb-item active">Login</li>
	</ol>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<h4 class="title-h3">Login Or Create An Account</h4>
			<hr class="featurette-divider">
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-xs-12 col-sm-7 new-customers">
			<h5 class="title-h4">New Customers</h5>
			<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>

			<hr class="featurette-divider">
			<p class="text-center">Don't have account? <a href="<?php echo e(URL::to('/signup')); ?>" class="blue-text ml-1"> Sign Up</a></p>
			
			<p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>

			<div class="row my-3 d-flex justify-content-center">
				<!--Facebook-->
				<a href="login/facebook" class="btn btn-light facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
				<!--Google +-->
				<a href="login/google" class="btn btn-light google"><i class="fa fa-google-plus"></i>Login with Google</a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-5 registered-customers">
			<h5 class="title-h4">
				Registered Customers
			</h5>
			<p>If you have an account with us, please log in.</p>

			<form name="signup" enctype="multipart/form-data" class="form-validate"  action="<?php echo e(URL::to('/customerLogin')); ?>" method="post">

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-9">
						<input type="email" name="email" id="email" class="form-control email-validate">
						<span class="help-block error-content" hidden>Please enter your valid email address.</span>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" name="password" id="password" class="form-control field-validate">
						<span class="help-block error-content" hidden>This field is required.</span>
					</div>
				</div>

				<p class="justify-content-start"><a href="<?php echo e(URL::to('/forgotPassword')); ?>" class="blue-text ml-1">Forgot Password?</a></p>
				<button type="submit" class="btn btn-primary">Login</button>

				<?php if(Session::has('loginError')): ?>
					<div class="alert alert-danger" role="alert">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						<span class="sr-only">Error:</span>
						<?php echo session('loginError'); ?>

					</div>
				<?php endif; ?>
			</form>

		</div>
	</div>
</div> 

	
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>