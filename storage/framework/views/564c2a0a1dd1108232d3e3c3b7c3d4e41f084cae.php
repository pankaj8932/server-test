<?php $__env->startSection('content'); ?>
<section class="site-content">
	<div class="container">
    	<div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?php echo app('translator')->getFromJson('website.News Detail'); ?></h3>
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/myNews?category_id='.$result['news'][0]->categories_id)); ?>"> <?php echo e($result['news'][0]->categories_name); ?></a></li>
                     <li class="breadcrumb-item active"><?php echo app('translator')->getFromJson('website.News Detail'); ?></li>
                </ol>
            </div>
        </div>

        <div class="blog-area">
            <?php //print("<pre>".print_r($result['news'][0],true)."</pre>");?>
            <div class="row">
                <div class="blogs blogs-detail">        
                    <div class="blog-post">
                        <article>
                            <div class="blog-thumb">
                                <span class="blog-date">
                                    <strong>
                                        <?php
                                            $timestamp = strtotime($result['news'][0]->news_date_added);
                                            echo date('d',$timestamp);
                                        ?>
                                    </strong>
                                    <?php
                                        
                                        echo date('M',$timestamp);
                                    ?>
                                </span>
                                <img class="img-fluid" src="<?php echo e(asset('').$result['news'][0]->news_image); ?>" alt="<?php echo e($result['news'][0]->news_name); ?>">
                            </div>
                            
                            <div class="blog-block">
                                <h2 ><?php echo e($result['news'][0]->news_name); ?></h2>
    
                                <div class="blog-text">
                                    <?=stripslashes($result['news'][0]->news_description)?>
                                </div>
                            </div>
                        </article>
                    </div>      
                </div>	
            </div>		
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>