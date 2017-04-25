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
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>E</b>-Ct</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>E-Contract</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Ibu Nia</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Vice President
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in <sidebar class="l"></sidebar>ess -->
        <ul class="sidebar-menu">
          <li class="header">Process Menu</li>

          <!-- Contract Order -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Contract Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- BIDDER LIST -->
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-list"></i> <span>Bidder List</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="p2a.php"><i class="fa fa-circle-o"></i> View Bidder List</a></li>
              <li><a href="p2b.php"><i class="fa fa-circle-o"></i> Create Bidder List</a></li>
            </ul>
          </li>

          <!-- Pre Bid Meeting -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Pre-Bid Meeting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- HPS -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Harga Perkiraan Sendiri</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Administrasi -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Administrasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Teknis -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Teknis</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Komersial -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Komersial</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- LoA -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Letter of Agreement</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Kick of Meeting -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kick_of_Meeting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- LoI -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Letter of Intent</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Administrasi -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kontrak</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- CoC -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Certificate of Completion</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- VO -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Variation Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Report -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
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
          Bidder List
          <small>BL17001</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p2a.php">Bidder List</a></li>
        <li class="active"><a href="p2c.php">BL-17001</a></li>
      </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 1</span>
                <strong>Scott Summers</strong>
                <br><br>
                <div class="text-right text-success"><i class="fa fa-check"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 2</span>
                <strong>Jean Grey</strong>
                <br><br>
                <div class="text-right text-success"><i class="fa fa-check"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 3</span>
                <strong>Bobby Drake</strong>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 4</span>
                <strong>Kitty Pryde</strong>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Contract Order</h3>
              </div>
              <div class="box-body">
                <dl>
                  <dt>Contract Order</dt>
                  <dd>CA-17001</dd>
                  <dt>Judul Pekerjaan</dt>
                  <dd>REGULAR INSPECTION OF LIFTING GEARS</dd>
                  <dt>Durasi</dt>
                  <dd>2 Bulan</dd>
                  <dt>Jenis Jasa</dt>
                  <dd>Pemborongan Pekerjaan</dd>
                  <dt>Kualifikasi Syarat Peserta Pengadaan</dt>
                  <dd>M (Rp. 500 Juta <= NK <= Rp. 10 M)</dd>
                </dl>
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="pull-right" style="margin-left: 1rem">
                      <button type="button" class="btn btn-danger pull-right btn-sm" data-toggle="modal" data-target="#abortModal">Abort</button>
                    </div>
                    <div class="pull-right" style="margin-left: 1rem">
                      <button type="button" class="btn btn-warning pull-right btn-sm" data-toggle="modal" data-target="#holdModal">Hold</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Data Bidder List</h3>
                <div class="mark pull-right"><strong>Status: </strong>DRAFT</div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <dl>
                      <dt>Nomor Bidder List</dt>
                      <dd>BL-17001</dd>
                      <dt>Tanggal Dibuat</dt>
                      <dd>22-Apr-2017</dd>
                      <dt>Waktu Dibuat</dt>
                      <dd>13:30</dd>
                      <dt>Klasifikasi</dt>
                      <dd>M</dd>
                      <dt>Kualifikasi</dt>
                      <dd>Kecil</dd>
                      <dt>
                    </dl>
                  </div>
                  <div class="col-md-4">
                    <dl>
                      <dt>Tingkat Risiko</dt>
                      <dd>Sedang</dd>
                      <dt>Tanggal Diterbitkan</dt>
                      <dd>22-Sep-2017</dd>
                      <dt>Kuota Area</dt>
                      <table class="table table-condensed table-bordered">
                        <tbody>
                          <tr>
                            <td>Bontang</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <td>Kalimantan Timur</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Domestik</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>
                    </dl>
                  </div>
                  </div>
                </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="pull-right" style="margin-left: 1rem">
                      <a href="#"><button class="btn btn-success pull-right btn-sm">Approve</button></a>
                    </div>
                    <div class="pull-right" style="margin-left: 1rem">
                      <button type="button" class="btn btn-danger pull-right btn-sm" data-toggle="modal" data-target="#rejectModal">Reject</button>
                    </div>
                  </div>
                </div>

                </div>
              </div>
              <!-- box bidder list -->

              </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-success">
                    <div class="box-header">
                      <h3 class="box-title">Active Bidder</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-condensed">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Penawar</th>
                              <th>Masa SIO</th>
                              <th>Penalti Poin</th>
                              <th>Sanksi</th>
                              <th>Added By</th>
                              <th>Added Date</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Perusahaan A</td>
                              <td>1 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>System</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <span class="fa fa-ban"></span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Perusahaan B</td>
                              <td>2 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>Approver</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <a href="#">
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="abort" title="Remove this bidder"><span class="fa fa-times"></span></button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>3 </td>
                              <td>Perusahaan C</td>
                              <td>1 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <a href="#">
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="abort" title="Remove this bidder"><span class="fa fa-times"></span></button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                      <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                        <a href="#" class="btn btn-info pull-right btn-sm"><span class="fa fa-plus"></span> Add Bidder</a>
                      </div>
                    </div>
                  </div>
                    <!-- /.box -->

                    <!-- box bidder list -->
                  <div class="box box-danger">
                      <div class="box-header">
                        <h3 class="box-title">Removed Bidder</h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped table-condensed">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Penawar</th>
                              <th>Added By</th>
                              <th>Added Date</th>
                              <th>Removed By</th>
                              <th>Removed Date</th>
                              <th>Alasan Remove</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Perusahaan D</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>Approver</td>
                              <td>23-Apr-2017</td>
                              <td>Terkena Sanksi</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Perusahaan E</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>Approver</td>
                              <td>23-Apr-2017</td>
                              <td>Terkena Sanksi</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                        <!-- /.box-body -->
                  </div>
                    <!-- /.box -->
                </div>
              </div>
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          <footer class="main-footer">
            <strong>Copyright &copy; 2017 <a href="http://www.badaklng.co.id"> PT Badak NGL</a>.</strong> All rights
            reserved.
          </footer>

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
              <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
              <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Home tab content -->
              <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                        <p>Will be 23 on April 24th</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-user bg-yellow"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                        <p>New phone +1(800)555-1234</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                        <p>nora@example.com</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="menu-icon fa fa-file-code-o bg-green"></i>

                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                        <p>Execution time 5 seconds</p>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Custom Template Design
                        <span class="label label-danger pull-right">70%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Update Resume
                        <span class="label label-success pull-right">95%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Laravel Integration
                        <span class="label label-warning pull-right">50%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <h4 class="control-sidebar-subheading">
                        Back End Framework
                        <span class="label label-primary pull-right">68%</span>
                      </h4>

                      <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- /.control-sidebar-menu -->

              </div>
              <!-- /.tab-pane -->
              <!-- Stats tab content -->
              <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
              <!-- /.tab-pane -->
              <!-- Settings tab content -->
              <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                  <h3 class="control-sidebar-heading">General Settings</h3>

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Report panel usage
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Some information about this general settings option
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Allow mail redirect
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Other sets of options are available
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Expose author name in posts
                      <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                      Allow the user to show his name in blog posts
                    </p>
                  </div>
                  <!-- /.form-group -->

                  <h3 class="control-sidebar-heading">Chat Settings</h3>

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Show me as online
                      <input type="checkbox" class="pull-right" checked>
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Turn off notifications
                      <input type="checkbox" class="pull-right">
                    </label>
                  </div>
                  <!-- /.form-group -->

                  <div class="form-group">
                    <label class="control-sidebar-subheading">
                      Delete chat history
                      <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                  </div>
                  <!-- /.form-group -->
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
          </aside>
          <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div id="abortModal" class="modal fade modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Abort Contract Order?</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputFile">File pendukung:</label>
          <input type="file" id="exampleInputFile">
          <label>Alasan abort contract order:</label>
          <textarea class="form-control" rows="3" placeholder="Isi alasan"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="rejectModal" class="modal fade modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reject Bidder List?</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Alasan reject bidder list:</label>
          <textarea class="form-control" rows="3" placeholder="Isi alasan"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div id="holdModal" class="modal fade modal-warning">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hold Bidder List?</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Alasan hold bidder list:</label>
          <textarea class="form-control" rows="3" placeholder="Isi alasan"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
  $(document).ready(function(){
    $('[data-toggle="abort"]').tooltip(); 
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable();
  });
</script>
</body>
</html>