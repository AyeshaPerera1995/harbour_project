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

    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['admin_email'];?></a>
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
            <a href="to_aprove.php" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>
                  To aprove ship list

              </p>
            </a>
          </li>

            <li class="nav-item">
                <a href="aproved.php" class="nav-link">
                    <i class="nav-icon fas fa-life-ring"></i>
                    <p>
                       aproved ship list

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
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Approved List </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Ship Name</th>
                          <th>Call sign</th>
                          <th>IMO number</th>
                          <th>MMSI number</th>
                          <th>flag</th>
                          <th>Gross tonnage</th>
                          <th>Net tonnage</th>
                          <th>Ship type</th>
                          <!-- <th>Certify port</th>
                          <th>Certify date</th>
                          <th>Certify number</th>
                          <th>Company</th>
                          <th>Company email</th>
                          <th>Company phone</th>
                          <th>Year of Built	</th>
                          <th>Length overal </th>
                          <th>Dead weight</th>
                          <th>Beam</th>
                          <th>Ship desc</th> -->
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $ship = "select * from ship where status=2 ";
                      $shipp = mysqli_query($con, $ship);
                      while ($row = mysqli_fetch_array($shipp)) {

                          $ship_name= $row['ship_name'];
                          $call_sign= $row['call_sign'];
                          $IMO_number= $row['IMO_number'];
                          $MMSI_number= $row['MMSI_number'];
                          $flag= $row['flag'];
                          $gross_tonnage = $row['gross_tonnage'];
                          $net_tonnage= $row['net_tonnage'];
                          $ship_type = $row['ship_type'];
                          $port  = $row['certify_port'];
                          $date  = $row['certify_date'];
                          $number = $row['certify_number'];
                          $company  = $row['company'];
                          $c_email = $row['c_email'];
                          $c_phone  = $row['c_phone'];
                          $year_of_built = $row['year_of_built'];
                          $length_overall = $row['length_overall'];
                          $dead_weight= $row['dead_weight'];
                          $baneam = $row['beam'];
                          $ship_desc    = $row['ship_desc'];

                      ?>

                      <tr>


                          <td><?php echo  $ship_name; ?> </td>
                          <td><?php echo  $call_sign; ?> </td>
                          <td><?php echo  $IMO_number; ?> </td>
                          <td><?php echo  $MMSI_number; ?> </td>
                          <td><?php echo  $flag; ?> </td>
                          <td><?php echo  $gross_tonnage; ?> </td>
                          <td><?php echo  $net_tonnage; ?> </td>
                          <td><?php echo  $ship_type; ?> </td>
                          <!-- <td><?php echo  $port; ?> </td>
                          <td><?php echo  $date; ?> </td>
                          <td><?php echo  $number; ?> </td>
                          <td><?php echo  $company; ?> </td>
                          <td><?php echo  $c_email; ?> </td>
                          <td><?php echo  $c_phone; ?> </td>
                          <td><?php echo  $year_of_built; ?> </td>
                          <td><?php echo  $length_overall; ?> </td>
                          <td><?php echo  $dead_weight; ?> </td>
                          <td><?php echo  $baneam; ?> </td>
                          <td><?php echo  $ship_desc; ?> </td> -->


                      </tr>
                      <?php
                               }    

                      ?>
                      </tbody>
                      <tfoot>
                      <tr>
                           <th>Ship Name</th>
                          <th>Call sign</th>
                          <th>IMO number</th>
                          <th>MMSI number</th>
                          <th>flag</th>
                          <th>Gross tonnage</th>
                          <th>Net tonnage</th>
                          <th>Ship type</th>
                          <!-- <th>Certify port</th>
                          <th>Certify date</th>
                          <th>Certify number</th>
                          <th>Company</th>
                          <th>Company email</th>
                          <th>Company phone</th>
                          <th>Year of Built	</th>
                          <th>Length overal </th>
                          <th>Dead weight</th>
                          <th>Beam</th>
                          <th>Ship desc</th> -->
                      </tr>
                      </tfoot>
                  </table>
              </div>
              <!-- /.card-body -->
          </div>
          <br>
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Pending List </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Ship Name</th>
                          <th>Call sign</th>
                          <th>IMO number</th>
                          <th>MMSI number</th>
                          <th>flag</th>
                          <th>Gross tonnage</th>
                          <th>Net tonnage</th>
                          <th>Ship type</th>
                          <!-- <th>Certify port</th>
                          <th>Certify date</th>
                          <th>Certify number</th>
                          <th>Company</th>
                          <th>Company email</th>
                          <th>Company phone</th>
                          <th>Year of Built	</th>
                          <th>Length overal </th>
                          <th>Dead weight</th>
                          <th>Beam</th>
                          <th>Ship desc</th> -->
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $ship = "select * from ship where status=1 ";
                      $shipp = mysqli_query($con, $ship);
                      while ($row = mysqli_fetch_array($shipp)) {

                          $ship_name= $row['ship_name'];
                          $call_sign= $row['call_sign'];
                          $IMO_number= $row['IMO_number'];
                          $MMSI_number= $row['MMSI_number'];
                          $flag= $row['flag'];
                          $gross_tonnage = $row['gross_tonnage'];
                          $net_tonnage= $row['net_tonnage'];
                          $ship_type = $row['ship_type'];
                          $port  = $row['certify_port'];
                          $date  = $row['certify_date'];
                          $number = $row['certify_number'];
                          $company  = $row['company'];
                          $c_email = $row['c_email'];
                          $c_phone  = $row['c_phone'];
                          $year_of_built = $row['year_of_built'];
                          $length_overall = $row['length_overall'];
                          $dead_weight= $row['dead_weight'];
                          $baneam = $row['beam'];
                          $ship_desc    = $row['ship_desc'];

                          ?>

                          <tr>


                              <td><?php echo  $ship_name; ?> </td>
                              <td><?php echo  $call_sign; ?> </td>
                              <td><?php echo  $IMO_number; ?> </td>
                              <td><?php echo  $MMSI_number; ?> </td>
                              <td><?php echo  $flag; ?> </td>
                              <td><?php echo  $gross_tonnage; ?> </td>
                              <td><?php echo  $net_tonnage; ?> </td>
                              <td><?php echo  $ship_type; ?> </td>
                              <!-- <td><?php echo  $port; ?> </td>
                              <td><?php echo  $date; ?> </td>
                              <td><?php echo  $number; ?> </td>
                              <td><?php echo  $company; ?> </td>
                              <td><?php echo  $c_email; ?> </td>
                              <td><?php echo  $c_phone; ?> </td>
                              <td><?php echo  $year_of_built; ?> </td>
                              <td><?php echo  $length_overall; ?> </td>
                              <td><?php echo  $dead_weight; ?> </td>
                              <td><?php echo  $baneam; ?> </td>
                              <td><?php echo  $ship_desc; ?> </td> -->


                          </tr>
                          <?php
                      }

                      ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Ship Name</th>
                          <th>Call sign</th>
                          <th>IMO number</th>
                          <th>MMSI number</th>
                          <th>flag</th>
                          <th>Gross tonnage</th>
                          <th>Net tonnage</th>
                          <th>Ship type</th>
                          <!-- <th>Certify port</th>
                          <th>Certify date</th>
                          <th>Certify number</th>
                          <th>Company</th>
                          <th>Company email</th>
                          <th>Company phone</th>
                          <th>Year of Built	</th>
                          <th>Length overal </th>
                          <th>Dead weight</th>
                          <th>Beam</th>
                          <th>Ship desc</th> -->
                      </tr>
                      </tfoot>
                  </table>
              </div>
              <!-- /.card-body -->
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
