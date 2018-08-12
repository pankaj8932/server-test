<?php $__env->startSection('content'); ?>


	<div class="col-lg-12"><br>

	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">My Profile</li>
	</ol>
	<br>
	
		<h4>My Profile</h4>
		<form name="updateMyProfile" class="form-validate" enctype="multipart/form-data" action="<?php echo e(URL::to('updateMyProfile')); ?>" method="post">
			 <?php if( count($errors) > 0): ?>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="alert alert-danger" role="alert">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						  <?php echo e($error); ?>

					</div>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
           <?php if(session()->has('error')): ?>
			<div class="alert alert-success">
				<?php echo e(session()->get('error')); ?>

			</div>
		<?php endif; ?>
            <?php if(Session::has('error')): ?>
            	
            	<div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      <?php echo e(session()->get('error')); ?>

                  </div>
            
            <?php endif; ?>
            
            <?php if(Session::has('error')): ?>
				<div class="alert alert-danger" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Error:</span>
					  <?php echo session('loginError'); ?>

				</div>
			<?php endif; ?>
            
            <?php if(session()->has('success') ): ?>
				<div class="alert alert-success">
					<?php echo e(session()->get('success')); ?>

				</div>
			<?php endif; ?>
            
			<div class="form-row">
			  <div class="form-group col-md-6 ">
				<label for="firstName">First Name</label>
				<input type="text" name="customers_firstname" class="form-control field-validate" id="firstName" value="<?php echo e(auth()->user()->customers_firstname); ?>">
				<span class="help-block error-content" hidden>Please enter your first name.</span>
			  </div>
			  <div class="form-group col-md-6 ">
				<label for="lastName">Last Name</label>
				<input type="text" name="customers_lastname" class="form-control field-validate" id="lastName" value="<?php echo e(auth()->user()->customers_lastname); ?>">
				<span class="help-block error-content" hidden>Please enter your last name.</span>
			  </div>
			  
			  <fieldset class="form-group col-md-6">
				  <div class="row">
					<legend class="col-form-legend col-sm-2">Gender</legend>
					<div class="col-sm-10">
						<label class="form-check-label">
						  <input class="form-check-input" type="radio" name="customers_gender" id="gender" value="0" <?php if(auth()->user()->	customers_gender == 0): ?> checked <?php endif; ?>>
						  Male
						</label><br>

						<label class="form-check-label">
						  <input class="form-check-input" type="radio" name="customers_gender" id="gender" value="1"  <?php if(auth()->user()->	customers_gender == 1): ?> checked <?php endif; ?>>
						  Female
						</label>
					</div>
				  </div>
			 </fieldset>
			 
			 <div class="form-group col-md-6">
				<label for="picture">Picture</label>
				<input type="file" name="customers_picture" class="form-control-file" id="picture">
				<input type="hidden" name="customers_old_picture" class="form-control-file" id="picture">
				
			 </div>
			 			 
			</div>
			
			<div class="form-row">
				<div class="form-group col-md-6">
				  <label for="inputPassword4" class="col-form-label">Date of Birth</label>
				  <input readonly name="customers_dob" type="text" class="form-control" id="datepicker" placeholder="Date of Birth" value="<?php echo e(auth()->user()->customers_dob); ?>">
				  <span class="help-block error-content" hidden>Please enter your date of birth.</span>
				</div>
				<div class="form-group col-md-6">
				  <label for="inputEmail4" class="col-form-label">Phone Number</label>
				  <input name="customers_telephone" type="text" class="form-control" id="phone" placeholder="Phone Number" value="<?php echo e(auth()->user()->customers_telephone); ?>">
				  <span class="help-block error-content" hidden>Please enter your phone number.</span>
				</div>
			</div>
			
			
			<button type="submit" class="btn btn-primary">Update </button>
			
		</form>
		<br><br>
		<h4>My Profile</h4>
		
		<form name="updateMyPassword" class="" enctype="multipart/form-data" action="<?php echo e(URL::to('/updateMyPassword')); ?>" method="post">
		
			<div class="form-row">
				<!--<div class="form-group col-md-6 password_content"> 
				  <label for="password" class="col-form-label">Current Password</label>
				  <input name="old_password" type="password" class="form-control" id="password" placeholder="Password" value="">
				  <span class="help-block error-content" hidden>Please enter current password.</span>
				</div>-->
				<div class="form-group col-md-6">
				  <label for="new_password" class="col-form-label">New Password</label>
				  <input name="new_password" type="password" class="form-control" id="new_password" placeholder="New Passwrod">
				  <span class="help-block error-content" hidden>Please enter your password and should be at least 6 characters long.</span>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Update</button>
			
		</form>
	</div>
			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>