<?php $__env->startSection('content'); ?>
<section class="site-content">
	<div class="container">
  		<div class="breadcum-area">
            <div class="breadcum-inner">
                <h3><?php echo app('translator')->getFromJson('website.Wishlist'); ?></h3>
                <ol class="breadcrumb">                    
                    <li class="breadcrumb-item"><a href="<?php echo e(URL::to('/')); ?>"><?php echo app('translator')->getFromJson('website.Home'); ?></a></li>
            		<li class="breadcrumb-item active"><?php echo app('translator')->getFromJson('website.Wishlist'); ?></li>
                </ol>
            </div>
        </div>
    	<div class="shop-area">
        	<div class="heading">
                <h2><?php echo app('translator')->getFromJson('website.All Products'); ?></h2>
                <hr>
            </div>
        	<div class="row">
                <form method="get" enctype="multipart/form-data" id="load_wishlist_form" style="width:100%;">
                    <input type="hidden"  name="search" value="<?php echo e(app('request')->input('search')); ?>">
                    <input type="hidden"  name="category_id" value="<?php echo e(app('request')->input('category_id')); ?>">
                    <input type="hidden"  name="load_wishlist" value="1">
                    <input type="hidden"  name="type" value="wishlist">
                
                    <div class="col-12">
                        <div class="toolbar mb-3">
                            <div class="form-inline">
                                <div class="form-group  col-6">
                                    <label for="staticEmail" class="col-sm-12 col-md-3 col-lg-2 col-form-label"><strong><?php echo app('translator')->getFromJson('website.Display'); ?></strong></label>
                                    <div class="col-sm-12 col-md-9 col-lg-4 btn-group">
                                        <a href="#" id="grid_wishlist" class="btn btn-default active"> <i class="fa fa-th-large" aria-hidden="true"></i></a>
                                        <a href="#" id="list_wishlist" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group col-6 last">
                                    <label for="staticEmail" class="col-sm-12 col-md-3 col-lg-2 col-form-label"><strong><?php echo app('translator')->getFromJson('website.Limit'); ?></strong></label>
                                    <select class="col-sm-12 col-md-4 col-lg-4 form-control sortbywishlist" name="limit">
                                        <option value="15" <?php if(app('request')->input('limit')=='15'): ?> selected <?php endif; ?>">15</option>
                                        <option value="30" <?php if(app('request')->input('limit')=='30'): ?> selected <?php endif; ?>>30</option>
                                        <option value="45" <?php if(app('request')->input('limit')=='45'): ?> selected <?php endif; ?>>45</option>
                                    </select>
                                    <label class="col-sm-12 col-md-3 col-lg-3 col-form-label"><?php echo app('translator')->getFromJson('website.per page'); ?></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="products products-5x" id="listing-wishlist">
                            <?php if($result['products']['success']==1): ?>
                            <?php $__currentLoopData = $result['products']['product_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product">
                                
                                    <article>
                                        <div class="thumb"><img class="img-fluid" src="<?php echo e(asset('').$products->products_image); ?>" alt="<?php echo e($products->products_name); ?>"></div>
                                    <?php
                                        $current_date = date("Y-m-d", strtotime("now"));
                                        
                                        $string = substr($products->products_date_added, 0, strpos($products->products_date_added, ' '));
                                        $date=date_create($string);
                                        date_add($date,date_interval_create_from_date_string($web_setting[20]->value." days"));
                                        
                                        
                                        $after_date = date_format($date,"Y-m-d");
                                        
                                        if($after_date>=$current_date){
                                            print '<span class="new-tag">New</span>';
                                        }
                                        
                                        if(!empty($products->discount_price)){
                                            $discount_price = $products->discount_price;	
                                            $orignal_price = $products->products_price;	
                                            
                                            $discounted_price = $orignal_price-$discount_price;
                                            $discount_percentage = $discounted_price/$orignal_price*100;
                                            echo "<span class='discount-tag'>".(int)$discount_percentage."%</span>";
                                        }
                                    ?>
                                    
                                    <div class="block-panel">
                                    	<span class="tag">
											<?=stripslashes($products->categories_name)?>
                                        </span>
                                        <h2 class="title"><?php echo e($products->products_name); ?></h2> 
                                                                             
                                        <div class="description">
                                            <?=stripslashes($products->products_description)?>
                                            <p class="read-more"></p>
                                        </div> 
                                                                             
                                        <div class="block-inner">
                                        	<div class="price">
                                                <?php if(!empty($products->discount_price)): ?>
                                                    <?php echo e($web_setting[19]->value); ?><?php echo e($products->discount_price+0); ?>

                                                    <span> <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?></span>
                                                <?php else: ?>
                                                    <?php echo e($web_setting[19]->value); ?><?php echo e($products->products_price+0); ?>

                                                <?php endif; ?>
                                            </div>
                                            
                                            <div class="buttons">
                                                <?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                                                    <button type="button" class="btn btn-secondary btn-round cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                                <?php else: ?>
                                                    <button type="button"  class="btn btn-secondary btn-round acitve"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-hover">
                                        <div class="icons">
                                            <div class="icon-liked">
                                                <i class="fa fa-times wishlist_liked" aria-hidden="true" products_id = '<?php echo e($products->products_id); ?>' ></i>
                                            </div>                                            
                                            <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="fa fa-eye"></a>
                                        </div>
                                        
                                        
                                        <div class="buttons">                                      	
                                            
                                        	<?php if(!in_array($products->products_id,$result['cartArray'])): ?>                                        
                                                <button type="button" class="btn btn-block btn-secondary cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>                                            
                                            <?php else: ?>
                                                <button type="button" class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                    <!--<?php if(!in_array($products->products_id,$result['cartArray'])): ?>
                                        <button type="button" class="btn btn-cart cart" products_id="<?php echo e($products->products_id); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                    <?php else: ?>
                                        <button type="button"  class="btn btn-cart acitve"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                    <?php endif; ?>-->
                                    
                                    </article>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="load-more-area">
                            <input type="hidden" value="1" name="page_number" id="page_number">
                            <?php
								if(!empty(app('request')->input('limit'))){
									$record = app('request')->input('limit');
								}else{
									$record = '16';
								}
                            ?>
                            <button class="btn btn-dark" type="button" id="load_wishlist" <?php if(count($result['products']['product_data']) < $record ): ?> style="display:none" <?php endif; ?> ><?php echo app('translator')->getFromJson('website.Load More'); ?></button>
                            
                            <p id="loaded_content" <?php if( $result['products']['success']==1 and count($result['products']['product_data']) < $record): ?> style="display:none" <?php else: ?> style="display:none;" <?php endif; ?> ><?php echo app('translator')->getFromJson('website.All products are loaded'); ?></p>
                             	
                            <p id="loaded_content_empty" <?php if($result['products']['success']==0): ?> style="display:block" <?php else: ?> style="display:none;" <?php endif; ?> ><?php echo app('translator')->getFromJson('website.No record found'); ?></p>
                                
                        </div>
                    </div>
                </form>
            </div>
        </div>
	</div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>