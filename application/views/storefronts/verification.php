<div id="page-wrapper">
      <?php $this->load->view('storefronts_templates/new-sidebar'); ?>
    <div class="row">
        <div class="col-lg-12">
            
			<div id="msg_success_ajax"></div>
			<div class="panel panel-default">
                <div class="panel-heading panel-heading-buttons clearfix title-bar-blue">
					<h3 class="panel-title pull-left"><i class="fa fa-users"></i> Pending Verification</h3>
				</div>
                <div class="panel-body">
					<div class="table-responsive">    
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr class="first-row">
									<th>User Name</th>
									<th>Contact #</th>
									<th>User Email</th>
									<th>Registered Since</th>
									<th>Document Link</th>
									<th>Status/action</th>                                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($alluser as $val){?>
                                <tr class="odd gradeX" id="rejectremove_<?=$val['id']?>">
									<td><?php echo $val['display_name'];?></td>
									<td><?php echo $val['mob_number'];?></td>
									<td><?php echo $val['email'];?></td>
									
									<td><?php echo $val['created_at'];?></td>
									<td>
									<?php 
									
									$get_query  = $this->db->query("SELECT * FROM `uf_user_documents` WHERE `user_id` = '".$val['id']."' ");
									foreach ($get_query->result() as $document_view) 
									{  $id=$document_view->id;
										$owned_urls	= $document_view->document;
										$link_name	= explode( '.', $owned_urls);
										$filename	= 'uploads/'.$document_view->document;
										if (file_exists($filename)) {
											if($document_view->document_status == '1'){ ?>
											<a href="javascript:void(0)" data-toggle="modal" data-target="#vefiymodal" style="text-decoration: none;"> <?= $link_name[0] ?> <span class="btn btn-success btn-sm" style="margin-bottom: 5px;">verified</span></a>	<br>

											  <?php	}else{
										     ?>  

										<a href="<?php echo base_url();?>uploads/<?=$document_view->document;?>" target="_blank"> <?= $link_name[0] ?></a><form action="" method="post">
										<button  type="submit" name="document_verify" value="<?php echo $id; ?>" id="deactive" class="btn btn-warning btn-sm">
									    Verify 
										</button>
										</form>	<br>
									
									<?php }  } } ?>
									</td>
									<td class="center">
                                        <?php if($val['is_verify']==1){
                                        	 echo '<div class="btn-group">
            							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
											Activate User
											<span class="caret"></span>
										</button>            
								<ul class="dropdown-menu" role="menu">
									<li>
										<form action="" method="post">
										<button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="deactive" value="'.$val['id'].'" id="deactive" data-id="'.$val['id'].'" class="js-user-disable">
										<i class="fa fa-minus-circle"></i>  Deactivate User
										</button>
										</form>
									</li>
								</ul>
							</div>';                                       	
									}else{
										 echo ' <div class="btn-group">
										<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
											Unactivated
											<span class="caret"></span>
										</button>            
									<ul class="dropdown-menu" role="menu">
										<li>
											<form action="" method="post">
											<button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="active" value="'.$val['id'].'" id="active" data-id="'.$val['id'].'" class="js-user-disable">
											<i class="fa fa-minus-circle"></i> Approved 
											</button>
											</form>
										</li>
										<li>
										<form action="" method="post">
											<button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="reject" value="'.$val['id'].'"  data-id="'.$val['id'].'" data-email="'.$val['email'].'" class="reject_user1">
												<i class="fa fa-minus-circle"></i>  Denied
											</button>
											</form>
										</li>
								</ul>
							</div>';
                                        	}?>
									</td>
                                </tr>
                                    <?php }?>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
 </div>


<div id="reject_user_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reject Reason : <span id="reject_email"></span> </h4>
      </div>
      <div class="modal-body">
        <div class="form-group ">
				<label>Reason Details</label>
				<input type="hidden" name="user_id_reject" id="user_id_reject">
				<input type="hidden" name="user_email_reject" id="user_email_reject">
				<textarea class="form-control" rows="8" id="user_reason_msg" required=""></textarea>
			</div>
      </div>
      <div class="modal-footer">
		  <button type="button" class="btn btn-info" id="btn_reject_conform">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="vefiymodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header adi-head-orange" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Need Admin Permission </h4>
      </div>
      <div class="modal-body">
        <div class="form-group ">
			    <p>That admin permission is needed and is being notified of it is attempt access. </p>
			</div>
      </div>
      <div class="modal-footer">
		 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
$('.reject_user').click(function(){
	var user_id		= $(this).attr('data-id');
	var user_email	= $(this).attr('data-email');
	$('#reject_email').html(user_email);
	$('#user_id_reject').val(user_id);
	$('#user_email_reject').val(user_email);
	$('#reject_user_modal').modal('show');
})	
$('#btn_reject_conform').click(function(){
	var user_id			= $('#user_id_reject').val();
	var user_email		= $('#user_email_reject').val();
	var user_reason_msg	= $('#user_reason_msg').val();
	
	$.ajax({
		type:"post",
		url: "<?=base_url()?>panels/supermacdaddy/Dashboard/reject_pending_providers",
		data: "user_id="+user_id+"&user_email="+user_email+"&user_reason_msg="+user_reason_msg,
		dataType:"JSON",
		success: function(data){
			$('#rejectremove_'+user_id).remove();
			$('#msg_success_ajax').html(data.msg);
			$('#reject_user_modal').modal('hide');
		}
	});
	
	
	
	$('#reject_user_modal').modal('hide');
	
})	





</script>
