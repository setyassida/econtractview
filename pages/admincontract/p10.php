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
    <?php include "p10header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Formulir Risalah Kick off Meeting
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contract Order</a></li>
      <li>Kick off Meeting</li>
      <li class="active">CA-17001</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <div class="box">
      <div class="box-header">
      </div>
      <div class="box-body">
        <div class="col-md-12">
          <div class="form-group">
            <label class="control-label col-md-2">Nama Bank :</label>
            <div class="col-md-10">
              <div class="col-md-6">
                <select class="form-control select2 input-sm" style="width: 100%;">
                  <option selected="selected">Mandiri</option>
                  <option>BNI</option>
                  <option>BRI</option>
                  <option>Danamon</option>
                  <option>BCA</option>
                </select>
              </div>
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="control-label col-md-2">Nomor Rekening :</label>
            <div class="col-md-10">
              <div class="col-md-6">
                <input type="number" class="form-control input-sm" required>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      </div>
    </div>
    <!-- /.box -->

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Detail Dokumen</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          </div>
      </div>
      <div class="box-body">
        <div class="col-md-4">
          <dt>Nomor Kontrak</dt>
          <dd>CO-17001</dd> <br>
          <dt>Judul Pekerjaan </dt>
          <dd>Pengadaan Sistem Informasi Kepegawaian</dd> <br>
          <dt>Jenis Kontrak</dt>
          <dd>Lump Sum (LS), Harga Satuan (HS), Gabungan LS & HS </dd> <br>
          <dt>Durasi Kontrak</dt>
          <dd>Durasi : 4 Bulan</dd>
          <dd>Mulai : 17 September 2016 </dd>
          <dd>Selesai : 10 Januari 2017 </dd> <br>
          <dt>Nilai Kontrak</dt>
          <dd>Rp. 400.000.000,- </dd> <br>
        </div>

            <div class="col-md-4">
              <dt>Laporan CSMS</dt>
              <dd><div class="checkbox">
                 <label>
                   <input type="checkbox" checked="true" disabled="true">
                   Ya
                 </label>
               </div></dd> <br>
               <dt>Performance Bond <span class="small"><i>(5% dari nilai kontrak dan belum termasuk PPN 10%)</i></span></dt>
               <dd>Rp. 16.000.000,- </dd> <br>
               <dt>Nilai SI (Standing Instruction) </dt>
               <dd>87</dd> <br>
               <dt>Penangguhan Pembayaran <span class="small"><i>(0-100%)</i></span> </dt>
               <dd>0 % </dd> <br>
            </div>

            <div class="col-md-4">
              <dl>
                 <dt>Nomor PR Service</dt>
                 <dd>0001/BB41/2017-532</dd> <br>
                 <dt>Tanggal Kick of Meeting</dt>
                 <dd>17 Agustus 2017</dd> <br>
               </dl>
            </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right" style="margin-right: 2rem">
          <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#submitModal"><span class="glyphicon glyphicon-edit"></span> Submit</button>
          <button type="button" class="btn btn-default btn-sm pull-right" style="margin-right:5px" data-toggle="modal" data-target="#saveModal"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
          <a href="p4.php"><button type="button" class="btn btn-default btn-sm pull-right" style="margin-right: 5px;"> Back</button></a>
							</div>

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

<div id="publishModal" class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					</div>
					<div class="modal-body">
						<h4 class="modal-title">Apakah anda yakin untuk menyimpan formulir ini?</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
						<button type="submit" class="btn btn-success">Ya</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
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

  //Initialize Select2 Elements
  $(".select2").select2();
});
</script>

</body>
</html>
