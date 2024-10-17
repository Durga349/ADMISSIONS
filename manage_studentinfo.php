<!DOCTYPE html>
<html lang="en">
<?php include("include/header.php"); 

session_start(); 
include_once("crudop/crud.php");
$crud = new Crud();

$table1='student_info';


$student="SELECT COUNT(std_name) AS NumberOfStudents FROM student_info";
$Std_data = $crud->getData($student);

$qryStd1 = "SELECT std_name ,f_name,randomId, bank_document FROM " . $table1 . " ORDER BY id DESC";
$resStd1 = $crud->getData($qryStd1);

?>



 <style type="text/css">

 #imagePreview img {
   width: 100px;
   max-height: 100px;
 }
 .table-container {
  overflow-x: auto;
  max-width: 100%;
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

              <h5 style="margin: 15px;">Total No.of Registers=<?php
              
             echo $Std_data[0]['NumberOfStudents'];
             ?></h5>
              
          
            </div>
              
          
      
            <form action="print_formCopy1.php" method="post" name="addform" id="addform" enctype="multipart/form-data"  autocomplete="off">
            <div class="row">
              
              <div class="col-md-12">
                <div class="table-container">
               <table class="table table-bordered table-responsive table-sm ">
                 <tr>
                   <th>S.No</th>
                   <th>Student Name</th>
                   <th>Father Name</th>
                   <th>Random Id</th>
                   <th>Document</th>
                 </tr>
                 <?php $i=1; $j=0;
                 
                 foreach ($resStd1 as $key => $value) { ?>
                    <tr>
                       <td><?php echo $i;?></td>
                       <td><?php echo $value['std_name'];?></td>
                       <td><?php echo $value['f_name'];?></td>
                       <td><a href="print_formCopy1.php?action=printform&rid=<?php echo $value['randomId'] ?>" target=_blank><?php echo $value['randomId']; ?> </a></td>
                       <td>
                        
                        <a href="upload_documents.php?rand=<?php echo $value['randomId']; ?>" target=_blank>DocumentLink</a></td>
                       
                    </tr>

                <?php $i++;} ?>

               </table>
               </div>
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

