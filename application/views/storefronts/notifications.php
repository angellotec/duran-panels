<div id="page-wrapper">
     <?php $this->load->view('storefronts_templates/new-sidebar'); ?>
    <div class="row">
    	
        <div class="col-lg-12">
			
            <div class="panel panel-default">
                <div class="panel-heading title-bar-blue" style="padding-bottom:20px;">
                    <i class="fa fa-folder mr-5"></i>Notifications
				</div>
				<!--panel de notification-->
				<div class="panel-body" id="panel-view">
					<div id="view_notification"></div>
					<!--<button class="btn btn-primary" id="return">return</button>-->
				</div>
                <div class="panel-body" id="panel-notifiaction">
				    <div class="table-responsive">
                        <table width="100%" class="table customise-table tablesorter table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
									<th>S.No </th>
									<th>Display Name / Title </th>
									<th>Message</th>
									<th>Created</th>
									<th>Status/Action</th>
                                </tr>
                            </thead>
						     <tbody>
								 <?php 
								 $sno=1;
								 foreach($notification as $noti) { ?>
								<tr id="<?php echo $sno; ?>">
								 	 <td ><?=$sno?></td>
									 <td val="<?php echo !empty($noti['display_name'])?$noti['display_name']:$noti['title']; ?>" width="13%"><?=!empty($noti['display_name'])?$noti['display_name']:$noti['title']?></td>
									 <td val="<?php echo $noti['message']; ?>"><?=$noti['message']?></td>
									 <td val="<?php echo $noti['created_at_noti']; ?>" width="13%"><?=$noti['created_at_noti']?></td>
									 <td width="10%">
										 <?php if($noti['read_status']==0){ ?>
										 <form method="post" action="">
											 <button style="background-color:#ec971f;" type="submit" name="update_read_status" value="<?=$noti['notification_id']?>" class="btn-green udate_promocode">Un Read</button>
										 </form>
										 <?php } else {
										  echo ' <button class="btn-green read_notification">Read </button>' ;} ?>
									 </td>
								 </tr>
								 <?php $sno++;} ?>
						    </tbody>
                        </table>
                    </div> 

                    

                 </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(function(){
		$('#panel-view').hide();
		$('.read_notification').on('click', function(){
			//$('#panel-notifiaction').hide();
			//$('#panel-view').show();
			let element = $(this)[0].parentElement;
			let brother = $(element).siblings();
			let br1 = $(brother[1]).attr('val');
			let br2 = $(brother[2]).attr('val');
			let br3 = $(brother[3]).attr('val');
			/*console.log(br1);
			console.log(br2);
			console.log(br3);*/
			/*consulta ajax y obtener los datos */
			const brot = {
				title: br1,
				message: br2,
				fech: br3
			};
			$.post('<?php echo base_url()?>panels/supermacdaddy/storefronts/brothers', {br1, br2, br3}, function(response){
				let resultado = JSON.parse(response);
				console.log(resultado);
				let template = '';
				resultado.forEach(resultado =>{
					template += `
						<div style="width:80%;" class="container">
							<div class="row">
								<div class="col-sm-9">
									<i style="color:orange; font-size:40px;" class="fa fa-bell fa-fw"> </i> <h3>Read Notification</h3>
								</div>
						
								<div class="col-sm-3">
									<h4 class="text-center">received time:</h4>
									<h5 class="text-center" style="background-color:rgb(174,174,174); border-radius:20px; padding:5px;">${resultado.created_at_noti}</h5>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h4>display name: <u>${resultado.display_name}:<u></h4>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-sm-12">
									<p class="text-center">${resultado.message}<p>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-sm-12">
									<button class="btn btn-warning" id="return">exit</button>
								</div>
							</div>
						</div>
					`;
				})
				$('#view_notification').html(template);
				$('#panel-notifiaction').hide();
				$('#panel-view').show();
				$('#view_notification').show();
			})
		})

		$(document).on('click','#return', function(){
			$('#panel-notifiaction').show();
			$('#panel-view').hide();
		})


	})
</script>

<style type="text/css">
	@media screen and (min-width:767px) and (max-width:900px){

	}
</style>