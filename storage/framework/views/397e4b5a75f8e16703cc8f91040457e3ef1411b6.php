<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$values_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr <?php if($key++==0): ?> id="content_<?=$values_data->products_options_id.'_'.$values_data->language_id?>" <?php endif; ?>>
        <td>
             <p class="form-p-<?=$values_data->products_options_id.$values_data->products_options_values_id?>"><?php echo e($values_data->products_options_values_name); ?></p>
             <div style="display:none" class="row form-content-<?=$values_data->products_options_id.$values_data->products_options_values_id?>">
           			<?php echo Form::open(array('url' =>'admin/updateAttributeValue', 'method'=>'post', 'class' => 'form-horizontal form-validate editvalue-form', 'enctype'=>'multipart/form-data')); ?>

                        <?php echo Form::hidden('products_options_values_id', $values_data->products_options_values_id  , array('class'=>'form-control', 'id'=>'products_options_values_id')); ?>    
                        <?php echo Form::hidden('language_id', $values_data->language_id  , array('class'=>'form-control', 'id'=>'language_id')); ?>

                        <?php echo Form::hidden('products_options_id', $values_data->products_options_id  , array('class'=>'form-control', 'id'=>'products_options_id')); ?>                              
                        <div class="col-sm-10 col-md-4">
                            <?php echo Form::text('products_options_values_name', $values_data->products_options_values_name , array('class'=>'form-control', 'id'=>'products_options_values_name')); ?>

                        </div>
                        <button name="updateValue" type="button" class="btn btn-primary update-value"><i class="fa fa-check" aria-hidden="true"></i> Update</button>&nbsp;&nbsp
                        <button name="updateValue" type="button" class="btn btn-warning cancel-value" value = '<?=$values_data->products_options_id.$values_data->products_options_values_id?>'><i class="fa fa-times "></i> Cancel</button>
                    <?php echo Form::close(); ?>

            </div>
        </td>
        <td>
            <a data-toggle="tooltip" value = '<?=$values_data->products_options_id.$values_data->products_options_values_id?>' data-placement="bottom" title="Edit Value" href="javascript:void(0)" class="badge bg-light-blue edit-value"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
			<a href="javascript:void(0)" value_id = '<?=$values_data->products_options_values_id?>' language_id = '<?=$values_data->language_id?>' option_id = '<?=$values_data->products_options_id?>' data-toggle="tooltip" data-placement="bottom" title="Delete Value" class="badge bg-red delete-value"><i class="fa fa-trash" aria-hidden="true"></i></a>
       </td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<tr>
    <td colspan="2">
        <?php echo Form::open(array('url' =>'admin/addAttributeValue', 'method'=>'post', 'class' => 'form-horizontal form-validate addvalue-form', 'enctype'=>'multipart/form-data')); ?>

            <?php echo Form::hidden('language_id', $attributes[0]->language_id  , array('class'=>'form-control', 'id'=>'language_id')); ?>

            <?php echo Form::hidden('products_options_id', $attributes[0]->products_options_id  , array('class'=>'form-control', 'id'=>'products_options_id')); ?>                
            <div class="col-sm-10 col-md-3 row form-group">
                <?php echo Form::text('products_options_values_name', ' ' , array('class'=>'form-control', 'id'=>'products_options_values_name')); ?>

                <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0; text-transform:none">Add option value to assocaite with this option.</span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="addValue" type="button" class="btn btn-primary add-value"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Value</button>
        <?php echo Form::close(); ?>

   </td>
</tr>