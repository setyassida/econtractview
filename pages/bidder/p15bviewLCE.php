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
    <a href="index2.html" class="logo" style="padding-top: 0.25rem">
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
              <span class="hidden-xs">Contract Engineer</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon1.png" class="img-circle" alt="User Image">

                <p>
                 Contract Engineer
            
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
          <p>Contract Engineer</p>
          
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
        <li class=" treeview">

          <!-- menu dashboard -->
      
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>

        <!-- menu contract order  -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Contract Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="../p1/p1.php"><i class="fa fa-circle-o"></i> Contract</a></li> -->
            <!-- <li><a href="../p2/p2a.php"><i class="fa fa-circle-o"></i> Bidder List</a></li> -->
            <li><a href="../p3/p3.php"><i class="fa fa-circle-o"></i> Prebid Meeting</a></li>
            <li><a href="../p3b/p3b.php"><i class="fa fa-circle-o"></i> Penawaran</a></li>
            <!-- <li><a href="../p4/p4.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li> -->
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Evaluasi Administrasi</a></li> -->
            <!-- <li><a href="../p6/p6.php"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li> -->
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li> -->
            <li><a href="../p9/p9.php"><i class="fa fa-circle-o"></i> LoA</a></li>
            <li><a href="../p10/p10.php"><i class="fa fa-circle-o"></i> Kick-of-meeting</a></li>
            <li><a href="../p11/p11_createLOI.php"><i class="fa fa-circle-o"></i> LoI</a></li>     
            <li><a href="#"><i class="fa fa-circle-o"></i> Kontrak</a></li> 
            <li><a href="#"><i class="fa fa-circle-o"></i> CoC</a></li> 
          </ul>
        </li>

                <!-- VO menu -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-th"></i> 
            <span>Variation Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Variation Order</a></li>
            <li class="active"><a href="p15b.php"><i class="fa fa-circle-o"></i> Penawaran VO</a></li>
          </ul>
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

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penawaran VO
        <small>Penawaran VO Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p15b.php">Penawaran VO</a></li>
        <li class="active"><a href="p15bviewawaitquote.php">Detail VO</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Detail Tawaran</a></li>
            <li><a href="#tab_2" data-toggle="tab">Dokumen Terkait Contract Order</a></li>
            <li><a href="#tab_3" data-toggle="tab">Dokumen Terkait Prebid Meeting</a></li>
          </ul>
          <div class="tab-content">
            <div class="text-center">
              <h3 class="box-title">STATUS : <span class="mark text-warning">AWAIT QUOTE</span></h3>
            </div>
            <!-- tab1 -->
            <div class="tab-pane active" id="tab_1">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-solid">
                    <div class="box-body">
                      <div class="row">
                        <!-- kol kiri -->
                        <div class="col-md-6">
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nomor Kontrak :</label>
                            <div class="form-control-static col-md-8">
                              CA-17001
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Judul Pekerjaan :</label>
                            <div class="form-control-static col-md-8">
                              STEAM CONDENSATE LINE
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Jenis Jasa :</label>
                            <div class="form-control-static col-md-8">
                              Jasa Pemborongan Pekerjaan
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Durasi Pekerjaan :</label>
                            <div class="form-control-static col-md-8">
                              3 Bulan
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Jenis Kontrak :</label>
                            <div class="form-control-static col-md-8">
                              Lump Sum
                            </div>
                          </div>
                        </div>
                        <!-- ./kol kiri -->
                        <!-- kol kanan -->
                        <div class="col-md-6">
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Bid Closing/<br>Opening Date :</label>
                            <div class="form-control-static col-md-8">
                              30-Mei-2017
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Status Contract Order :</label>
                            <div class="form-control-static col-md-8">
                              Resumed 22-Apr-2017
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nama <br>Contract Engineer :</label>
                            <div class="form-control-static col-md-8">
                              J. J. Thompson
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Email :</label>
                            <div class="form-control-static col-md-8">
                              jthomp@econ.com
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nomor Telepon Kantor :</label>
                            <div class="form-control-static col-md-8">
                              031-38429577
                            </div>
                          </div>
                        </div>
                        <!-- ./kol kanan -->
                      </div>
                      <!-- ./row -->
                    </div>
                    <!-- ./box-body -->
                  </div>
                  <!-- ./box -->
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
            <!-- ./tab1 -->
            <!-- tab2 -->
            <div class="tab-pane" id="tab_2">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-solid">
                    <div class="box-body">
                      <table class="table table-bordered table-condensed table-hover">
                        <thead>
                          <tr>
                            <th>Judul Dokumen</th>
                            <th style="width:75px">Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lampiran Contract Order 1</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 2</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 3</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 4</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 5</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> 
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
            <!-- ./tab2 -->
            <!-- tab3 -->
            <div class="tab-pane" id="tab_3">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-solid">
                    <div class="box-body">
                      <table class="table table-bordered table-condensed table-hover">
                        <thead>
                          <tr>
                            <th>Judul Dokumen</th>
                            <th style="width:75px">Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lampiran Prebid Meeting 1</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Prebid Meeting 2</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Prebid Meeting 3</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Prebid Meeting 4</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Prebid Meeting 5</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> 
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
            <!-- ./tab3 -->
            
            <div class="row" style="padding-bottom: 0.5rem">
              <div class="col-md-12 text-right">
                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Abort</a>
              </div>
            </div>
          </div>
          <!-- ./tabs content -->
        </div>
        <!-- ./div tabs -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
