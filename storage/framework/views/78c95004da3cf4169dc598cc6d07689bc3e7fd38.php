<?php if($result['filters']): ?>
				
 <div id="accordion"  class="filters" role="tablist">
 	<form enctype="multipart/form-data" name="filters" method="post">
        <input type="hidden" name="min_price" id="min_price" value="0">
        <input type="hidden" name="max_price" id="max_price" value="<?php echo e($result['filters']['maxPrice']); ?>">
        <input type="hidden" name="filters_applied" id="filters_applied" value="0">
        
        <div class="card first">
        	<!--id="headingOne"-->
			<div class="card-header" >
            	<!--href="#collapseAccordian1" data-toggle="collapse" aria-expanded="true" aria-controls="collapseAccordian1"-->
				<h2 class="title">
					Price
				</h2>
			</div>
            <!--id="collapseAccordian1" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion"-->
			<div class="block">
				<div class="card-body">
                    <div id="slider-range"></div>  
                    <div id="slider-values">
                        <div class="slider-value-0"><?php echo e($web_setting[19]->value); ?><input type="text" readonly id="min_price_show"></div>
                        <div class="slider-value-1"><?php echo e($web_setting[19]->value); ?><input type="text" readonly id="max_price_show"></div>
                    </div>
                    <input type="hidden" class="maximum_price" value="<?php echo e($result['filters']['maxPrice']); ?>">                        
				</div>
			</div>
		</div>
        
        <?php if(count($result['filters']['attr_data'])>0): ?>
        <?php $__currentLoopData = $result['filters']['attr_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$attr_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card <?php if(count($result['filters']['attr_data'])==$key+1): ?> last <?php endif; ?>">
                <div class="card-header">
                    <h2 class="title">
                      <?php echo e($attr_data['option']['name']); ?>

                    </h2>
                </div>
                
                <div class="block">
                    <div class="card-body">
                        <ul class="list">
                            <?php $__currentLoopData = $attr_data['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li >
                                <div class="form-check">
                                  <label class="form-check-label">
                                    
                                    <input class="form-check-input" name="<?php echo e($attr_data['option']['name']); ?>[]" type="checkbox" value="<?php echo e($values['value']); ?>" 								 									<?php 
                                    if(isset($_REQUEST[$attr_data['option']['name']][$key]) and !empty($_REQUEST[$attr_data['option']['name']][$key]))                                        print 'checked';
                                    ?>>
                                    <?php echo e($values['value']); ?>

                                  </label>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>					                    
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
		<div class="button">
        	<a href="<?php echo e((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" class="btn btn-dark" id="apply_options"> <?php echo app('translator')->getFromJson('website.Reset'); ?> </a>
        	<button type="button" class="btn btn-secondary" id="apply_options_btn"> <?php echo app('translator')->getFromJson('website.Apply'); ?></button>
        </div>
  </form>
</div>
<?php endif; ?>