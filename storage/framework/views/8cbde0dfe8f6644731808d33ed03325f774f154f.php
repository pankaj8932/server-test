<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.SendNotification')); ?> <small><?php echo e(trans('labels.SendNotification')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/listingDevices')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.ListingDevices')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.SendNotification')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">

      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php if(!empty($result['devices'][0]->customers_picture)): ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo e(asset('').$result['devices'][0]->customers_picture); ?>" alt="<?php echo e($result['devices'][0]->customers_firstname); ?> profile picture">
              <h3 class="profile-username text-center"><?php echo e($result['devices'][0]->customers_firstname); ?> <?php echo e($result['devices'][0]->customers_lastname); ?></h3>
            <?php endif; ?>

              <ul class="list-group list-group-unbDeviceed">
              	<li class="list-group-item">
                  <b><?php echo e(trans('labels.DeviceType')); ?></b> <a class="pull-right">
                    <?php if($result['devices'][0]->device_type == '1'): ?>
                       <?php echo e(trans('labels.IOS')); ?> 
                    <?php elseif($result['devices'][0]->device_type == '2'): ?>
                       <?php echo e(trans('labels.Android')); ?> 
                    <?php elseif($result['devices'][0]->device_type == '3'): ?>
                        <?php echo e(trans('labels.Other')); ?>

                    <?php endif; ?>
                    </a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(trans('labels.DeviceOS')); ?> </b> <a class="pull-right"><?php echo e($result['devices'][0]->device_os); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(trans('labels.Manufacturer')); ?></b> <a class="pull-right"><?php echo e($result['devices'][0]->manufacturer); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(trans('labels.DeviceModel')); ?></b> <a class="pull-right"><?php echo e($result['devices'][0]->device_model); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(trans('labels.RegisterDate')); ?></b> <a class="pull-right"><?php echo e(date('d/m/Y', $result['devices'][0]->register_date)); ?></a>
                </li>
                <li class="list-group-item">
                  <b><?php echo e(trans('labels.Status')); ?></b> <a class="pull-right">
                  <?php if($result['devices'][0]->status=='0'): ?>
                  	<span class="badge bg-red"> <?php echo e(trans('labels.Inactive')); ?></span>
                  <?php elseif($result['devices'][0]->status=='1'): ?>
                  	<span class="badge bg-light-blue"> <?php echo e(trans('labels.Active')); ?></span>
                  <?php endif; ?>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#push-notification" data-toggle="tab"><?php echo e(trans('labels.SendNotification')); ?></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="push-notification">
               <?php echo Form::open(array('url' =>'admin/viewDevices', 'id'=>'sendNotificaionForm', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                            	
                   <?php echo Form::hidden('device_type', $result['devices'][0]->device_type, array('class'=>'form-control', 'id'=>'device_type')); ?>

                   <?php echo Form::hidden('device_id', $result['devices'][0]->device_id, array('class'=>'form-control', 'id'=>'device_id')); ?>

                   
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
                  
                  
                  <div class="form-group ">
                    <label for="inputExperience" class="col-sm-2 control-label"><?php echo e(trans('labels.Message')); ?></label>
					<div class="col-sm-10">
                   	 <?php echo Form::textarea('message', '', array('class'=>'form-control', 'required', 'rows'=>'5', 'id'=>'message')); ?>

                       <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.MessageText')); ?></span>
                     <span class="help-block hidden message-error"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="button" class="btn btn-primary" id="send-notificaion"><?php echo e(trans('labels.SendNotification')); ?></button>
                    </div>
                  </div>
                <?php echo Form::close(); ?>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>