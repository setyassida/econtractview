<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eContract Badak NGL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <img src="../../resources/images/logo_mini.png" class="logo-lg">

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>e</b>Contract</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../resources/images/avatar/icon2.png" class="user-image" alt="User Image">
              <span class="hidden-xs">ESTIMATOR</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon2.png" class="img-circle" alt="User Image">

                <p>
                 ESTIMATOR

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
          <img src="../../resources/images/avatar/icon2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ESTIMATOR</p>

        </div>
      </div>
      <!-- search form -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Process</li>
        <li class="treeview">

          <!-- menu dashboard -->

          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>

        <!-- menu contract order  -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Contract Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../p1/p1.php"><i class="fa fa-circle-o"></i> Contract</a></li>
            <li><a href="../p2/p2a.php"><i class="fa fa-circle-o"></i> Bidder List</a></li>
            <li><a href="../p3/p3.php"><i class="fa fa-circle-o"></i> Prebid Meeting</a></li>
            <li><a href="../p4/p4.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Evaluasi Administrasi</a></li>
            <li><a href="../p6/p6.php"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li>
            <li  class="active"><a href="browse_evalkom.php"><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li>
            <li><a href="../p9/p9.php"><i class="fa fa-circle-o"></i> LoA</a></li>
            <li><a href="../p10/p10.php"><i class="fa fa-circle-o"></i> Kick-of-meeting</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> LoI</a></li>     
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Kontrak</a></li> 
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> CoC</a></li> 
          </ul>
        </li>

                <!-- VO menu -->
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>VO</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>


                <!-- Report menu -->
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Report</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>BSO</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Contract Order
        <small>Evaluasi Evalkom Pengadaan dan Penunjukan Langsung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Order</li>
        <li class="active">Evaluasi Komersial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Negosiasi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 200px">Nama Kontraktor</th>
                            <th style="width: 200px">Nilai Negosiasi</th>
                            <th style="width: 200px">Hasil Negosiasi</th>
                            <th style="width: 200px">Upload Dokumen Risalah Nego</th>

                          </tr>
                          <tr>
                            <td>PT Hasanah Sumber Utama</td>
                            <td>Rp 1.150.000.000</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control input-sm" style="resize:none"></textarea></td>
                            <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
                          </tr>
                          <tr>
                            <td>PT Aimindo Adie Perkasa</td>
                            <td>Rp 1.050.000.000</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control input-sm" style="resize:none"></textarea></td>
                            <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
                          </tr>
                          <tr>
                            <td>PT Abdi Jati</td>
                            <td>Rp 1.250.000.000</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control input-sm" style="resize:none"></textarea></td>
                            <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
                          </tr>
                        </table>
                      </div>

                </div>
              </div>
              <div class="col-md-12" style="text-align: right;">
                <a href="eval2.php"><button type="button" class="btn btn-warning btn-sm" data-toggle="hold" title="Ambil 3 bidder terendah berikutnya">Re Evaluasi</button></a>   
                <a href="eval4b.php"><button type="button" class="btn btn-info btn-sm" data-toggle="hold" title="Simpan">Simpan</button></a>

              </div>
            </div>
          </form>
        </div>



  <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Penilaian Hasil Evaluasi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>Penawar</th>
                            <th style="width: 200px">Penawaran Asli (Rp)</th>
                            <th style="width: 200px">Penawaran Terkoreksi (RP)</th>
                            <th style="width: 100px">Nilai Negosiasi (RP)</th>
                            <th style="width: 10px">Ranking Asli</th>
                            <th style="width: 10px">Ranking Koreksi</th>
                            <th>Administrasi</th>
                            <th>Teknis</th>
                            <th>Komersial</th>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>PT Hasanah Sumber Utama</td>
                            <td>1.150.000.000</td>
                            <td>950.000.000</td>
                            <td>950.000.000</td>
                            <td> 2 </td>
                            <td> 1 </td>
                            <td> Lulus </td>
                            <td> Lulus </td>
                            <td> Wajar </td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>PT Aimindo Adie Perkasa</td>
                            <td>1.050.000.000</td>
                            <td>1.200.000.000</td>
                            <td>950.000.000</td>
                            <td> 1 </td>
                            <td> 2 </td>
                            <td> Lulus </td>
                            <td> Lulus </td>
                            <td> Wajar </td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>PT Abdi Jati</td>
                            <td>1.250.000.000</td>
                            <td>950.000.000</td>
                            <td>0</td>
                            <td> 3 </td>
                            <td> 3 </td>
                            <td> Lulus </td>
                            <td> Lulus </td>
                            <td> Wajar </td>
                          </tr>
                        </table>

                      </div>
                     

                </div>


              </div>
            </div>
          </form>
        </div>    


    </div>



  </div>


  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="well well-sm">
            <h4>Nilai penawaran terendah(setelah hasil negosiasi atau hasil koreksi) wajar lebih besar dari total budget cost commitment <span class="fa fa-close"></span></h4>
            <h4>Perlu dimasukkan budget rate setiap tahun <span class="fa fa-close"></span></h4>
            <h5>Masukan batas waktu konfirmasi</h5>
            <div class="input-group date col-md-3">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">

            </div>
            <br>
          <a href="costcomm.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Kirim Ketersediaan Anggaran Ke Project Coordinator"><span class="fa fa-send"></span> Kirim Form Ketersediaan</button></a>
          </div>
      
            
            
        </div>
        <div class="box-footer">
        
           <a href="browse_evalkom.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Kembali ke menu browse"><span class="glyphicon glyphicon-ok-circle"></span> Finish</button></a>
        </div>

        </div>

    </div>

    </div>
    


  
<!--  content wrapper-->
      </div>

    </section>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2017 <a href="http://badaklng.co.id">PT Badak NGL</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script>
  $(document).ready(function(){
    $('[data-toggle="hold"]').tooltip();
    $('[data-toggle="resume"]').tooltip();
    $('[data-toggle="abort"]').tooltip();
  });

  $(function () {
    $("#dataTable").DataTable();
    $('#datepicker').datepicker({
      autoclose: true
    });
  });

  
</script>

</body>
</html>
