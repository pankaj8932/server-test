<?php $__env->startSection('content'); ?>
<section class="site-content">
	<div id="googleMap" style="width:100%;height:380px;"></div>
	<div class="container">
  		<div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?php echo app('translator')->getFromJson('website.Contact Us'); ?></h3>
                <ol class="breadcrumb">                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
            		<li class="breadcrumb-item active"><?php echo app('translator')->getFromJson('website.Contact Us'); ?></li>
                </ol>
            </div>
        </div>
        <div class="contact-area">
        	<div class="heading">
                <h2><?php echo app('translator')->getFromJson('website.Contact Us'); ?></h2>
                <hr>
            </div>
        	<div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum velit est, et semper massa pulvinar ut. Aliquam sagittis augue at lobortis hendrerit. Vestibulum sit amet posuere quam. Vivamus consectetur tortor eu sollicitudin ullamcorper. Sed dignissim scelerisque enim, sit amet fermentum velit imperdiet eu. Phasellus varius tincidunt nibh, sed ornare felis porttitor quis.</p>
                    
                    <form name="signup" class="form-validate" enctype="multipart/form-data" action="<?php echo e(URL::to('/processContactUs')); ?>" method="post">
                        <div class="form-group">
                            <label for="firstName"><?php echo app('translator')->getFromJson('website.Full Name'); ?></label>
                            <input type="text" class="form-control field-validate" id="name" name="name">
							<span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your name'); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" class="col-form-label"><?php echo app('translator')->getFromJson('website.Email'); ?></label>
                            <input type="email" class="form-control email-validate" id="inputEmail4" name="email">
							<span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your valid email address'); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="col-form-label"><?php echo app('translator')->getFromJson('website.Message'); ?></label>
                            <textarea type="text" class="form-control field-validate" id="message" rows="5" name="message"></textarea>
							<span class="help-block error-content" hidden><?php echo app('translator')->getFromJson('website.Please enter your message'); ?></span>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-dark"><?php echo app('translator')->getFromJson('website.Send'); ?></button>
                        </div>
                    </form>
                    
                    <?php if(session()->has('success') ): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                     <?php endif; ?>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                    
                    <ul class="contact-list">
                      <li> <i class="fa fa-map-marker"></i><span><?php echo e($result['commonContent']['setting'][4]->value); ?> <?php echo e($result['commonContent']['setting'][5]->value); ?> <?php echo e($result['commonContent']['setting'][6]->value); ?>, <?php echo e($result['commonContent']['setting'][7]->value); ?> <?php echo e($result['commonContent']['setting'][8]->value); ?></span> </li>
                      <li> <i class="fa fa-phone"></i><span><?php echo e($result['commonContent']['setting'][11]->value); ?></span> </li>
                      <li> <i class="fa fa-envelope"></i><span> <a href="mailto:sales@brandbychoice.com"><?php echo e($result['commonContent']['setting'][3]->value); ?></a> </span> </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>