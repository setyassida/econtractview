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

  <?php include("p16-header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Variation Order
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
        
        
        
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          
          <div class="box box-solid">
            
            <div class="row">
              <div class="col-md-12">
                <a href="p16-create.php"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Create HPS</button></a>
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
                  <th style="width:60px">Upload Hasil Scan <span class="text-red">(Estimator)</span></th>
                  <th style="width:60px">Dokumen HPS <span class="text-red">(All)</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>0003/HPS/2017</td>
                  <td>01-01-2017</td>
                  <td>CA-17001</td>
                  <td>PENGADAAN SISTEM INFORMASI</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center"><a href="p16-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p16-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                  
                </tr>
                <tr>
                  <td>0004/HPS/2017</td>
                  <td>25-03-2018</td>
                  <td>CC-167321</td>
                  <td>PERBAIKAN INFRASTRUKTUR</td>
                  <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
                  <td><div class="text-center" ><a href="p16-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p16-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td>0001/HPS/2017</td>
                  <td>17-02-2018</td>
                  <td>CB-18121</td>
                  <td>PENGADAAN PERANGKAT LUNAK</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><a href="p16-edit.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p16-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td>0002/HPS/2017</td>
                  <td>28-01-2018</td>
                  <td>CA-17001</td>
                  <td>PEMELIHARAAN</td>
                  <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
                  <td><div class="text-center"><a href="p16-edit.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p16-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
                  <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                  <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                  
                </tr>
                <tr>
                  <td>0005/HPS/2017</td>
                  <td>28-01-2018</td>
                  <td>CB-17555</td>
                  <td>KEBERSIHAN</td>
                  <td><div class="text-center"><span class="label label-success">Approved</span></div></td>
                  <td><div class="text-center"><a href="p16-edit.php" hidden><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
                  <td><div class="text-center"><a href="p16-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat HPS</button></a></div></td>
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
