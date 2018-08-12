<!-- New line required  -->

<div class="new-product">

	<div class="like-bnr" style="background-image: url('public/images/slider-bnr.jpg');">

		<div class="position-center-center">

			<h5>New line required</h5>

			<h4>Smartphone s7</h4>

			<span class="price">$259.99</span>

		</div>

	</div>

</div>



<!-- Weekly Slaes  -->

<div class="week-sale-bnr" style="background-image: url('public/images/week-sale-bg.jpg');">

	<h4><?php echo app('translator')->getFromJson('website.Weekly'); ?> <span><?php echo app('translator')->getFromJson('website.Sale'); ?>!</span></h4>

	<p><?php echo app('translator')->getFromJson('website.banner saving text'); ?></p>

	<a href="<?php echo e(URL::to('/shop')); ?>" class="btn btn-round"><?php echo app('translator')->getFromJson('website.Shop now'); ?></a>

</div>





