<?php $__env->startSection('content'); ?>
<section class="site-content">
	<div class="container">
  		<div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?=$result['pages'][0]->name?></h3>
                <ol class="breadcrumb">                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
            		<li class="breadcrumb-item active"><?=$result['pages'][0]->name?></li>
                </ol>
            </div>
        </div>
        <div class="info-pages-area">
        	<div class="heading">
                <h2><?=$result['pages'][0]->name?></h2>
                <hr>
            </div>
            <div class="row">
            	<div class="col-12">
                	<?=stripslashes($result['pages'][0]->description)?>     
                </div>
            </div>
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>