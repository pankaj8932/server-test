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
