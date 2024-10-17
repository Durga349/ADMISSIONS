<!DOCTYPE html>
<html lang="en">
<?php include("include/header.php"); ?>
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
              <div class="col-md-12 demos">
                
                <a href="pdf/NEW UNI - USA Booklet on 18.05.2023.pdf" target="_blank"  style="float:right; margin-left: 20px;"><i class="fas fa-file-pdf" style="color:red;font-size:24px;margin-right:5px;"></i>UNI-USA Brochure</a>

                <a href="pdf/FINAL_ICP_Booklet_web_2023_24_BTH_Sweden_GVE95_Latest69_1.pdf"  target="_blank"  style="float:right;"><i class="fas fa-file-pdf" style="color:red;font-size:24px;margin-right:5px;"></i>ICP Brochure</a>

              </div>
             
            </div>
              <h4 style="text-align:center; font-family: auto;margin-top:20px;margin-bottom:20px;">Applicants are invited for the Jntuk BTH / UNI International Collaboration Programme -2023.</h4>
            <div class="card-title"><h4><i class="fa-solid fa-user-tie"></i> Student Information:-</h4><br></div>
          <!--   <div class="card-title"><h4><i class="fa-solid fa-user-tie"></i>  Student Information:-</h4><br></div> -->
            <form method="post" name="addform" id="addform" enctype="multipart/form-data"  autocomplete="off">
            <div class="row">
              
              <div class="col-md-3">
                <label for="">Student Name</label> <span>*</span>
                <input type="text" class="form-control" name="std_name" id="std_name" >
              </div>

              <div class="col-md-3">
                <label for="">Father / Mother Name</label> <span>*</span>
                <input type="text" class="form-control" name="f_name" id="f_name" >
              </div>

             <div class="col-md-3">
              <label for="date-input">Date of Birth:</label>
              <input type="date" id="date-input" name="dob" class="form-control">
     <p id="error-message" style="color: red; display: none;">Invalid date! Please enter a date between 1985 and 2015.</p>
              </div>
              <div class="col-md-3 ">
                <label for="">Gender</label> <span>*</span>
                <select name="gender" id="gender" class="form-control form-select">
                  <option value="">----Select Gender----</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <div class="col-md-3 mt-3">
                <label for="">Nationality</label> <span>*</span>
                <input type="text" class="form-control" name="nationality" id="nationality" >
              </div>
              <div class="col-md-3 mt-3">
                <label for="">Mobile Number</label> <span>*</span>
                <input type="text" class="form-control" name="mob_number" id="mob_number" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="10">
              </div>

              <div class="col-md-3 mt-3">
                <label for="">Alternate Number</label> <span>*</span>
                <input type="text" class="form-control" name="alt_number" id="alt_number" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="10" >
              </div>

              <div class="col-md-3 mt-3">
                <label for="">Email</label> <span>*</span>
                <input type="email" class="form-control" name="email" id="email" onblur="checkemail(this.value)">
              </div>

              <div class="col-md-3 ">
                <label for="">Address for Communication</label> <span>*</span>
                <textarea name="address" id="address" class="form-control" ></textarea>
              </div>

                <div class="col-md-3 mt-3">
                <label for="">Passport Details</label> 
                <textarea name="pass_details" id="pass_details" class="form-control" ></textarea>
              </div>

               <div class="col-md-3 mt-3">
                <label for="">Passport Number</label> 
                <input type="text" class="form-control" name="pass_number" id="pass_number" >
              </div>
              <div class="col-md-3 mt-3">
                <label for="">Date/Place of Issue</label> 
                <input type="text" class="form-control" name="date_issue" id="date_issue" >
              </div>

              <div class="col-md-3 mt-3">
                <label for="">Local/Non-Local Details</label> <span>*</span>
                <textarea class="form-control"  name="local_details" id="local_details"></textarea>
                
              </div>
              
              <div class="col-md-3 mt-3">

                <label for=""> Studied in English Medium</label> <span>*</span>
                <select name="EM_Studied" id="EM_Studied" class="form-control form-select" >
                  <option value="">----Select No.of years----</option>
                  <option value="2">2</option>
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="10+">10+</option>
                </select>
              </div>
              <div class="col-md-3 mt-3">

                <label for="">Studied with English as a Subject<span>*</span></label>
                <select name="eng_subject" id="eng_subject" class="form-control form-select" >
                  <option value="">----Select No.of years----</option>
                  <option value="2">2</option>
                  <option value="5">5 </option>
                  <option value="10">10 </option>
                  <option value="10+">10+ </option>
                </select>
              </div>

            <br><br>
              
              <div class="col-md-9 card-title mt-5"><h5><u>(3+1+2)-Years ICP (B.Tech & B.S + M.S ) Program  with exit option:</u> <span>*</span></h5><br>
              </div>
              <div class="col-md-3 mt-5">
                <input type="radio" name="pgm1" id="check_year" value="yes" >
                <label for="yes" >Yes</label>&nbsp;
                <input type="radio" name="pgm1" id="check_year" value="no">
                <label for="no" >No</label> &nbsp;<br>
                <label for="check_year" generated="true" class="error" style="display: none;">This field is required .</label> 
              </div>

              <div class="col-md-12">
               <table class="table table-bordered ">
                 <tr>
                   <th>S.No</th>
                   <th>Branch</th>
                   <th>Preference</th>
                 </tr>
                 <tr>
                   <td  style="width: 12px;">1</td>
                   <td><b>B.Tech - Electronics and Communications Engineering</b>
                    <input type="hidden" value="B.Tech" name="course1">
                    <input type="hidden" value="ECE" name="branch1">
                   </td>
                   <td>
                     <select name="preference1" id="branch_ece" class="form-control form-select" required onchange="checkPrf1(this.value)">
                      <option value="">--Select your option---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>                     
                     </select>
                   </td>
                 
                 </tr>

                 <tr>
                   <td  style="width: 12px;">2</td>
                   <td><b>B.Tech – Computer Science and Engineering</b>
                   <input type="hidden" value="B.Tech" name="course2">
                  <input type="hidden" value="CSE" name="branch2">
                 </td>
                   <td>
                     <select name="preference2" id="branch_cse" class="form-control form-select" required 
                     onchange="checkPrf2(this.value)">
                      <option value="" selected>--Select your option---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>                      
                     </select>
                   </td>                 
                 </tr>

                 <tr>
                   <td  style="width: 12px;">3</td>
                   <td><b>B.Tech - Computer Science and Engineering (AI & ML)</b>
                    <input type="hidden" value="B.Tech" name="course3">
                    <input type="hidden" value="CSE(AI)" name="branch3">
                  </td>
                   <td>
                     <select name="preference3" id="branch_cse_AI" class="form-control form-select" required onchange="checkPrf3(this.value)">
                      <option value="">--Select your option---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>                     
                     </select>
                   </td>                 
                 </tr>                
               </table>
             </div>

             <div class="mt-3 note " >
                   <p> <b><u>Note:</u></b></p>
               
                   <ul> 
                    <li style="font-family:auto">6 Years International Collaborative Program (3+1+2) with exit option at the end of 4th Year (3 Years of study at JNTUK and 1 Year of study at BTH - Sweden +2 years of study for Masters at BTH – Sweden (optional)</li>
                    <li style="font-family:auto">At the end of 4th Year 1st semester if the student desires to continue Masters Program, he/she shall apply separately to the BTH - Sweden.</li>
                    <li style="font-family:auto">For Complete details i.e Branches and Specializations offered, please look into the “Information Booklet” available in the website.</li>
                    </ul>


                 </div>

             <div class="col-md-9 card-title mt-5"><h5><u>(3+1)-Years ICP (B.Tech) Program  :</u><span>*</span></h5><br>
              </div>
              <div class="col-md-3 mt-5">
                <input type="radio" name="pgm2" id="yes" value="yes">
                <label for="yes" >Yes</label> &nbsp;
                <input type="radio" name="pgm2" id="no" value="no">
                <label for="no" >No</label> &nbsp;<br>
                <label for="check_icp" generated="true" class="error" style="display: none;">This field is .</label> 



              </div>

              <div class="col-md-12">
               <table class="table table-bordered ">
                 <tr>
                   <th>S.No</th>
                   <th>Branch</th>
                   <th>Preference</th>
                 </tr>
                 <tr>
                   <td  style="width: 12px;">1</td>
                   <td><b>B.Tech - Electrical and Electronics Engineering</b>
                    <input type="hidden" value="B.Tech" name="course4">
                    <input type="hidden" value="EEE" name="branch4">
                   </td>
                   <td>     
                   <input type="text" name="preference4" id="branch_eee" class="form-control" value = "1" readonly>               
                     <!-- <select name="preference[]" id="branch_eee" class="form-control form-select" required>
                      <option value="">--Select your option---</option>
                      <option value="1">1</option>                      
                     </select> -->
                   </td>
                 
                 </tr>
               </table>
             </div>

             <div class="mt-3 note" style="width:100%;">
             <p><b><u>Note:</u></b></p>
            
             <ul>
             <li style="font-family:auto"> 4 Years International Collaborative Program (3+1) (3 Years of study at JNTUK and 1 Year of study at UNI - USA </li>
             <li style="font-family:auto">For Complete details i.e Branches and Specializations offered, please look into the “Information Booklet” available in the website.
             </li>
             </ul>
            
             </div>



        <div class="col-md-9 card-title mt-5"><h5><u>PAYMENT DETAILS:Rs.1500/- in favour of “The Registrar JNTUKakinada Admissions.:</u><span>*</span></h5><br>
              </div>
              <div class="col-md-3 mt-5">
                <input type="radio" name="check_payment" id="yes">
                <label for="yes" >Yes</label> &nbsp;
                <input type="radio" name="check_payment" id="no">
                <label for="no" >No</label> &nbsp;<br>
                <label for="check_payment" generated="true" class="error" style="display: none;">This field is required .</label>
              </div>
              <table class="table table-bordered ">
                 <tr>
                   <th>Name of the Bank</th>
                   <th>SBI Collect Reference No.</th>
                   <th>Date of Payment</th>
                   <th>Amount</th>
                 </tr>
                 <tr>
                   <td><input type="text" class="form-control" name="bank_name" id="bank_name" value="SBI" readonly></td>
                   <td><input type="text" class="form-control" name="reference_collect" id="reference_collect" ></td>
                   <td><input type="date" class="form-control" name="date_payment" id="date_payment" ></td>
                   <td><input type="text" class="form-control" name="amount" id="amount" value="1500/-" readonly></td>
                 </tr>
               </table>

               <div class="col-md-9 card-title mt-5"><h5><u>EDUCATIONAL QUALIFICATIONS:</u><span>*</span></h5><br>
              </div>
              <div class="col-md-3 mt-5">
                <input type="radio" name="check_education" id="yes">
                <label for="yes" >Yes</label> &nbsp;
                <input type="radio" name="check_education" id="no">
                <label for="no" >No</label> &nbsp;<br>
                <label for="check_education" generated="true" class="error" style="display: none;">This field is required .</label> 
              </div>
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

                 <tr>
                   <th>SSC (10th// Equivalent)</th>
                   <td><input type="text" class="form-control" name="examination1" id="ssc_exam_name"  required></td>
                   <td><input type="text" class="form-control" name="university1" id="ssc_university_name" required></td>
                   <td><input type="month" class="form-control" name="monthYear1" id="ssc_year_passing" required></td>
                   <td><input type="text" class="form-control" name="medium1" id="ssc_medium" required></td>
                   <td><input type="text" class="form-control" name="division1" id="ssc_division" required></td>
                   <td><input type="text" class="form-control" name="marksSecured1" id="ssc_marks_secured" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="3" required></td>
                   <td><input type="text" class="form-control" name="percMarks1" id="ssc_marks_percentage" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="2" required></td>
                 </tr>
                 <tr>
                   <th>Intermediate/Equivalent (10+2)</th>
                   <td><input type="text" class="form-control" name="examination2" id="IPE_exam_name" required></td>
                   <td><input type="text" class="form-control" name="university2" id="IPE_university_name" required></td>
                   <td><input type="month" class="form-control" name="monthYear2" id="IPE_year_passing" required></td>
                   <td><input type="text" class="form-control" name="medium2" id="IPE_medium" required></td>
                   <td><input type="text" class="form-control" name="division2" id="IPE_division" required></td>
                   <td><input type="text" class="form-control" name="marksSecured2" id="IPE_marks_secured" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="3" required></td>
                   <td><input type="text" class="form-control" name="percMarks2" id="IPE_marks_percentage" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="2" required></td>
                 </tr>
               </table>


               <div class="col-md-9 card-title mt-5"><h5><u>ENTRANCE EXAMINATIONS DETAILS:</u><span>*</span></h5><br>
              </div>
              <div class="col-md-3 mt-5">
                <input type="radio" name="check_exam" id="yes">
                <label for="yes" >Yes</label> &nbsp;
                <input type="radio" name="check_exam" id="no">
                <label for="no" >No</label> &nbsp; <br>
                <label for="check_exam" generated="true" class="error" style="display:none;">This field is required .</label> 
              </div>

              <div  id="broucher_hide">
                   <table class="table table-bordered" width="100%"> 
                    <thead>
                      <tr>
                     <th>S.No</th>
                     <th>Entrance Exam Name </th>
                     <th>Marks Obtained </th>
                     <th>Rank</th>
                     <th>Remarks</th>
                   </tr>                     
                    </thead>

                    <tbody class="table1">
                      <tr id="row">
                        <td>1.</td>                        
                        <td>
                          <select name="examination_1[]" id="examination" class="form-control form-select" required>
                            <option value="">--Select--</option>
                            <option value="JEE_MAINS">JEE MAINS-2023</option>
                            <option value="AP_EAPCET">AP EAPCET-2023</option>
                            <option value="TS_EAMCET">TS EAMCET-2023</option>
                          </select>
                         
                         <p id="msg1" class="error"></p>
                        </td>
                        <td>                           
                          <input type="text" class="form-control" id="marks_obtained" name="marks_obtained[]" required>
                         <p id="msg2" class="error"></p>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="rank" name="rank[]" required>
                            <p id="msg3" class="error"></p>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="remarks" name="remarks[]" required>
                            <p id="msg4" class="error"></p>
                        </td> 
                        
                        <td colspan="2" style="text-align: center;"><a href="javascript:void(0)" class="btn btn-info addRow">+</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </div>


                  <div class="mt-3 note" style="width:100%;">
                   
                   <h6><b><u>List of Soft Copies that need to be uploaded:</u></b></h6>                   
                   <table class="table table-bordered" width="100%">
                    <tr>
                      <th>S.No</th>
                     <th>File Type</th>
                     <th>Attachment</th>
                     <th>Instructions</th>
                   </tr>
                   <tr>
                    <td>1</td>
                     <td><label>Passport Size Photo</label></td>
                     <td><input type="file" class="form-control" name="image" id="image" title="Please upload photo (jpg, jpeg, png)" value="" class="form-control" onchange="return fileValidation(this.id)">
                      <div id="imagePreview"  class="dri_img1"></div></td>
                      <td><label>Upload (jpg or jpeg or png) only</label></td>
                   </tr>
                   <tr>
                    <td>2</td>
                     <td><label>Bank Payment</label></td>
                     <td><input type="file" class="form-control" name="bank_document" id="bank_document" title="Please upload photo (pdf)" value="" class="form-control" onchange="return fileValid(this.id)">
                      <div id="imagePreview1"  class="dri_img1"></div></td>
                      <td><label>Upload PDF File Only</label></td>
                   </tr>
                   <tr>
                    <td>3</td>
                     <td><label>SSC Certificate</label></td>
                     <td><input type="file" class="form-control" name="ssc_document" id="ssc_document" title="Please upload photo (pdf)" value="" class="form-control" onchange="return fileValid(this.id)">
                      <div id="imagePreview1"  class="dri_img1"></div></td>
                      <td><label>Upload PDF File Only</label></td>
                   </tr>
                   <tr>
                    <td>4</td>
                     <td><label>Inter Certificate</label></td>
                     <td><input type="file" class="form-control" name="inter_document" id="inter_document" title="Please upload photo (pdf)" value="" class="form-control" onchange="return fileValid(this.id)">
                      <div id="imagePreview1"  class="dri_img1"></div></td>
                      <td><label>Upload PDF File Only</label></td>
                   </tr>
                   <tr>
                    <td>5</td>
                     <td><label>Transfer Certificate</label></td>
                     <td><input type="file" class="form-control" name="TC_document" id="TC_document" title="Please upload photo (jpg, jpeg, png)" value="" class="form-control" onchange="return zipFile(this.id)">
                      <div id="imagePreview2"  class="dri_img1"></div></td>
                      <td><label>Upload ZIP File Only</label></td>
                   </tr>
                   <tr>
                    <td>6</td>
                     <td><label>Entrance Exam Details</label></td>
                     <td><input type="file" class="form-control" name="other_document" id="other_document" title="Please upload photo (jpg, jpeg, png)" value="" class="form-control" onchange="return zipFile(this.id)">
                      <div id="imagePreview2"  class="dri_img1"></div></td>
                      <td><label>Upload ZIP File Only</label></td>
                   </tr>
                   </table>

                 </div>

                  <div class="mt-4 ml-2" style="font-family:auto">
            <input type ="checkbox" id="dec_note"  name="dec_note" onclick="enable(this)" value="1">&nbsp; <b><u>Note:</u></b>&ensp; <label for="dec_note">I Declare that all statements made in this form are true and complete. I understand that untrue statements may cause Expulsion from the programme. </label>
            </div>
            
            <div class="col-md-12 mt-5 ">
              <button class="btn btn-primary" style="float:right;" name="save" id="save" disabled style="color: white;">Register</button>
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

<script type="text/javascript">

    $(document).ready(function() {
  $('#date-input').on('input', function() {
    var inputDate = new Date($(this).val());
    var minDate = new Date('1985-01-01');
    var maxDate = new Date('2015-12-31');

    if (inputDate < minDate || inputDate > maxDate) {
      $('#error-message').show();
    } else {
      $('#error-message').hide();
    }
  });
});


 enable = function(check) {
  id = check.value;
  var disabled = !check.checked;
  document.getElementById("save").disabled = disabled;
  }

  function addrow(){
  // alert('hii');
  let count = $('.table1 tr').length;
  

   var addTr = ` <tr style="margin:10px 0px">
   <td><span id="counter">${count+1}</span></td>
   
  <td>
  <select name="examination_1[]" id="examination${count+1}" class="form-control form-select" >
            <option value="">--Select--</option>
            <option value="JEE_MAINS">JEE MAINS-2023</option>
            <option value="AP_EAPCET">AP EAPCET-2023</option>
            <option value="TS_EAMCET">TS EAMCET-2023</option>
    </select>
    </td>

    <td>
    <input type="text" class="form-control" id="marks_obtained${count+1}" name="marks_obtained[]" >
    </td>
    <td>
    <input type="text" id="rank${count+1}" name="rank[]" class="form-control" >
    </td>
    <td>
    <input type="text" id="remarks${count+1}" name="remarks[]" class="form-control" >
    </td>
    
            
    <td style="text-align: center;"><a href="javascript:void(0)" class="btn btn-danger remove">-</a></td>
    <td style="text-align: center;"><a href="javascript:void(0)"class="btn btn-info addRow" onclick ="add()">+</a></td>
   </tr>`;

   $('tbody.table1').append(addTr);

//    $('tbody').on('click','.addRow1',function(){  
// //    $(this).parent().parent().remove();
// $(this).parent().parent().after(addTr);
//     $('.table1 tr').each(function(i){
//       $(this).find('td')[0].innerHTML = i+1;
//     })

//  });
 };


$('.addRow').on('click',function(){
  addrow();    

});

function add(){
    addrow();
}

 $('tbody').on('click','.remove',function(){
//    $(this).parent().parent().remove();
$(this).parent().parent().remove();
    $('.table1 tr').each(function(i){
      $(this).find('td')[0].innerHTML = i+1;
    })

 });
</script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<script type="text/javascript" src="js/image_validation.js"></script>

<script type="text/javascript">

  jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Letters And Spaces only please");



$(function() {
    //alert('jkgh');
   $("form[name='addform']").validate({
    rules: {  
      std_name:{
        required:true,
        maxlength: 30,
        lettersonly:true,
      }, 
       
       f_name:{
        required:true,
        maxlength: 30,
        lettersonly:true,
      },     
       
       dob                  : "required",
       gender               : "required",
       nationality          : "required",
       mob_number           : "required",     
       alt_number           : "required",
       email                : "required",
      
       local_details        : "required",
        
       address              : "required",     
            
       image                : "required",
       EM_Studied           : "required",
       eng_subject          : "required",
       branch_ece           : "required",
       branch_cse           : "required",     
       branch_cse_AI        : "required",
       branch_eee           : "required",
       reference_collect    : "required",
       date_payment         : "required",

       preference1          : "required",
       preference2          : "required",
       preference3          : "required",
       preference4          : "required",

      examination1          : "required",
      examination2          : "required",
      university1           : "required",
      university2           : "required",
      monthYear1            : "required",
      monthYear2            : "required",
      medium1               : "required",
      medium2               : "required",
      division1             : "required",
      division2             : "required",
      marksSecured1         : "required",
      marksSecured2         : "required",
      percMarks1            : "required",
      percMarks2            : "required",   

       
       entrance_exam        : "required",
       marks_obtained       : "required",
       rank                 : "required",
       remarks              : "required", 
       pgm1                 : "required",
       pgm2                 : "required",
       check_payment        : "required",
       check_education      : "required",
       check_exam           : "required",   
       dec_note             : "required",   
        },
    // Specify validation error messages
    messages: {    
       
       std_name            : "Please Enter Student Name",     
       f_name              : "Please Enter  Father Name",
       dob                 : "Please Enter Date of Birth",
       gender              : "Please Select  Gender",
       nationality         : "Please Enter  Nationality",
       mob_number          : "Please Enter 10 Digit Mobile Number",     
       alt_number          : "Please Enter Alternate Number",
       email               : "Please Enter  Email-Id",
       
       local_details       : "Please Enter  Details",
            
       address             : "Please Enter  Address",     
            
       image               : "Please Upload Recent Passport Size Photo",
       EM_Studied          : "Please Select No. of years",
       eng_subject         : "Please Select No. of years ",
       branch_ece          : "Please Select Preference for Branch ECE",
       branch_cse          : "Please Select Preference for Branch CSE",     
       branch_cse_AI       : "Please Select Preference for Branch CSE(AI/ML)",
       branch_eee          : "Please Select Preference for Branch EEE",
       reference_collect   : "Please Enter SBI Collect Reference No.",
       date_payment        : "Please Enter Date of Payment",

       preference1         :"Please Select Preference for Branch ECE",
       preference2         :"Please Select Preference for Branch CSE",
       preference3         :"Please Select Preference for Branch CSE(AI/ML)",
       preference4         :"Please Select Preference for Branch EEE",
       
      examination1         : "Please Enter Name of Examination",
      examination2         : "Please Enter Name of Examination",

      university1          : "Please Enter Name of the University/ Board",
      university2          : "Please Enter Name of the University/ Board",

      monthYear1           : "Please Enter Month/ Year of Passing",
      monthYear2           : "Please Enter Month/ Year of Passing",

      medium1              : "Please Enter Medium of Instruction",
      medium2              : "Please Enter Medium of Instruction",

      division1            : "Please Enter Division",
      division2            : "Please Enter Division",

      marksSecured1        : "Please Enter Marks Secured",
      marksSecured2        : "Please Enter Marks Secured",

      percMarks1           : "Please Enter % Marks",
      percMarks2           : "Please Enter % Marks",

       entrance_exam       : "Please Enter Name of The Entrance Examination",
       marks_obtained      : "Please Enter Marks Obtained",
       rank                : "Please Enter Rank",
       remarks             : "Please Enter Remarks",     
       dec_note            : "Please Click on the Declaration",     
   },
    
    submitHandler: function(form) {
       $('#save').attr('disabled',true);
      
        let rowCount = $('.table1 tr').length;

        let formdata = new FormData();
        let x = $('#addform').serializeArray();
        $.each(x, function(i, field){
          formdata.append(field.name,field.value);
          //console.log(field.name);
        });
        formdata.append('action' , 'save');
        formdata.append('rowcounts',rowCount);

        let image = $('#image')[0].files;
        if (image.length > 0){
          formdata.append('image' , image[0]);
        }

        let bank_document = $('#bank_document')[0].files;
        if (bank_document.length > 0){
          formdata.append('bank_document' , bank_document[0]);
        } 

        let ssc_document = $('#ssc_document')[0].files;
        if (ssc_document.length > 0){
          formdata.append('ssc_document' , ssc_document[0]);
        } 

        let inter_document = $('#inter_document')[0].files;
        if (inter_document.length > 0){
          formdata.append('inter_document' , inter_document[0]);
        } 

        let TC_document = $('#TC_document')[0].files;
        if (TC_document.length > 0){
          formdata.append('TC_document' , TC_document[0]);
        } 

        let other_document = $('#other_document')[0].files;
        if (other_document.length > 0){
          formdata.append('other_document' , other_document[0]);
        }  
         //////////////////loading for data///////////    
    let timerInterval
Swal.fire({
  title: '',
  html: 'Loading',
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 300)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
////////////////////end loading//////////////////////
        
        $.ajax({
          type: "POST",
          url: "save_icp_copy.php",
          enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          cache: false,
          data: formdata,
          success: function (data) {
            //console.log(data);
            if (data){
              //toastr.success('saved successfully...!');
              alert('saved successfully...!')
              setTimeout(function (){
                location.href = "sucessful.php?rand="+data;
              },1000);
            }
            else{
               $('#save').attr('disabled',false);

              toastr.error(data);
            }
          }
        });
     
      }
  });
});

function checkemail(email){
  //alert(email); 

    $.ajax({
            url : 'save_icp_copy.php',
            type : 'POST',
            data: {email : email, 'action1' : 'user_email'},
            success : function(data){
                if (data == "true"){
                     //toastr.error("Email Already Exists");
                    alert('Email Already Exists');
                      $("#email").val('');
                }
               
            }
        });
   
}

function checkPrf1(a){
   //alert(a);
  var p2=document.getElementById('branch_cse').value; 
  var p3=document.getElementById('branch_cse_AI').value;

  if(p2==a || p3==a)
 {

  alert("Please choose another preference");  
  $("#branch_ece").prop('selectedIndex', 0);
 // return false;
 }

}

function checkPrf2(b){
   //alert(a);
  var p1=document.getElementById('branch_ece').value;
  var p3=document.getElementById('branch_cse_AI').value;

  if(p1==b || p3==b)
 {
  alert("Please choose another preference");
  $("#branch_cse").prop('selectedIndex', 0);  

  //return false;
 }

}

function checkPrf3(c){
   //alert(a);
  var p1=document.getElementById('branch_ece').value;
  var p2=document.getElementById('branch_cse').value;

  if(p1==c || p2==c)
 {
  alert("Please choose another preference");
  $("#branch_cse_AI").prop('selectedIndex', 0);   
  //return false;
 }

}


</script>