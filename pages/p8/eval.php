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
        <small>Evaluasi Komersial</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Order</li>
        <li class="active">Evaluasi Komersial</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-md-4">
             <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Detail Contract</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div>
                <div class="box-body">
                  <div class="col-md-12">
                      <dt>Contract Order:</dt>
                      <dd>CA-17001</dd>
                      <dt>Judul Pekerjaan:</dt>
                      <dd>Kontrak Jasa Penambahan Alat Berat</dd>
                      <dt>Tanggal Pembukaan:</dt>
                      <dd>17-Januari-2016</dd>
                      <dt>Jenis Kontrak:</dt>
                      <dd>Harga Satuan</dd>
                      <dt>Durasi</dt>
                      <dd>2 Bulan</dd>
                      <dt>Budget</dt>
                      <dd>Rp 1.5 M</dd>
                      <dt>Keterangan</dt>
                      
                        <div class="col-md-12">
                          <textarea id="inputKeterangan" rows="5" placeholder="Type Here.." class="form-control" style="resize:none"></textarea>
                        </div>
                        
                  </div>
                  
                </div>



             </div>

          </div>
          <div class="col-md-8">
                      <div class="box box-success">
                          <div class="box-header with-border">
                            <h5>Hasil Pembukaan</h5>
                             <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <table class="table table-bordered table-condensed">
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Penawar</th>
                                <th>Penawaran (Rp)</th>
                                <th>Penalty Point</th>
                                <th>Sanksi ( BL/SC )</th>
                                <th>Evaluasi admnistrasi</th>
                              </tr>
                              <tr>
                                <td>1.</td>
                                <td>PT Aimindo Adie Perkasa</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>2.</td>
                                <td>PT Hasanah Sumber Utama</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>3.</td>
                                <td>PT Harta</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>4.</td>
                                <td>PT Sumedang Jaya lestari</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>5.</td>
                                <td>PT Sumedang Jaya lestari</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>6.</td>
                                <td>PT Sumedang Jaya lestari</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>7.</td>
                                <td>PT Sumedang Jaya lestari</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>
                              <tr>
                                <td>8.</td>
                                <td>PT Sumedang Jaya lestari</td>
                                <td>5.000.000.000</td>
                                <td>30</td>
                                <td> - </td>
                                <td> - </td>
                              </tr>

                            </table>

                            
                          </div>

                      </div>



                    </div>
        
      </div>
      <div class="row">
        <div class="col-md-4">
                      <div class="box box-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">ESTIMASI PTB</h3>
                          <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                          <table class="table table-bordered table-condensed">
                            <tr>
                              <th>HPS Minimum</th>
                              <th>HPS Most Likely</th>
                              <th>HPS Maksimum</th>
                            </tr>
                            <tr>
                              <td> Rp 4.500.000.000 </th>
                              <td> Rp 5.000.000.000 </th>
                              <td> Rp 3.000.000.000 </th>
                            </tr>
                          </table>
                        </div>


                      </div>

        </div> 
      </div>    


      <div class="row">
          <div class="col-md-12">
              <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Evaluasi Teknis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                                    <h5> Tidak diperlukan. Karena termasuk Ke dalam metode penunjukkan dan pengadaan langsung</h5>
                </div>

                
            </div>
            <div class="box-footer" style="text-align: right;">
                        <div class="col-md-12">
                        <a href="browse_evalkom2.php">
                                    <button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;">
                                    Back
                                  </button>               
                          </a>
                          
                          <a href="eval2.php"><button type="button" class="btn btn-success btn-sm">Lanjut ke rincian bidder</button></a>

                        </div>

                </div>
            <!-- /.box-body -->

          </form>
        </div>

          </div>

      </div>

    </section>

<!--  content wrapper-->
  </div>

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
  });
</script>

</body>
</html>
