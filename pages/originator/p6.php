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

  <?php include("p6-header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contract Order
        <small>Evaluasi Teknis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Evaluasi Teknis</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box
      ">
        <div class="box-header with-border">
          <div class="row">
            <div class="col-md-12">
              <a href="p6-create.php"><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Buat Evaluasi Teknis</button></a>
            </div>
          </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">


            <!-- main column-->
          

          <table id="dataTable" class="table table-bordered table-condensed table-hover">
            <thead>
            <tr>
              <th style="width:75px">Nomor Kontrak</th>
              <th >Judul Pekerjaan</th>
              <th style="width:100px">Status Evaluasi Teknis</th>
              <th style="width:50px">Edit <span class="text-red">(PO/CO)</span></th>
              <th style="width:60px">Lihat Evaltek <span class="text-red">(All)</span></th>
              <th style="width:60px">Lihat Evaltek <span class="text-red">(Approver)</span></th>
              <th style="width:75px">Upload Hasil Scan <span class="text-red">(PO/CO)</span></th>
              <th style="width:50px">Dokumen Evaltek<span class="text-red">(All)</span></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>CA-17001</td>
              <td>PENGADAAN SISTEM INFORMASI</td>
              <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
              <td><div class="text-center"><a href="p6-edit.php"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
              <td><div class="text-center"><a href="p6-view.php"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></td>
              <th><div class="text-center"><a href="p6-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></th>
              <td><div class="text-center"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
              <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              
            </tr>
            <tr>
              <td>CA-17002</td>
              <td>PERBAIKAN INFRASTRUKTUR</td>
              <td><div class="text-center"><span class="label label-warning">Draft</span></div></td>
              <td><div class="text-center"><a href="p6-edit.php"><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
              <td><div class="text-center"><a href="p6-view.php"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></td>
              <th><div class="text-center"><a href="p6-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></th>
              <td><div class="text-center"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
              <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              
            </tr>
            <tr>
              <td>CA-17003</td>
              <td>PENGADAAN PERANGKAT LUNAK</td>
              <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
              <td><div class="text-center"><a href="p6-edit.php" hidden><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
              <td><div class="text-center"><a href="p6-view.php"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></td>
              <th><div class="text-center"><a href="p6-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></th>
              <td><div class="text-center"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
              <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              
            </tr>
            <tr>
              <td>CA-17004</td>
              <td>PEMELIHARAAN</td>
              <td><div class="text-center"><span class="label label-primary">To be approved</span></div></td>
              <td><div class="text-center"><a href="p6-edit.php" hidden><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
              <td><div class="text-center"><a href="p6-view.php"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></td>
              <th><div class="text-center"><a href="p6-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></th>
              <td><div class="text-center"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
              <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              
            </tr>
            <tr>
              <td>CA-17005</td>
              <td>KEBERSIHAN</td>
              <td><div class="text-center"><span class="label label-success">Approved</span></div></td>
              <td><div class="text-center"><a href="p6-edit.php" hidden><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cog"></span> Edit</button></a></div></td>
              <td><div class="text-center"><a href="p6-view.php"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></td>
              <th><div class="text-center"><a href="p6-approve.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Evaltek</button></a></div></th>
              <td><div class="text-center"><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
              <td><button type="button" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              
            </tr>
            
            <tbody>
          </table>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Keterangan Status : <br>
          <div class="col-md-1"><span class="label label-primary">To be approved</span></div> <div class="col-md-11">: Sedang dalam tahap persetujuan oleh Approver</div>
          <div class="col-md-1"><span class="label label-warning">Draft</span></div> <div class="col-md-11">: Sedang dalam tahap pembuatan oleh Project Coordinator / Contract Organizator</div>
          <div class="col-md-1"><span class="label label-success">Approved</span></div> <div class="col-md-11">: Telah disetujui oleh Approver</div>
        </div>
      </div>
      <!-- /.box -->
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
  });
</script>

</body>
</html>
