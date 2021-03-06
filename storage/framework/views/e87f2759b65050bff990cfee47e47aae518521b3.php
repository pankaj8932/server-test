<div class="container-fuild bg-light">
  <div class="container">
    <div class="products-area"> 
		<!-- heading -->
      
        <div class="heading">
        <h2><?php echo app('translator')->getFromJson('website.Top Selling of the Week'); ?> <small class="pull-right"><a href="<?php echo e(URL::to('/shop?type=topseller')); ?>" ><?php echo app('translator')->getFromJson('website.View All'); ?></a></small></h2>
        <hr>
        </div>
      	<div class="row"> 
        	<div class="col-xs-12 col-sm-12">
            	<!-- Items -->
                <div class="row">
                  	<div class="products products-5x">
                  	<?php if($result['featured']['success']==1): ?>                
                    <?php $__currentLoopData = $result['featured']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key==0): ?>
                    
                    <div class="product product-2x">
                        <span class="product-featured-tag"><i class="fa fa-flag-o" aria-hidden="true"></i>&nbsp;<?php echo app('translator')->getFromJson('website.Featured'); ?></span>
                        <div class="buttons-liked">
                        	<div class="badge badge-primary">2</div>
                            <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                        </div>
                        
                        <article>
                            <div class="thumb"><img class="img-fluid" src="<?php echo e(asset('').$products->products_image); ?>" alt="<?php echo e($products->products_name); ?>"></div>
                            <span class="tag"><?=stripslashes($products->categories_name)?></span>
                            <h2 class="title"><?php echo e($products->products_name); ?></h2>
                            <div class="price">
                                <?php if(!empty($products->discount_price)): ?>
                              
                                    <?php echo e($web_setting[19]->value); ?><?php echo e($products->discount_price+0); ?> <span><?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?></span>
                                <?php else: ?>
                                    
                                    <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?>

                                
                                <?php endif; ?>
                            </div>
                            <div class="block"> 
                                <?php if(count($products->attributes)>0): ?> 
                                
                                    <?php $__currentLoopData = $products->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$attributes_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if($key==1): ?>
                                    
                                    <?php endif; ?> 
                                    
                                    <span class="option-name"><?php echo e($attributes_data['option']['name']); ?></span>
                                    
                                    <?php $__currentLoopData = $attributes_data['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$values_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <span class="option-value"><?php echo e($values_data['value']); ?></span>
                                    
                                    <?php if($key+1!=count($attributes_data['values'])): ?>
                                    
                                    <span class="option-value">|</span>
                                    
                                    <?php endif; ?>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php endif; ?>
                            
                            </div>
                            
                            <div class="buttons">
                            	<a href="#" class="btn btn-secondary"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></a>
                            	<a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="btn btn-dark"><?php echo app('translator')->getFromJson('website.View Detail'); ?></a>
                            </div>
                        </article>
                    </div>
       
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?> 
                    
                    <!-- Product sold -->
                    <?php if($result['weeklySoldProducts']['success']==1): ?>                
                    <?php $__currentLoopData = $result['weeklySoldProducts']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                
                        <?php if($key<=7): ?>
                            <div class="product">
                              <article>
                                <div class="thumb"> <img class="img-fluid" src="<?php echo e(asset('').$products->products_image); ?>" alt="<?php echo e($products->products_name); ?>"> </div>
                                    <?php
            
                                        $current_date = date("Y-m-d", strtotime("now"));
            
                                        $string = substr($products->products_date_added, 0, strpos($products->products_date_added, ' '));
            
                                        $date=date_create($string);
            
                                        date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
            
                                        
            
                                        $after_date = date_format($date,"Y-m-d");
            
                                        if($after_date>=$current_date){
            
                                            print '<span class="new-tag">';
            
                                            print __('website.New');
            
                                            print '</span>';
            
                                        }
            
                                        
            
                                        if(!empty($products->discount_price)){
            
                                            $discount_price = $products->discount_price;	
            
                                            $orignal_price = $products->products_price;	
            
                                            
            
                                            $discounted_price = $orignal_price-$discount_price;
            
                                            $discount_percentage = $discounted_price/$orignal_price*100;
            
                                            echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
            
                                        }
            
                                                             
                                    ?>
                                    <span class="tag text-center">
                                        <?=stripslashes($products->categories_name)?>
                                    </span>
                                    
                                    <h2 class="title text-center"><?php echo e($products->products_name); ?></h2>
                                
                                <!--<div class="like"> <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span> <span><?php echo e($products->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span> </div>-->
                                
                                    <div class="price text-center"> <?php if(!empty($products->discount_price)): ?>
                                  
                                        <?php echo e($web_setting[19]->value); ?><?php echo e($products->discount_price+0); ?> <span><?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?></span> <?php else: ?>
                                        
                                        <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?>

                                        
                                        <?php endif; ?>
                                    </div>
                                  
                                    <!--<?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                                        <button  class="btn btn-cart cart" products_id="<?php echo e($products->products_id); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                    <?php else: ?>
                                        <button  class="btn btn-cart acitve"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                    <?php endif; ?>-->
                                    
                                    <div class="product-hover">
                                        <div class="icons">
                                            <div class="icon-liked">
                                                <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                                            </div>
                                            
                                            <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>"  class="fa fa-eye"></a>
                                        </div>
                                        
                                       	<div class="buttons">
                                        	 <?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                                        
                                                <button  class="btn btn-block btn-secondary cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                                
                                            <?php else: ?>
                                                <button  class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <!--<button class="btn btn-block btn-secondary <?php if(!in_array($top_seller->products_id,$result['cartArray'])): ?> cart <?php else: ?> active <?php endif; ?>" products_id="<?php echo e($top_seller->products_id); ?>">ADD TO CART</button>-->
                                     </div>
                                </article>
                            </div>
                        <?php endif; ?> 
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php endif; ?>
                    </div>
                </div>
            </div>
      	</div>
    </div>
    
    <div class="group-banners">
    	<div class="row">
        	<div class="col-xs-12 col-md-12">
            	<div class="banner-image">
                    <a title="Banner Image" href="#"><img class="img-fluid" src="http://magento2.flytheme.net/themes/sm_shiny/pub/media/wysiwyg/banner/banner-5.jpg" alt="Banner Image"></a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="container-fuild bg-white">
  <div class="container">
    <div class="products-area"> 
        <!-- heading -->
        <div class="heading">
        	<h2><?php echo app('translator')->getFromJson('website.Special products of the Week'); ?> <small class="pull-right"><a href="<?php echo e(URL::to('/shop?type=special')); ?>" ><?php echo app('translator')->getFromJson('website.View All'); ?></a></small></h2>
        	<hr>
        </div>
        <div class="row">         
            
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                	<!-- Items -->
                    <div class="products products-5x">
                        <!-- Product --> 
                        
                        <?php if($result['special']['success']==1): ?>
                        <?php $__currentLoopData = $result['special']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$special): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key<=9): ?>
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
                            <!--<p class="like">
                                <span href="#" products_id = '<?php echo e($special->products_id); ?>' class="fa <?php if($special->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span> <span><?php echo e($special->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span>
                            </p>-->
                            
                            <div class="price text-center">
                            <?php echo e($web_setting[19]->value); ?><?php echo e($special->products_price+0); ?><span><?php echo e($web_setting[19]->value); ?><?php echo e($special->discount_price+0); ?></span></div>
                            
                            <!--<?php if(!in_array($special->products_id,$result['cartArray'])): ?>
                                <button  class="btn btn-cart cart" products_id="<?php echo e($special->products_id); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <?php else: ?>
                                <button  class="btn btn-cart acitve"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <?php endif; ?>-->
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
                                
                                <!--<button class="btn btn-block btn-secondary <?php if(!in_array($top_seller->products_id,$result['cartArray'])): ?> cart <?php else: ?> active <?php endif; ?>" products_id="<?php echo e($top_seller->products_id); ?>">ADD TO CART</button>-->
                             </div>
                          </article>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="group-banners">
    	<div class="row">
        	<div class="col-xs-12 col-sm-12">
            	<div class="banner-image">
                    <a title="Banner Image" href="#"><img class="img-fluid" src="<?php echo e(asset('').'public/images/large_banner.jpg'); ?>" alt="Banner Image"></a>
                </div>
            </div>
        </div>
    </div>
    
  </div>
