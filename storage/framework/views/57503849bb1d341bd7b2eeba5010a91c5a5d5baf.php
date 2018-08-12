
<?php if($result['news']['success']==1): ?>
	<?php $__currentLoopData = $result['news']['news_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$news_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="blog-post">
            <article>
                 <a href="<?php echo e(URL::to('/newsDetail/'.$news_data->news_id)); ?>" class="tittle"><img class="img-fluid" src="<?php echo e(asset('').$news_data->news_image); ?>" alt=""></a>

                <span><i class="fa fa-bookmark-o"></i> 
                <?php
                    $timestamp = strtotime($news_data->news_date_added);
                    echo date('d M, Y',$timestamp);
                ?></span>
                <a href="<?php echo e(URL::to('/newsDetail/'.$news_data->news_id)); ?>" class="tittle"><?php echo e($news_data->news_name); ?> </a>
                <div class="text">
                    <?=stripslashes($news_data->news_description)?>
                </div>
                <a href="<?php echo e(URL::to('/newsDetail/'.$news_data->news_id)); ?>"><?php echo app('translator')->getFromJson('website.Readmore'); ?></a>
            </article>
        </div>
        
    </div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(count($result['news']['news_data'])> 0 and $result['limit'] > count($result['news']['news_data'])): ?>
 <style>
    #load_news{
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
<?php elseif(count($result['news']['news_data'])== 0 or $result['news']['success']==0 or count($result['news']['news_data']) < $result['limit']): ?>
<style>
    #load_news{
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
