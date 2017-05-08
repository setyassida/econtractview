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
    <?php include "p9header.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        Letter of Intent
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Contract Order</a></li>
      <li >Letter of Intent</li>
      <li class="active">Pengumuman</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Download</a></li>
        <li><a href="#tab_2" data-toggle="tab">Upload</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="text-muted well well-sm ">
                <h4 class="center text-center">Untuk Dokumen LoI dapat di unduh melalui tombol dibawah ini. <br>
                  Bidder pemenang (winner) mendownload dokumen, kemudian ditandatangani, discan dan diupload kembali ke sistem melalui menu UPLOAD. <br></h4>
                </div>

                <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</button>

              </div>
            </div>

          </div>

          <div class="tab-pane " id="tab_2">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="text-muted well well-sm ">
                  <h4 class="center text-center">Untuk Dokumen LoI dapat di unggah melalui tombol unggah dibawah ini. <br>
                    Dokumen yang akan di unggah harus sudah ditandatangani dan discan, format dalam bentuk .PDF <br></h4>
                  </div>

                  <button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>

                </div>
              </div>
          </div>


        </div>
      </div>
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
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Do you want to Publish LOA?</h4>
          </div>
          <div class="modal-body">
            <p>Batas waktu masa sanggah: 4 (empat) hari kerja, terhitung sejak tanggal pengumuman. Tidak bisa extend batas waktu masa sanggah.</p>
            <p>Proses ini akan mengirimkan notifikasi kepada :</p>
            <li>Lose Bidder</li>
            <li>Originator</li>
            <li>Project Coordinator</li>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Yes, Publish Now</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
    </div>


    <div id="holdModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure want to Hold / Resume this LOA?</h4>
            </div>
            <div class="modal-body">
              <p>Proses ini akan mengirimkan notifikasi kepada :</p>
              <li>Originator</li>
              <li>Project Coordinator</li>
              <li>Contract Engineer (CE)</li>
              <li>Lead Contract Engineer (LCE)</li>
              <li>Contract Manager</li>
              <li>Estimator</li>
              <li>Supervisor Estimator</li>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-warning">Yes, Hold LOA</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </div>
      <div id="rebidModal" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure want to Rebid?</h4>
              </div>
              <div class="modal-body">
                <p>Proses ini akan mengirimkan notifikasi kepada :</p>
                <li>Bidder (semua Bidders quote/not-quote/no respond) </li>
                <li>Originator</li>
                <li>Project Coordinator</li>
                <li>Contract Engineer (CE)</li>
                <li>Lead Contract Engineer (LCE)</li>
                <li>Contract Manager</li>
                <li>Estimator</li>
                <li>Supervisor Estimator</li>
                <li>Semua Approver</li>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-warning">Yes, Rebid LOA</button>
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
        });
        </script>

      </body>
      </html>
