            <div class="navbar-default sidebar" role="navigation">
				<div class="logo">
					<img src="<?php echo base_url(); ?>public/images/logo.png"/>
				</div>
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li >
                            <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard" <?php if($file == 'admin/index'){ ?> class="active" <?php } ?>>Dashboard <?php if($file == 'admin/index'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                        </li>
						<li>
                            <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/users"  <?php if($file == 'admin/users'){ ?> class="active" <?php } ?>> Authorized Users <?php if($file == 'admin/users'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                        </li>

                        <li <?php if($file == 'dashboard/attachment-zip'){ echo "class='active'";} ?>>
                          <a  href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/attachment_zip">
                            Attachments / Zip
                          </a>
                        </li>
                         <li <?php if($file == 'dashboard/distributionZone'){ echo "class='active'";} ?>>
                          <a  href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/distributionZone">
                           Distribution Zone
                          </a>
                        </li>
                        <li>
                          <a <?php if($file == 'dashboard/general-sales'){ echo "class='active'";} ?> href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/general_sales">
                            General Sales
                          </a>
                        </li>
                        <li <?php if($title == 'admin/sales_list'){ ?> class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/sales"> Contractors / Staff <?php if($title == 'admin/sales_list'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                        </li>
						<!--<li>
                            <a href="<?php //echo base_url(); ?>dashboard/task_list">Task List</a>
                        </li>  -->
<!--						<li <?php if($title == 'admin/promo_list'){ ?> class="active" <?php } ?>>
                            <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/promo_list">Promo Codes</a>
                        </li>-->
						<li <?php if($title == 'admin/ratings'){ ?> class="active" <?php } ?> style="display: none;">
                            <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/ratings">Ratings</a>
                        </li>
                        <li <?php if($title == 'admin/categories'){ ?> class="active" <?php } ?>>
                        	<a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/categories">Categories</a>
                        </li>
                        <li <?php if($title == 'admin/sub_categories'){ ?> class="active" <?php } ?>>
                        	<a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/subcategories">Sub Categories</a>
                        </li>
                       

                        <li>
                            <a href="#"> Our Services<i class="fa fa-angle-right pull-right" aria-hidden="true"></i></span></a>
                            <ul class="nav nav-second-level">
                                <li <?php if($title == 'admin/standard_services'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/standard_services">Standard Services</a>
                                </li>
                                <li <?php if($title == 'admin/premium_services'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/premium_services">Premium Services</a>
                                </li>
                                <li <?php if($title == 'admin/on_demand_services'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/on_demand_services">Affiliate Partners</a>
                                </li>
                                <!--<li>
                                    <a href="<?php echo base_url(); ?>dashboard/on_demand_services">On-Demands Services</a>
                                </li>-->
                            </ul>
                            <!-- /.nav-second-level -->


                         </li>



                            <li>
                            <a href="#">Side Features<i class="fa fa-angle-right pull-right" aria-hidden="true"></i></span></a>
                            <ul class="nav nav-second-level">
                               <li <?php if($title == 'admin/faq_ask_que'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/faq_ask_que">FAQ</a>
                                </li>
                                <li <?php if($title == 'admin/opt'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/opt">OPT OUT</a>
                                </li>

                                <li <?php if($title == 'admin/our_team'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/our_team">Our Team</a>
                                </li>
                                  <li <?php if($title == 'admin/background_image'){ ?> class="active" <?php } ?>>
                                    <a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/background_image">Background Images</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                       
                       
                        <li>
                            <a href="#">Terms and Conditions <i class="fa fa-angle-right pull-right" aria-hidden="true"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if($title == 'admin/web_to'){ ?> class="active" <?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/web_tos">Website <?php if($title == 'admin/web_to'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                                </li>
                                <li>
                                    <a <?php if($title == 'admin/app_tos'){ ?> class="active" <?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/app_tos">Mobile App <?php if($title == 'admin/app_tos'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                                </li>
								<li>	
                                    <a <?php if($title == 'admin/loyalty_tos'){ ?> class="active" <?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/loyalty_tos">Loyalty Program <?php if($title == 'admin/loyalty_tos'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                                </li>
								<li>
                                    <a <?php if($title == 'admin/on_demand_tos'){ ?> class="active" <?php } ?> href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/on_demand_tos">Affiliate Partners <?php if($title == 'admin/on_demand_tos'){ ?><i class="fa fa-angle-right pull-right" aria-hidden="true"></i> <?php } ?></a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li <?php if($title == 'admin/support_tickets'){ ?> class="active" <?php } ?>>
                        	<a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/support_tickets">Support Tickets</a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	



		
		