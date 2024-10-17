<!DOCTYPE html>
<html lang="en">
<?php include("include/header.php"); 

session_start(); 
include_once("crudop/crud.php");
$crud = new Crud();

$table1='student_info';
$rand=$_GET['rand'];

$qryStd1 = "SELECT  image,bank_document,ssc_document,inter_document,TC_document,other_document FROM " . $table1 . " where randomId='".$rand."'";
$resStd1 = $crud->getData($qryStd1);

?>



 <style type="text/css">

 #imagePreview img {
   width: 100px;
   max-height: 100px;
 }

</style>
<body>
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-1"></div> -->
      <!-- <div class="col-md-12"> -->
        <div class="card">
             
          <?php include("include/navbar.php"); ?> 
          
          <div class="card-body">
            <div class="row">
              
             
            </div>
              <h4 style="text-align:center; font-family: auto;margin-top:20px;margin-bottom:20px;">Applicants are invited for the Jntuk BTH / UNI International Collaboration Programme -2023.</h4>
          
      
            <form action="print_formCopy1.php" method="post" name="addform" id="addform" enctype="multipart/form-data"  autocomplete="off">
            <div class="row">
              
              <div class="col-md-12">
               <table class="table table-bordered">
                 <tr>
                   <th>Name</th>
                 
                   <th>Documents</th>
                 </tr>
                 <?php $i=1; $j=0;
                 
                 foreach ($resStd1 as $key => $value) {?>
                    <tr>
                    <th>Student image</th>
                       <td>
                         <a href="<?php echo $value['image']; ?>" download>
                        <img src="<?php echo $value['image'] ?>" width="120" height="100"> </a>
                       </td>
                     </tr>

                     <tr>
                      <th>Bank Document</th>
                       <td>
                         <a href="<?php echo $value['bank_document']; ?>" download>
                        <iframe src="<?php echo $value['bank_document'] ?>" width="120" height="100">Bank Document</iframe>
                         </a>
                       </td>
                     </tr>
                     <tr>
                     <th>SSC Document</th>
                       <td>
                         <a href="<?php echo $value['ssc_document']; ?>" download>
                        <iframe src="<?php echo $value['ssc_document'] ?>" width="120" height="100">SSC Document</iframe>
                         </a>
                       </td>
                     </tr>
                     <tr>
                     <th>Inter Document</th>
                        <td>
                         <a href="<?php echo $value['inter_document']; ?>" download>
                        <iframe src="<?php echo $value['inter_document'] ?>" width="120" height="100">Inter Documents</iframe>
                         </a>
                       </td>
                     </tr>
                     <tr>
                      <th>TC Document</th>
                         <td>
                         <a href="<?php echo $value['TC_document']; ?>" download><?php echo $value['TC_document']; ?>
                       
                         </a>
                       </td>
                     </tr>
                     <tr>
                      <th>Other Documents</th>
                        <td>
                         <a href="<?php echo $value['other_document']; ?>" download><?php echo $value['other_document']; ?>
                        
                         </a>
                       </td>
                     </tr>
                       
                       
                       
                       
                       
                    </tr>

                <?php $i++;} ?>

               </table>
             </div>
            
            </div>
          </form>
          </div>
        </div>
      <!-- </div> -->
      <!-- <div class="col-md-1"></div> -->
    </div>
  </div>
</body>
</html>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

