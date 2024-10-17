<?php 
session_start();
include("crudop/crud.php");
$crud =new Crud();
$tableName='student_info';

// ==========================Save form=====================================
if(isset($_POST['action']) && $_POST['action']=='submit') {

$email          =isset($_POST['email'])?trim($_POST['email']):'';
//$refId ='649433e1d6';
$refId   =isset($_POST['referenceno'])?trim($_POST['referenceno']):'';

if($email != '' || $refId != ''){
 $qrLogins="SELECT * FROM ".$tableName." WHERE email='".$email."' OR randomId ='".$refId."'";   
    //exit;  
 }
  
$log_data =$crud->getData($qrLogins);

  if (count($log_data)>0){
    
    echo "true";
     }else{
        echo "false";
        }

}

?>