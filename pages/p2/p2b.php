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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
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
              <i class="fa fa-dashboard"></i> <span>Bidder List</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="p2a.php"><i class="fa fa-circle-o"></i> View Bidder List</a></li>
              <li class="active"><a href="p2b.php"><i class="fa fa-circle-o"></i> Create Bidder List</a></li>
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
          <small>Create Bidder List</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">


        <div class="row">
          <form class="form-horizontal">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Contract Order Reference</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE1">Contract Order</label>
                      <div class="input-group">
                        <input type="text" class="form-control input-sm" id="pickedByCE1" placeholder="Pilih Contract Order">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE2">Judul Pekerjaan</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE2" placeholder="REGULAR INSPECTION OF LIFTING GEARS" disabled>
                    </div>
                  </div>
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE3">Durasi</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE3" placeholder="2 Bulan" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">Jenis Jasa</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="Pemborongan Pekerjaan" disabled>
                    </div>
                  </div>
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE4">Kualifikasi Syarat Peserta Pengadaan</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="M" disabled>
                    </div>
                  </div>                      
                  
                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->

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
                      <input type="text" class="form-control input-sm" id="generatedBySystem1" placeholder="BL17001" disabled>
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
                     <input type="text" class="form-control input-sm" id="inputByCE1" placeholder="M-Z">
                   </div>

                   <div class="form-group">
                    <label>Kualifikasi</label>
                    <div class="col-md-12">
                      <label class="radio-inline" >
                        <input type="radio" name="optradio1">Kecil
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
                        <input type="radio" name="optradio2">Rendah
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

                <!-- kol 3 -->
                <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                  <div class="form-group">
                    <label for="pickedByCE4">Kuota Area Bontang</label>
                    <input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" >
                  </div>
                  <div class="form-group">
                   <label for="pickedByCE5">Kuota Area Kalimantan Timur</label>
                   <input type="number" min="0" class="form-control input-sm" id="pickedByCE5" placeholder="0" >
                 </div>
                 <div class="form-group">
                  <label for="pickedByCE6">Kuota Area Domestik</label>
                  <input type="number" min="0" class="form-control input-sm" id="pickedByCE" placeholder="0" >
                 </div>
                </div>     
              <!-- kol 3 end-->

            </div>
            <!-- /.box-body -->

            <div class="box-footer ">
              <!-- <button type="submit" class="btn btn-info pull-right">Generate Bidder List</button> -->
              <a href="p2c.php" class="btn btn-success pull-right btn-sm">Generate Bidder List</a>
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

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
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
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
</script>
</body>
</html>
