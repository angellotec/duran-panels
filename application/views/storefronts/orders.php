<?php 
  if(isset($_GET['invalid']) && $_GET['invalid'] == 0){
    echo '<script>
      alert("la fecha no puede ser procesada");
    </script>';
  }
?>
<div id="page-wrapper">
          <?php $this->load->view('storefronts_templates/new-sidebar'); ?>
           
            <!-- /.row -->
			    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading title-bar-blue">
                    <p><i class="fa fa-users" aria-hidden="true"></i> Orders</p>
                    
                </div> <!-- /.panel-heading -->

                <div class="panel-body">

                    <!--modal de presentacion-->
        <div class="modal fade" id="modal-print" tabindex="-1" role="dialog" arial-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            <h3 class="text-center">Print Report</h3>  
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                
                                   <div class="row">
                                       <div class="col-sm-6">
                                       <label class="text-center">Print entire Report: </label>
                                       </div>
                                       <div class="col-sm-6">
                                            <!-- href="<?php echo base_url()?>panel/supermacdaddy/storefronts/"-->
                                           <a href="<?php echo base_url()?>panels/supermacdaddy/storefronts/report_print_orders">
                                               <button id="btn_full_report" type="button" class="btn btn-primary btn-block">Print</button>
                                           </a>
                                       </div>
                                   </div>
                                   <hr/>
                                   <div class="row">
                                       <div class="col-sm-6">
                                           <label>Report to day spesific: </label>
                                       </div>
                                       <div class="col-sm-6">
                                           <button id="btn-report-day" type="button" class="btn btn-warning btn-block">Report Day specific</button>
                                       </div>
                                   </div>
                                   <div id="search-report">
                                    <hr/>
                                       <div class="row">
                                           <div class="col-sm-12">
                                               <h4 class="text-center">Serch report to day</h4>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="col-sm-3"></div>
                                           <div class="col-sm-6">
                                               <form action="<?php echo base_url()?>panels/supermacdaddy/storefronts/report_print_orders_esp" method="GET">
                                                  <div class="form-gruop">
                                                    <input type="date" class="form-control" name="fecha">
                                                    <button type="submit" id="btn-fech" class="btn btn-success btn-block"><i class="fa fa-search"></i> Search</button>
                                                  </div>
                                               </form>
                                           </div>
                                           <div class="col-sm-3"></div>
                                       </div>
                                   </div>
                                   
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" class="close" data-dismiss="modal">exit</button>
                    </div>
                </div>
            </div>
        </div>
        <!--jquery para manejar funsiones del modal-->
            <script type="text/javascript">
                $(function(){
                    $('#search-report').hide();
                    console.log('modalllll');

                    $('#btn-report-day').on('click', function(){
                        $('#search-report').show();
                    })

                    /*$('#fech_especial').submit(function(e){
                        e.preventDefault();
                        if($('#fech').val()){
                          let fecha = $('#fech').val();
                          $.post('<?php echo base_url()?>panels/supermacdaddy/storefronts/report_print_orders_esp', {fecha}, function(response){
                            console.log(response);
                          })
                        }else{
                          alert('no se ha espesificado ninguna fecha para la busqueda');
                        }
                    })*/
                })
            </script>
        <!--modal de presentacion-->

        <!--icono de imprimir informe-->
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3">
                             <a id="print" style="text-decoration:none;" href="#">
                                 <p class="text-center">Print the entire report. <i class="fa fa-print"></i></p>
                             </a>
                        </div>   
                    </div>
                    <!--css-->
                    <style type="text/css">
                        a:hover{
                            color:green;
                            font-size: 14.5px;
                        }
                    </style>
                    <!--jquery modal print-->
                    <script type="text/javascript">
                    $(function(){
                        $('#print').on('click', function(){
                            $('#modal-print').modal("show");
                        })
                    })
                    </script>
        <!--icono de imprimir informe-->
                     <table width="100%" class="table customise-table tablesorter table-striped table-bordered table-hover" id="dataTables-example">

                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Total Products</th>
                                <th>Coins</th>
                                <th>Graduity</th>
                                <th>Grand Total</th>
								<th>Delivery Address</th>
								<th>Payment Method</th>                              
								<th>Order Status</th>
                                <th>datetime</th>								
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	 $i = 1;
                        	 foreach($orders as $order) { ?>
                            <tr class="odd gradeX">
                                <td><?php echo $i; ?></td>
                            	<td><?php echo $order['total_products']; ?></td>
                            	<td><?php echo $order['coins']; ?></td>
                            	<td><?php echo $order['graduity']; ?></td>
                            	<td><?php echo $order['grand_total']; ?></td>
                            	<td><?php echo $order['delivery_address']; ?></td>
                            	<td><?php echo $order['payment_method']; ?></td>
                            	<td><?php if($order['order_status'] == "0"){
											echo 'Placed';
										}elseif($order['order_status'] == "1"){
											echo 'Confirmed';
										}elseif($order['order_status'] == "2"){
											echo 'Delivered';
										} ?></td>
                    <td><?php echo $order['created_at']; ?></td>
                            </tr> 
                           <?php $i++;} ?> 
                        </tbody>
                    </table> <!-- /.table-responsive -->
                    <div id="table-users-pager" class="pager pager-lg tablesorter-pager">
    				    <div class="pagination-wrap">
        					
        			</div>
                    
                </div><!-- /.panel-body -->
             </div><!-- /.panel -->
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div><!--/.page wrapper-->
            
                   
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                   
                      
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->

