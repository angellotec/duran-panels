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

	<div class="row-fluid sortable">		
		<div class="box span12">
		
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default">
                    <div class="panel-heading title-bar-blue">
	                  <p><i class="fa fa-shopping-cart" aria-hidden="true"></i> General Sales</p>
	                </div> 
	                <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        	<div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover medconnex17" id="dataTables-example">
                                <thead>
									<tr class="first-row">
										<th class="br-n">S.No.</th>
										<th class="br-n">Location Name</th>
										<th class="br-n">Email</th>
										<th class="br-n">Contact No.</th>
										<th class="br-n">Zip Code</th>
										<th class="br-n">Provider Type</th>
										<th class="br-n">Uploaded oN</th>
										<th class="br-n">Notes</th>
										<th class="br-n">Trash</th>
										<th class="br-n">Status</th>
										<th class="br-n">Actions</th>
									</tr>
                                </thead>
                                <tbody>
									<?php $i = 1;
									foreach ($all_staff as $row) {
										?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['location_name']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['contact_no']; ?></td>
											<td><?php echo $row['zip_code']; ?></td>
											<td><?php echo $row['provider_type']; ?></td>
											<td><?php echo $row['create_date']; ?></td>
											<td><?php echo $row['notes']; ?></td>
											<td><?php echo $row['trash']; ?></td>
											<td class="center">
												<?php if ($row['is_verify'] == '1') { ?>
													<span class="label label-success my-approve">Enable</span>
												<?php } else { ?>
													<span class="label label-success  my-approve cl-un">Disable</span>
												<?php } ?>
											</td>
											
												<td><div class="btn-group">
														<?php if ($row['is_verify'] == '0') { ?>
														<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
															Disabled
															<span class="caret"></span>
														</button>            
													<ul class="dropdown-menu" role="menu">
														<li>
															<form action="" method="post" style="margin: 0px;">
															<button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="enable" value="<?=$row['id']?>" id="enable"  class="js-user-disable">
															<i class="fa fa-minus-circle"></i>  Enable 
															</button>
															</form>
														</li>
													<?php } else { ?>

													<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
														Enabled
														<span class="caret"></span>
													</button>            
													<ul class="dropdown-menu" role="menu">
														<li>
															<form action="" method="post" style="margin: 0px;">
															<button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="disable" value="<?=$row['id']?>" id="disable" data-id="' . $val['id'] . '" class="js-user-disable">
															<i class="fa fa-minus-circle"></i>  Disable
															</button>
															</form>

														</li>
													<?php } ?>


														<!-- <li>
															<a  class="gn-salesPanel-edit"  href="javascript:;" data-id="<?php echo $row['id']; ?>">
															<i class="fa fa-edit"></i> Edit
															</a>
														</li>
														<li>
															<a  href="javascript:void(0);" data-id="<?php echo $row['email']; ?>" class="emailSend">
															<i class="fa fa-envelope-o"></i> Send mail
															</a>
														</li>
														
														<li>
															<a  class=""  href="javascript:void(0);" data-id="<?php echo $row['id']; ?>">
															<i class="fa fa-book"></i> Notes
															</a>
														</li>
														<li>
															<a  href="javascript:void(0);" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#myModal">
															<i class="fa fa-credit-card"></i> Payment
															</a>
														</li>
														<li>
															<a class="" onclick="return confirm('Are you sure you want to delete sale?');" href="<?php echo base_url(); ?>panels/supermacdaddy/sales/deleteSale/<?php echo $row['id']; ?>">
																<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
															</a> 
														</li>-->
													</ul>
												</div>
											</td>
							
										</tr>
									<?php } ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div><!--/row-->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header title-bar-orange">
				<h5 style="color:#000;width:93%;float:left;font-weight: bold;" class="modal-title" id="exampleModalLabel">General sales</h5>
				<button style="width:6%;float:left;" type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span style="color:#fff;font-size: 20px;font-weight: bold;" aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--<form name="user" method="post" action="<?php echo base_url(); ?>panels/supermacdaddy/sales/updateSales" novalidate="novalidate">-->
				<form name="user" method="post" action="">
					<div id="form-alerts">
					</div>
					<div class="row">
						<div class="updatepro">
							<!--/ajax call/-->
						</div>     
					</div><br>
					<div class="modal-footer">
						<div class="row">
							<button type="submit" name="update" class="btn btn-success btn-green">Update</button>
							<button type="submit"  class="btn btn-warning btn-grey" data-dismiss="modal" style="margin-top:0px;">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>  
	</div>
