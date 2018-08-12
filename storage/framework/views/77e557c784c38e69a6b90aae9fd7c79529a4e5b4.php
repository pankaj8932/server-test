<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.AddAddresses')); ?> <small><?php echo e(trans('labels.AddAddresses')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="listingCustomers"><i class="fa fa-users"></i> <?php echo e(trans('labels.ListingAllCustomers')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.AddAddresses')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.ListingCustomerAddresses')); ?></h3>
            <div class="box-tools pull-right">
            	<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#addAdressModal"><?php echo e(trans('labels.AddAddress')); ?></button>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo e(trans('labels.ID')); ?></th>
                      <th><?php echo e(trans('labels.BasicInfo')); ?></th>
                      <th><?php echo e(trans('labels.AddressInfo')); ?></th>
                      <th><?php echo e(trans('labels.Action')); ?></th>
                    </tr>
                  </thead>
                  <tbody class="contentAttribute">
                  	
                  		<?php if(count($data['customer_addresses']) > 0): ?>
							<?php $__currentLoopData = $data['customer_addresses']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer_addresses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($customer_addresses->address_book_id); ?></td>
								<td>
                                    <strong><?php echo e(trans('labels.Company')); ?>:</strong> <?php echo e($customer_addresses->entry_company); ?><br>
                                    <!--<strong>Gender:</strong> <?php echo e($customer_addresses->entry_gender); ?><br>-->
                                    <strong><?php echo e(trans('labels.FirstName')); ?>:</strong> <?php echo e($customer_addresses->entry_firstname); ?><br>
                                    <strong><?php echo e(trans('labels.LastName')); ?>:</strong> <?php echo e($customer_addresses->entry_lastname); ?>

                                </td>
								<td>
                                    <strong><?php echo e(trans('labels.Street')); ?>:</strong> <?php echo e($customer_addresses->entry_street_address); ?><br>
                                    <strong><?php echo e(trans('labels.Suburb')); ?>:</strong> <?php echo e($customer_addresses->entry_suburb); ?><br>
                                    <strong><?php echo e(trans('labels.Postcode')); ?>:</strong> <?php echo e($customer_addresses->entry_postcode); ?><br>
                                    <strong><?php echo e(trans('labels.City')); ?>:</strong> <?php echo e($customer_addresses->entry_city); ?><br>
                                    <strong><?php echo e(trans('labels.State')); ?>:</strong> <?php echo e($customer_addresses->entry_state); ?><br>
                                    <strong><?php echo e(trans('labels.Zone')); ?>:</strong> <?php echo e($customer_addresses->zone_name); ?><br>
                                    <strong><?php echo e(trans('labels.Country')); ?>:</strong> <?php echo e($customer_addresses->countries_name); ?>

                                </td>
								<td>
									<a class="badge bg-light-blue editAddressModal" customers_id = '<?php echo e($data['customers_id']); ?>' address_book_id = "<?php echo e($customer_addresses->address_book_id); ?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                               	 	
                                    <a customers_id = '<?php echo e($data['customers_id']); ?>' address_book_id = "<?php echo e($customer_addresses->address_book_id); ?>" class="badge bg-red deleteAddressModal"><i class="fa fa-trash " aria-hidden="true"></i></a></td>
							</tr> 
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
						<tr>
							<td colspan="5"><?php echo e(trans('labels.NoRecordFound')); ?></td>
					    </tr>
						<?php endif; ?>
                  	 
                  </tbody>
                </table>
                 </div>
         	 </div>
          
         	 <div class="box-footer text-center">
				<a href="../listingCustomers" class="btn btn-primary"><?php echo e(trans('labels.SaveComplete')); ?></a>
			</div>
          <!-- /.box-body --> 
        </div>
        
    <!-- addAdressModal -->
    <div class="modal fade" id="addAdressModal" tabindex="-1" role="dialog" aria-labelledby="addAdressModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="addAdressModalLabel"><?php echo e(trans('labels.AddAddress')); ?></h4>
          </div>
          <?php echo Form::open(array('url' =>'admin/addNewProductAttribute', 'name'=>'addAddressFrom', 'id'=>'addAddressFrom', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

          <?php echo Form::hidden('customers_id',  $data['customers_id'] , array('class'=>'form-control', 'id'=>'entry_company')); ?>

          <div class="modal-body">	
              <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Company')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_company',  '', array('class'=>'form-control', 'id'=>'entry_company')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.FirstName')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_firstname',  '', array('class'=>'form-control', 'id'=>'entry_firstname')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.LastName')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_lastname',  '', array('class'=>'form-control', 'id'=>'entry_lastname')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.StreetAddress')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_street_address',  '', array('class'=>'form-control', 'id'=>'entry_street_address')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Suburb')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_suburb',  '', array('class'=>'form-control', 'id'=>'entry_suburb')); ?>

                  </div>
               </div>
               
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Postcode')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_postcode',  '', array('class'=>'form-control', 'id'=>'entry_postcode')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.City')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_city',  '', array('class'=>'form-control', 'id'=>'entry_city')); ?>

                  </div>
               </div>
               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.State')); ?></label>
                  <div class="col-sm-10 col-md-8">
                    <?php echo Form::text('entry_state',  '', array('class'=>'form-control', 'id'=>'entry_state')); ?>

                  </div>
               </div>
                                        
              <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Country')); ?></label>
                  <div class="col-sm-10 col-md-8">
                      <select id="entry_country_id" class="form-control" name="entry_country_id">	
                         <option value=""><?php echo e(trans('labels.SelectCountry')); ?></option>
                         <?php $__currentLoopData = $data['countries']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countries_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($countries_data->countries_id); ?>"><?php echo e($countries_data->countries_name); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>										 
                      </select>
                  </div>
                </div>

               <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Zone')); ?></label>
                  <div class="col-sm-10 col-md-8">
                      <select class="form-control zoneContent" name="entry_zone_id">		
                          <option value=""><?php echo e(trans('labels.SelectZone')); ?></option>									 
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.DefaultShippingAddress')); ?></label>
                  <div class="col-sm-10 col-md-8">
                      <select id="is_default" class="form-control" name="is_default">	
                          <option value="0"><?php echo e(trans('labels.No')); ?></option>
                          <option value="1"><?php echo e(trans('labels.Yes')); ?></option>								 
                      </select>
                  </div>
                </div>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
            <button type="button" class="btn btn-primary" id="addAddress"><?php echo e(trans('labels.AddAddress')); ?></button>
          </div>
          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
    
    <!-- editAddressModal -->
    <div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content editContent">
          
        </div>
      </div>
    </div>

    <!-- deleteAddressModal -->
    <div class="modal fade" id="deleteAddressModal" tabindex="-1" role="dialog" aria-labelledby="deleteAddressModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="deleteAddressModalLabel"><?php echo e(trans('labels.DeleteAddress')); ?></h4>
              </div>
              <?php echo Form::open(array('url' =>'admin/deleteAddress', 'name'=>'deleteAddress', 'id'=>'deleteAddress', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

                      <?php echo Form::hidden('customers_id',  '', array('class'=>'form-control', 'id'=>'customers_id')); ?>

                      <?php echo Form::hidden('address_book_id',  '', array('class'=>'form-control', 'id'=>'address_book_id')); ?>

              <div class="modal-body">
                <p><?php echo e(trans('labels.DeleteAddressText')); ?></p>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Cancel')); ?></button>
                <button type="button" class="btn btn-primary" id="deleteAddressBtn"><?php echo e(trans('labels.Delete')); ?></button>
              </div>
              <?php echo Form::close(); ?>

            </div>
        </div>
      </div>
	</div>
              
           
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- Main row -->  
</div>
   
    <!-- /.row --> 
    
    <!-- Main row -->  
</div>
    
    <!-- /.row --> 
  </section>
  <!-- /.content -->

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>