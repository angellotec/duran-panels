<div id="page-wrapper" >
        <?php $this->load->view('storefronts_templates/new-sidebar'); ?>
        
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
             <div class="panel-heading title-bar-blue">
                    <p><i class="fa fa-users" aria-hidden="true"></i> Products</p>
                </div> <!-- /.panel-heading -->
                <div class="panel-body">
                    <div>
                        <button type="button" class="btn-green" data-toggle="modal" data-target="#exampleModalAdd">Add New Product</button>
						<button type="button" class="btn-green" id="upload" data-toggle="modal" data-target="#Modalbulk">Upload Bulk Product</button>
                        <div><br>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="first-row">
										<!-- <th>S.No</th>
										<th>Image</th>
                                        <th>Product Name</th>
										<th>Type</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Product Notes</th> -->
                                       <!-- 
 <th>K1</th>
                                        <th>K2</th>
                                        <th>K3</th>
                                        <th>K4</th>
                                        <th>K5</th>
                                        <th>K6</th>
 -->
                                        <!-- <th>Actions</th> -->
                                        <th>S.No</th>
                                        <th>Provider Type</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Happy hour</th>
                                        <th>Happy Price</th>
                                        <th>Product Price</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Fecha de Carga</th>
                                        <th>Product Info</th>
                                        <th>Contact#</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                        // echo "<pre>"; print_r($products); 
          //                               exit;
                                        $i = 1;
                                        foreach($products as $sale)
                                        {  //echo "<pre>";
                                            //print_r($sale);
                                            $imagUrl=base_url('uploads/'.$sale['image']);
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $sale['provider_type']; ?></td>
                                        <td>
                                            <style type="text/css">
                                                .pic{
                                                     width:80px;
                                                     height:80px;
                                                     cursor: pointer;
                                                }
                                                .picbig{
                                                    position: absolute;
                                                    width: 0px;
                                                    -webkit-transition:width 0.3s linear 0s;
                                                    transition:width 0.3s linear 0s;
                                                    z-index: 0px;
                                                }
                                                .pic:hover + .picbig{
                                                    width: 250px;
                                                    height: 250px;
                                                }
                                            </style>
                                            <img class="pic" style="padding:5px; border:1px solid silver; border-radius:20px;>" src="<?php  echo $imagUrl; ?>">
                                            <img class="picbig" style="border-radius:20px;" src="<?php  echo $imagUrl; ?>">
                                        </td> 
                                        <td><?php echo $sale['product_name']; ?></td>
                                        <!--<td><?php echo $sale['happy_hour']; ?></td>-->
                                        <!--<td><?php echo $sale['happy_time_to'].' to '. $sale['happy_time_from'];?></td>-->
                                        <td>
                                            <?php 
                                                if($sale['happy_time_to'] == '00:00:00' && $sale['happy_time_from'] == '00:00:00'){
                                                    echo '';
                                                }else{
                                                    echo $sale['happy_time_to'].' to '.$sale['happy_time_from'];
                                                }
                                            ?>
                                        </td>
                                        <td><?php 
                                            if(($sale['Happy_Price']) == 0){
                                                echo '';
                                            }else{
                                                echo '$'.$sale['Happy_Price'];
                                            }
                                         ?></td>
                                        <!--antes de amt_d_price se llamaba a el campo mrp-->
                                        <td><?php echo '$'.$sale['amt_d_price']; ?></td>
                                        <td><?php echo $sale['main']; ?></td>
                                        <td><?php echo $sale['sub']; ?></td> 
                                        <td><?php echo $sale['data_time_product'];?></td>
                                        <td><?php echo $sale['product_notes']; ?></td> 
                                        <td><?php echo $sale['providernumber']; ?></td> 
                                        <td><?php echo $sale['provideremail']; ?></td>
                                        <td class="center">
                                            <form method="post">
                                        <?php
                                        if($sale['status'] == 0){
                                            echo '<div class="btn-group">  
                                                
                                                    <button type="submit" name="" value="'.$sale['id'].'" class="btn btn-warning dropdown-toggle js-location-create" data-toggle="dropdown">
                                                Disable
                                                 <span class="caret"></span>
                                                </button>
                                                
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <form method="post">
                                                        <button type="submit" name="deactive" value="'.$sale['id'].'"class="js-user-activate" style="padding: 1px 20px;border: none;background: transparent;">
                                                        <i class="fa fa-bolt"></i> Enable
                                                        </a>
                                                        </form>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="javascript:void(0);" data-id="'.$sale['id'].'" class="js-user-edit">
                                                        <i class="fa fa-edit"></i> Edit 
                                                        
                                                    </li>
                                                    
                                                    <li>
                                                        <form action="" method="post">
                                                        <button style="padding: 1px 20px;border: none;background: transparent;" onclick="return confirm(\'Are you sure you want to delete the user \');" type="submit" name="delete_product" value="'.$sale['id'].'"  class="js-user-delete" >
                                                        <i class="fa fa-trash-o"></i> Delete </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                                </div>';
                                        }
                                        else
                                        {
                                            echo '<div class="btn-group">
                                            
                                                <button type="submit" name=""  value="'.$sale['id'].'" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                                            Enable
                                                <span class="caret"></span>
                                                </button>
                                                
                                                <ul class="dropdown-menu" role="menu">
                                                     <li>
                                                        <form action="" method="post">
                                                        <button style="padding: 1px 20px;border: none;background: transparent;" type="submit" name="active" value="'.$sale['id'].'"  class="js-user-disable">
                                                        <i class="fa fa-minus-circle"></i>  Disable 
                                                        </button>
                                                        </form>
                                                        
                                                    </li> 
                                                    <li>
                                                        <a href="javascript:void(0);" data-id="'.$sale['id'].'" class="js-user-edit">
                                                        <i class="fa fa-edit"></i> Edit 
                                                        
                                                    </li>
                                                    
                                                       
                                                    <li>
                                                        <form action="" method="post">
                                                        <button style="padding: 1px 20px;border: none;background: transparent;" onclick="return confirm(\'Are you sure you want to delete the user \');" type="submit" name="delete_product" value="'.$sale['id'].'"  class="js-user-delete" >
                                                        <i class="fa fa-trash-o"></i> Delete </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>';
                                        }
                                     ?>
                                        </form>
                                    </td>
                                    </tr>
                                   <?php $i++; } ?>
                                </tbody>
                            </table>
							<div>
								<button type="button" class="btn-green" data-toggle="modal" data-target="#exampleModalAdd">Add New Product</button>
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
<!-- 
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading title-bar-blue">
                    <p><i class="fa fa-users" aria-hidden="true"></i> Products</p>
                  
                </div> <!~~ /.panel-heading ~~>
                <div class="panel-body">
                  
                    <table width="100%" class="table table-striped table-bordered table-hover custom-table table-responsive" id="dataTables-example">
                        <thead>
                            <tr class="first-row">
                                <th>Product Name</th>
                                <th>MRP</th>
                                <th>Location</th>
                                <th>Status</th>  
								<th>Last Modified</th> 
								<th>Modified By</th> 
								<th>Actions</th> 								
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                
                            </tr>
                            <tr class="odd gradeX">
                                
                            </tr>
                            <tr class="odd gradeX">
                                
                            </tr>
                        </tbody>
                    </table> <!~~ /.table-responsive ~~>
                    <div id="table-users-pager" class="pager pager-lg tablesorter-pager">
    				    <div class="pagination-wrap">
        					
        			</div>
                    
                </div><!~~ /.panel-body ~~>
             </div><!~~ /.panel ~~>
        </div><!~~ /.col-lg-12 ~~>
    </div><!~~ /.row ~~>
