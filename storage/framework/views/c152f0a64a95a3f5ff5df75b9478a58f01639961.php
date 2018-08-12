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
            <div class="row">
            	<div class="col-12 col-lg-3 pr-0">
                    <div class="sidebar">
                        <div class="widget block-categories">
                            <div class="block-title">
                                <h2>Categories</h2>
                            </div>
                            <div class="block-content">
                                <ul class="list-categories">
                                    <li>
                                        <a href="#">Categories Names 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Categories Names 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Categories Names 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Categories Names 4</a>
                                    </li>
                                    <li>
                                        <a href="#">Categories Names 5</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="widget block-recent-posts">
                            <div class="block-title">
                                <h2>Recent Posts</h2>
                            </div>
                            <div class="block-content">
                                <div class="media">
                                  <img class="mr-2" src="<?php echo e(asset('').'public/images/default.png'); ?>" alt="image">
                                  <div class="media-body">
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                    <em>22 Aug, 2018</em>
                                  </div>
                                </div>
                                
                                <div class="media">
                                  <img class="mr-2" src="<?php echo e(asset('').'public/images/default.png'); ?>" alt="image">
                                  <div class="media-body">
                                    <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                    <em>22 Aug, 2018</em>
                                  </div>
                                </div>
                                
                                <div class="media">
                                  <img class="mr-2" src="<?php echo e(asset('').'public/images/default.png'); ?>" alt="image">
                                  <div class="media-body">
                                    <p>Cras sit amet nibh libero, in gravida nulla. Donec lacinia congue felis in faucibus.</p>
                                    <em>22 Aug, 2018</em>
                                  </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--<div class="widget block-tags">
                            <div class="block-title">
                                <h2>Tags</h2>
                            </div>
                            <div class="block-content">
                                <ul class="list-tags">
                                    <li><a href="#">Cosunt</a></li>
                                    <li><a href="#">Count</a></li>
                                    <li><a href="#">Coundfdsft</a></li>
                                    <li><a href="#">Count</a></li>
                                    <li><a href="#">Cosdfunt</a></li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                 </div>
                 <div class="col-12 col-lg-9">
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
                                    <h2 ><?php echo e($result['news'][0]->news_name); ?>  
                                    	<?php if($result['news'][0]->is_feature==1): ?>
                                        	<span class="badge badge-secondary"><?php echo app('translator')->getFromJson('website.Featured'); ?></span>
                                        <?php endif; ?>
                                    </h2>
        
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
	</div>
</section>
<?php $__env->stopSection(); ?> 	



<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>