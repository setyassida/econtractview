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
        Evaluasi Administrasi
        <!-- <small>Daftar Bidder</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p5.php">Evaluasi Administrasi</a></li>
        <li class="active"><a href="p5summary.php">Summary</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal">
        <div class="row">
          <div class="col-md-12">
          <!-- box -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Summary Penawaran</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body "> 
                <div class="col-md-6">
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-4">Nomor Kontrak:</label>
                    <div class="form-control-static col-md-8">CA-17001</div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-4">Judul Pekerjaan:</label>
                    <div class="form-control-static col-md-8">STEAM CONDENSATE LINE</div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-4">Tanggal Opening:</label>
                    <div class="form-control-static col-md-8">20-Jan-2017</div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-4">Waktu Opening:</label>
                    <div class="form-control-static col-md-8">13:30</div>
                  </div>
                </div>
                <!-- /.kolom kiri -->
                <div class="col-md-4">
                  <label>Status Penawaran</label>
                  <table class="table table-condensed table-bordered">
                    <tbody>
                      <tr>
                        <td>Quote</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>Not Quote</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>No Respond</td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.kolom kanan -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-primary pull-right " data-toggle="modal" style="margin-right: 5px;"data-target="#extendModal">Extend</button>

                <div id="extendModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-blue">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Perpanjang Opening Date?</h4>
                      </div>
                      <div class="modal-body">
                        <p>Proses ini akan memperpanjang Opening Date Contract Order yang berkaitan dengan Dokumen ini.</p>
                        <div class="col-md-12">
                          
                            <div class="col-md-6" style="margin-bottom: 0.5rem">
                              <div class="form-group">
                                <div class="input-group date">
                                  <input type="text" class="form-control input-sm" id="datepicker1" placeholder="Bid Opening Date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 0.5rem">
                              <div class="form-group bootstrap-timepicker">
                                <div class="input-group">
                                  <input type="text" class="form-control timepicker input-sm">
                                  <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </div>
                                </div> 
                              </div>
                            </div>
                          
                          <!-- /.bid closing / opening date -->
                        </div>
                        <p>Proses ini akan mengirimkan notifikasi kepada semua bidder</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Extend Opening Date</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                </div>
                <!-- /.modal -->
                <a href="p5form.php" class="btn pull-right btn-success" style="margin-right: 5px;">Open</a>
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