</div> 

<!-- bulk upload -->
<div class="modal fade" id="bulkGeneralSales" tabindex="-1" role="dialog" aria-labelledby="upload_storefornt" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header title-bar-orange">
				<h5 style="color:#fff;width:93%;float:left;font-weight: bold;" class="modal-title" id="exampleModalLabel"><i class="fa fa-envelope"></i> Bulk Upload General Sales</h5>
				<button style="width:6%;float:left;" type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span style="color:#fff;font-size: 20px;font-weight: bold;" aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
	 <form name="upload_storefornt"  method="post" action="<?php echo base_url('panels/supermacdaddy/dashboard/generalSalesBulkUpload'); ?>" enctype="multipart/form-data">
					<div id="form-alerts"></div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Upload File </label>
								<div class="input-group">
								<input name="image" type="file" class="form-control">
								</div>
								<a href="<?php echo base_url('uploads/uf_general_sale.csv');?>">Dowload Sample document</a>
							</div>
						</div>
					</div><br>
					<div class="row modal-footer">
						<div class="creatUserBottom ">
							<div class="">
								<div class="vert-pad">
									<button type="submit" name="upload_data" value="upload_data" class="btn-green">Upload</button>
								</div>
							</div>
							<div class="">
								<div class="vert-pad">
									<button type="button" class="btn-grey" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <!-- end bulk upload -->


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header title-bar-orange">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment</h4>
        </div>
        <div class="modal-body">
			<div align="center" style="margin: 20px;">
			<a href="<?= base_url()?>panels/supermacdaddy/sales/payment" class="btn-green" style="color:#fff;padding: 10px 30px ;margin: 20px;">PayPal</a>
			<a href="<?= base_url()?>panels/supermacdaddy/sales/payment"  class="btn-green" style="color:#fff;padding: 10px 30px ;margin: 20px;">Payoneer</a>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="emailModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header title-bar-orange">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Send Mail</h4>
        </div>
        <div class="modal-body">
        	<form name="user" method="post" action="<?php echo base_url('panels/supermacdaddy/sales/mailSendGeneralSales') ?>">
        	<div class="col-sm-12">
				<div class="form-group ">
					<label>Sender Email</label>
					<input class="form-control email" name="email" autocomplete="off"  type="text" required="" readonly="">
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group ">
					<label>Email Subject</label>
					<input class="form-control " name="email_subject" autocomplete="off"  type="text"  required="" >
				</div>
			</div>
			  <div class="col-sm-12">
				<div class="form-group ">
					<label>Email Content</label>
					<textarea name="email_description" style="width: 100%;" rows="5" required=""></textarea>
				</div>
				</div>
        </div>
        <div class="modal-footer">
       <div class="" style="clear:both">
			<div class="creatUserBottom">
				<div class="">
					<div class="vert-pad">
						<button type="submit" name='save' class="btn-green">Send Mail</button> 
					</div>          
				</div>       
				<div class="">
					<div class="vert-pad">
						<button type="button" class="btn-grey" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
        </div>
    </form>
      </div>
      
    </div>
  </div>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'email_description' );

    </script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('.emailSend').click(function(){
 			 var id =$(this).attr("data-id");
 			 $('.email').val(id);
 			 $('#emailModal').modal();
 		})

 	})
 </script>