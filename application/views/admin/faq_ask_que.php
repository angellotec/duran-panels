        <div id="page-wrapper">
				<?php 
					$this->load->view('admin/top_tab_header');
			   ?>
            <div class="row">
				
                <div class="col-lg-12">
					<?php 
							@$success_msg = $this->session->flashdata('success_msg');
							if(!empty($success_msg)) {
								echo "<div class='alert alert-info' style='float: center;text-transform: capitalize;' id='success-alert'>";
								echo $this->session->flashdata('success_msg')."</div>";			
							}
						?>
                    <div class="panel panel-default">
                        <div class="panel-heading title-bar-green" style="color:#fff;">
                            <i class="fa fa-flag mr-5"></i>Frequently Asked Questions
                        </div>
                         
                        <!-- /.panel-heading -->
                        <div class="panel-body">						
							<form action="" method="post">
								<div class="servicediv">
								<div class="form-group">
									<label>Question</label>
									<input class="form-control valid" name="que" autocomplete="off" value="" type="text" required="">
								</div>
								<div class="form-group">
									<label>Answer</label>
									<textarea rows="5" cols="117" name="ans" class="note-codable form-control" required=""></textarea>
								</div>
								
								<div class="row">
									<div class="col-xs-12">
										<button name="save" type="submit" class="btn-green js-location-create">Submit</button>
									</div>
								</div>
								</div>
							</form>
						</div>
                    </div>
                    <div class="panel panel-default table-responsive" style="padding: 2%;">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                <thead>
                                    <tr class="first-row">
                                    	<th>S.NO.</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Created Date</th>
                                        <th>Status/action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  $i=1;foreach($getfaq_ask_que as $val){?>
                                    <tr class="odd gradeX">
                                    	<td><?php echo $i++;?></td>
                                        <td><?php echo $val['que'];?></td>
                                        <td><?php echo $val['ans'];?></td>
                                        <td><?php echo $val['created_date'];?></td>
                                        <td>
											<div class="btn-group"> 
												<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
													Action
													<span class="caret"></span>
												</button>            
												<ul class="dropdown-menu" role="menu">
												<li>
													<a href="javascript:()" data-id="<?php echo $val['f_id']; ?>" class="faq_ask_que_edit">
														<i class="fa fa-edit"></i> Edit
													</a>
												</li>
												<li>
													<form action="" method="post">
														<button style="padding: 1px 20px;border: none;background: transparent;" onclick="return confirm(\'Are you sure you want to delete the service ?\');" type="submit" name="delete" value="<?php echo $val['f_id']; ?>" id="disable" class="js-user-delete"  >
														<i class="fa fa-trash-o"></i> Delete </button>
													</form>
												</li>
												</ul>
											</div>
										</td>
                                     	</form>
						             	</tr>
                                     <?php }?>
                                </tbody>
                       </table>  
                    </div>
                </div>
            </div>
        </div>

<script>
	$(".faq_ask_que_edit").click(function(){
		var id =$(this).attr("data-id");
		$.ajax({
			type: "post",
			url:"<?php echo base_url();?>panels/supermacdaddy/dashboard/edit_faq_ask_que",
			data: "&id="+id,
			success: function(response){
				$(".servicediv").html(response);  
			} 
		});
	});
</script>