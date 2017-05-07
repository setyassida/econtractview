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

  <?php @include('p8header.php') ?>

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
              <!-- <a href="p8_2.php"><button class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Buat Evaluasi Komersial Baru</button></a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
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
                      <label for="pickedByCE4">Jenis Kontrak</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="harga satuan" disabled>
                    </div>
                  </div>
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE4">Tanggal Pembukaan</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="17 - Maret - 2015" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">Budget</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="Rp 1.5 M" disabled>
                    </div>
                  </div>                      
              </div>
            <!-- /.box-body -->
          <div class="box-footer ">
              <!-- <button type="submit" class="btn btn-info pull-right">Generate Bidder List</button> -->
              <a href="p8c.php" class="btn btn-success pull-right btn-sm">Next</a>

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



