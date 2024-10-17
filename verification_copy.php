<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>
<body>
  <style>
    .error{
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
                     <form action="manage_studentinfo.php" method="post" id="addform" name="addform" autocomplete="off" 
                     onsubmit="return validate()">

        
             
             <label for="name"> <b> User name <span>*</span></b></label><br>
             <input type="text" name="name" id="name" value="101"  class="form-control" > <br>
            

            
             <input type="reset" name="cancel" id="cancle" value="Cancel" class="btn btn-danger" onclick="location.href = '#'">

             <button type="button" class="btn btn-primary" style="float:right" name="print" onclick="checkname(this.value)"> Submit</button>
                        
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

  function checkname(){
   let name = $('#name').val();

   if(name == 101){

   location.href ='manage_studentinfo.php';
   
}else{
  alert("Please Enter valid username");
}
}

</script>
</html>