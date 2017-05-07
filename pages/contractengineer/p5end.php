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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
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

  <?php include "p5header.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Opening
        <small>Evaluasi Administrasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p5.php">Opening</a></li>
        <li class="active"><a href="p5end.php">Data Opening</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form>
        <div class="row">
          <div class="col-md-12">
          <!-- box -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Hasil Opening</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body"> 
                <div class="col-md-12 text-center">
                  <div class="col-md-4">
                    <div class="box">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="control-label col-md-12" ">Hasil Opening</label>
                          <div class="col-md-12">
                            <p class="form-control-static"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</button></p>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                    </div>
                  </div>
                  <!-- /.col 1 -->
                  <div class="col-md-4">
                    <div class="box">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="control-label col-md-12 ">Hasil HPS</label>
                          <div class="col-md-12">
                            <p class="form-control-static"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</button></p>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                    </div>
                  </div>
                  <!-- /.col 2 -->
                  <div class="col-md-4">
                    <div class="box">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="control-label col-md-12" ">Tanda tangan perusahaan</label>
                          <div class="col-md-12">
                            <p class="form-control-static"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download</button></p>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                    </div>
                  </div>
                  <!-- /.col 3 -->
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-success pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#uploadModal">
                <span class="glyphicon glyphicon-cloud-upload"></span> Upload
                </button>

                <div id="uploadModal" class="modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Upload Dokumen?</h4>
                      </div>
                      <div class="modal-body">
                        <p>Pastikan file pendukung yang Anda upload telah sesuai. Anda <span class="text-red">TIDAK DAPAT</span> merubah <i>Dokumen</i> setelah melakukan proses ini.</p>
                        <p>Proses ini akan mengirimkan notifikasi kepada :</p>
                        <li>Project Coordinator</li>
                        <li>Contract Originator</li>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Ya, Upload Dokumen</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                </div>
                <!-- /.modal -->
              </div>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </form>
      <!-- /.form -->
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
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
    //Date picker
    $('#datepicker1').datepicker({autoclose: true});
    //Time picker
    $(".timepicker").timepicker({showInputs: false});
  });
</script>
</body>
</html>
