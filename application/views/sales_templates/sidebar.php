   <div class="navbar-default sidebar" role="navigation">
               <div class="logo">
                  <a href="#"><img src="<?php echo base_url(); ?>public/images/logo.png"/></a>
               </div>
               <div class="sidebar-nav navbar-collapse collapse">
                  <ul class="nav" id="side-menu">
                  <li class="header"></li>
					<li   >
					  <a  <?php if($file == 'sales/index'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/">
					   Dashboard
					  </a>
					</li>
					<!--<li>
					  <a <?php if($file == 'sales/general-sales'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/general_sales">
						General Sales
					  </a>
					</li>
					 <li >
                        <a <?php if($file == 'sales/promo_list'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/promo_list">Promo Codes </a>
                     </li> -->
					<!-- <li>
					  <a <?php if($file == 'sales/sales_task_list'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/sales_task_list">
						Task List
					  </a>
					</li> 
						<li>
					  <a <?php if($file == 'sales/notifications'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/notifications">
						Task List
					  </a>
					</li>-->

					<li >
					  <a <?php if($file == 'sales/advertisement-sales'){ echo "class='active'";} ?>  href="<?php echo base_url(); ?>panels/supermacdaddy/sales/advertisement_sales">
						Advertisement Sales
					  </a>
					</li>
					<li >
					  <a <?php if($file == 'sales/attachment-zip'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/attachment_zip">
						Attachments/Zip
					  </a>
					</li>
					<li>
						<a <?php if($file == 'sales/ticket-management'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/ticket_managment">
							Ticket Management
						</a>
					</li>
					<li>
						<a <?php if($file == 'sales/setting'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/sales/setting">
							Sales Staff info
						</a>
					</li>
                  </ul>
               </div>
            </div>
         </nav> 
		
<style type="text/css">
  .ad{
    min-height: 1px !important;
  }
</style>