 <style type="text/css">
   #modal-success
   {
        background: #0000002e;
   }
 </style>

 <?php echo $_SESSION['name'];?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="home.php" class="brand-link">

      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

           style="opacity: .8">

      <span class="brand-text font-weight-light" style="font-family: 'Open Sans', sans-serif;text-align: center;">JNTUK </span>
      <p style="font-family: 'Open Sans', sans-serif;text-align: center;">Spot Valuation</p>

    </a>

   

   <!-- Sidebar -->

    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <!-- <div class="image">

          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

        </div> -->

        

        <div class="info">

          <a href="home.php" class="d-block">

            

            <?php if(($_SESSION['userType'] == 'ACE' )|| ($_SESSION['userType'] == 'CE' )|| ($_SESSION['userType'] == 'DE'))  {?>

            <p>Admin Role:    <b><?php echo $_SESSION['userType'];?> <?php } ?></b></p>

            <?php if($_SESSION['userType'] == 'SPOT' )   {?>

            <p>SpotCenter:    <b><?php echo $_SESSION['spCenterCode'];?><?php } ?></b></p>

            <br>

            <?php echo $_SESSION['name'];?>

          </a>

        </div>

      

      

      </div>

      

      

      

      <!-- Sidebar Menu -->

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='home.php'" id="nav_home" class="nav-link">

              <i class="fa fa-home" aria-hidden="true"></i>

              

              <p>Home</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='instuctions.php'" id="nav_instuctions" class="nav-link">

              <!-- <i class="nav-icon fas fa-tree"></i> -->

              <i class="fa-solid fa fa-directions"></i>

              <p>Instuctions</p>

            </a>

          </li>



          <!-- CE Area -->

          

          <!-- End of CE Area -->



          <!-- ACE Area -->

          <?php if(($_SESSION['userType'] == 'ACE') || ($_SESSION['userType'] == 'CE')||($_SESSION['userType'] == 'DE'))  { ?>







            <li class="nav-item">

               <a href="manage_Examination.php" id="id_intro" class="nav-link">



                <i class="fa-solid fa-circle-info"></i>

                <p>Examination</p>

              </a>

            </li>

            

         

            

            <li class="nav-item">

            <a href="javascript:void(0)" onclick="location.href='#'" id="nav_allottedfaculty" class="nav-link">

            <!--   <i class="nav-icon fas fa-tree"></i> -->

              <i class="fas fa-users"></i>



              <p>Evaluators <i class="right fas fa-angle-right"></i></p>

            </a>

        <ul class="nav nav-treeview">

          <ul class="nav"  style="    width: 100%; display: block;">

            

            <li class="nav-item">

               <a href="addFacultyBulk.php" id="id_intro" class="nav-link">

                <i class="far fa-circle nav-icon"></i>

                <p>Add Evaluators(Bulk)</p>

              </a>

            </li>

            <li class="nav-item">

               <a href="Add_faculty.php" id="id_intro" class="nav-link">

                <i class="far fa-circle nav-icon"></i>

                <p>Add Evaluator(Single)</p>

              </a>

            </li>





            <li class="nav-item">

               <a href="faculty_details.php" id="id_intro" class="nav-link">

                <i class="far fa-circle nav-icon"></i>

                <p>View Evaluators</p>

              </a>

            </li>





             

        </ul></ul>

          </li>



         

         <!--  <li class="nav-item has-treeview"> -->

         	<li class="nav-item">

            <a href="javascript:void(0)" onclick="location.href='#'" id="nav_allottedfaculty" class="nav-link">

            <!--   <i class="nav-icon fas fa-tree"></i> -->

              <i class="fa-solid fa-newspaper"></i>



              <p>Control Bundles <i class="right fas fa-angle-right"></i></p>

            </a>

          <ul class="nav nav-treeview">

         	  <ul class="nav"  style="    width: 100%; display: block;">

            

            <li class="nav-item">

              <a href="addBundleBulk.php" id="id_intro" class="nav-link">

              <i class="far fa-circle nav-icon"></i>

              <p>Add Bundle Details (Bulk)</p>

              </a>

            </li>

 

            <li class="nav-item">

               <a href="Add_bundle_details.php" id="id_intro" class="nav-link">

                <i class="far fa-circle nav-icon"></i>

                <p>Add Bundle Details (Single)</p>

              </a>

            </li>            



            <li class="nav-item">

               <a href="Manage_bundle_details.php" id="id_intro" class="nav-link">

                <i class="far fa-circle nav-icon"></i>

                <p>View Bundle Details</p>

              </a>

            </li>

            

        </ul>

        </ul>

      

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='uploads.php?qp=questionpapers'" id="nav_instuctions" class="nav-link">

              <!-- <i class="nav-icon fas fa-tree"></i> -->

              <i class="fa fa-upload" aria-hidden="true"></i>

              <p>Upload Question Papers</p>

            </a>

          </li>

           <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='uploads.php?qp=Schemas'" id="nav_instuctions" class="nav-link">

              <!-- <i class="nav-icon fas fa-tree"></i> -->

              <i class="fa fa-upload" aria-hidden="true"></i>

              <p>Upload Schemas</p>

            </a>

          </li>
          
           

          <?php } ?>



          <!-- End of ACE Area -->



           <!-- SPA Area -->

          <?php if($_SESSION['userType'] == 'SPOT'){ ?>

           <!--  <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='#'" id="nav_allottedfaculty" class="nav-link">              

              &nbsp;<i class="fa-solid fa-chart-area"></i>



              <p>SPOT Area</p>

            </a>



          </li>

           -->

         <!--  <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='faculty_subData.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Facutly Data</p>

            </a>

          </li>

 -->

          <!-- <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='#'" id="nav_allottedfaculty" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <i class="fa-solid fa-chart-area"></i>



              <p>Faculties <i class="right fas fa-angle-left"></i></p>

            </a> -->

          <!-- <ul class="nav nav-treeview"> -->

            <!-- <li class="nav-item has-treeview">

               <a href="faculty_details.php" id="id_intro" class="nav-link">

                <i class="fa-solid fa-cash-register"></i>

                <p>Valuters</p>

              </a>

            </li> -->



            <!-- <li class="nav-item has-treeview">

               <a href="Add_faculty_bank_details.php" id="id_intro" class="nav-link">

               <i class="fa-solid fa-money-bill-transfer"></i>

                <p>Bank Details</p>

              </a>

            </li> -->

           <li class="nav-item">

            <a href="javascript:void(0)" onclick="location.href='enroll_single.php'" id="nav_enroll" class="nav-link">

            <i class="fa fa-user" aria-hidden="true"></i>
            <p>Valuator Registration</p>

            </a>
          </li>
          <li class="nav-item">

              <a href="javascript:void(0)" onclick="location.href='enrolled_valuaters.php'" id="nav_allottedfaculty" class="nav-link">
               <i class="fas fa-registered"></i>

              <p>View Enrolled Valuators</p>

            </a>
          </li>




          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='issue_bundles.php'" id="nav_allottedfaculty" class="nav-link">

             <i class="fas fa-tasks"></i>

              <p>Issue Bundles</p>

            </a>

          </li>



          <!-- <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='view_fac_cnt.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="fa fa-tree" aria-hidden="true"></i>

              <p>View I CBundles</p>

            </a>

          </li> -->

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='view_assignedbundles.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="fa fa-th-list"></i>

              <p>View Issued Bundles</p>

            </a>

          </li>







        <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='collect_bundles.php'" id="nav_allottedfaculty" class="nav-link">

             
              <i class='fa fa-check-circle'></i>

              <p>Collect Bundles</p>

            </a>

          </li>







          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='view_receivebundle.php'" id="nav_allottedfaculty" class="nav-link">

               <i class="fa fa-th-list"></i>

              <p>View Received Bundles</p>

            </a>

          </li>

         

          <!--  <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='manage_payslipDetails.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="fa-solid fa-money-bill-wave"></i>

              <p>PaySlips</p>

            </a>

          </li>



          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='cnt_fac.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="fa-brands fa-octopus-deploy"></i>

              <p>CNT_Fac</p>

            </a>

          </li> -->





          <?php } ?>



          <!-- End of SPA Area -->





          <!-- <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='allottedfaculty.php'" id="nav_allottedfaculty" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Allotted Faculty</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='viewStd.php'" id="nav_viewfaculty" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>View Faculty</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='allocatingbundles.php'" id="nav_allocatingbundles" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Allocating Bundles</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='handoverbnd.php'" id="nav_allocatingbundles" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>HandOver Bundles</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='payslips.php'" id="nav_payslips" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Payslips</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='viewReportsAdmin.php'" id="nav_report" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Report</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="javascript:void(0)" onclick="location.href='test.php'" id="nav_report" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>Sample</p>

            </a>

          </li> -->

          <!-- <li class="nav-item has-treeview">

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-tree"></i>

              <p>

                Payslips

                <i class="fas fa-angle-left right"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="javascript:void(0)" onclick="location.href='addTestmod.php'" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                   <p>Sub Menu1</p>

                </a>

              </li>

            </ul>

          </li> -->



          <?php if(($_SESSION['userType'] == 'CE')|| ($_SESSION['userType'] == 'DE')){ ?>

            

            <li class="nav-item has-treeview">

            <a href="Manage_Register_details.php" class="nav-link">

              

              <i class="fa-solid fa-registered"></i>

              <p>Create ACEs/Spot Admins</p>

            </a>

          </li>  

          <?php } ?>



           <?php if($_SESSION['userType'] == 'ACE'){ ?>

            

            <li class="nav-item has-treeview">

            <a href="Manage_Register_details.php" class="nav-link">

              

              <i class="fa-solid fa-registered"></i>

              <p>Spot Admins</p>

            </a>

          </li> 

         <!--  <li class="nav-item">

               <a href="Examiner.php" id="id_intro" class="nav-link">

                <i class="fa-brands fa-steam"></i>

                <p>Examiner</p>

              </a>

            </li> -->



           <!--  <li class="nav-item">

               <a href="ChiefExaminer.php" id="id_intro" class="nav-link">

                <i class="fa-brands fa-teamspeak"></i>

                <p>Chief Examiner</p>

              </a>

            </li>  -->

          <?php } ?>

             <?php if($_SESSION['userType'] == 'ACE' || $_SESSION['userType'] == 'CE' || $_SESSION['userType'] == 'DE')  { ?>

              <li class="nav-item">

               <a href="valuation_status.php" id="id_intro" class="nav-link">

                <i class="fa fa-bar-chart"></i>

                <p>Valuation  Status</p>

              </a>

            </li>

             <li class="nav-item">

               <a href="Faculties.php" id="id_intro" class="nav-link">

                <i class="fa-solid fa-person-chalkboard"></i>

                <p>Faculty Details</p>

              </a>

            </li>

            <?php } ?>



           

          

          <li class="nav-item has-treeview">

            <a href="fac_history.php" class="nav-link">

              

             <i class="fa fa-history" aria-hidden="true"></i>

              <p>Valuator History</p>

            </a>

          </li>

          

            <li class="nav-item has-treeview">

            <a href="download.php" class="nav-link">

              

             <i class='fa fa-download'></i>

              <p>Downloads</p>

            </a>

          </li>

          

          

          <li class="nav-item has-treeview">

            <a href="changepassword.php" class="nav-link">

              

              <i class="fa-solid fa-lock"></i>

              <p>Change Password</p>

            </a>

          </li>
            <li class="nav-item has-treeview">

            <a href="manageCourses.php" class="nav-link">

              

              <i class="fa-solid fa-lock"></i>

              <p>Courses</p>

            </a>

          </li>
          <li class="nav-item has-treeview">

            <a href="addExaminations.php" class="nav-link">

              

              <i class="fa-solid fa-lock"></i>

              <p>Examinations</p>

            </a>

          </li>

          <li class="nav-item has-treeview">

            <a href="addPatchTable.php" class="nav-link">

              

              <i class="fa-solid fa-lock"></i>

              <p>Patch Table</p>

            </a>

          </li>

           <li class="nav-item has-treeview">

            <a href="addPatchTable.php" class="nav-link">

              <i class="fa-solid fa-lock"></i>

              <p>Patch Table</p>

            </a>

          </li>

          <!--<li class="nav-item has-treeview">-->

          <!--  <a href="edit_profile.php" class="nav-link">-->

          <!--    <i class="fa-solid fa-address-card"></i>-->

          <!--    <p>EditProfile</p>-->

          <!--  </a>-->

          <!--</li>-->

          <li class="nav-item has-treeview">

            <a href="validate_logins.php?act=Logout" class="nav-link">

              <i class="fa-solid fa-right-from-bracket"></i>

              <p>Logout</p>

            </a>

          </li>



        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>