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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
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

  <?php include "p2headerLCE.php" ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bidder List
        <small>Send Invitation Note</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="#">Bidder List</a></li>
        <li><a href="#">BL-17001</a></li>
        <li class="active"><a href="p2a.php">Send Invitation Note</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal">
            <!-- box bidder list -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Informasi Bidder List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body "> 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Bidder List:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">BL-17001</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Tanggal Dibuat:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">22-Apr-2017</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Waktu Dibuat:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">13:30</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Klasifikasi:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">M</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Kualifikasi:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">Kecil</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Tingkat Risiko:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">Sedang</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Publish Date:</label>
                      <div class="col-md-9">
                        <p class="form-control-static">22-Sep-2017</p>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-3" for="noKontrak">Kuota Area:</label>
                      <div class="col-md-5">
                        <table class="table table-condensed table-bordered table-hover">
                          <tbody>
                            <tr>
                              <td>Bontang</td>
                              <td class="text-left form-control-static" id="pickedByCE4" >1</td>
                            </tr>
                            <tr>
                              <td>Kalimantan Timur</td>
                              <td class="text-left form-control-static" id="pickedByCE4" >3</td>
                            </tr>
                            <tr>
                              <td>Domestik</td>
                              <td class="text-left form-control-static" id="pickedByCE4" >2</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    
                  </div>
                  <!-- ./col kiri -->
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="box-body">
                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                          Untuk melakukan proses Send Invitation Note, Anda wajib mengisi kolom berikut.    
                        </p>
                        <div class="col-md-12">
                          <div class="form-group" style="margin-bottom: 0.5rem">
                            <label>No. Undangan Pengadaan:</label>
                            <input type="text" class="form-control input-sm" id="generatedBySystem2" placeholder="0001/BB43/2017-040" disabled>
                          </div>
                          <div class="form-group" style="margin-bottom: 0.5rem">
                            <label>Tanggal Pelaksanaan Prebid Meeting:</label>
                            <div class="input-group date">
                              <input type="text" class="form-control pull-right input-sm" id="datepicker1" placeholder="Tanggal Pelaksanaan Prebid Meeting">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0.5rem">
                            <label>Sistem Penawaran:</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">1 Sampul</option>
                              <option>2 Sampul / 2 Tahap</option>
                            </select>
                          </div>
                          <div class="form-group" style="margin-bottom: 0rem">
                            <label>Bid Closing/Opening Date:</label>
                          </div>
                          <div class="row">
                            <div class="col-md-6" style="margin-bottom: 0.5rem">
                              <div class="form-group">
                                <div class="input-group date">
                                  <input type="text" class="form-control input-sm" id="datepicker2" placeholder="Bid Closing/Opening Date">
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
                          </div>
                          <!-- /.bid closing / opening date -->
                          <div class="form-group" style="margin-bottom: 0rem">
                            <label>Closing/Opening Teknis Date:</label>
                          </div>
                          <div class="row">
                            <div class="col-md-6" style="margin-bottom: 0.5rem">
                              <div class="form-group">
                                <div class="input-group date">
                                  <input type="text" class="form-control input-sm" id="datepicker3" placeholder="Closing/Opening Teknis Date">
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
                          </div>
                          <!-- /.Closing/Opening Teknis Date -->
                          <div class="form-group" style="margin-bottom: 0.5rem">
                            <label>Lokasi Bid:</label>
                            <input type="text" class="form-control input-sm" id="generatedBySystem2" placeholder="Lokasi">
                          </div>

                          <div class="form-group" style="margin-bottom: 0.5rem">
                            <label>Keterangan:</label>
                            <textarea class="form-control" rows="3" placeholder="Keterangan Tambahan" style="resize:none" required></textarea>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ./col kanan -->
                </div>
                <!-- ./row box-body -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="button" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" data-toggle="modal" data-target="#sendModal">
                <span class="glyphicon glyphicon-send"></span> Send Invitation Note
                </button>

                <div id="sendModal" class="modal ">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-blue">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Do you want to Send Invitation Note?</h4>
                      </div>
                      <div class="modal-body">
                        <p>Proses ini akan mengirim undangan kepada Bidder yang berkaitan dengan Dokumen ini.</p>
                        <p>Proses ini akan mengirimkan notifikasi kepada :</p>
                        <li>Contract Organisator</li>
                        <li>Contract Engineer</li>
                        <li>Lead Contract Engineer</li>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Yes, Send Invitation Note Now!</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                </div>

                <!-- <a href="p3.php">
                  <button type="button" class="btn btn-default pull-right" style="margin-right: 5px;">
                    Back
                  </button>
                </a> -->
              </div>
            </div>
            <!-- /.box -->
          </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
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
    $('#datepicker1').datepicker({
      autoclose: true
    });
    $('#datepicker2').datepicker({
      autoclose: true
    });
    $('#datepicker3').datepicker({
      autoclose: true
    });
    //Time picker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
