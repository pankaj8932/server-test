<footer class="py-5 my-4 bg-light">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-md-4">

				<div class="single-footer">

					<a class="footer-logo mb-4" href="<?php echo e(URL::to('/')); ?>">

						<img src="<?php echo e(asset('').'resources/assets/images/site_logo/logo-blue-v1.png'); ?>">

					</a>

					<p>

							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nulla eros. Sed dui magna, faucibus et enim vel, auctor dapibus ante. Nullam in sem ultrices, efficitur arcu quis, fermentum mi.

					</p>

					<ul class="follow-list pl-0 mb-0">

						<li>

							<a href="<?php echo e($result['commonContent']['footer'][0]->facebook_url); ?>" class="fa fa-facebook bg-primary"></a>

						</li>

						<li>

							<a href="<?php echo e($result['commonContent']['footer'][0]->twitter_url); ?>" class="fa fa-twitter bg-info"></a>

						</li>

						<li>

							<a href="<?php echo e($result['commonContent']['footer'][0]->google_url); ?>" class="fa fa-google-plus bg-danger"></a>

						</li>

						<li>

							<a href="<?php echo e($result['commonContent']['footer'][0]->linked_in); ?>" class="fa fa-linkedin bg-secondary"></a>

						</li>

					</ul>

				</div>

			</div>



			<div class="col-xs-12 col-md-4">

				<div class="single-footer">

					<h5>HELPFUL LINKS</h5>

					<div class="row">

						<div class="col-xs-12 col-md-6">

							<ul class="links-list pl-0 mb-0">

								<li>

									<a href="<?php echo e(URL::to('/')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/shop')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a>

								</li>

								<li>

									<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Discount</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/aboutUs')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About Us</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/contactUs')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Contact Us</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/termsContition')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Terms & Condtions</a>

								</li>

							</ul>

						</div>

						<div class="col-xs-12 col-md-6">

							<ul class="links-list pl-0 mb-0">
								<?php if(Auth::check()): ?>
								<li>

									<a href="<?php echo e(URL::to('/myOrder')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Orders</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/wishList')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Wishlist</a>

								</li>

								<li>

									<a href="<?php echo e(URL::to('/myCart')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shopping Cart</a>

								</li>
								<?php endif; ?>

								<li>

									<a href="<?php echo e(URL::to('/privacyPolicy')); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy Policy</a>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>



			<div class="col-xs-12 col-md-4">

				<div class="single-footer">

					<h5>CONTACT US</h5>

					<ul class="contact-list  pl-0 mb-0">
						
						<li>

							<i class="fa fa-map-marker"></i>

							<strong><?php echo e($result['commonContent']['footer'][0]->company_name); ?>:</strong>

							<span><?php echo e($result['commonContent']['footer'][0]->address); ?> <?php echo e($result['commonContent']['footer'][0]->city); ?> <?php echo e($result['commonContent']['footer'][0]->state); ?>, <?php echo e($result['commonContent']['footer'][0]->zip); ?> <?php echo e($result['commonContent']['footer'][0]->country); ?></span>

						</li>

						<li>

							<i class="fa fa-phone"></i>

							<strong>Phone:</strong>

							<span><?php echo e($result['commonContent']['footer'][0]->phone_no); ?></span>

						</li>

						<li>

							<i class="fa fa-envelope"></i>

							<strong>Email:</strong>

							<span>

								<a href="mailto:sales@brandbychoice.com"><?php echo e($result['commonContent']['footer'][0]->contact_us_email); ?></a>

							</span>

						</li>

<!--
						<li>

							<i class="fa fa-clock-o"></i>

							<strong>Working Days/Hours:</strong>

							<span>Monday - Saturday / 10:00 AM - 6:00 PM</span>

						</li>
-->

					</ul>

				</div>

			</div>

		</div>

	</div>

</footer>



<div class="footer py-2 my-2">

	<div class="container">

		<div class="footer-info col-xs-12 text-center">

			<img src="<?php echo e(asset('').'resources/assets/images/site_images/payments.png'); ?>">

			<p> © 2017 Company, Inc. ·

				<a href="#">Privacy</a> ·

				<a href="#">Terms</a>

			</p>

			<div class="floating-top">

					<a href="#" class="fa fa-angle-up"></a>

			</div>

		</div>

	</div>

</div>