<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <title>ICP</title>
  <style>
    body
    {
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .btn
    {
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
      font-size: 25px !important;
    }
    .btn:hover
    {
      background: linear-gradient(135deg, #9b59b6, #71b7e6);
       font-size: 30px !important;
    }
    label{
      font-weight: bold;
    }
    .error{
      color:red;
    }
    span{
      color: red;
      font-weight: bold;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-1"></div> -->
      <!-- <div class="col-md-12"> -->
        <div class="card">
             
           <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <img src="Images/jntuklogo.png">
              </div>
              <div class="col-md-6 d-flex mt-5">
                <a href="index.php">Home</a> &ensp;&ensp;
                 <a href="instruction.php">Instructions</a>&ensp;&ensp;
                 <a href="icp.php">Apply For Programme</a>&ensp;&ensp;
                  <a href="verification.php">Print</a>&ensp;&ensp;
                 <a href="contact.php">Contact Us</a>
                
              </div>
         
          </div>
            </div>
          
          <div class="card-body">
            <div class="card-title"><h4>Student Information:</h4></div>
            <form method="post" name="addform" id="addform" enctype="multipart/form-data"  autocomplete="off">
            <div class="row">
              
              
              

               <div class="col-md-9 card-title mt-3"><h5>EDUCATIONAL QUALIFICATIONS:<span>*</span></h5>
              </div>
              <div class="col-md-3 mt-3">
                <input type="radio" name="check_education" id="yes">
                <label for="yes" >Yes</label> &nbsp;
                <input type="radio" name="check_education" id="no">
                <label for="no" >No</label> &nbsp;<br>
                <label for="check_education" generated="true" class="error" style="display: none;">This field is required .</label> 
              </div>
              <table class="table table-bordered table-responsive ">
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
                   <td><input type="text" class="form-control" name="qualification[]" id="quali_1" value="SSC (10th// Equivalent)" readonly></td>
                   <td><input type="text" class="form-control" name="examination_1[]" id="ssc_exam_name" ></td>
                   <td><input type="text" class="form-control" name="university[]" id="ssc_university_name"></td>
                   <td><input type="month" class="form-control" name="monthYear[]" id="ssc_year_passing"></td>
                   <td><input type="text" class="form-control" name="medium[]" id="ssc_medium"></td>
                   <td><input type="text" class="form-control" name="division[]" id="ssc_division"></td>
                   <td><input type="text" class="form-control" name="marksSecured[]" id="ssc_marks_secured" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="3"></td>
                   <td><input type="text" class="form-control" name="percMarks[]" id="ssc_marks_percentage" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="2"></td>
                 </tr>
                 <!-- <tr>
                   <td><input type="text" class="form-control" name="qualification[]" id="quali_2" value="Intermediate/Equivalent (10+2)" readonly></td>
                   <td><input type="text" class="form-control" name="examination_1[]" id="intd_exam_name" ></td>
                   <td><input type="text" class="form-control" name="university[]" id="IPE_university_name"></td>
                   <td><input type="month" class="form-control" name="monthYear[]" id="IPE_year_passing"></td>
                   <td><input type="text" class="form-control" name="medium[]" id="IPE_medium"></td>
                   <td><input type="text" class="form-control" name="division[]" id="IPE_division"></td>
                   <td><input type="text" class="form-control" name="marksSecured[]" id="IPE_marks_secured" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="3"></td>
                   <td><input type="text" class="form-control" name="percMarks[]" id="IPE_marks_percentage" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" maxlength="2"></td>
                 </tr> -->
               </table>


            
             <div class="col-md-12 mt-5 ">
              <button class="btn btn-block" style="color: white;">Register</button>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script type="text/javascript">

$("#addform").click(function(){
   $("#addform").validate({

    rules: {  
       //examination_1[]        : "required",     
       'examination_1[]': {
        required: true,
      },
      // intd_exam_name        : "required",
        },
    // Specify validation error messages
    messages: {
       'examination_1[]': {
        required: "Please fill in all fields.",
        // Add more error messages for the input name array if needed
      },
      // intd_exam_name       : "Please Enter Name of Examination",      
   },
    submitHandler: function(form) {
      alert("hii");
    }
 })

})

function checkemail(email){
  //alert("test");
    $.ajax({
            url : 'save_icp.php',
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

</script>