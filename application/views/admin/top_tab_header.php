	<?php 
		$salcount = $this->Dashboard_model->user_count_typedata();
		$promocode_count = $this->Dashboard_model->Promocode_count();
		$ticket_count = $this->Dashboard_model->ticket_count();	
		$totalprovider_count = $this->Dashboard_model->totalprovider_count();	
		
	?>

	<div class="row dash-icon">
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
			 <!--<a href="<?php echo base_url(); ?>panels/supermacdaddy/sales">-->
				<a href="#" class="" data-toggle="modal" data-target="#login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i  style="color:#FF8961;" class="fa fa-users fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $salcount->sales; ?></div>
								<div class="font-small">Sales Staff Panel</div>
							</div>
						</div>
					</div>
					<div class="panel-footer adi-head-orange">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<a href="#" class="" data-toggle="modal" data-target="#certificate_provider">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i  style="color:#56BDDC;" class="fa fa-user fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo @$salcount->provider; ?></div>
								<div class="font-small">Certified Providers Panel</div>
							</div>
						</div>
					</div>
					<div class="panel-footer adi-head-blue">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/promo_list">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i  style="color:#baa2e0;" class="fa fa-globe fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?= $promocode_count['promocode_userwise_count'] ?></div>
								<div class="font-small">Promo Code</div>
							</div>
						</div>
					</div>
					<div class="panel-footer adi-head-per">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
					<a href="#" class=" " data-toggle="modal" data-target="#rating_view">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i  style="color:#10B1AC;" class="fa fa-support fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?= $totalprovider_count['totalprovider_count'] ?></div>
								<div class="font-small">Rating</div>
							</div>
						</div>
					</div>
					<div class="panel-footer adi-head-green">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
<!--		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<a href="<?php echo base_url(); ?>panels/supermacdaddy/dashboard/support_tickets">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i  style="color:#10B1AC;" class="fa fa-support fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?= $ticket_count['all_ticket'] ?></div>
								<div class="font-small">Support Tickets</div>
							</div>
						</div>
					</div>
					<div class="panel-footer adi-head-green">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>-->
	</div>