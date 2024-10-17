<?php 
  $p_randomId = $_REQUEST['rand'];

 ?>
<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>
</head>
<body>
  <form>
  <div class="container">
    <div class="row">
       <!-- <div class="col-md-3"></div>  -->
      <div class="col-md-12">
        <div class="card ">
            <?php include("include/navbar.php"); ?>
          <div class="card-body" style="height:500px;">
              <h4 style="text-align:center; font-family: auto;">Applicants are Invited for the ICP - 2023.</h4>
            <div class="card-title text-center"><b>Your Applicaion submitted sucessfully with Reference id : <?php echo $p_randomId; ?></b></div>
         
          </div>
           <?php include("include/footer.php"); ?>
        </div>

      </div>
    

    </div>

  </div>

  </form>

</body>
</html>