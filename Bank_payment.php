<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>
<body>
  <style type="text/css">
    .demo{
      list-style: none;
    }
    .blink {
            animation: blinker 1.5s linear infinite;
            color: blue;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
      
  </style>
  <div class="container">
    <div class="row">
   
      <!-- <div class="col-md-8"> -->
        <div class="card">
            <?php include("include/navbar.php"); ?>
          <div class="card-body">
        <div class="row">
              <div class="col-md-12 text-justify">
               <img src="1.jpg" style="width:100%;">

                <img src="2.jpg" style="width:100%;">
                 <img src="3.jpg" style="width:100%;">
                 <img src="4.jpg" style="width:100%;">
              </div>
              
            </div>
          </div>
             <?php include("include/footer.php"); ?>
        </div>
      <!-- </div> -->
    

    </div>
  </div>
</body>
</html>