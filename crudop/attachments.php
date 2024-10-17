<?php include "includes/header.php"; 
$doc_sql = "select * from dropdown_lists order by id asc";
$doc_data = $crud->getData($doc_sql);

//  $sel = "select mt.id+1 as nextdoc_num, mt.document_no from master_table as mt LEFT JOIN master_table AS mt2 ON mt.id+1 = mt2.id WHERE mt2.id IS NULL ORDER BY mt.id LIMIT 1";

// $data = $crud->getData($sel);
// $docnum = "FOCUS".$data[0]['nextdoc_num'];


?>
 <style>
    .error{
      color: red;
    }
  </style>



	<?php include "includes/navbar.php"; ?>

	<?php include "includes/sidebar.php"; ?>


	<div class="mobile-menu-overlay"></div>

	<div class="main-container ">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-9 col-sm-12">
							<div class="title">
								<h4>Attachments</h4>
							</div>
							
						</div>
						<div class="col-md-3 col-sm-12">
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Attachments</li>
								</ol>
							</nav>
							
						</div>
						
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Attachments</h4><br>
							<!-- <p class="mb-30">All bootstrap element classies</p> -->
						</div>
						
					</div>
				<form method="post" name="addform" id="addform" enctype="multipart/form-data"  autocomplete="off">							

						<div class="row pt-2">
							<div class="col-md-6">              
				                <label  for="exampleInputEmail1">Attachment1
				                  <!-- <span class="star">*</span> --></label>
				                  <input type="file" class="form-control" name="attachment1" id="attachment1" title="Please upload photo (jpg, jpeg, png)" value="" onchange="return fileValidation(this.id,'previewImg')">
				                  <span class="star">Note:Upload photo (jpg, jpeg, png)</span>                  
				                  <img id="previewImg" alt="Uploaded Image Preview" width="100px" height="100px" style="display: none;" />                  
				                </div>

								<div class="col-md-6">              
				                <label  for="exampleInputEmail1">Attachment2
				                  <!-- <span class="star">*</span> --></label>
				                  <input type="file" class="form-control" name="attachment2" id="attachment2" title="Please upload photo (jpg, jpeg, png)" value="" onchange="return fileValidation(this.id,'previewImg')">
				                  <span class="star">Note:Upload photo (jpg, jpeg, png)</span>                  
				                  <img id="previewImg" alt="Uploaded Image Preview" width="100px" height="100px" style="display: none;" />                  
				                </div>					 						
						</div>

						<div class="row pt-2">
							<div class="col-md-6">              
				                <label  for="exampleInputEmail1">Attachment3
				                  <!-- <span class="star">*</span> --></label>
				                  <input type="file" class="form-control" name="attachment3" id="attachment3" title="Please upload photo (jpg, jpeg, png)" value="" onchange="return fileValidation(this.id,'previewImg')">
				                  <span class="star">Note:Upload photo (jpg, jpeg, png)</span>                  
				                  <img id="previewImg" alt="Uploaded Image Preview" width="100px" height="100px" style="display: none;" />                  
				                </div>

								<div class="col-md-6">              
				                <label  for="exampleInputEmail1">Attachment4
				                  <!-- <span class="star">*</span> --></label>
				                  <input type="file" class="form-control" name="attachment4" id="attachment4" title="Please upload photo (jpg, jpeg, png)" value="" onchange="return fileValidation(this.id,'previewImg')">
				                  <span class="star">Note:Upload photo (jpg, jpeg, png)</span>                  
				                  <img id="previewImg" alt="Uploaded Image Preview" width="100px" height="100px" style="display: none;" />                  
				                </div>					 						
						</div>

						<!-- <div class="pt-2">
                        <h4><u>Item Details<u></h4>
                 		 </div>

                 <div id="tooltest0" class="tooltest0 multi-fields">
                  <div class="multi-field row align-items-center">

 
                  <div class="col-md-3">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Item</label>
                      <input type="text" class="form-control"  id="item_name" name="item_name[]" title="Shape">
                      </div>
                  </div>

                  
                  <div class="col-md-3">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Units</label>
                      <input type="text" class="form-control"  id="units" name="units[]" title="Shape">
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Quantity</label>
                      <input type="text" class="form-control"  id="quantity" name="quantity[]" title="Shape">
                      </div>
                  </div>
                   <button type="button" class="remove-field mx-3 mr-1 mt-3" style="width:40px;height: 25px;"><i class="fa fa-minus" aria-hidden="true"></i></button>  
                    <button type="button" class="add-field mt-3" style="width:40px;height: 25px;"><i class="fa fa-plus"></i></button>
                </div>
              </div> -->
               <div id="tool-placeholder"></div>
						<div class="row pt-2">
							 <div class="col-md-6">
                			<input type="button" name="Back" value="Cancel" class="btn btn-danger float-left" onclick="location.href = 'manageforGoods.php'">
                		</div>
                		<div class="col-md-6">
              				<input type="submit" name="submit" value="Save" class="btn btn-primary float-right">
              			  	</div>
						</div>					 
					</form>

					
				</div>
				<!-- Default Basic Forms End -->
				
			</div>
			
		</div>
	</div>
	<!-- Footer -->
	<?php include "includes/footer.php"; ?>

	<script type="text/javascript">
		$( document ).ready(function() {
    //alert( "ready!" );
    $.ajax({
        url : 'actions.php',
        type : 'POST',
        data : {'action' : 'maxid_gen'},
        success : function(data){
        // console.log(data);          
            $('#document_no').val(data);
            
        }
    });
});
	</script>

	<script type="text/javascript" src="js/attachment.js"></script>