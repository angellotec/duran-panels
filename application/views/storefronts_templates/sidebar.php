<div class="navbar-default sidebar" role="navigation">
	<div class="logo">
		<img src="<?php echo base_url(); ?>public/images/logo.png"/>
	</div>
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a <?php if($file == 'storefronts/index'){ ?> class="active"<?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/storefronts">Dashboard</a>
            </li>
               <li style="display: none;">
                <a <?php if($file == 'storefronts/storefront_list'){ ?> class="active"<?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/storefronts/storefront_list">Store Front</a>
            </li>
            <li>
                <a <?php if($file == 'ondemand/visibility'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/visibility">Visibility</a> 
            </li>

                <li >
                        <a <?php if($file == 'storefronts/sales_list'){ ?> class="active" <?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/storefronts/sales"> Contractors / Staff </a>
                </li>
              <li style="display: none;">
                <a <?php if($file == 'storefronts/categories'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/categories">Categories</a>
            </li>
            <li>
                <a <?php if($file == 'storefronts/products'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/products">Products</a>
            </li>
             <li>
                <a <?php if($file == 'storefronts/liveOrders'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/liveOrders">Live Orders</a>
            </li>
             <li>
                <a <?php if($file == 'storefronts/subcategories'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/subcategories">Sub Categories</a>
            </li>
             <li style="display: none;">
                <a <?php if($file == 'storefronts/promo_list'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/promo_list">Promo Codes</a>
            </li>

            <li>
                <a <?php if($file == 'storefronts/support_tickets'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/support_tickets">Support Tickets</a>
            </li>
               <li>
                <a <?php if($file == 'storefronts/orders'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/storefronts/orders">Transaction Orders</a>
            </li>
               <li>
                <a <?php if($file == 'ondemand/history'){ ?> class="active"<?php } ?> href="<?php echo base_url();?>panels/supermacdaddy/Storefronts/history">History</a>
            </li>
           
            
            
        </ul>
    </div>
</div>
            <!-- /.navbar-static-side -->
 </nav>