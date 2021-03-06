
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
                                    <button type="button" class="btn btn-secondary cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>
                                <?php else: ?>
                                    <button type="button"  class="btn btn-secondary acitve"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-hover">
                        <div class="icons">
                            <div class="icon-liked">
                                <span products_id = '<?php echo e($products->products_id); ?>' class="fa <?php if($products->isLiked==1): ?> fa-heart <?php else: ?> fa-heart-o <?php endif; ?> is_liked"></span>
                            </div>                                            
                            <a href="<?php echo e(URL::to('/productDetail/'.$products->products_id)); ?>" class="fa fa-eye"></a>
                        </div>
                        
                        <div class="buttons">
                        	<p class="text-center"><a href="#" class="text-dark"><?php echo app('translator')->getFromJson('website.RemoveFromWishlist'); ?></a></p>
                            
                        	<?php if(!in_array($products->products_id,$result['cartArray'])): ?>                                        
                                <button type="button" class="btn btn-block btn-secondary cart" products_id="<?php echo e($products->products_id); ?>"><?php echo app('translator')->getFromJson('website.Add to Cart'); ?></button>                                            
                            <?php else: ?>
                                <button type="button" class="btn btn-block btn-secondary active"><?php echo app('translator')->getFromJson('website.Added'); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
              </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($result['products']['product_data'])> 0 and $result['limit'] > $result['products']['total_record']): ?>
                 <style>
                    #load_wishlist{
                        display: none;
                    }
                    #loaded_content{
                        display: block !important;
                    }
                    #loaded_content_empty{
                        display: none !important;
                    }
                 </style>
                <?php endif; ?>
            <?php elseif(count($result['products']['product_data'])==0 or $result['products']['success']==0): ?>
            	<style>
             	#load_wishlist{
					display: none;
				}
				#loaded_content{
					display: none !important;
				}
				#loaded_content_empty{
					display: block !important;
				}
             </style>
            <?php endif; ?>
