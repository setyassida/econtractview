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
        <li><a href="p5summary.php">Summary</a></li>
        <li class="active"><a href="p5open.php">Open</a></li>
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
                <h3 class="box-title">Form Opening Penawaran</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body"> 
                <div class="col-md-4">
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-5">Tanggal Opening</label>
                    <div class="col-md-7">
                      <p class="form-control-static">22-Jun-2017</p>
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-5">Nomor Kontrak</label>
                    <div class="col-md-7">
                      <p class="form-control-static">CA-17001</p>
                    </div>
                  </div>
                </div>
                <!-- /.kolom atas kiri -->
                <div class="col-md-8">
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-5">Judul Pekerjaan</label>
                    <div class="col-md-7">
                      <p class="form-control-static">STEAM CONDENSATE LINE</p>
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 0">
                    <label class="control-label col-md-5">Waktu Pembukaan Pengadaan</label>
                    <div class="col-md-7">
                      <p class="form-control-static">13:30</p>
                    </div>
                  </div>
                </div>
                <!-- /.kolom atas kanan -->
                <div class="col-md-12" style="margin-top: 2rem">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Evaluasi Administrasi</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <th>No</th>
                          <th>Penawar</th>
                          <th>Penawaran (IDR)</th>
                          <th>Penandatanganan Direktur</th>
                          <th>Neraca Perusahaan dan Pendapat Akuntan Publik</th>
                          <th>Evaluasi Administrasi</th>
                        </thead>
                        <tr>
                          <td>1</td>
                          <td>PT Maju Jaya</td>
                          <td class="text-right">
                            989000000
                            <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio1" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio1">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio2" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio2">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>Lulus</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>PT Dikit Jaya</td>
                          <td class="text-right">
                            922000
                            <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio3" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio3">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio4" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio4">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>Tidak Lulus</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>PT Kabur Jaya</td>
                          <td class="text-right">
                            0
                            <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio5" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio5">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio6" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio6">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>Tidak Menjawab</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>PT Mundur Jaya</td>
                          <td class="text-right">
                            0
                            <button class="btn btn-default btn-xs" type="button" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio7" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio7">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                              <div class="col-md-12">
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio8" checked>Tidak Setuju
                                </label>
                                <label class="radio-inline" >
                                  <input type="radio" name="optradio8">Setuju
                                </label>
                              </div>
                            </div>
                          </td>
                          <td>Tidak Menawar</td>
                        </tr>
                      </table>
                      <div id="editModal" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-info">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Ubah Jumlah Penawaran?</h4>
                            </div>
                            <div class="modal-body">
                              <p>Proses ini akan merubah jumlah penawaran yang terkait dengan penawar dan data akan disimpan oleh sistem.</p>
                              <div class="form-group col-md-12">
                                <label >Jumlah Penawaran</label>
                                <input type="text" class="form-control input-sm" placeholder="Jumlah dalam rupiah">
                              </div>                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-info">Ya, Ubah Jumlah</button>
                            </div>
                          </div>
                            <!-- /.modal-content -->
                        </div>
                      </div>
                      <!-- /.modal -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="text-right col-md-12">
                  <a href="p5end.php" class="btn btn-success "><i class="fa fa-check"></i> Open Penawaran</a>
                </div>
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
