<?php 

session_start(); 
include_once("crudop/crud.php");
$crud = new Crud();

if (isset($_POST['action']) && $_POST['action'] == 'save') {

$std_name      = isset($_POST['std_name'])?trim($_POST['std_name']):'';
$f_name        = isset($_POST['f_name'])?trim($_POST['f_name']):'';
$dob           = isset($_POST['dob'])?trim($_POST['dob']):'';
$gender        = isset($_POST['gender'])?trim($_POST['gender']):'';
$nationality   = isset($_POST['nationality'])?trim($_POST['nationality']):'';
$mob_number    = isset($_POST['mob_number'])?trim($_POST['mob_number']):'';
$alt_number    = isset($_POST['alt_number'])?trim($_POST['alt_number']):'';
$email         = isset($_POST['email'])?trim($_POST['email']):'';
$address       = isset($_POST['address'])?trim($_POST['address']):'';
$pass_details  = isset($_POST['pass_details'])?trim($_POST['pass_details']):'';
$pass_number   = isset($_POST['pass_number'])?trim($_POST['pass_number']):'';
$date_issue    = isset($_POST['date_issue'])?trim($_POST['date_issue']):'';
$local_details = isset($_POST['local_details'])?trim($_POST['local_details']):'';
$EM_Studied    = isset($_POST['EM_Studied'])?trim($_POST['EM_Studied']):'';
$eng_subject    = isset($_POST['eng_subject'])?trim($_POST['eng_subject']):'';

//////////////Payment Details/////////////

$bank_name    = isset($_POST['bank_name'])?trim($_POST['bank_name']):'';
$reference_collect    = isset($_POST['reference_collect'])?trim($_POST['reference_collect']):'';
$date_payment    = isset($_POST['date_payment'])?trim($_POST['date_payment']):'';
$amount    = isset($_POST['amount'])?trim($_POST['amount']):'';

$dec_note    = isset($_POST['dec_note'])?trim($_POST['dec_note']):'';

$rand =strtoupper(substr(uniqid(), 0,6));

/////////Storing Images///////////

if(!is_dir("Student_Folder/".$rand."/"))
    {
        mkdir("Student_Folder/".$rand."/");        
    }

    if(is_dir("Student_Folder/".$rand."/"))
    {
        $image_targetDir = "Student_Folder/".$rand."/";

        //echo $image_targetDir;
    
//////////////For Student Image////////////////

        if(isset($_FILES['image']) && $_FILES['image'] !==""){

         $imagefileName = basename($_FILES["image"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir.$rand.".". $extension;

    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetimageFilePath)){                                                              
        $image = $targetimageFilePath;
      //echo $image;
      }
        }

//////////////For Bank Document////////////////    

      if(isset($_FILES['bank_document']) && $_FILES['bank_document'] !==""){

         $imagefileName = basename($_FILES["bank_document"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir."Bank".".". $extension;

    if(move_uploaded_file($_FILES["bank_document"]["tmp_name"], $targetimageFilePath)){                                                              
        $bank_document = $targetimageFilePath;
      //echo $image;
      }
        }

//////////////For SSC Document////////////////        

        if(isset($_FILES['ssc_document']) && $_FILES['ssc_document'] !==""){

         $imagefileName = basename($_FILES["ssc_document"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir."SSC".".". $extension;

    if(move_uploaded_file($_FILES["ssc_document"]["tmp_name"], $targetimageFilePath)){                                                              
        $ssc_document = $targetimageFilePath;
      //echo $image;
      }
        }

//////////////For Inter Document////////////////        

        if(isset($_FILES['inter_document']) && $_FILES['inter_document'] !==""){

         $imagefileName = basename($_FILES["inter_document"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir."Inter".".". $extension;

    if(move_uploaded_file($_FILES["inter_document"]["tmp_name"], $targetimageFilePath)){                                                              
        $inter_document = $targetimageFilePath;
      //echo $image;
      }
        }

//////////////For Transfer Certificate////////////////        

        if(isset($_FILES['TC_document']) && $_FILES['TC_document'] !==""){

         $imagefileName = basename($_FILES["TC_document"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir."TC".".". $extension;

    if(move_uploaded_file($_FILES["TC_document"]["tmp_name"], $targetimageFilePath)){                                                              
        $TC_document = $targetimageFilePath;
      //echo $image;
      }
        }

//////////////For Other Document////////////////        

        if(isset($_FILES['other_document']) && $_FILES['other_document'] !==""){

         $imagefileName = basename($_FILES["other_document"]["name"]);

      $extension = pathinfo($imagefileName, PATHINFO_EXTENSION);
    
     $targetimageFilePath = $image_targetDir."ENTRANCE".".". $extension;

    if(move_uploaded_file($_FILES["other_document"]["tmp_name"], $targetimageFilePath)){                                                              
        $other_document = $targetimageFilePath;
      //echo $image;
      }
        

    }
}


  //print_r($_POST);

//////////Student Information & PAYMENT DETAILS/////////  

     $ins_stu = "insert into student_info set std_name = '".$std_name."', f_name = '".$f_name."', dob = '".$dob."', gender = '".$gender."', nationality = '".$nationality."', mob_number = '".$mob_number."', alt_number = '".$alt_number."', email = '".$email."', address = '".$address."', pass_details = '".$pass_details."', pass_number = '".$pass_number."', date_issue = '".$date_issue."', local_details = '".$local_details."', EM_Studied = '".$EM_Studied."', eng_subject = '".$eng_subject."', image = '".$image."', bank_document = '".$bank_document."', ssc_document = '".$ssc_document."', inter_document = '".$inter_document."', TC_document = '".$TC_document."', other_document = '".$other_document."', bank_name = '".$bank_name."', reference_collect = '".$reference_collect."', date_payment = '".$date_payment."', amount = '".$amount."', declaration = '".$dec_note."',  randomId = '".$rand."' ";
    //exit;
  
    $ins_data = $crud->execute($ins_stu);

//////////(3+1+2)-Years ICP (B.Tech & B.S + M.S ) Program with exit option://////////    

    // $branch =  $_POST['branch'];

    // $branch_cnt = count($branch);
//echo $cnt;
    $pgm1=$_POST['pgm1'];
    $pgm2=$_POST['pgm2'];
/*if($_POST['pgm1']=="yes")
{*/
        for ($i=1; $i<=4; $i++) 
        { 

          $preference   = $_POST['preference'.$i]; 
          $course       = $_POST['course'.$i];
          $branch       = $_POST['branch'.$i];  
            
          $randomId = $rand.$i;

          $p_randomId = $rand;

                
                if($i==1 || $i==2 || $i==3)
                {
                    $branch_qry = "insert into preferences set pgmtype='BTH', pgmstatus='$pgm1',preference = '".$preference."', course='".$course."',branch = '".$branch."', p_randomId = '".$p_randomId."', randomId ='".$randomId."'";
                    $branch_data = $crud->execute($branch_qry);
                }
                if($i==4){
                    $branch_qry = "insert into preferences set pgmtype='UNI' ,pgmstatus='$pgm2',preference = '".$preference."', course='".$course."',branch = '".$branch."', p_randomId = '".$p_randomId."', randomId ='".$randomId."'";
                    $branch_data = $crud->execute($branch_qry);
                }

        }


/*}*/
//exit;

//////////// ENTRANCE EXAMINATIONS DETAILS /////////////
   $countfiles = $_POST['rowcounts'];

   for ($i=0; $i < $countfiles; $i++) { 

  $examination =  $_POST['examination_1'][$i];
  $marks_obtained = $_POST['marks_obtained'][$i];
  $rank = $_POST['rank'][$i];
  $remarks = $_POST['remarks'][$i];  
    
  $randomId = $rand.$i;

  $p_randomId = $rand;

       $exam_qry = "insert into entranceExamDetails set examination = '".$examination."', marks_obtained='".$marks_obtained."',rank = '".$rank."',remarks = '".$remarks."', p_randomId = '".$p_randomId."', randomId='".$randomId."'";
   
      $exam_data = $crud->execute($exam_qry);
}


/////////////INSERT EDUCATIONAL QUALIFICATIONS////////////

//echo $cnt;

for ($i=1; $i<=2; $i++) { 

  $qualification = $_POST['qualification'.$i]; 
  $examination_1 = $_POST['examination'.$i];
  $university = $_POST['university'.$i];
  $monthYear = $_POST['monthYear'.$i];
  $medium = $_POST['medium'.$i];
  $division = $_POST['division'.$i];
  $marksSecured = $_POST['marksSecured'.$i];
  $percMarks = $_POST['percMarks'.$i];  
    
  $randomId = $rand.$i;

  $p_randomId = $rand;

       $edu_qry = "insert into education set qualification = '".$qualification."', examination='".$examination_1."',university = '".$university."',monthYear = '".$monthYear."', medium = '".$medium."', division = '".$division."', marksSecured = '".$marksSecured."', percMarks = '".$percMarks."', p_randomId = '".$p_randomId."', randomld='".$randomId."'";
   
      $edu_data = $crud->execute($edu_qry);

}

if ($ins_data && $branch_data && $exam_data && $edu_data){

        $from = "support@jntukbiotech.com";
        $to   = $email;
        $subject = "Your Email Confirmation OTP";
        $headers = "From:" . $from;
        $message = "ReferenceId :".$rand; 
        $mail = mail($to,$subject,$message, $headers);

        echo $rand;
        }else{
        echo "false";
//exit;
      
    /*  if ($ins_data && $branch_data && $exam_data && $edu_data){
        echo $rand;
        }else{
        echo "false";
    }*/

}
}


if (isset($_POST['action1']) && $_POST['action1'] == 'user_email') {
  
    $email_qry = "select * from student_info where email = '".$_POST['email']."'";
    //exit;
    $email_data = $crud->getData($email_qry);

    if (count($email_data)>0){
      //echo "test";
      //exit;
      echo "true";
    }
    else{
      echo "false";
    }
  }

  if (isset($_POST['action1']) && $_POST['action1'] == 'user_reference') {
  
     $refe_qry = "select * from student_info where randomId = '".$_POST['rand']."'";
    // exit;
    $refe_data = $crud->getData($refe_qry);

    if (count($refe_data)>0){
      //echo "test";
      //exit;
      echo "true";
    }
    else{
      echo "false";
    }
  }

 ?>