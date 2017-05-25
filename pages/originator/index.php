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

<body class="hold-transition skin-red fixed layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">

  
  <header class="main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <div class="navbar-header">
        <!-- Logo -->
        <a href="#" class="logo" style="padding-top: 0.25rem">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         
          <img src="../../resources/images/logo_mini.png" class="logo-lg">

          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>e</b>Contract</span>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Dashboard</a></li>
          <li><a href="p1.php">Contract Order</a></li>
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
              <img src="../../resources/images/avatar/icon1.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Originator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon1.png" class="img-circle" alt="User Image">

                <p>
                 Originator
            
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

  <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <!-- <small>Detail of contracts</small> -->
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-default">
              <div class="box-header">
                Outstanding CO
              </div>
              <!-- /. box-header -->
              <div class="box-body">
                <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-close"></i> CO incomplete ( CA - 17001 )! 
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-pencil"></i> CO Need Approval
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-file"></i> CO Need Evaltek !
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-money"></i> CO Need Budget Confirmation !
                </div>

                <table class="table table-condensed input-sm table-striped table-bordered">
                  <thead class="bg-primary">
                    <tr>
                      <th>Category</th>
                      <th class="text-center">Info</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>You Have MOM Prebid</th>
                      <td class="text-center">3</td>
                    </tr>
                    <tr>
                      <th>Rebid CO</th>
                      <td class="text-center">2</td>
                    </tr> 
                    <tr>
                      <th>You Have Mom Kick Off</th>
                      <td class="text-center">3</td>
                    </tr> 
                    <tr>
                      <th>You have LOA</th>
                      <td class="text-center">6</td>
                    </tr> 
                    <tr>
                      <th>Hold CO </th>
                      <td class="text-center">2</td>
                    </tr> 
                    <tr>
                      <th>Aborted CO</th>
                      <td class="text-center">5</td>
                    </tr> 
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>            
            <!-- /.box -->
          </div>
          <div class="col-md-6">
            <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header">
                  Outstanding Contract Agreement
                </div>
                <!-- /. box-header -->
                <div class="box-body">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-child"></i> COC Need Approval
                  </div>                  
                </div>
                <div class="box-body">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-hourglass"></i> Contract Agreement Need Performance Semester Evaluation !
                  </div>                  
                </div>
                <div class="box-body">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-file"></i> Contract Agreement Need Performance Final Evaluation !
                  </div>                  
                </div>
                <div class="box-body">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-info"></i> Reminder Expire CO !
                  </div>                  
                </div>
                <!-- /.box-body -->
              </div>            
            </div>
            <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header">
                  Outstanding VO
                </div>
                <!-- /. box-header -->
                <div class="box-body">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-close"></i> Incomplete VO !
                  </div>
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-pencil"></i> VO Need Approval !
                  </div>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i> Amendement Complete !
                  </div>
               </div>
                <!-- /.box-body -->
              </div>            
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.box -->
      </section>
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