</div>
 --><!--/.page wrapper-->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">

                    <!-- /.panel -->
 
                    <!-- /.panel -->
                  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                   
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                   
                      
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
						
<div class="modal fade" id="Modalbulk" tabindex="-1" role="dialog" aria-labelledby="Modalbulk" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header title-bar-orange">
        <h5 style="color:#fff;width:93%;float:left;font-weight: bold;" class="modal-title" id="exampleModalLabel">Upload Bulk Product</h5>
        <button style="width:6%;float:left;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#fff;font-size: 20px;font-weight: bold;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		
        <form method="post" action="<?=base_url()?>panels/supermacdaddy/storefronts/bulk" enctype='multipart/form-data'>
			<div id="form-alerts">
			</div>
			<div class="row">
				<div class="">

				<div class="col-sm-6">
					<div class="form-group">
						<label>Upload File</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-edit"></i></span>
							<input class="form-control" name="image" type="file" required/>
						</div>
					</div>
				</div>
			</div>
			</div>
			<a href="<?=base_url()?>public/sales-design/assets/bulk_pro.xlsx">Download Sample File</a>
			<br>
			 <div class="modal-footer">
			  <div class="row">
				  <div class="creatUserBottom">
					  <div class="">
						  <div class="vert-pad">
							  <input type="submit" name="upload_product" class="btn-green" value="Upload">
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

</div>
</div> 						
						
