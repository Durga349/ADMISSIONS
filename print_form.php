  <?php 
session_start(); 
include_once("crudop/crud.php");
$crud = new Crud();

$stdstd_name=$stdf_name=$stddob=$stdgender=$stdnationality=$stdaddress=$stdmob_number=$stdalt_number=$stdemail=$stdlocal_details=$stdEM_Studied=$stdeng_subject=$stdimage=$stdpreference=$stdreference_collect=$stddate_payment=$stdbank_name=$stdamount=$stdexamination_1=$stduniversity="";

$a=$b="";
if(isset($_POST['print']))
{

  $a=$_POST['referenceno'];
  $b=$_POST['email'];



$table1='student_info';

$table2='education';

$table3='entranceExamDetails';

$table4='preferences';


/*$refId ='649433e1d6';*/



$qryStd="select * from ".$table1." where (randomId ='$a' or email='$b') order by id desc";

$resStd = $crud->getData($qryStd);

$rid=$resStd[0]['randomId'];

if(count($resStd)==0)
{
  echo "<script>alert('Please Give Proper Details...!');location.href='verification.php'</script>";
}

//print_r($resStd);

  $qryEdu="select * from ".$table2." where p_randomId ='".$rid."' order by id asc ";
// exit;
$resEdu = $crud->getData($qryEdu);


 $qryEntrance="select * from ".$table3." where p_randomId = '".$rid."' order by id asc";
$resEntrance = $crud->getData($qryEntrance);

//print_r($resEntrance);
 $qryPref="select * from ".$table4." where p_randomId = '".$rid."' order by id asc ";

$resPref = $crud->getData($qryPref);




 //echo $resStd[0]['std_name'];




//$stdstd_name=$resStd[0]['stdstd_name'];


$stdstd_name = $resStd[0]['std_name'];
$stdf_name = $resStd[0]['f_name'];
$stddob= $resStd[0]['dob'];
$stdgender = $resStd[0]['gender'];
$stdnationality = $resStd[0]['nationality'];
$stdaddress = $resStd[0]['address'];
$stdmob_number= $resStd[0]['mob_number'];
$stdalt_number= $resStd[0]['alt_number'];
$stdemail= $resStd[0]['email'];
$stdlocal_details= $resStd[0]['local_details'];
$stdEM_Studied= $resStd[0]['EM_Studied'];
$stdeng_subject= $resStd[0]['eng_subject'];
$stdimage= $resStd[0]['image'];
$stdreference_collect= $resStd[0]['reference_collect'];
$stddate_payment= $resStd[0]['date_payment'];
$stdbank_name= $resStd[0]['bank_name'];
$stdamount= $resStd[0]['amount'];


}
else
{
    echo "<script>alert('Please Give Proper Details...!');location.href='verification.php'</script>";
}  

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <title>ICP</title>
  <style>
    body
    {
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
   /* .btn
    {
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
      font-size: 25px !important;
    }
    .btn:hover
    {
      background: linear-gradient(135deg, #9b59b6, #71b7e6);
       font-size: 30px !important;
    }*/
    label{
      font-weight: bold;
    }
    .image{
      width: 25%;
      height: 50%;
    }
    .note{
      background-color: #e2f8ff;
      padding: 10px 20px;
      border-radius: 20px;
      border: 1px solid #64d1f4;
    }
    .image img{
      width: 25%;
      height: 50%;
    }
 
  </style>
</head>
<body>
  <form method="post">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-1"></div> -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <img src="Images/jntuklogo.png">
              </div>
            
            </div>
          </div>
          <h4 style="text-align:center; font-family: auto;margin-top:20px;margin-bottom:20px;">Filled Application Form for   the Jntuk BTH / UNI International Collaboration Programme -2023.</h4>
          <div class="card-body">
            <div class="card-title"><h5><u>Student Information:</u></h5></div>
            <br>
            <div class="row">
              
              <div class="col-md-4">
                <label for="">Student Name</label>
               <input type="text" name="std_name" id="std_name" class="form-control" value="<?php echo $stdstd_name;?>" required readonly>
               <div class="form-text">
                 
               </div>
              </div>

              <div class="col-md-4">
                <label for="">Father/Mother Name</label>
                <input type="text" name="f_name" id="f_name"  class="form-control" value="<?php echo $stdf_name;?>" required readonly required>
              </div>

              <div class="col-md-4">
                <label for="">Date of Birth</label>
                <input type="text" name="dob" id="dob" class="form-control" value="<?php echo $stddob;?>" required readonly required>

              </div>
               <div class="col-md-4">
                <label for="">Gender</label>
                <input type="text" name="gender" id="gender" class="form-control" value="<?php echo $stdgender;?>" required readonly>
   
 
              </div>

              <div class="col-md-4">
                <label for="">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control"  required value="<?php echo $stdnationality;?>" readonly>
              </div>
                 <div class="col-md-4">
                <label for="">Address for Communication</label>
                <textarea name="address" id="address"  class="form-control" readonly><?php echo $stdaddress ;?></textarea>

              </div>
                 <div class="col-md-4">
                <label for="">Mobile Number</label>
               <input type="text" name="mob_number" id="mob_number" class="form-control" required value="<?php echo $stdmob_number;?>" readonly>

              </div>
                 <div class="col-md-4">
                <label for="">Alternate Number</label>
               <input type="text" name="alt_number" id="alt_number" class="form-control"  required value="<?php echo $stdalt_number;?>" readonly>
              </div>

              <div class="col-md-4">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control"  required value="<?php echo $stdemail;?>" readonly>

              </div>

              <div class="col-md-4">
                <label for="">Local/Non-Local Details</label>
                <textarea name="local_details" id="local_details" class="form-control" required readonly><?php echo $stdlocal_details;?></textarea>
               
              </div>

              <div class="col-md-4">
                <label for="">Studied in English Medium</label>
                <input type="text" name="EM_Studied" id="EM_Studied" class="form-control" required value="<?php echo $stdEM_Studied;?>"readonly> 
                       </div>

              <div class="col-md-4">
                <label for="">Studied with English as a Subject</label>
                <input type="text" name="eng_subject" id="eng_subject" class="form-control" required value="<?php echo $stdeng_subject;?>"readonly> 

              </div>
              <div class="col-md-6  image">
                <label for="">Student Image</label> <br>
                <img src="<?php echo $stdimage;?>">
              </div>
              <div class="col-md-9"></div>

             <div class="col-md-9 card-title mt-3">
               <u> <b> ICP  Program:</b></u>&nbsp;
              </div>
              <div class="col-md-12 mt-2">
              <table class="table table-bordered ">
                 <tr>
                   <th>S.No</th>
                   <th>Programme</th>
                   <th>Status</th>
                   <th>Course</th>
                   <th>Branch</th>
                   <th>Preference</th>
                 </tr>

                 <?php $i=1; $j=0;
                 
                 foreach ($resPref as $key => $value) {?>
                    <tr>
                       <td><?php echo $i;?></td>
                       <td><?php echo $value['pgmtype'];?></td>
                       <td><?php echo $value['pgmstatus'];?></td>
                       <td><?php echo $value['course'];?></td>
                       <td><?php echo $value['branch'];?></td>
                       <td><?php echo $value['preference'];?></td>
                    </tr>

                    <?php $i++;} ?>
                     </table>
             </div>
                <!-- <div class="mt-3 note " >
                   <p> <b><u>Note:</u></b></p>
                  
                   <ul> 
                    <li style="font-family:auto;">6 Years International Collaborative Program (3+1+2) with exit option at the end of 4th Year (3 Years of study at JNTUK and 1 Year of study at BTH - Sweden +2 years of study for Masters at BTH – Sweden (optional)</li>
                    <li style="font-family:auto;">At the end of 4th Year 1st semester if the student desires to continue Masters Program, he/she shall apply separately to the BTH - Sweden.</li>
                    <li style="font-family:auto;">For Complete details i.e Branches and Specializations offered, please look into the “Information Booklet” available in the website.</li>
                    <li style="font-family:auto;"> 4 Years International Collaborative Program (3+1) (3 Years of study at JNTUK and 1 Year of study at UNI - USA </li>
                   <li style="font-family:auto;">For Complete details i.e Branches and Specializations offered, please look into the “Information Booklet” available in the website.
                   </li>
                    </ul>
                    

                 </div> -->
                  



             <div class="col-md-9 card-title mt-3">
                <u><b>PAYMENT DETAILS:Rs.1500/- in favour of “The Registrar JNTUKakinada Admissions:</b></u>&nbsp;
              </div>
              

              <div class="col-md-12 mt-2">
               <table class="table table-bordered">
                 <tr>
                   <th>Name of the Bank</th>
                   <th>SBI Collect Reference No</th>
                   <th>Date of Payment</th>
                   <th>Amount</th>
                 </tr>

                 <tr>
                   <td><?php echo $stdbank_name;?>
                   <!-- <input type="text" value="SBI" name="bank_name" id="bank_name" class="form-control" value="<?php echo $stdbank_name;?>" readonly> -->
                 </td>
                   <td><?php echo $stdreference_collect;?>
                     <!-- <input type="text" name="reference_collect" id="reference_collect" class="form-control" value="<?php echo $stdreference_collect;?>"readonly > -->
                   </td>
                   <td><?php echo $stddate_payment;?>
                    <!-- <input type="text" name="date_payment" id="date_payment" class="form-control" value="<?php echo $stddate_payment;?>"readonly> -->

                    </td>
                   <td><?php echo $stdamount;?>
                  <!--  <input type="text" value="1500" class="form-control" name="amount" id="amount" 
                    value="<?php echo $stdamount;?>" readonly> --></td>
                 
                 </tr>
                 
               </table>
             </div>


             <div class="col-md-9 card-title mt-3">
               <u> <b>EDUCATIONAL QUALIFICATIONS:</b></u>&nbsp;
              </div>
              
             

              <div class="col-md-12 mt-2">
               <table class="table table-bordered">
                 <tr>
                   <th>Qualification</th>
                   <th>Name of Examination </th>
                   <th>Name of the University/ Board</th>
                   <th>Month/ Year of Passing</th>
                   <th>Medium of Instruction</th>
                   <th>Division</th>
                   <th>Marks Secured</th>
                   <th>% Marks</th>
                 </tr>

                 <?php 
                 $i=1; $j=0;
                 
                 foreach ($resEdu as $key => $value) {
              


                    ?>
                 <tr>
                 <td><?php echo $value['qualification'] ?></td> 

                  <td>
                    <?php echo $value['examination']; ?>
                    
                  </td>
                  <td>
                  <?php echo $value['university']; ?>
                  </td>
                  
                  <td><?php echo $value['monthYear'];?></td>
                   <td><?php echo $value['medium'];?></td>

                  
                     <td>
                    <?php echo $value['division'];?>
                  </td>
                  <td>
                 
                   <?php echo $value['marksSecured'];?>
                      </td>
                      <td>
                      
                    <?php echo $value['percMarks'];?>
                      

                  </td>
               </tr>


                     <?php $i++; } ?>

                 
               </table>
             </div>
             <div class="col-md-9 card-title mt-3">
                <u><b>ENTRANCE EXAMINATIONS DETAILS:</b></u>&nbsp;
              </div>
        


                 <div class="table table-bordered " id="broucher_hide">
                   <table width="100%"> 
                    <thead>
                      <tr>
                     <th>S.No</th>
                     <th>Name of The Entrance Examination </th>
                     <th>Marks Obtained </th>
                     <th>Rank</th>
                     <th>Remarks</th>
                   </tr>  
                    <?php $i=1; 
            
                 foreach ($resEntrance as $key => $value) {

                    ?>                   
                    </thead>

                    <tbody class="table1">
                      <tr id="row">
                        <td><?php echo $i; ?></td>                        
                        <td>
                          <?php echo  str_replace("_"," ",$value['examination']);?>
                        </td>
                          
                         
                         <p id="msg1" class="error"></p>
                        </td>
                        <td>                           
                          <?php echo $value['marks_obtained'];?>
                         <p id="msg2" class="error"></p>
                        </td>
                        <td>
                            <?php echo  $value['rank'];?>
                            <p id="msg3" class="error"></p>
                        </td>
                        <td>
                            <?php echo $value['remarks'];?>
                            <p id="msg4" class="error"></p>
                        </td> 
                        
                        
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                  </div>
                  <div class="mt-3 note col-md-12 " >
                   <p> <b><u>Note:</u></b></p>
                   <h5 style="font-family:auto; font-weight: bold;">Please enclose the attested Xerox copies of the below documents along with this application should reach “ The Director of Admissions, JNTUK, Kakinada – 533 003” on or before 27-07 -2023</h5>
                   <h6><b><u>list of Documents to be enclosed:</u></b></h6>
                   
                   
                   <ul> 
                    <li style="font-family:auto;">Payment of Rs.1500/- in favour of Registrar, JNTUKakinada Admissions,
                   payable through SBI Collect.  </li>
                <li style="font-family:auto;">SSC/Secondary Education (10th class) Certificate</li>
                <li style="font-family:auto;">Qualifying Examination/Intermediate or (10 +2) or equivalent Certificate</li>
                <li style="font-family:auto;">Transfer Certificate and Study Certificate. </li>
                <li style="font-family:auto;">Details of JEE MAINS/AP EAPCET/ TS EAMCET, Hall Ticket & Rank Card etc....</li>
                </ul>
                

                 </div>
                  <div class="mt-4 ml-2" style="font-family:auto">
            <input type ="checkbox"   value="note" checked> &nbsp; &nbsp; I declare that all statements made in this form are true and complete. I understand that untrue statements may cause Expulsion from the programme.
            </div>
             
<!-- 
             <div class="col-md-12 mt-5 ">
              <button class="btn btn-block text-white">Register</button>
             </div> -->

             <div class=" col-md-12 mt-3">
              <button class="btn btn-primary float-right px-4" onclick="return printPage()" id="print">Print</button>
              </div> 
             




            </div>
          </div>
          <div class="card-footer" style="font-family: auto;">
            <div class="col-md-12 text-center">
              <b >All Copyright © 2023 Jawaharlal Nehru Technological University, Kakinada. All Rights Reserved.</b>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-1"></div> -->

    </div>
  </div>
  </form>
</body>
<script>
  
function printPage() {
  var c= confirm("Do you want print")
  if(c==true)
  {window.print();return true;}
else
  return false;
}
</script>
</html>