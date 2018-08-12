<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('').auth()->guard('admin')->user()->image); ?>" class="img-circle" alt="<?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?> Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(auth()->guard('admin')->user()->first_name); ?> <?php echo e(auth()->guard('admin')->user()->last_name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('labels.online')); ?></a>
        </div>
      </div>
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><?php echo e(trans('labels.navigation')); ?></li>
        <li class="treeview <?php echo e(Request::is('admin/dashboard/this_month') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>">
            <i class="fa fa-dashboard"></i> <span><?php echo e(trans('labels.header_dashboard')); ?></span>
          </a>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/languages') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addlanguages') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editlanguages/*') ? 'active' : ''); ?> ">
          <a href="<?php echo e(URL::to('admin/languages')); ?>">
            <i class="fa fa-language" aria-hidden="true"></i> <span> <?php echo e(trans('labels.languages')); ?> </span>
          </a>
        </li>
        
        
        <li class="treeview <?php echo e(Request::is('admin/manufacturers') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addmanufacturer') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editmanufacturer/*') ? 'active' : ''); ?> ">
          <a href="<?php echo e(URL::to('admin/manufacturers')); ?>">
            <i class="fa fa-industry" aria-hidden="true"></i> <span><?php echo e(trans('labels.link_manufacturer')); ?></span>
          </a>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/categories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addcategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editCategory/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/subcategories') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubcategory') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubcategory/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-bars" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_categories')); ?> </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="<?php echo e(Request::is('admin/categories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addcategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editcategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/categories')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_main_categories')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/subcategories') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addsubcategory') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editsubcategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/subcategories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(trans('labels.link_sub_categories')); ?></a></li>
          </ul>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/products') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addproduct') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editattributes/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/attributes') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addattributes') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editattributes/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database"></i> <span><?php echo e(trans('labels.link_products')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/products') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addproduct') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editproduct/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/products')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_all_products')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/attributes') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addattributes') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editattributes/*') ? 'active' : ''); ?>" ><a href="<?php echo e(URL::to('admin/attributes' )); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.products_attributes')); ?></a></li>
          </ul>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/listingNewsCategories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addNewsCategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editNewsCategory/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingNews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addSubNews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editSubNews/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-database" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_news')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	<li class="<?php echo e(Request::is('admin/listingNewsCategories') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addNewsCategory') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editNewsCategory/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingNewsCategories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(trans('labels.link_news_categories')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/listingNews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addSubNews') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editSubNews/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingNews')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_sub_news')); ?></a></li>
          </ul>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/listingCustomers') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addCustomers') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editCustomers/*') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/listingCustomers')); ?>">
            <i class="fa fa-users" aria-hidden="true"></i> <span><?php echo e(trans('labels.link_customers')); ?></span>
          </a>
        </li>
        
        
        <li class="treeview <?php echo e(Request::is('admin/listingCountries') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addCountry') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editCountry/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingZones') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addZone') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editZone/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingTaxClass') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addTaxClass') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editTaxClass/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingTaxRates') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addTaxRate') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editTaxRate/*') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-money" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_tax_location')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/listingCountries') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addCountry') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editCountry/*') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/listingCountries')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_countries')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/listingTaxClass') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addTaxClass') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editTaxClass/*') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/listingTaxClass')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_tax_classes')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/listingTaxRates') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addTaxRate') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editTaxRate/*') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/listingTaxRates')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_tax_rates')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/listingZones') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addZone') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editZone/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingZones')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_zones')); ?></a></li>
          </ul>
        </li>
        <li class="treeview <?php echo e(Request::is('admin/listingCoupons') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editCoupons/*') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/listingCoupons')); ?>" ><i class="fa fa-tablet" aria-hidden="true"></i> <span><?php echo e(trans('labels.link_coupons')); ?></span></a>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/listingDevices') ? 'active' : ''); ?> <?php echo e(Request::is('admin/viewDevices/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/notifications') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/listingDevices')); ?> ">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_notifications')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/listingDevices') ? 'active' : ''); ?> <?php echo e(Request::is('admin/viewDevices/*') ? 'active' : ''); ?>">
          		<a href="<?php echo e(URL::to('admin/listingDevices')); ?>"><i class="fa fa-circle-o"></i><?php echo e(trans('labels.link_devices')); ?> </a>
            </li>  
            <li class="<?php echo e(Request::is('admin/notifications') ? 'active' : ''); ?> ">
            	<a href="<?php echo e(URL::to('admin/notifications')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_send_notifications')); ?></a>
            </li>      
          </ul>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/listingOrders') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addOrders') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/viewOrder/*') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/listingOrders')); ?>" ><i class="fa fa-list-ul" aria-hidden="true"></i> <span> <?php echo e(trans('labels.link_orders')); ?></span>
          </a>
        </li>
        <li class="treeview <?php echo e(Request::is('admin/shippingMethods') ? 'active' : ''); ?> <?php echo e(Request::is('admin/upsShipping') ? 'active' : ''); ?> <?php echo e(Request::is('admin/flateRate') ? 'active' : ''); ?>">
          <a href="<?php echo e(URL::to('admin/shippingMethods')); ?>"><i class="fa fa-truck" aria-hidden="true"></i> <span> <?php echo e(trans('labels.link_shipping_methods')); ?></span>
          </a>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/paymentSetting') ? 'active' : ''); ?>">
          <a  href="<?php echo e(URL::to('admin/paymentSetting')); ?>"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>
          <?php echo e(trans('labels.link_payment_methods')); ?></span>
          </a>
        </li>
        
        <li class="treeview <?php echo e(Request::is('admin/statsCustomers') ? 'active' : ''); ?> <?php echo e(Request::is('admin/productsStock') ? 'active' : ''); ?> <?php echo e(Request::is('admin/statsProductsPurchased') ? 'active' : ''); ?> <?php echo e(Request::is('admin/statsProductsLiked') ? 'active' : ''); ?> ">
          <a href="#">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
<span><?php echo e(trans('labels.link_reports')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/productsStock') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/productsStock')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_products_stock')); ?></a></li>  
            <li class="<?php echo e(Request::is('admin/statsCustomers') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/statsCustomers')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_customer_orders_total')); ?></a></li>             
            <li class="<?php echo e(Request::is('admin/statsProductsPurchased') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/statsProductsPurchased')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_total_purchased')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/statsProductsLiked') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/statsProductsLiked')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_products_liked')); ?></a></li>
          </ul>
        </li>
        <?php if($web_setting[67]->value=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/listingSliders') ? 'active' : ''); ?> <?php echo e(Request::is('admin/AddSliderImage') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editSlide/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingWebPages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addWebPage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editWebPage/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/webSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/webThemes') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_site_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/listingSliders') ? 'active' : ''); ?> <?php echo e(Request::is('admin/AddSliderImage') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editSlide/*') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/listingSliders')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Sliders')); ?></a></li>
          
            <li class="<?php echo e(Request::is('admin/listingWebPages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addWebPage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editWebPage/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingWebPages')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.content_pages')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/webThemes') ? 'active' : ''); ?> "><a href="<?php echo e(URL::to('admin/webThemes')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.website_themes')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/webSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/webSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
          </ul>
        </li>
        <?php endif; ?>
        <?php if($web_setting[66]->value=='1'): ?>
        <li class="treeview <?php echo e(Request::is('admin/listingBanners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addBanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editBanner/*') ? 'active' : ''); ?> <?php echo e(Request::is('admin/listingPages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addPage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editPage/*') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/appSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/admobSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/manageAppLabel') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addAppKey') ? 'active' : ''); ?> <?php echo e(Request::is('admin/applicationApi') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_app_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/listingBanners') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addBanner') ? 'active' : ''); ?> <?php echo e(Request::is('admin/editBanner/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingBanners')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_Banners')); ?></a></li>
                       
            <li class="<?php echo e(Request::is('admin/listingPages') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/addPage') ? 'active' : ''); ?>  <?php echo e(Request::is('admin/editPage/*') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/listingPages')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.content_pages')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/admobSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/admobSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_admob')); ?></a></li>
            
            <li class="android-hide <?php echo e(Request::is('admin/manageAppLabel') ? 'active' : ''); ?> <?php echo e(Request::is('admin/addAppKey') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/manageAppLabel')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.labels')); ?></a></li>
                                  
            <li class="<?php echo e(Request::is('admin/applicationApi') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/applicationApi')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.applicationApi')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/appSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/appSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
            
          </ul>
        </li>
        <?php endif; ?>
        
        
        <li class="treeview <?php echo e(Request::is('admin/facebookSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/setting') ? 'active' : ''); ?> <?php echo e(Request::is('admin/googleSettings') ? 'active' : ''); ?> <?php echo e(Request::is('admin/pushNotification') ? 'active' : ''); ?>">
          <a href="#">
            <i class="fa fa-gears" aria-hidden="true"></i>
<span> <?php echo e(trans('labels.link_general_settings')); ?></span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          	
          	<li class="<?php echo e(Request::is('admin/facebookSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/facebookSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_facebook')); ?></a></li>
            
            <li class="<?php echo e(Request::is('admin/googleSettings') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/googleSettings')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_google')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/pushNotification') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/pushNotification')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_push_notification')); ?></a></li>
             <li class="<?php echo e(Request::is('admin/alertSetting') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/alertSetting')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.alertSetting')); ?></a></li>
            <li class="<?php echo e(Request::is('admin/setting') ? 'active' : ''); ?>"><a href="<?php echo e(URL::to('admin/setting')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(trans('labels.link_setting')); ?></a></li>
            
          </ul>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>