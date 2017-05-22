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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
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

  <?php include "p21header.php" ?>
  <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contract Report
          <small>Detail of contracts</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Report</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <!-- <div class="callout callout-info">
          <h4><i class="icon fa fa-info"></i> Alert!</h4>
          
          <p>Laporan dihasilkan oleh sistem dan dapat di-download dalam bentuk excel</p>
        </div> -->

        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">
                Laporan Berdasarkan Kategori
              </div>
              <!-- /. box-header -->
              <div class="box-body">
                <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      Jumlah Contract Order
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="col-md-12" style="padding: 0">
                            <label>Range Bulan</label>
                          </div>
                          <div class="col-md-5" style="padding:0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option selected="selected">Januari</option><option>Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-2" style="padding-top: 1rem;">
                            <span>to</span>
                          </div>
                          <div class="col-md-5" style="padding: 0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option>Januari</option><option selected="selected">Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-12 text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Year To Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right input-sm" id="datepicker">
                          </div>
                          <div class="text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      Jumlah Kontrak dari Bidder List
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="col-md-12" style="padding: 0">
                            <label>Range Bulan</label>
                          </div>
                          <div class="col-md-5" style="padding:0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option selected="selected">Januari</option><option>Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-2" style="padding-top: 1rem;">
                            <span>to</span>
                          </div>
                          <div class="col-md-5" style="padding: 0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option>Januari</option><option selected="selected">Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-12 text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Year To Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right input-sm" id="datepicker">
                          </div>
                          <div class="text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      Jumlah Peserta Penyedia
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="col-md-12" style="padding: 0">
                            <label>Range Bulan</label>
                          </div>
                          <div class="col-md-5" style="padding:0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option selected="selected">Januari</option><option>Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-2" style="padding-top: 1rem;">
                            <span>to</span>
                          </div>
                          <div class="col-md-5" style="padding: 0">
                            <select class="form-control select2 input-sm" style="width: 100%;">
                              <option>Januari</option><option selected="selected">Februari</option><option>Maret</option><option>April</option><option>Mei</option><option>Juni</option><option>Juli</option><option>Agustus</option><option>September</option><option>Oktober</option><option>November</option><option>Desember</option>
                            </select>
                          </div>
                          <div class="col-md-12 text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Year To Date</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right input-sm" id="datepicker">
                          </div>
                          <div class="text-center" style="padding-top: 1rem"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-download"></span> Download</button></div>
                          <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>            
            <!-- /.box -->
          </div>
        </div>

      </section>
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
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
  });
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  });
</script>
</body>
</html>
