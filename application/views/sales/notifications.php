		<style>
			#dataTables-example2_length,#dataTables-example1_length
			{
				display:none !important;
			}
		</style>
<div id="page-wrapper">

			  <div class="row">
        <div class="col-lg-12">  <!-- <h1 class="page-header">Promo Codes</h1> -->
        <?php 
        @$success_msg = $this->session->flashdata('success_msg');
        if(!empty($success_msg)) { ?>
               <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success_msg'); ?>.
              </div>
        <?php }elseif($this->session->flashdata('error_msg')){ ?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Danger!</strong> <?php echo $this->session->flashdata('error_msg'); ?>.
          </div>
        <?php }
    ?>
    </div>
    </div>
     <?php $this->load->view('sales_templates/new-sidebar'); ?>
    <div class="row">
        <div class="col-lg-12">
			
            <div class="panel panel-default">
                <div class="panel-heading title-bar-blue" style="padding-bottom:20px;">
                    <i class="fa fa-folder mr-5"></i>All Notifications
				</div>
				    <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#all_notifications" data-toggle="tab">&nbsp; Notifications</a>
                                </li>
                                <li><a href="#task_notifications" data-toggle="tab">&nbsp; Task Notifications</a>
                                </li>
                                <li><a href="#message_notifications" data-toggle="tab">&nbsp; Message notifications</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
								<br><br>
                                <div class="tab-pane fade in active" id="all_notifications">
                                   <div id="calendars" class="tab-pane fade in active">
										 <div class="table-responsive">
											<table width="100%" class="table customise-table tablesorter table-striped table-bordered table-hover medconnex17" id="dataTables-example">
												<thead>
													<tr>
														<th>Display Name / Title  <i class="fa fa-sort"></i></th>
														<th>Message<i class="fa fa-sort"></i></th>
														<th>Created<i class="fa fa-sort"></i></th>
														<th>Status/Action<i class="fa fa-sort"></i></th>
													</tr>
												</thead>
												 <tbody>
													 <?php foreach($notifiy_list as $noti) { 
														if($noti['type_read']==0 || $noti['type_read']=="00") {
														?>
													 <tr>
														 <td><?=!empty($noti['display_name'])?$noti['display_name']:$noti['title']?></td>
														 <td><?=$noti['message']?></td>
														 <td><?=$noti['created_at']?></td>
														 <td>
															 <?php
															 if($noti['type_read'] === "0"){ ?>
																<form method="post" action="">
																	<input type="hidden" name="type_read" value="00">
																	<button style="background-color:#ec971f;" type="submit" name="update_read_notifiy" value="<?=$noti['notification_id']?>" class="btn-green udate_promocode">Un Read</button>
																</form>
															 <?php } else { echo ' <button  class="btn-green">Read</button>' ;} ?>
														 </td>
													 </tr>
													 <?php }}?>
												</tbody>
											</table>
											 <br><br>
										</div>    
									</div>
                                </div>
						
                                <div class="tab-pane fade" id="task_notifications">
                                   <div class="center-box text-center">
									 <div class="table-responsive">
										<table width="100%" class="table customise-table tablesorter table-striped table-bordered table-hover medconnex17" id="dataTables-example1">
											<thead>
												<tr>
													<th>Display Name / Title  <i class="fa fa-sort"></i></th>
													<th>Message<i class="fa fa-sort"></i></th>
													<th>Created<i class="fa fa-sort"></i></th>
													<th>Status/Action<i class="fa fa-sort"></i></th>
												</tr>
											</thead>
											 <tbody>
												 <?php foreach($notifiy_list as $noti) {
													 if($noti['type_read']==2 || $noti['type_read']==22)
													 {
													 ?>
												 <tr>
													 <td><?=!empty($noti['display_name'])?$noti['display_name']:$noti['title']?></td>
													 <td><?=$noti['message']?></td>
													 <td><?=$noti['created_at']?></td>
													 <td>
														 <?php if($noti['type_read']==2){ ?>
														 <form method="post" action="">
															 <input type="hidden" name="type_read" value="22">
																<button style="background-color:#ec971f;" type="submit" name="update_read_notifiy" value="<?=$noti['notification_id']?>" class="btn-green udate_promocode">Un Read</button>
															</form>
														 <?php } else { echo ' <button  class="btn-green">Read</button>' ;} ?>
													 </td>
												 </tr>
												 <?php
												 	 }
													} 
												?>
											</tbody>
										</table>
										 <br><br>
									</div>    
								</div>
                                </div>
                                <div class="tab-pane fade" id="message_notifications">
                                   <div class="center-box text-center">
									 <div class="table-responsive">
										<table width="100%" class="table customise-table tablesorter table-striped table-bordered table-hover medconnex17"id="dataTables-example2">
											<thead>
												<tr>
													<th>Display Name / Title </th>
													<th>Message</th>
													<th> Created</th>
													<th>Status/Action</th>
												</tr>
											</thead>
											 <tbody>
												<?php foreach($notifiy_list as $noti) {
													 if($noti['type_read']==3 || $noti['type_read']==33)
													 {
														$sql = "select * from uf_user where id = '" .$noti['created_by']. "'";
														$query = $this->db->query($sql);
														$resultarray = $query->row_array();
												?>
												 <tr>
													 <td width="13%"><?=!empty($resultarray['display_name'])?$resultarray['display_name']:$resultarray['title']?></td>
													 <td width="60%"><?=$noti['message']?></td>
													 <td width="10%"><?=$noti['created_at']?></td>
													 <td width="10%">
														 <?php if($noti['type_read']==3){ ?>
														 <form method="post" action="">
															 <input type="hidden" name="type_read" value="33">
																<button style="background-color:#ec971f;" type="submit" name="update_read_notifiy" value="<?=$noti['notification_id']?>" class="btn-green udate_promocode">Un Read</button>
															</form>
														 <?php } else { echo ' <button  class="btn-green">Read</button>' ;} ?>
													 </td>
												 </tr>
												 <?php
												 	 }
													} 
												?>
											</tbody>
										</table>
										<br><br>
									</div>    
								</div>
                                </div>
                            </div>
                        </div>
			</div>
        </div>
    </div>
</div>