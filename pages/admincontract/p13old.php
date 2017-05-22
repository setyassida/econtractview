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

  <?php @include('p13header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Certification Of Completion
        <!-- <small>Evaluasi Komersial</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li class="active">Contract Order</li> -->
        <li class="active">  Certification Of Completion</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box-body">
        <div class="box box-danger">
            <div class="box-header">
              <!-- <h3 class="box-title">Result</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
              <table id="example1" class="table table-bordered table-striped table-condensed text-center">
                <thead>
                <tr>
                  <th>No. Contract</th>
                  <th>Judul Pekerjaan</th>
                  <th>Status</th>
                  <th>Tanggal Dikeluarkan</th>
                  <th style="width:10px">Download COC</th>
                  <th style="width:50px">Upload COC</th>                
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="#!">CB-17001</a></td>
                  <td>REGULAR INSPECTION OF LIFTING GEARS</td>
                  <td class="text-center"><span class="label label-primary">Draft</span></td>
                  <td>20-Jan-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  <td><div class="text-center"><button disabled="" type="button" class="btn btn-success btn-xs"></span> Upload</button></a></div></td>
                </tr>
                
                <tr>
                  <td><a href="#!">CA-17002</a></td>
                  <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                  <td class="text-center"><span class="label label-success">Finish</span></td>
                  <td>23-Apr-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  <td><div class="text-center"><button type="button" class="btn btn-success btn-xs"></span> Upload</button></a></div></td>
                  
                </tr>
                
                <tr>
                  <td>CA-17003</td>
                  <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                  <td class="text-center"><span class="label label-danger">Rejected</span></td>
                  <td>22-Feb-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  <td><div class="text-center"><button disabled="" type="button" class="btn btn-success btn-xs"></span> Upload</button></a></div></td>
                  
                </tr>
                <tr>
                  <td>CA-17002</td>
                  <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                  <td class="text-center"><span class="label label-warning">Waiting For Approval</span></td>
                  <td>23-Apr-2017</td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  <td><div class="text-center"><button type="button" class="btn btn-success btn-xs"></span> Upload</button></a></div></td>
                  
                </tr>
                
                
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h4>Keterangan status</h4>
              <ul>
                <li><span class="label label-warning">Waiting for approval</span> : CE/LCE/PC diharapkan tanda tangan COC</li>
                <li><span class="label label-primary">Draft</span> : COC di-draft</li>
                <li><span class="label label-success">Approved</span> : COC di-approve</li>
                <li><span class="label label-danger">Rejected</span> : COC di-reject</li>
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
