<footer class="footer-content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-footer">
          <h5><?php echo app('translator')->getFromJson('website.About Store'); ?></h5>
          <ul class="contact-list  pl-0 mb-0">
            <li> <i class="fa fa-map-marker"></i><span><?php echo e($result['commonContent']['setting'][4]->value); ?> <?php echo e($result['commonContent']['setting'][5]->value); ?> <?php echo e($result['commonContent']['setting'][6]->value); ?>, <?php echo e($result['commonContent']['setting'][7]->value); ?> <?php echo e($result['commonContent']['setting'][8]->value); ?></span> </li>
            <li> <i class="fa fa-phone"></i><span><?php echo e($result['commonContent']['setting'][11]->value); ?></span> </li>
            <li> <i class="fa fa-envelope"></i><span> <a href="mailto:sales@brandbychoice.com"><?php echo e($result['commonContent']['setting'][3]->value); ?></a> </span> </li>
      
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="footer-block">
        	<div class="single-footer">
              <h5><?php echo app('translator')->getFromJson('website.Our Services'); ?></h5>
              <ul class="links-list pl-0 mb-0">
                <li> <a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Home'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/shop')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Shop'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/myorders')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Orders'); ?></a> </li>
                <li> <a href="<?php echo e(URL::to('/myCart')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Shopping Cart'); ?></a> </li>            <li> <a href="<?php echo e(URL::to('/wishlist')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Wishlist'); ?></a> </li>            
              </ul>
            </div>
            <div class="single-footer">
              <h5><?php echo app('translator')->getFromJson('website.Information'); ?></h5>
              <ul class="links-list pl-0 mb-0">
                <?php if(count($result['commonContent']['pages'])): ?>
                    <?php $__currentLoopData = $result['commonContent']['pages']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li> <a href="<?php echo e(URL::to('/page?name='.$page->slug)); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo e($page->name); ?></a> </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>            
                <li> <a href="<?php echo e(URL::to('/myContactUs')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo app('translator')->getFromJson('website.Contact Us'); ?></a> </li>
              </ul>
            </div>
        </div>
      </div>
      
      <div class="col-12 col-lg-4">
        <div class="single-footer">
          <h5><?php echo app('translator')->getFromJson('website.Popular Categories'); ?></h5>
          	<ul class="cat-list pl-0 mb-0">
		   		<?php $counter = 0;?>
                <?php $__currentLoopData = $result['commonContent']['popularCategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                			
                    <li>

                        <a href="<?php echo e(URL::to('/shop?category_id='.$categories_data['id'])); ?>" class="blog-block">         
                            <span class="cat-title text-center"><?php echo e($categories_data['name']); ?></span>
                        </a>
                    </li>          
                   			
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</ul>    
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="footer py-2 my-2">
  <div class="container">
    <div class="row">
    	<div class="footer-image col-12 col-md-6">
            <img class="img-fluid" src="<?php echo e(asset('').'public/images/payments.png'); ?>">
        </div>
        <div class="footer-info col-12 col-md-6">
            <p> © <?php echo app('translator')->getFromJson('website.Copy Rights'); ?>. <a href="#"><?php echo app('translator')->getFromJson('website.Privacy'); ?></a> · <a href="#"><?php echo app('translator')->getFromJson('website.Terms'); ?></a> </p>
        </div>
        <div class="floating-top"><a href="#" class="fa fa-angle-up"></a></div>
    </div>
  </div>
</div>

<!--notification-->
<div id="message_content"></div>

<!--- loader content --->
<div class="loader" id="loader">
	<img src="<?php echo e(asset('').'public/images/loader.gif'); ?>">
    <!--<img src="https://cdn.dribbble.com/users/645440/screenshots/3162915/shopping-loader.gif">-->
</div>
