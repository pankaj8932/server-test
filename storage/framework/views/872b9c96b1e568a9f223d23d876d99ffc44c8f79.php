<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="editManufacturerLabel"><?php echo e(trans('labels.SendNotifications')); ?></h4>
</div>
  <?php echo Form::open(array('url' =>'admin/singleUserNotification', 'name'=>'send_user_notification', 'id'=>'sendNotificaionForm', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

		  
<div class="modal-body">     

      	<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devices_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 	<input type="hidden" id="device_id" name="device_id" value="<?php echo e($devices_data->device_id); ?>"> 
    		<input id="device_type" name="device_type" value="<?php echo e($devices_data->device_type); ?>" type="hidden">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
	<div class="alert alert-success alert-dismissible callout hide sent-push">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(trans('labels.NotifcationSentMessage')); ?>

	   </div>
	  <div class="alert alert-danger alert-dismissible callout not-sent hide">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo e(trans('labels.NotifcationSentErrorMessage')); ?>

	  </div>

	   <div class="form-group">
		<label for="inputName" class="col-sm-2 control-label"><?php echo e(trans('labels.Title')); ?></label>

		<div class="col-sm-10">
		   <?php echo Form::text('title', '', array('class'=>'form-control field-validate', 'required', 'id'=>'title')); ?>

		   <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
		   <?php echo e(trans('labels.EnterNotificationTitle')); ?></span>
		   <span class="help-block hidden title-error"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
		</div>
	  </div>
	<div class="form-group">
       <label for="inputName" class="col-sm-2 control-label"><?php echo e(trans('labels.Image')); ?></label>
      <div class="col-sm-10 col-md-4">
        <?php echo Form::file('image', array('id'=>'image')); ?>

        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
        <?php echo e(trans('labels.notificationImageText')); ?></span>
      </div>
    </div>

	  <div class="form-group ">
		<label for="inputExperience" class="col-sm-2 control-label"><?php echo e(trans('labels.Message')); ?></label>
		<div class="col-sm-10">
		 <?php echo Form::textarea('message', '', array('class'=>'form-control', 'required', 'rows'=>'5', 'id'=>'message')); ?>

		   <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.MessageText')); ?></span>
		 <span class="help-block hidden message-error"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
		</div>
	  </div>    
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
	<button type="button" class="btn btn-primary" id="single-notificaion"><?php echo e(trans('labels.Send')); ?></button>
</div>
  <?php echo Form::close(); ?>