<?php if($result['filters']): ?>
				
 <div id="accordion" role="tablist">
  <div class="card">
	<div class="card-header" role="tab" id="headingOne">
	  <h5 class="mb-0">
		<a data-toggle="collapse" href="#collapseAccordian" aria-expanded="true" aria-controls="collapseAccordian">
		  Filters
		</a>
	  </h5>
	</div>

	<div id="collapseAccordian" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
	  <div class="card-body">
		<form enctype="multipart/form-data" name="filters" method="get">
		 <div class="row">
			<div class="col-lg-12">
				<strong>Price:</strong> <span id="ex6SliderVal">0,<?php echo e($result['filters']['maxPrice']); ?></span>
				 <input id="ex2" type="text" class="" value="" data-slider-min="0" data-slider-max="<?php echo e($result['filters']['maxPrice']); ?>" data-slider-step="5" data-slider-value="[0,<?php echo e($result['filters']['maxPrice']); ?>]"/> <b>0</b><b><?php echo e($result['filters']['maxPrice']); ?></b><br>
				 </span>
			</div>
		</div>

		<hr class="featurette-divider">
		<div class="row">
			<div class="col-lg-12">
			<?php if(count($result['filters']['attr_data'])>0): ?>
				<?php $__currentLoopData = $result['filters']['attr_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$attr_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<strong><?php echo e($attr_data['option']['name']); ?></strong>
					<ul class="list">
						<?php $__currentLoopData = $attr_data['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="">
							<div class="form-check">
							  <label class="form-check-label">
								<input class="form-check-input" name="color[]" type="checkbox" value="">
								<?php echo e($values['value']); ?>

							  </label>
							</div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					
					<?php if( $key++ != count($result['filters']['attr_data']) ): ?>
						<hr class="featurette-divider">
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

			</div>
		</div>
		</form>
	  </div>
	</div>
  </div>
</div>
<?php endif; ?>