	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 social-icons">
				<ul>
                	<li>Follow Us</li>
                	<li class="icon"><a href="#" class="fa fa-facebook"></a></li>
                    <li class="icon"><a href="#" class="fa fa-twitter"></a></li>
                    <li class="icon"><a href="#" class="fa fa-skype"></a></li>
                    <li class="icon"><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
			</div>
			<div class="col-12 col-md-8">
            	<label><?php echo app('translator')->getFromJson('website.Subscribe for Newsletter'); ?></label>
				<form>
                	
					<input type="email" placeholder="Your email address here...">
					<button type="submit"><?php echo app('translator')->getFromJson('website.Subscribe'); ?></button>
				</form>
			</div>
		</div>
	</div>
