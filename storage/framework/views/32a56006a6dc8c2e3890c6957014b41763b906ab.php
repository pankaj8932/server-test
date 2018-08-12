<?php $__env->startSection('content'); ?>


	<div class="col-lg-12"><br>

	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
	  <li class="breadcrumb-item active">Shipping Address</li>
	</ol>
	<br>
	

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h4>Shipping Address</h4><br>
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th scope="col">Default</th>
					  <th scope="col" width="65%">Address Info</th>
					  <th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php $__currentLoopData = $result['address']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					  <th scope="row" align="center" valign="center"><input class="form-control default_address" address_id="<?php echo e($address_data->address_id); ?>" type="radio" name="default" <?php if($address_data->default_address == $address_data->address_id): ?> checked <?php endif; ?>></th>
					  <td><?php echo e($address_data->firstname); ?>, <?php echo e($address_data->lastname); ?>, <?php echo e($address_data->street); ?>, <?php echo e($address_data->city); ?>, <?php echo e($address_data->zone_name); ?>, <?php echo e($address_data->country_name); ?>, <?php echo e($address_data->postcode); ?></td>
					  <td><a class="badge badge-primary" href="<?php echo e(URL::to('/myAddress?address_id='.$address_data->address_id)); ?>"><i class="fa fa-pencil" aria-hidden="true"></i> </a> <a href="<?php echo e(URL::to('/deleteMyAddress')); ?>" class="badge badge-danger"><i class="fa fa-trash" aria-hidden="true"></i>
</a></td>
					</tr>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </tbody>
				</table>
			</div>
		
		<div class="col-xs-12 col-sm-12 col-md-5">
		
		<h4><?php if(count($result['editAddress'])>0): ?> Edit <?php else: ?> Add <?php endif; ?>  Address</h4><br>
		<form name="addMyAddress" class="form-validate" enctype="multipart/form-data" action="<?php echo e(URL::to('/addMyAddress')); ?>" method="post">
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
		  
			  <div class="form-group col-md-12">
				<label for="firstName">First Name</label>
				<input type="text" name="entry_firstname" class="form-control field-validate" id="entry_firstname" <?php if(!empty($result['editAddress'])): ?> value=" <?php echo e($result['editAddress'][0]->firstname); ?>" <?php endif; ?>>
				<span class="help-block error-content" hidden>Please enter your first name.</span>
			  </div>
			  
			  <div class="form-group col-md-12">
				<label for="lastName">Last Name</label>
				<input type="text" name="entry_lastname" class="form-control field-validate" id="entry_lastname" <?php if(!empty($result['editAddress'])): ?> value="<?php echo e($result['editAddress'][0]->lastname); ?>" <?php endif; ?>>
				<span class="help-block error-content" hidden>Please enter your last name.</span>
			  </div>
		 	
		 	  <div class="form-group col-md-12">
				<label for="lastName">Address </label>
				<input type="text" name="entry_street_address" class="form-control field-validate" id="entry_street_address" <?php if(!empty($result['editAddress'])): ?> value="<?php echo e($result['editAddress'][0]->street); ?>" <?php endif; ?>>
				<span class="help-block error-content" hidden>Please enter your address.</span>
			  </div>
		 	
		 	  <div class="form-group col-md-12">
				<label for="firstName">Country</label>
				  <select name="entry_country_id" onChange="getZones();" id="entry_country_id" class="form-control field-validate">
					  <option>Select Country</option>
					  <?php $__currentLoopData = $result['countries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  	<option value="<?php echo e($countries->countries_id); ?>" <?php if(count($result['editAddress'])>0): ?> <?php if($countries->countries_id==$result['editAddress'][0]->countries_id): ?> selected <?php endif; ?> <?php endif; ?>><?php echo e($countries->countries_name); ?></option>
					  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </select>
				<span class="help-block error-content" hidden>Please choose your country.</span>
			  </div>
			  <div class="form-group col-md-12">
				<label for="firstName">Zone</label>
				  <select name="entry_zone_id" id="entry_zone_id" class="form-control field-validate">
					  <option>Select Zone</option>
				  </select>
				<span class="help-block error-content" hidden>Please choose your zone.</span>
			  </div>
			  
			  <div class="form-group col-md-12">
				<label for="lastName">City</label>
				<input type="text" name="entry_city" class="form-control field-validate" id="entry_city" <?php if(!empty($result['editAddress'])): ?> value="<?php echo e($result['editAddress'][0]->city); ?>" <?php endif; ?>>
				<span class="help-block error-content" hidden>Please enter your city.</span>
			  </div>
		 	
		 	  <div class="form-group col-md-12">
				<label for="lastName">Zip/Postal Code</label>
				<input type="text" name="entry_postcode" class="form-control field-validate" id="entry_postcode" <?php if(!empty($result['editAddress'])): ?> value="<?php echo e($result['editAddress'][0]->postcode); ?>" <?php endif; ?>>
				<span class="help-block error-content" hidden>Please enter your zip or postal Code.</span>
			  </div>	 
			 			
			</div>
			
			<button type="submit" class="btn btn-primary"><?php if(count($result['editAddress'])>0): ?> Update <?php else: ?> Add Address <?php endif; ?> </button>
			
		</form>
		</div>
		
		</div>
		
	</div>
			
		
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>