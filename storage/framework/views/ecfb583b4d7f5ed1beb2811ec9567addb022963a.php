<?php $__env->startSection('content'); ?>
<section class="site-content">
    <div class="container">
        <div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?php echo app('translator')->getFromJson('website.News'); ?></h3>
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo app('translator')->getFromJson('website.News'); ?></li>
                </ol>
            </div>
        </div>
        <div class="blog-area" style="min-height:500px;">
        	<div class="heading">
                <h2><?php echo app('translator')->getFromJson('website.News Categories'); ?></h2>
                <hr>
            </div>
            
            <form method="get" enctype="multipart/form-data" id="load_news_form">
            	<input type="hidden"  name="category_id" value="<?php echo e(app('request')->input('category_id')); ?>">
                <div class="row">
                	<div class="blogs blogs-4x">
                        <?php if(count($result['categories'])>0): ?>
                        <?php $__currentLoopData = $result['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$news_categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="blog-post">
                            <article>
                                <div class="blog-thumb">
                                    
                                    <div class="blog-overlay">
                                        <a href="<?php echo e(URL::to('/news?category_id='.$news_categories->id)); ?>" class="fa fa-search-plus"></a>
                                    </div>
                                    
                                    <img class="img-fluid" src="<?php echo e(asset('').$news_categories->image); ?>" alt="<?php echo e($news_categories->name); ?>">
                                </div>
                                <div class="blog-block">
                                	<a href="<?php echo e(URL::to('/news?category_id='.$news_categories->id)); ?>" class="blog-title"><?php echo e($news_categories->name); ?></a>
                                </div>
                            </article>
                        </div>       
                    
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p><?php echo app('translator')->getFromJson('website.No record found'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>