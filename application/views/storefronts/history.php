
<div id="page-wrapper">
	      <?php $this->load->view('storefronts_templates/new-sidebar'); ?>
	   <div class="row">
            <div class="col-lg-12">  <!-- <h1 class="page-header">Products</h1> -->
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
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
			   <div class="panel-heading" style="font-weight:bold;height:45px;">
					My History
				</div>
				<div class="panel-body">
					<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover medconnex20" id="dataTables-example">
						<thead>
							<tr class="first-row">
								<th>S.No </th>
								<th>Product Purchased</th>
								<th>Date </th>
								<th>Time  </th>
								<th>Action  </th>
							</tr>
						</thead>
						<tbody>

						<?php 
						 if(count($historyData) > 0){
						 	$i=1;
						foreach ($historyData as $h ) { ?>
							<tr class="odd">
								<td><?=$i?></td>
								<td val="<?=$h->message?>"><?=$h->message?></td>
								<td val="<?php echo  date('Y-m-d',strtotime($h->created_at));  ?>"><?php echo  date('Y-m-d',strtotime($h->created_at));  ?></td>
								<td val="<?php echo  date('h:i',strtotime($h->created_at));  ?>"><?php echo  date('h:i',strtotime($h->created_at));  ?> </td>
								<td ><form action="" method="post">
								<button onclick="return confirm('Are you sure want to delete?');" type="submit" name="delete_history" value="<?php echo $h->id; ?>" class="btn-delete btn btn-danger">
									<i class="fa fa-trash-o"></i>  </button>
								</form></td>
							</tr>
						<?php $i++; } }?>
						</tbody>
					</table>
					
						<div class="row">
							<div class="col-sm-2">
								<button id="recycle" style="width:60px; height:80px;" class="btn btn-primary"><i style="font-size:30px;" class="fa fa-recycle"></i></button>
								<p>Recycle Bin</p>
							</div>
							<div class="col-sm-9">
								<table id="table-recycle" width="100%" class="table table-striped table-bordered table-hover medconnex20" id="dataTables-example">
									<thead>
										<tr class="first-row">
											<th>S.No </th>
											<th>Product Purchased</th>
											<th>Date </th>
											<th>Time  </th>
											<th>Action  </th>
											<th>dateTime delete</th>
										</tr>
									</thead>
									<tbody>

									
									</tbody>
								</table>
							</div>
						</div>
					
					<br/>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('#table-recycle').hide();

		$('#recycle').on('click', function(){
			$('#table-recycle').show();
		})

		$('.btn-delete').on('click', function(){
			let element = $(this)[0].parentElement.parentElement;
			let brother = $(element).siblings();
			let br1 = $(brother[1]).attr('val');
			let br2 = $(brother[2]).attr('val');
			let br3 = $(brother[3]).attr('val');
			/*console.log(br1);
			console.log(br2);
			console.log(br3);
			console.log(br4);*/
			const data_delete = {
				Product: br1,
				date: br2,
				time: br3,
			}

			$.post('<?php echo base_url()?>panels/supermacdaddy/Storefronts/delete_recicler', data_delete, function(response){
				console.log(response);
			})
		})
	})
</script>