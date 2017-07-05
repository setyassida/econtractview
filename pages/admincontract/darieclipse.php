<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Contract</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-red fixed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <header class="main-header">

      <!-- Logo -->
      <a href="#" class="logo" style="padding-top: 0.25rem">
        <!-- mini logo for sidebar mini 50x50 pixels -->

        <img src="resources/images/logo_mini.png" class="logo-lg">

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>e</b>Contract</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="#">Contract Order</a></li>
            <li><a href="#">Badak Service Order</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="resources/images/avatar/icon5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin Contract</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../resources/images/avatar/icon5.png" class="img-circle" alt="User Image">

                  <p>
                    Admin Contract

                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="resources/images/avatar/icon5.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin Contract</p>

          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header text-center"><h3>CA-17001</h3></li>
          <li class="header">Menu Process</li>

          <!-- menu contract order  -->
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Contract Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="p1.php"><i class="fa fa-circle-o"></i> Contract</a></li>
              <li><a href="p2.php"><i class="fa fa-circle-o"></i> Bidder List</a></li>
              <li><a href="p3.php"><i class="fa fa-circle-o"></i> Prebid Meeting</a></li>
              <li><a href="p4.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li>
              <li><a href="p5.php"><i class="fa fa-circle-o"></i> Opening Evaluasi Administrasi</a></li>
              <li><a href="p6.php"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li>
              <li><a href="p7.php"><i class="fa fa-circle-o"></i> Opening Komersial</a></li>
              <li><a href="p8.php"><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li>
              <li><a href="p9.php"><i class="fa fa-circle-o"></i> LoA</a></li>
              <li><a href="p10.php"><i class="fa fa-circle-o"></i> Kick-of-meeting</a></li>
              <li><a href="p11.php"><i class="fa fa-circle-o"></i> LoI</a></li>
              <li><a href="p12.php"><i class="fa fa-circle-o"></i> Kontrak</a></li>
              <li><a href="p13.php"><i class="fa fa-circle-o"></i> CoC</a></li>
            </ul>
          </li>

          <!-- VO menu -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i>
              <span>Variation Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="p14.php"><i class="fa fa-circle-o"></i> Variation Order</a></li>
              <li><a href="p15.php"><i class="fa fa-circle-o"></i> Bidder List VO</a></li>
              <li><a href="p16.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri VO</a></li>
              <li><a href="p17.php"><i class="fa fa-circle-o"></i> Evaluasi Komersial VO</a></li>
              <li><a href="p18.php"><i class="fa fa-circle-o"></i> Amandemen Kontrak VO</a></li>
            </ul>
          </li>

          <!-- Report menu -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="p20.php"><i class="fa fa-circle-o"></i> Laporan CSMS & Tenaga Kerja</a></li>
              <li><a href="p19.php"><i class="fa fa-circle-o"></i> Evaluasi Semester/Akhir</a></li>
              <li><a href="p21.php"><i class="fa fa-circle-o"></i> Reporting</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>


    <!-- =============================================== -->


    <!-- Main content -->
    <section class="content">

      <div class="row">
        <form class="form-horizontal">
          <!-- right column -->

          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Bidder List Form</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->

              <div class="box-body">
                <!-- kol 1 -->
                <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                  <div class="form-group">
                    <label for="generatedBySystem1">Nomor Bidder List</label>
                    <input type="text" class="form-control input-sm" id="generatedBySystem1" placeholder="BL-17001" disabled>
                  </div>
                  <div class="form-group">
                    <label for="generatedBySystem2">Tanggal Dibuat</label>
                    <input type="text" class="form-control input-sm" id="generatedBySystem2" placeholder="17-Feb-2017" disabled>
                  </div>
                  <!-- <div class="form-group">
                  <label for="generatedBySystem3">Waktu</label>
                  <input type="text" class="form-control input-sm" id="generatedBySystem3" placeholder="13:30" disabled>
                </div> -->
                <!-- Date -->
                <div class="form-group">
                  <label>Publish Date Bidder List</label>
                  <div class="input-group date">
                    <input type="text" class="form-control pull-right input-sm" id="datepicker">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
              <!-- kol 1 end -->
              <!-- kol 2 -->
              <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                <div class="form-group">
                  <label for="inputByCE1">Klasifikasi</label>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Pilih Klasifikasi" style="width: 100%;">
                    <option>M</option><option>N</option><option>O</option><option>P</option><option>Q</option><option>R</option><option>S</option><option>T</option><option>U</option><option>V</option><option>W</option><option>X</option><option>Y</option><option>Z</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Kualifikasi</label>
                  <div class="col-md-12">
                    <label class="radio-inline" >
                      <input type="radio" name="optradio1" checked>Kecil
                    </label>
                    <label class="radio-inline" >
                      <input type="radio" name="optradio1">Non-Kecil
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tingkat Risiko</label>
                  <div class="col-md-12">
                    <label class="radio-inline" >
                      <input type="radio" name="optradio2" checked>Rendah
                    </label>
                    <label class="radio-inline" >
                      <input type="radio" name="optradio2">Sedang
                    </label>
                    <label class="radio-inline" >
                      <input type="radio" name="optradio2">Tinggi
                    </label>
                  </div>
                </div>
              </div>
              <!-- kol 2 end -->

              <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                <label>Kuota Area</label>
                <table class="table table-condensed table-bordered table-hover">
                  <tbody>
                    <tr>
                      <td>Bontang</td>
                      <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                    </tr>
                    <tr>
                      <td>Kalimantan Timur</td>
                      <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                    </tr>
                    <tr>
                      <td>Domestik</td>
                      <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer ">
              <!-- <button type="submit" class="btn btn-info pull-right">Generate Bidder List</button> -->
              <a href="p2cdraft.php" class="btn btn-success pull-right btn-sm">Generate Bidder List</a>
            </div>
            <!-- /.box-footer -->

          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

      </form>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="http://www.badaklng.co.id"> PT Badak NGL</a>.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function () {
  $("#example1").DataTable();
});
</script>
</body>
</html>
