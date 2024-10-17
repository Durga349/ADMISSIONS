<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>
<body>
  <style>
    .error,.alertError {
      color: red;
    }
  </style>
  <div class="container">
    <div class="row">
   
      <!-- <div class="col-md-12 "> -->
        <div class="card">
            <?php include("include/navbar.php"); ?>
          <div class="card-body body" style="height: 500px;">
          
            <div class="row justify-content-center">
              <h4 style="text-align:center; font-family: auto;margin-top:20px;margin-bottom:20px;">Applicants are invited for the Jntuk BTH / UNI International Collaboration Programme -2023.</h4>
                
                <div class="col-md-6 mt-3">
                   
                  <div class="card">
                     <div class="card-header" style="background:#007bff; color: #fff; font-weight:bold;font-size:20px;text-align:center;">
                        Print
                      </div>
                    <div class="card-body" >
                     <form action="print_form.php" method="post" id="addform" name="addform" autocomplete="off" 
                     onsubmit="return validate()">

                         <label for="name"> <b>Reference Id <span>*</span></b></label><br>
             <input type="text" name="referenceno" id="referenceno" placeholder="Enter your Reference Id" class="form-control" onblur="checkRandom(this.value)">  <br>
             <label class="error"></label>

                                 <div style="text-align:center; margin-bottom: 20px;">(OR)<br>
                                      <span id="alertError"></span>
                                 </div>
             
             <label for="email"> <b> Email-Id <span>*</span></b></label><br>
             <input type="email" name="email" id="email" placeholder="Enter your Email id"  class="form-control" onblur="checkemail(this.value)"> <br>
            

            
             <input type="reset" name="cancel" id="cancle" value="Cancel" class="btn btn-danger" onclick="location.href = 'verification.php'">

             <button type="submit" class="btn btn-primary" style="float:right" name="print"> Submit</button>
                        
                      </form>

                     
                    </div>
                  </div>
                </div>
             
             
            </div>
          </div>
          <?php include("include/footer.php"); ?>
        </div>
     
    

    </div>
  </div>
  </body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">

  function checkemail(email){
  //alert(email); 

    $.ajax({
            url : 'save_icp_copy.php',
            type : 'POST',
            data: {'email' : email, 'action1' : 'user_email'},
            success : function(data){
                if (data == "false"){
                   document.getElementById('alertError').innerHTML='Email Does not Exists';
                     //toastr.error("Email Already Exists");
                    // alert('Email Doesnot Exists');
                      $("#email").val('');
                }
               
            }
        });
   
}

function checkRandom(rand){
  //alert(rand); 

    $.ajax({
            url : 'save_icp_copy.php',
            type : 'POST',
            data: {'rand' : rand, 'action1' : 'user_reference'},
            success : function(data){
                if (data == "false"){
                     //toastr.error("Email Already Exists");
                  document.getElementById('alertError').innerHTML='Reference ID Does not Exists';
                    // alert('Reference ID Doesnot Exists');
                      $("#referenceno").val('');
                }
               
            }
        });
   
}

 function validate()
  {  

    if(document.getElementById('referenceno').value.length<6 && document.getElementById('email').value.length<8)
{
  alert("Please fill any one feild");
  return false;
}
  }

</script>
</html>