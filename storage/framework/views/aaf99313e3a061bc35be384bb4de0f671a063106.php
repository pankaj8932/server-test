<?php $__env->startSection('content'); ?>

<div class="col-xs-12 registration-area">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
			<li class="breadcrumb-item active">Login</li>
		</ol>
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<h3 class="title-h3">Create An Account</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 new-customers">
				<h4 class="title-h4">Personal Information</h4>
				<!-- <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p> -->

				<hr class="featurette-divider">
				<?php if( count($errors) > 0): ?>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  <?php echo e($error); ?>

						</div>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

				<?php if(Session::has('error')): ?>
					<div class="alert alert-danger" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						  <?php echo session('error'); ?>

					</div>
				<?php endif; ?>

				<?php if(Session::has('success')): ?>
					<div class="alert alert-success" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Success:</span>
						  <?php echo session('success'); ?>

					</div>
				<?php endif; ?>

				<form name="signup" enctype="multipart/form-data" class="form-validate" action="<?php echo e(URL::to('/signupProcess')); ?>" method="post">
					<div class="form-group row">
						<label for="staticEmail" class="col-sm-4 col-form-label">*First Name</label>
						<div class="col-sm-8">
							<input type="text" name="firstName" id="firstName" class="form-control field-validate">
							 <span class="help-block error-content" hidden>Please enter your first name.</span> 
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label">Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="lastName" id="lastName" class="form-control field-validate">
							<span class="help-block error-content" hidden>Please enter your last name.</span> 
						</div>
					</div>
					<hr class="featurette-divider">
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-4 col-form-label">*Email Adrress</label>
						<div class="col-sm-8">
							<input type="text" name="email" id="email" class="form-control email-validate">
							<span class="help-block error-content" hidden>Please enter your valid email address.</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inlineFormCustomSelect" class="col-sm-4 col-form-label">*Gender</label>
						<div class="col-sm-8">
							<select class="custom-select mr-sm-2 gender-validation" name="gender" id="inlineFormCustomSelect">
								<option selected value="">Choose...</option>
								<option value="0">Male</option>
								<option value="1">Female</option>
							</select>
							<span class="help-block error-content" hidden>Please select your gender.</span>
						</div>
					</div>
					<div class="form-group row">
					
						<label for="picture" class="col-sm-4 col-form-label">Picture</label>
						<div class="col-sm-8">
							<input type="file" class="form-control-file" name="picture" id="picture">
						</div>

					</div>

					<div class="form-group row">
						<label for="inputPassword4" class="col-sm-4 col-form-label">Password</label>
						<div class="col-sm-8">
							<input type="password" class="form-control password" name="password" id="password" placeholder="Password">
							<span class="help-block error-content" hidden>Please enter your password.</span>
						</div>
				  	
					</div>
					<div class="form-group row">					
						<label for="inputPassword5" class="col-sm-4 col-form-label">Confirm Password</label>
						<div class="col-sm-8 re-password-content">
							<input type="password" class="form-control password" name="re_password" id="re_password" placeholder="Password">
							<span class="help-block error-content" hidden>Please re-enter your  password.</span>
							<span class="help-block error-content-password" hidden>Password does not match the confirm password.</span>
						</div>				  	
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label"></label>
						<div class="col-sm-8">
							<div class="form-check checkbox-parent">
								<label class="form-check-label ">
									<input class="form-check-input checkbox-validate" type="checkbox"> Creating an account means you're okay with our <a href="<?php echo e(URL::to('/termsAndCondtions')); ?>">Terms and Services</a>, <a href="<?php echo e(URL::to('/privacyPolicy')); ?>">Privacy Policy</a> and <a href="<?php echo e(URL::to('/refundPolicy')); ?>">Refund Policy</a>.
								</label>
								<span class="help-block error-content" hidden>Please accept our terms and conditions.</span>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Sign Up</button>
				</form>
			</div>
			<div class="col-xs-12 col-sm-5 new-customers">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Duis at nisl luctus, malesuada diam non, mattis odio.</li>
						<li>Fusce porta neque at enim consequat, in vulputate tellus faucibus.</li>
						<br>
						<li>Pellentesque suscipit tortor id dui accumsan varius.</li>
						<li>Sed interdum purus imperdiet tortor imperdiet, et ultricies leo gravida.</li>
						<li>Aliquam pharetra urna vel nulla egestas, non laoreet mauris mollis.</li>
						<li>Integer sed velit sit amet quam pharetra ullamcorper.</li>
						<br>
						<li>Proin eget nulla accumsan, finibus lacus aliquam, tincidunt turpis.</li>
						<li>Nam at orci tempor, mollis mi ornare, accumsan risus.</li>
						<li>Cras vel ante vel augue convallis posuere.</li>
						<li>Ut quis dolor accumsan, viverra neque nec, blandit leo.</li>
					</ul>	
			</div>
		</div>
	</div>		
	
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>