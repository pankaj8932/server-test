<?php $__env->startSection('content'); ?>

<section class="site-content">
  <div class="container"> 
    
    <!-- dynamic content -->
    
    <div class="banner-area">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="banner-single">
            <h3 class="fa fa-truck"></h3>
            <div class="block">
            	<h4 class="title"><?php echo app('translator')->getFromJson('website.bannerLabel1'); ?></h4>
            	<p><?php echo app('translator')->getFromJson('website.bannerLabel1Text'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="banner-single">
            <h3 class="fa fa-money"></h3>
            <div class="block">
                <h4 class="title"><?php echo app('translator')->getFromJson('website.bannerLabel2'); ?></h4>
                <p><?php echo app('translator')->getFromJson('website.bannerLabel2Text'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="banner-single second-last">
            <h3 class="fa fa-life-ring"></h3>
            <div class="block">
                <h4 class="title"><?php echo app('translator')->getFromJson('website.bannerLabel3'); ?></h4>
                <p><?php echo app('translator')->getFromJson('website.bannerLabel3Text'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="banner-single last">
            <h3 class="fa fa-credit-card"></h3>
            <div class="block">
                <h4 class="title"><?php echo app('translator')->getFromJson('website.bannerLabel4'); ?></h4>
                <p><?php echo app('translator')->getFromJson('website.bannerLabel4Text'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products-area">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link index-tab active" href="javascript:void(0);" tab-name="#featured"><?php echo app('translator')->getFromJson('website.TopSales'); ?></a> </li>
            <li class="nav-item"> <a class="nav-link index-tab" href="javascript:void(0);" tab-name="#special"><?php echo app('translator')->getFromJson('website.Special'); ?></a> </li>
            <li class="nav-item"> <a class="nav-link index-tab" href="javascript:void(0);" tab-name="#liked"><?php echo app('translator')->getFromJson('website.MostLiked'); ?></a> </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="featured">
              <div id="owl_featured" class="owl-carousel owl_featured"> 
              <?php if($result['top_seller']['success']==1): ?>
              	<?php $__currentLoopData = $result['top_seller']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$top_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="product">
                  <article>
                  	
                       <div class="thumb"> <img class="img-fluid" src="<?php echo e(asset('').$top_seller->products_image); ?>" alt="<?php echo e($top_seller->products_name); ?>"></div>
						<?php
                                $current_date = date("Y-m-d", strtotime("now"));
                                
                                $string = substr($top_seller->products_date_added, 0, strpos($top_seller->products_date_added, ' '));
                                $date=date_create($string);
                                date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
                                
                                //echo $top_seller->products_date_added . "<br>";
                                $after_date = date_format($date,"Y-m-d");
                                
                                if($after_date>=$current_date){
                                    print '<span class="new-tag">';
                                    print __('website.New');
                                    print '</span>';
                                }
                                
                                if(!empty($top_seller->discount_price)){
                                    $discount_price = $top_seller->discount_price;	
                                    $orignal_price = $top_seller->products_price;	
                                    
                                    $discounted_price = $orignal_price-$discount_price;
                                    $discount_percentage = $discounted_price/$orignal_price*100;
                                    echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
                                }
                                 
                        ?>
                        <span class="tag text-center">
                        	<?=stripslashes($top_seller->categories_name)?>
                        </span>
                        <h2 class="title text-center"><?php echo e($top_seller->products_name); ?></h2>
                        <!--<p class="like">
                        <span products_id = '<?php echo e($top_seller->products_id); ?>' class="fa <?php if($top_seller->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                        <span><?php echo e($top_seller->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span>
                        </p>-->
                        <div class="price text-center">
                        	<?php if(!empty($top_seller->discount_price)): ?>
                        
                          	<?php echo e($web_setting[19]->value); ?><?php echo e($top_seller->discount_price+0); ?> 
                          
                          	<span> <?php echo e($web_setting[19]->value); ?><?php echo e($top_seller->products_price+0); ?></span>
                          
                          	<?php else: ?>
                          		<?php echo e($web_setting[19]->value); ?><?php echo e($top_seller->products_price+0); ?> 
                          
                          	<?php endif; ?> 
						</div>
                          
                     
                     <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">
                            	<span products_id = '<?php echo e($top_seller->products_id); ?>' class="fa <?php if($top_seller->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                            </div>
                            
                            <a href="<?php echo e(URL::to('/productDetail/'.$top_seller->products_id)); ?>" class="fa fa-eye"></a>
                        </div>
                        <div class="buttons">
                        	<?php if(!in_array($top_seller->products_id,$result['cartArray'])): ?>
                        
                                <button  class="btn btn-block btn-secondary cart" products_id="<?php echo e($top_seller->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                
                            <?php else: ?>
                                <button  class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                            <?php endif; ?>
                        </div>
                     </div>
                    
                  </article>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="product last-product">
                      <article>
                      	<a href="<?php echo e(URL::to('/shop?type=topseller')); ?>" class="buttons">
                        	<span class="fa fa-angle-right"></span>
                        	<span class="btn btn-secondary"><?php echo app('translator')->getFromJson('website.View All'); ?></span>
                        </a>
                      	
                      </article>
                    </div>
                <?php endif; ?> 
                </div>
              <!-- 1st tab --> 
            </div>
            <div role="tabpanel" class="tab-pane" id="special">
              <div id="owl_special" class="owl-carousel"> <?php if($result['special']['success']==1): ?>
                <?php $__currentLoopData = $result['special']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$special): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                  <article>
                  
                  	<div class="thumb"><img class="img-fluid" src="<?php echo e(asset('').$special->products_image); ?>" alt="<?php echo e($special->products_name); ?>"></div>
                    <?php
						$current_date = date("Y-m-d", strtotime("now"));
						
						$string = substr($special->products_date_added, 0, strpos($special->products_date_added, ' '));
						$date=date_create($string);
						date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
						
						//echo $top_seller->products_date_added . "<br>";
						$after_date = date_format($date,"Y-m-d");
						
						if($after_date>=$current_date){
							print '<span class="new-tag">';
							print __('website.New');
							print '</span>';
						}
						
						if(!empty($special->discount_price)){
							$discount_price = $special->discount_price;	
							$orignal_price = $special->products_price;	
							
							$discounted_price = $orignal_price-$discount_price;
							$discount_percentage = $discounted_price/$orignal_price*100;
							echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
						}
						 
			  		 ?>
                     <span class="tag text-center">
						<?=stripslashes($special->categories_name)?>
                    </span>
                    
                    <h2 class="title text-center"><?php echo e($special->products_name); ?></h2>
                    
                    <!--<p class="like"> <span href="#" products_id = '<?php echo e($special->products_id); ?>' class="fa <?php if($special->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span> <span><?php echo e($special->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span></p>-->
                    <div class="price text-center"> 
                    
                    	<?php echo e($web_setting[19]->value); ?><?php echo e($special->products_price+0); ?>

                    
                    	<span><?php echo e($web_setting[19]->value); ?><?php echo e($special->discount_price+0); ?></span>
                        
                    </div>
                    
                    
                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">
                            	<span products_id = '<?php echo e($special->products_id); ?>' class="fa <?php if($special->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                            </div>
                            
                            <a href="<?php echo e(URL::to('/productDetail/'.$special->products_id)); ?>" class="fa fa-eye"></a>
                        </div>
                        
                        
                        <div class="buttons">
                        	<?php if(!in_array($special->products_id,$result['cartArray'])): ?>
                        
                                <button  class="btn btn-block btn-secondary cart" products_id="<?php echo e($special->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                
                            <?php else: ?>
                                <button  class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                            <?php endif; ?>
                        </div>
                     </div>
         
                  </article>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="product last-product">
                      <article>
                      	<a href="<?php echo e(URL::to('/shop?type=special')); ?>" class="buttons">
                        	<span class="fa fa-angle-right"></span>
                        	<span class="btn btn-secondary"><?php echo app('translator')->getFromJson('website.View All'); ?></span>
                        </a>
                      </article>
                    </div>
                <?php endif; ?>
                </div>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="liked">
              <div id="owl_liked" class="owl-carousel"> 
              <?php if($result['most_liked']['success']==1): ?>
                <?php $__currentLoopData = $result['most_liked']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$most_liked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                  <article>
                  	<div class="thumb"><img class="img-fluid" src="<?php echo e(asset('').$most_liked->products_image); ?>" alt="<?php echo e($most_liked->products_name); ?>"></div>
                    <?php
						$current_date = date("Y-m-d", strtotime("now"));
						
						$string = substr($most_liked->products_date_added, 0, strpos($most_liked->products_date_added, ' '));
						$date=date_create($string);
						date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
						
						//echo $top_seller->products_date_added . "<br>";
						$after_date = date_format($date,"Y-m-d");
						
						if($after_date>=$current_date){
							print '<span class="new-tag">';
							print __('website.New');
							print '</span>';
						}
						
						if(!empty($most_liked->discount_price)){
							$discount_price = $most_liked->discount_price;	
							$orignal_price = $most_liked->products_price;	
							
							$discounted_price = $orignal_price-$discount_price;
							$discount_percentage = $discounted_price/$orignal_price*100;
							echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
						}
							 
				   ?>
                    <span class="tag text-center">
                    	<?=stripslashes($most_liked->categories_name)?>
                    </span>
                    
                    <h2 class="title text-center"><?php echo e($most_liked->products_name); ?></h2>
                    <!--<p class="like">
                    
                    	<span href="#" products_id = '<?php echo e($most_liked->products_id); ?>' class="fa <?php if($most_liked->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span> <span><?php echo e($most_liked->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span>
                    
                    </p>-->
                    
                    <div class="price text-center">
                      <?php if(!empty($most_liked->discount_price)): ?>
                      	<?php echo e($web_setting[19]->value); ?><?php echo e($most_liked->discount_price+0); ?> <span><?php echo e($web_setting[19]->value); ?><?php echo e($most_liked->products_price+0); ?></span> <?php else: ?>
                      	<?php echo e($web_setting[19]->value); ?><?php echo e($most_liked->products_price+0); ?>

                      <?php endif; ?> 
                    </div>
                    
                    <div class="product-hover">
                     	<div class="icons">
                        	<div class="icon-liked">
                            	<span products_id = '<?php echo e($most_liked->products_id); ?>' class="fa <?php if($most_liked->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                            </div>
                            
                            <a href="<?php echo e(URL::to('/productDetail/'.$most_liked->products_id)); ?>" class="fa fa-eye"></a>
                        </div>
                        
                        <div class="buttons">
                        	<?php if(!in_array($most_liked->products_id,$result['cartArray'])): ?>
                                <button  class="btn btn-block btn-secondary cart" products_id="<?php echo e($most_liked->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button> 
                            <?php else: ?>
                                <button  class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                            <?php endif; ?>
                        </div>
                     </div>
                              
					</article>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="product last-product">
                      <article>
                      	<a href="<?php echo e(URL::to('/shop?type=mostliked')); ?>" class="buttons">
                        	<span class="fa fa-angle-right"></span>
                        	<span class="btn btn-secondary"><?php echo app('translator')->getFromJson('website.View All'); ?></span>
                        </a>
                      </article>
                    </div>
                <?php endif; ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="group-banners">
    	<div class="row">
        	<div class="col-12 col-sm-4">
            	<div class="banner-image">
                	<a title="Banner Image" href="#"><img class="img-fluid" src="<?php echo e(asset('').'public/images/banner_1.jpg'); ?>" alt="Banner Image"></a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
            	<div class="banner-image">
                	<a title="Banner Image" href="#"><img class="img-fluid" src="<?php echo e(asset('').'public/images/banner_2.jpg'); ?>" alt="Banner Image"></a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
            	<div class="banner-image">
                	<a title="Banner Image" href="#"><img class="img-fluid" src="<?php echo e(asset('').'public/images/banner_3.jpg'); ?>" alt="Banner Image"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./end of dynamic content --> 
  </div>
</section>

<section class="products-content"> <?php echo $__env->make('common.products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </section>

<section class="brands-content">
	<div class="container-fuild">
        <div class="container">
            <div class="brands-area"> 
            	<div class="row">
                	<div class="col-12 brands-inner">
                    	<ul id="owl_brands" class="owl-carousel owl-brands">
                            <li><img src="<?php echo e(asset('').'public/images/brand_1.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_2.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_3.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_4.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_5.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_6.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_4.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_1.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_2.jpg'); ?>"></li>
                            <li><img src="<?php echo e(asset('').'public/images/brand_3.jpg'); ?>"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-content">
<div class="container">
    <div class="blog-area">
        <!-- heading -->
        <div class="heading">
            <h2><?php echo app('translator')->getFromJson('website.From our News'); ?> <small class="pull-right"><a href="<?php echo e(URL::to('/news')); ?>"><?php echo app('translator')->getFromJson('website.View All'); ?></a></small></h2>
            <hr>
        </div>
    
		<div class="row">
            <div class="blogs blogs-3x">
            	<!-- Blog Post -->
				<?php if($result['news']['success']==1): ?>
					<?php $__currentLoopData = $result['news']['news_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-post">
                            <article>
                                <div class="blog-thumb">
                                			<?php if($news_data->is_feature==1): ?>
                                           		<span class="badge badge-secondary"><?php echo app('translator')->getFromJson('website.Featured'); ?></span>
                                            <?php endif; ?>
                                    <span class="blog-date">
                                        <strong>
                                            <?php
                                                $timestamp = strtotime($news_data->news_date_added);
                                                echo date('d',$timestamp);
                                            ?>
                                        </strong>
                                        <?php
                                            
                                            echo date('M',$timestamp);
                                        ?>
                                    </span>
                                    
                                    <div class="blog-overlay">
                                        <a href="<?php echo e(URL::to('/newsDetail/'.$news_data->news_id)); ?>" class="fa fa-search-plus"></a>
                                    </div>
                                    
                                    <img class="img-fluid" src="<?php echo e(asset('').$news_data->news_image); ?>" alt="">
                                </div>
								<div class="blog-block">
                                	<a href="<?php echo e(URL::to('/newsDetail/'.$news_data->news_id)); ?>" class="blog-title"><?php echo e($news_data->news_name); ?> </a>
                                
									<?php /*?><div class="blog-text">
                                        <?=stripslashes($news_data->news_description)?>
                                    </div>
                                    
                                    <a href="{{ URL::to('/newsDetail/'.$news_data->news_id)}}">@lang('website.Readmore')</a><?php */?>
                                </div>
                            </article>
                        </div>
                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	<?php endif; ?>
			</div>
		</div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>