<div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="Modalbulk" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header title-bar-orange">
        <h5 style="color:#fff;width:93%;float:left;font-weight: bold;" class="modal-title" id="exampleModalLabel">Add bulk Product</h5>
        <button style="width:6%;float:left;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#fff;font-size: 20px;font-weight: bold;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		
        <form id="form_jquery" name="addbulkProduct" method="post" action="" enctype='multipart/form-data'>
    <div id="form-alerts">
    </div>
    <div class="row">
    	<div class="">
    	
        <div class="col-sm-6">
            <!--<div class="form-group">
                <label>Upload File</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <input class="form-control" name="upload_file" type="file" required="required">
                </div>
            </div>-->
        </div>

		<div class="col-sm-6">
            <div class="form-group ">
              <label>Product Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                      <input class="form-control" name="product_name"  placeholder="Enter Product name" type="text" required="required">
                </div>
            </div>
        </div>
			
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Product Category </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
					<select id="input_locale" class="form-control mainCategoryChanges" name="product_category" title="Locale" required/>
								<option>--Choose One--</option>
               				 <?php  foreach($main_categories as $single) {
                				echo ' <option value="'.$single['id'].'">'.$single['name'].'</option>';
                 			} ?>
                     </select>
                </div>
            </div>
        </div>
        
		<div class="col-sm-6">
            <div class="form-group">
                <label>Product Sub-Category</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
					 <select id="input_locale" class="form-control product_sub_category" name="product_sub_category" title="Locale" required/>
                    	<option>--Choose One--</option>
					</select>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Preparation Time in Hours </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <!--<input class="form-control" name="preparation_time" autocomplete="off" placeholder="Enter Preparation Time" type="text" required="required">-->
					 <select name="preparation_time" class="form-control " required="required">
						<option value="10">10 mins</option>
						<option value="20">20 mins</option>
						<option value="30">30 mins</option>
						<option value="60">60 mins</option>
					</select>
                </div>
            </div>
        </div>
                             
        <div class="col-sm-6">
            <div class="form-group ">
              <label>Amount & Price</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                      <input class="form-control" name="amt_d_price"  placeholder="Enter Amont" type="text" required="required">
                </div>
            </div>
        </div>
                             
        <div class="col-sm-6">
			 <label>Happy Hour</label>
			
			 <div class="form-check">
				<label class="form-check-label">
					<input  name="happy_hour" id="swich_happy" class="happu_hour" type="checkbox" value="0">
					Happy Hour specials
				</label>
			  </div>
        </div>
        
			
			<div class="col-sm-12 display_hidden" style="padding: 0px;display:none;">
				
				<div class="col-sm-6">
					 <label id="l1">Day </label>
                     <label id="l11" style="color:green">Day </label>
					<div class="form-group ">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-edit"></i></span>
							<select name="happy_day" class="form-control display_disabled" style="width:100%" disable="">
							   <option value="Monday">Monday</option>
							   <option value="Tuesday">Tuesday</option>
							   <option value="Wednesday">Wednesday</option>
							   <option value="Thursday">Thursday</option>
							   <option value="Friday">Friday</option>
							   <option value="Saturday">Saturday</option>
							   <option value="Sunday">Sunday</option>
						   </select>
					   </div>
				   </div>
			   </div>
               
				<div class="col-sm-6">
					<div class="col-sm-6" style="padding-left:0px;">
						<label id="l2">To</label>
                        <label id="l22" style="color:green">To</label>
						<input id="to" class="form-control display_disabled" name="happy_time_to" type="time" >
                        <div id="error_message_to"></div>
					</div>
					<div class="col-sm-6" style="padding-right:0px;">
						<div id="blok-from">
                            <label id="l3">From</label>
                             <label id="l33" style="color:green">From</label>
                            <input id="from" class="form-control display_disabled" name="happy_time_from" type="time" >
                            <div id="error_message_from"></div>
                        </div>
					</div>
			   </div>

               <div class="col-md-12">
                   <div id="blok-hp">
                        <label id="l4">Happy Price</label>
                        <label id="l44" style="color:green">Happy Price</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                        <input id="hp" name="happy_price" class="form-control" type="text" placeholder="Enter Amont" >
                        </div>
                   </div>
               </div>
				
				
			</div>
            
        
		
      
      <div class="col-sm-12 " style="padding: 0px;">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1G</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k1" autocomplete="off" placeholder="Enter k1" type="text" required="required">
                </div>
            </div>
        </div>
      
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1/8</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k3" autocomplete="off" placeholder="Enter k3" type="text" required="required">
                </div>
            </div>
        </div>
	
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1/2</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k5" autocomplete="off" placeholder="Enter k5" type="text" required="required">
                </div>
            </div>
        </div>
       
         <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">Description</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="product_notes" autocomplete="off" placeholder="Enter description" type="text" required="required">
                </div>
            </div>
        </div>
         <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">Upload Image</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input id="imagen" class="form-control" name="image" autocomplete="off" type="file" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="imagenPreview">
            </div> 
            <p id="text-preview">Preview of the attached file </p> 
        </div>

        <script type="text/javascript">
            $(function(){
                $('#text-preview').hide();
                console.log('hola jquery');
                function filePreview(input){
                    if(input.files && input.files[0]){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#imagenPreview').html("<img style='border-radius:20px; width:100px; height:100px; ' src='"+e.target.result+"'>");
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                     $('#text-preview').show();
                }

                $('#imagen').change(function(){
                    filePreview(this);
                })
            });
        </script>
                  
		
	  </div>
		</div>     
		
            </div><br>
        <div class="modal-footer">
    		<div class="row">
        		<div class="creatUserBottom">
                    <div class="">
                		<div class="vert-pad">
                    		<button id="btn_create_ini" type="submit" name="save_product" class="btn-green">Create Product</button>
                            <button id="btn_create_disabled" type="submit" name="save_product" class="btn-grey" disabled>Create Product</button>
                		</div>          
            		</div>
                 	<div class="">
                    	<div class="vert-pad">
                        	<button type="button" class="btn-grey" data-dismiss="modal">Cancel</button>
                    	</div>
                	</div>
                </div>
                <div class="col-sm-6">
                    <p style="color:orange;" class="text-center" id="message_valid_HH">Para enviar formulario, debes ingresar todos los datos de la hora feliz</p>
                </div>
            </div>
        </div>

</form>
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>-->
  </div>
</div>  

</div>
</div> 
    <!--jquery formulario-->
    <script type="text/javascript">
            $(function(){
                /*funsion para manejar las validaciones del formulario*/
                $('#l11').hide();
                $('#l22').hide();
                $('#l33').hide();
                $('#l44').hide();
                $('#btn_create_disabled').hide();
                $('#message_valid_HH').hide();
                $('#swich_happy').on('click', function(){
                    if($('#swich_happy').val() == 0){
                        /*propiedades primarias*/
                        $('#blok-from').hide();
                        $('#blok-hp').hide();
                        $('#btn_create_disabled').show();
                        $('#btn_create_ini').hide();
                        $('#message_valid_HH').show();

                        /*nueva validacion a prueba de tontos*/

                        $('#to').on('change', function(){
                            if($('#to').val() != ''){
                                $('#blok-from').show();
                                $('#from').on('change', function(){
                                    if($('#from').val() != '' && $('#from').val() > $('#to').val()){
                                         $('#error_message_from').hide();
                                        $('#blok-hp').show();
                                        $('#hp').on('change',function(){
                                            if($('#hp').val() != ''){
                                                $('#btn_create_disabled').hide();
                                                $('#btn_create_ini').show();
                                                $('#message_valid_HH').hide();
                                                $('#l1').hide();
                                                    $('#l11').show();
                                                $('#l2').hide();
                                                    $('#l22').show();
                                                $('#l3').hide();
                                                    $('#l33').show();
                                                $('#l4').hide();
                                                    $('#l44').show();
                                            }
                                            else
                                            {
                                                $('#btn_create_disabled').show();
                                                $('#btn_create_ini').hide();
                                                $('#message_valid_HH').show();
                                                $('#l1').show();
                                                    $('#l11').hide();
                                                $('#l2').show();
                                                    $('#l22').hide();
                                                $('#l3').show();
                                                    $('#l33').hide();
                                                $('#l4').show();
                                                    $('#l44').hide();
                                            }
                                        })
                                    }else{
                                        $('#blok-hp').hide();
                                        $('#hp').val('');
                                        $('#btn_create_disabled').show();
                                        $('#btn_create_ini').hide();
                                        $('#message_valid_HH').show();
                                        $('#l1').show();
                                            $('#l11').hide();
                                        $('#l2').show();
                                            $('#l22').hide();
                                        $('#l3').show();
                                            $('#l33').hide();
                                        $('#l4').show();
                                            $('#l44').hide();
                                            let templete = `
                                                <p class="text-center" style="color:red; font-size:10px;">El tiempo de la hora feliz solo puede durar 2horas</p>
                                            `;
                                            $('#error_message_from').html(templete);
                                            $('#error_message_from').show();
                                    }
                                })
                            }else{
                                $('#blok-hp').hide();
                                $('#hp').val('');
                                $('#blok-from').hide();
                                $('#from').val(0);
                                $('#btn_create_disabled').show();
                                $('#btn_create_ini').hide();
                                $('#message_valid_HH').show();
                                $('#l1').show();
                                    $('#l11').hide();
                                $('#l2').show();
                                    $('#l22').hide();
                                $('#l3').show();
                                    $('#l33').hide();
                                $('#l4').show();
                                    $('#l44').hide();
                            }
                        })

                    }
                    else{
                        $('#to').val(0);
                        $('#from').val(0);
                        $('#hp').val('');
                        $('#btn_create_ini').show();
                        $('#btn_create_disabled').hide();
                        $('#message_valid_HH').hide();
                        $('#l1').show();
                            $('#l11').hide();
                        $('#l2').show();
                            $('#l22').hide();
                        $('#l3').show();
                            $('#l33').hide();
                        $('#l4').show();
                            $('#l44').hide();
                    }

                    /*validing que to, from and happy price */


                    
                });
               
            });
    </script>
    <!--jquery formulario-->
<!-- edit product modal  -->

<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header title-bar-orange">
        <h5 style="color:#fff;width:93%;float:left;font-weight: bold;" class="modal-title" id="exampleModalLabel">Update User</h5>
        <button style="width:6%;float:left;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#fff;font-size: 20px;font-weight: bold;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		
        <form name="user" method="post" action="" enctype='multipart/form-data'>
    <div id="form-alerts">
    </div>
   <div class="row">
    	<div class="updatepro">
    	
        <div class="col-sm-6">
            <div class="form-group">
                <label>Product Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <input class="form-control" name="product_name" autocomplete="off" value="" placeholder="Please enter the Product Name" type="text" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Product Category </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                     <select id="input_locale" class="form-control" name="product_category" title="Locale" required="required">
                
                <?php  foreach($main_categories as $single) {
                echo ' <option value="'.$single['id'].'">'.$single['name'].'</option>';
                 } ?>
                            
                     </select>
                </div>
            </div>
        </div>
        
         <div class="col-sm-6">
            <div class="form-group">
                <label>Product Sub-Category</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <select id="input_locale" class="form-control" name="product_sub_category" title="Locale" required="required">
                    	
					</select>
					
				                 
                </div>
            </div>
        </div>               
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Preparation Time in Hours </label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <input class="form-control" name="preparation_time" placeholder="Enter Preparation Time" type="text" required="required">
                </div>
            </div>
        </div>
                             
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Tax/Patients</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <input class="form-control" name="tax_patients" value="" placeholder="Enter Tax/Patients" type="text" required="required">
                </div>
            </div>
        </div>
                             
        <div class="col-sm-6">
            <div class="form-group ">
                <label>Happy Hour</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                    <input class="form-control" name="happy_hour" placeholder="Enter happy_hour" type="text" required="required">
                </div>  
            </div>
        </div>
    
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1G</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k1" placeholder="Enter k1" type="text" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">2G</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k2" placeholder="Enter k2" type="text" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1/8</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k3" placeholder="Enter k3" type="text" required="required">
                </div>
            </div>
        </div>
		<div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1/4</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k4" placeholder="Enter k4" type="text" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">1/2</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k5" placeholder="Enter k5" type="text" required="required">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">OG</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="k6" placeholder="Enter k6" type="text" required="required">
                </div>
            </div>
        </div>
         <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">Description</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="product_notes" placeholder="Enter description" type="text" required="required">
                </div>
            </div>
        </div>
         <div class="col-sm-6">
            <div class="form-group">
                <label for="input_locale">Upload Image</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-language"></i></span>
                    <input class="form-control" name="image" type="file" required="required">
                </div>
            </div>
        </div>
        </div>                
            </div><br>  
           <div class="modal-footer">
    		<div class="row">
        		<div class="creatUserBottom">
                    <div class="">
                		<div class="vert-pad">
                    		<button type="submit" name="update" class="btn-green">Update Product</button>
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
     <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>-->
  </div>
</div>  

</div>
</div> 
<script>
	
$('form').delegate(".happu_hour","change",function(){
	if($(this).is(':checked')) {
		$(this).val('1');
		$('.display_disabled').prop( "disabled", false );
		
		$('.display_hidden').show();
	}
	else
	{
		$(this).val('0');
		$('.display_disabled').prop( "disabled", true );
		$('.display_hidden').hide();
	}
	
	
})


   $('form').delegate('.mainCategoryChanges', 'change' ,function() {
	  
	  var data=$(this).val();
		 $.ajax({
            type: "post",
            url:"<?php echo base_url();?>panels/supermacdaddy/storefronts/getsubCategory",
            data: {
                id:data
            },
            success: function(response)
            {
                 $('select[name="product_sub_category"]').html(response);
            } 
     
        });
   
});

</script>