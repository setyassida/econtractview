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

  <?php include("p20-header.php");?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporting
        <small>CSMS dan Tenaga Kerja</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="p20.php">CSMS dan Tenaga Kerja</a></li>
        <li class="active">CA-17001</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box">
        <div class="box-header with-border">
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="col-md-12">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h4>Informasi Umum</h4>
              </div>
              <div class="box-body">

              </div>
            </div>
          </div>

          <table class="table table-bordered table-condensed table-hover">
            <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Pekerja</th>
              <th>Tipe Pekerja</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Lihat Detail</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Jack Sparrow</td>
              <td>Overhead</td>
              <td>L</td>
              <td>Wonogiri</td>
              <td>01-01-1990</td>
              <td>
                <div class="text-center"><a href="p20-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Katniss Everdeen</td>
              <td>Overhead</td>
              <td>P</td>
              <td>Jakarta</td>
              <td>01-01-1990</td>
              <td>
                <div class="text-center"><a href="p20-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Peeta Mellark</td>
              <td>Pekerja</td>
              <td>L</td>
              <td>Blitar</td>
              <td>01-01-1990</td>
              <td>
                <div class="text-center"><a href="p20-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Sarah Connor</td>
              <td>Pekerja</td>
              <td>P</td>
              <td>Bogor</td>
              <td>01-01-1990</td>
              <td>
                <div class="text-center"><a href="p20-view.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
              </td>
            </tr>
            
            <tbody>
          </table>
          <div class="col-md-12" style="margin-top:20px">
            <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Data Pekerja</button>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
      <!-- /.box -->
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
