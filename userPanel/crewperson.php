<!DOCTYPE html>
<?php
session_start();
include_once 'build/PHP/DB.php';


?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../index.php" class="nav-link">Home</a>
        </li>
    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">User Panele</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user_email'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Dashbord

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="addship.php" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>
                add Ship

              </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="passenger.php" class="nav-link">
                    <i class="nav-icon fas fa-life-ring"></i>
                    <p>
                        add Passenger

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="crewperson.php" class="nav-link">
                    <i class="nav-icon fas fa-person-booth"></i>
                    <p>
                        add Crew Person

                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="card card-primary">
              <div class="card-header">
                  <h3 class="card-title">Add new Crew Member</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="addship.php" method="post">
                  <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Family Name</label>
                          <input type="text" class="form-control" name="familyname" placeholder="family Name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Given Name</label>
                          <input type="text" class="form-control"  name="givenname" placeholder="Given Name">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Nationality</label>
                          <input type="text" class="form-control" name="nationality" placeholder="Nationality">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Job Role</label>
                          <input type="text" class="form-control" name="job_role" placeholder="Job Role">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Rank or Rating</label>
                          <input type="text" class="form-control" name="rank_or_rating" placeholder="Rank or Rating">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Vr permit number</label>
                          <input type="text" class="form-control" name="vr_permit_number" placeholder="Vr Permit Number">
                      </div>



                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">add</button>
                  </div>
              </form>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php


if (isset($_POST['submit'])) {

    $familyname= $_POST['familyname'];
    $givenname= $_POST['givenname'];
    $nationality= $_POST['nationality'];
    $job_role= $_POST['job_role'];
    $rank_or_rating= $_POST['rank_or_rating'];
    $vr_permit_number= $_POST['vr_permit_number'];












//
//    $usercreate = "INSERT INTO ship (ship_name,call_sign,IMO_number,MMSI_number,flag,gross_tonnage,net_tonnage,ship_type,port,date,company,c_email,c_phone,year_of_built,length_overall,dead_weight,status) "
//        . "values('$shipname','$callsign','$shipcountry','$imono','$mmsino','$flag','$tonnage','$ntonnage','$type','$port','$date','$company','$email','$ybuilt','$lenth','$deight',2)";
//
//
//
//
//    if (mysqli_query($con, $usercreate)) {
//        echo "<script>alert('ship senn to Registraion')</script>";
//
//        echo "<script>window.location.replace('addship.php')</script>";
//    } else {
//        echo "<script>window.location.replace('addship.php')</script>";
//        echo "Error: " . $usercreate. "<br>" . mysqli_error($con);
//    }
//







}


?>