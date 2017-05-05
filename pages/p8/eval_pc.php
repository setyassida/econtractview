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
              <img src="../../resources/images/avatar/icon4.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Project Coordinator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon4.png" class="img-circle" alt="User Image">

                <p>
                 Project Coordinator

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
          <p>Project Coordinator</p>

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

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box-body">
        <div class="box box-danger">
            <div class="box-header">
              <!-- <h3 class="box-title">Result</h3> -->
              <!-- <a href="browse_evalkom_2.php"><button class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Buat Evaluasi Komersial Baru</button></a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
              <table id="example1" class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>No. Contract</th>
                  <th>Judul Pekerjaan</th>
                  <th>Status</th>
                  <th style="width:50px">Tanggal Dikeluarkan</th>
                  <th style="width:100px">Download Form Ketersediaan Anggaran</th>
                  <th style="width:100px">Upload <br> Form Ketersediaan Anggaran</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>CB-17001</td>
                  <td>REGULAR INSPECTION OF LIFTING GEARS</td>
                  <td class="text-center"><span class="label label-primary">Draft</span></td>
                  <td>20-Jan-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button disabled="" type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                <tr>
                  <td><a href="#">CC-17001</a></td>
                  <td>TR-G DEAD LEGS UNDER INSULATION LINE SURVEY</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>21-Feb-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                <tr>
                  <td><a href="#">CA-17003</a></td>
                  <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>22-Feb-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                
                <tr>
                  <td><a href="#">CA-17002</a></td>
                  <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>23-Apr-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                
                <tr>
                  <td><a href="#">CA-17001</a></td>
                  <td>STEAM CONDENSATE LINE</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>24-Apr-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                
                <tr>
                  <td>CB-17001</td>
                  <td>REGULAR INSPECTION OF LIFTING GEARS</td>
                  <td class="text-center"><span class="label label-primary">Draft</span></td>
                  <td>20-Jan-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button disabled="" type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                <tr>
                  <td><a href="#">CC-17001</a></td>
                  <td>TR-G DEAD LEGS UNDER INSULATION LINE SURVEY</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>21-Feb-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
             
                </tr>
                <tr>
                  <td>CA-17003</td>
                  <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                  <td class="text-center"><span class="label label-danger">Aborted</span></td>
                  <td>22-Feb-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" disabled=""  class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
             
                </tr>
                <tr>
                  <td><a href="costcomm.php">CA-17002</a></td>
                  <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                  <td class="text-center"><span class="label label-warning">Waiting Confirmation</span></td>
                  <td>23-Apr-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
              
                </tr>
                
                
                </tbody>
                <tfoot>
                <!-- <tr>
                  <th>Bidder List No</th>
                  <th>Contract No</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr> -->
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h4>Keterangan status</h4>
              <ul>
                <li><span class="label label-primary">Draft</span> : evalkom di-draft</li>
                <li><span class="label label-danger">Aborted</span> : evalkom di-abort</li>
                <li><span class="label label-success">Finish</span> : evalkom di-approve</li>
                <li><span class="label label-warning">Waiting Confirmation</span> : evalkom waiting for confirmation</li>
                <li><span class="label label-default">Waiting BCR</span> : evalkom waiting for BCR process</li>
                <li><span class="label label-purple" style="background-color: #001F3F;">Re Bid</span> : evalkom re bid</li>
                <li><span class="label label-purple" style="background-color: #605ca8;">Re Eval</span> : evalkom re eval</li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
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
