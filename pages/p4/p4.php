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
              <img src="../../resources/images/avatar/icon4.png" class="user-image" alt="User Image">
              <span class="hidden-xs">ESTIMATOR</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon4.png" class="img-circle" alt="User Image">

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
          <img src="../../resources/images/avatar/icon4.png" class="img-circle" alt="User Image">
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
            <li class="active"><a href="../p4/p4.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Evaluasi Administrasi</a></li>
             <li><a href="../p6/p6.php"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li>
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
        Contract Order
        <small>Harga Perkiraan Sendiri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Harga Perkiraan Sendiri</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="nav-tabs-custom tab-default">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">eContract</a></li>
        <li><a href="#tab_2" data-toggle="tab">eProcurement</a></li>
        
        
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          
          <div class="box box-solid">
            
            <div class="row">
              <div class="col-md-12">
                <a href="p4-create.php"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Create HPS</button></a>
              </div>
            </div>
            
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                  <th style="width:100px">Nomor HPS</th>
                  <th style="width:75px">Tanggal Opening</th>
                  <th style="width:75px">Nomor Kontrak</th>
                  <th>Judul Pekerjaan</th>
                  <th style="width:50px">Status</th>
                  <th style="width:50px">Edit HPS <span class="text-red">(Estimator)</span></th>
                  <th style="width:60px">Lihat HPS <span class="text-red">(All)</span></th>
                  <th style="width:50px">Lihat HPS <span class="text-red">(Approver)</span></th>
                  <th style="width:60px">Upload Hasil Scan <span class="text-red">(Estimator)</span></th>
                  <th style="width:60px">Dokumen HPS <span class="text-red">(All)</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0003/HPS/2017</a></td>
                  <td>01-01-2017</td>
                  <td>CA-17001</td>
                  <td>PENGADAAN SISTEM INFORMASI</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center"><a href="p4-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p4-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0004/HPS/2017</a></td>
                  <td>25-03-2018</td>
                  <td>CC-167321</td>
                  <td>PERBAIKAN INFRASTRUKTUR</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center" ><a href="p4-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p4-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0001/HPS/2017</a></td>
                  <td>17-02-2018</td>
                  <td>CB-18121</td>
                  <td>PENGADAAN PERANGKAT LUNAK</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><a href="p4-edit.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p4-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0002/HPS/2017</a></td>
                  <td>28-01-2018</td>
                  <td>CA-17001</td>
                  <td>PEMELIHARAAN</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><a href="p4-edit.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p4-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td><a href="p3-view.php?no=CO-17001">0005/HPS/2017</a></td>
                  <td>28-01-2018</td>
                  <td>CB-17555</td>
                  <td>KEBERSIHAN</td>
                  <td><div class="text-center"><span class="label label-success">Approved</span></div></td>
                  <td><div class="text-center"><a href="p4-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p4-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              Keterangan Status : <br>
              <div class="col-md-1"><span class="label label-primary">To be approved</span></div> <div class="col-md-11">: Sedang dalam tahap persetujuan oleh Approver</div>
              <div class="col-md-1"><span class="label label-warning">Draft</span></div> <div class="col-md-11">: Sedang dalam tahap pembuatan oleh Estimator</div>
              <div class="col-md-1"><span class="label label-success">Approved</span></div> <div class="col-md-11">: Telah disetujui oleh Approver</div>
            </div>
            
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <div class="box box-solid">
            
            <div class="row">
              <div class="col-md-12">
                <a href="p4-create-eproc.php"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Create HPS</button></a>
              </div>
            </div>
            
            <div class="box-body">
              <table id="dataTable2" class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                  <th style="width:100px">Nomor HPS</th>
                  <th style="width:75px">Tanggal Opening</th>
                  <th style="width:75px">Nomor Kontrak</th>
                  <th>Judul Pekerjaan</th>
                  <th style="width:50px">Status</th>
                  <th style="width:60px">Upload Dokumen HPS <span class="text-red">(Estimator)</span></th>
                  <th style="width:60px">Lihat HPS <span class="text-red">(All)</span></th>
                  <th style="width:50px">Lihat HPS <span class="text-red">(Approver)</span></th>
                  
                  <th style="width:60px">Dokumen HPS <span class="text-red">(All)</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0003/HPS/2017</a></td>
                  <td>01-01-2017</td>
                  <td>CA-17001</td>
                  <td>PENGADAAN SISTEM INFORMASI</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><div class="text-center"><a href="p4-view-eproc.php" ><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve-eproc.php" ><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0004/HPS/2017</a></td>
                  <td>25-03-2018</td>
                  <td>CC-167321</td>
                  <td>PERBAIKAN INFRASTRUKTUR</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><div class="text-center"><a href="p4-view-eproc.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve-eproc.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0001/HPS/2017</a></td>
                  <td>17-02-2018</td>
                  <td>CB-18121</td>
                  <td>PENGADAAN PERANGKAT LUNAK</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><div class="text-center"><a href="p4-view-eproc.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve-eproc.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  
                  <td><div class="text-center" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                  
                </tr>
                <tr>
                  <td><a href="p4-view.php?no=CO-17001">0002/HPS/2017</a></td>
                  <td>28-01-2018</td>
                  <td>CA-17001</td>
                  <td>PEMELIHARAAN</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><div class="text-center"><a href="p4-view-eproc.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve-eproc.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  
                  <td><div class="text-center" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                  
                </tr>
                <tr>
                  <td><a href="p3-view.php?no=CO-17001">0005/HPS/2017</a></td>
                  <td>28-01-2018</td>
                  <td>CB-17555</td>
                  <td>KEBERSIHAN</td>
                  <td><div class="text-center"><span class="label label-success">Approved</span></div></td>
                  <td><div class="text-center" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><div class="text-center"><a href="p4-view-eproc.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><a href="p4-approve-eproc.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              Keterangan Status : <br>
              <div class="col-md-1"><span class="label label-primary">To be approved</span></div> <div class="col-md-11">: Sedang dalam tahap persetujuan oleh Approver</div>
              <div class="col-md-1"><span class="label label-warning">Draft</span></div> <div class="col-md-11">: Sedang dalam tahap pembuatan oleh Estimator</div>
              <div class="col-md-1"><span class="label label-success">Approved</span></div> <div class="col-md-11">: Telah disetujui oleh Approver</div>
            </div>
            
          </div>
        </div>
        
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->


      
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
    $("#dataTable2").DataTable();
  });
</script>

</body>
</html>