</div>

<div class="container-fuild bg-white">
  <div class="container">
    <div class="products-area"> 
      <!-- heading -->
      <div class="heading">
        <h2><?php echo app('translator')->getFromJson('website.Categories'); ?> <small class="pull-right"><!--<a href="shop" ><?php echo app('translator')->getFromJson('website.View All'); ?></a>--></small></h2>
        <hr>
      </div>
        <div class="row"> 
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Items -->
                    <div class="products products-5x">
                        <!-- categories --> 
                        <?php $counter = 0;?>
                        <?php $__currentLoopData = $result['commonContent']['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($categories_data->sub_categories)>0): ?>
                                <?php $__currentLoopData = $categories_data->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sub_categories_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($counter<=9): ?>
                                    <div class="product">
                                        <div class="blog-post">
                                            <article>
                                                <a href="<?php echo e(URL::to('/shop?category_id='.$sub_categories_data->sub_id)); ?>" class="blog-block">
                                                    <img class="img-fluid" src="<?php echo e(asset('').$sub_categories_data->sub_image); ?>" alt="<?php echo e($sub_categories_data->sub_name); ?>">             
                                                    <span class="cat-title text-center"><?php echo e($sub_categories_data->sub_name); ?></span>
                                                </a>
                                            </article>
                                        </div>
                                    </div>
                                    <?php endif; ?>	
                                    <?php $counter++;?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>	
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="container-fuild bg-white">
  <div class="container">
    <div class="products-area"> 
      <!-- heading -->
      <div class="heading">
        <h2><?php echo app('translator')->getFromJson('website.Newest Products'); ?> <small class="pull-right"><a href="<?php echo e(URL::to('/shop')); ?>" ><?php echo app('translator')->getFromJson('website.View All'); ?></a></small></h2>
        <hr>
      </div>
        <div class="row"> 
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <!-- Items -->
                    <div class="products products-5x">
                        <!-- Product --> 
                        <?php if($result['products']['success']==1): ?>              
                        <?php $__currentLoopData = $result['products']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product">
                          <article>
                            <div class="thumb"> <img class="img-fluid" src="<?php echo e(asset('').$products->products_image); ?>" alt="<?php echo e($products->products_name); ?>"> </div>
                            <?php
        
                                    $current_date = date("Y-m-d", strtotime("now"));
        
                                    
        
                                    $string = substr($products->products_date_added, 0, strpos($products->products_date_added, ' '));
        
                                    $date=date_create($string);
        
                                    date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
                                    $after_date = date_format($date,"Y-m-d");
        
                                    
        
                                    if($after_date>=$current_date){
        
                                        print '<span class="new-tag">';
        
                                        print __('website.New');
        
                                        print '</span>';
        
                                    }
        
                                    
        
                                    if(!empty($products->discount_price)){
        
                                        $discount_price = $products->discount_price;	
        
                                        $orignal_price = $products->products_price;	
        
                                        
        
                                        $discounted_price = $orignal_price-$discount_price;
        
                                        $discount_percentage = $discounted_price/$orignal_price*100;
        
                                        echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
        
                                    }
        
                                     
        
                            ?>
                            <span class="tag text-center">
                            <?=stripslashes($products->categories_name)?>
                            </span>
                            <h2 class="title text-center"><?php echo e($products->products_name); ?></h2>
                            <!--<div class="like"> <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span> <span><?php echo e($products->products_liked); ?> <?php echo app('translator')->getFromJson('website.Likes'); ?></span> </div>-->
                            <div class="price text-center"> <?php if(!empty($products->discount_price)): ?>
                              
                              <?php echo e($web_setting[19]->value); ?><?php echo e($products->discount_price+0); ?> <span> <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?></span> <?php else: ?>
                              
                              <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?>

                              
                              <?php endif; ?>
                              </div>
                            <!--<?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                            <button  class="btn btn-cart cart" products_id="<?php echo e($products->products_id); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <?php else: ?>
                            <button  class="btn btn-cart acitve"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                            <?php endif; ?> -->
                            <div class="product-hover">
                                <div class="icons">
                                    <div class="icon-liked">
                                        <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                                    </div>
                                    
                                    <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="fa fa-eye"></a>
                                </div>
                                
                                <div class="buttons">
                                	<?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                                
                                        <button  class="btn btn-block btn-secondary cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                        
                                    <?php else: ?>
                                        <button  class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                                    <?php endif; ?>
                                </div>
                                
                                <!--<button class="btn btn-block btn-secondary <?php if(!in_array($top_seller->products_id,$result['cartArray'])): ?> cart <?php else: ?> active <?php endif; ?>" products_id="<?php echo e($top_seller->products_id); ?>">ADD TO CART</button>-->
                             </div>
                            </article>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
  </div>
</div>


