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
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

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
                <img src="../../resources/images/avatar/icon1.png" class="user-image" alt="User Image">
                <span class="hidden-xs">CE/LCE</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../resources/images/avatar/icon1.png" class="img-circle" alt="User Image">

                  <p>
                    CE/LCE

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
            <img src="../../resources/images/avatar/icon1.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>CE/LCE</p>

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
      <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Contract</a></li>
      <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Bidder List</a></li>
      <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Prebid Meeting</a></li>
      <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Evaluasi Administrasi</a></li>
      <li class="active"><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> LoA</a></li>
      <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Kick-of-meeting</a></li>
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
      <i class="fa fa-th"></i> <span>Report</span>
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Letter of Intent
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contract Order</a></li>
      <li>Letter of Intent</li>
      <li class="active">CA-17001</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
<div class="row">
  <div class="col-md-12">


    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Proyek dan Bidder Pemenang</h3>
      </div>
      <div class="box-body">

            <div class="col-md-6">
              <dt>Nomor PO Service</dt>
              <dd>098776</dd> <br>
              <dt>Judul Pekerjaan</dt>
              <dd>Jasa Pemborongan Pekerjaan Pembuangan Sampah, Drum Bekas, Pemeliharaan Taman dan Kebersihan Lingkungan di Area Zone-I & II di PT Badak NGL Bontang, Paket “B” Tahun 2017” </dd> <br>
              <dt>Nilai PO Service</dt>
              <dd>Rp. 400.000.000,- </dd> <br>
              <dt>Durasi Kontrak</dt>
              <dd>Durasi : 4 Bulan</dd>
              <dd>Mulai : 17 September 2016 </dd>
              <dd>Selesai : 10 Januari 2017 </dd> <br>
            </div>

            <div class="col-md-6">
              <dt>Nama Perusahaan</dt>
              <dd>PT Nur Maulana</dd> <br>
              <dt>Alamat Perusahaan </dt>
              <dd>Jl. Anggrek I RT 37 No 43, Bukit Indah, Bontang – Kalimantan Timur </dd> <br>
              <dt>Nama Pimpinan</dt>
              <dd>Setyassid Novian Putra D </dd> <br>
            </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right" style="margin-right: 2rem">
          <button type="button" class="btn btn-default btn-sm pull right"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
          <button type="button" class="btn btn-success btn-sm pull right"><span class="glyphicon glyphicon-print"></span> Cetak</button>
							</div>

      </div>
    </div>
    <!-- /.box -->

  </div>

</div>



  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.3.12
  </div>
  <strong>Copyright &copy; 2017 <a href="http://badaklng.co.id">PT Badak NGL</a>.</strong> All rights reserved.
</footer>

<div id="publishModal" class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					</div>
					<div class="modal-body">
						<h4 class="modal-title">Apakah anda yakin untuk mencetak dokumen Letter of Intent ini?</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-success">Ya</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
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
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
$(function () {
  $("#dataTable").DataTable();

  //Initialize Select2 Elements
  $(".select2").select2();
});
</script>

</body>
</html>
