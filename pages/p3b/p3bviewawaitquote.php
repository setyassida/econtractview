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

  <?php include "p3bheader.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penawaran
        <small>Penawaran Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p3b.php">Penawaran</a></li>
        <li class="active"><a href="p3bviewawaitquote.php">Detail</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form class="form-horizontal">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Detail Tawaran</a></li>
            <li><a href="#tab_2" data-toggle="tab">Dokumen Terkait Contract Order</a></li>
          </ul>
          <div class="tab-content">
            <div class="text-center">
              <h3 class="box-title">STATUS : <span class="mark text-warning">AWAIT QUOTE</span></h3>
            </div>
            <!-- tab1 -->
            <div class="tab-pane active" id="tab_1">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-solid">
                    <div class="box-body">
                      <div class="row">
                        <!-- kol kiri -->
                        <div class="col-md-6">
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nomor Kontrak :</label>
                            <div class="form-control-static col-md-8">
                              CA-17001
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Judul Pekerjaan :</label>
                            <div class="form-control-static col-md-8">
                              STEAM CONDENSATE LINE
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Jenis Jasa :</label>
                            <div class="form-control-static col-md-8">
                              Jasa Pemborongan Pekerjaan
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Durasi Pekerjaan :</label>
                            <div class="form-control-static col-md-8">
                              3 Bulan
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Jenis Kontrak :</label>
                            <div class="form-control-static col-md-8">
                              Lump Sum
                            </div>
                          </div>
                        </div>
                        <!-- ./kol kiri -->
                        <!-- kol kanan -->
                        <div class="col-md-6">
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Bid Closing/<br>Opening Date :</label>
                            <div class="form-control-static col-md-8">
                              30-Mei-2017
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Status Contract Order :</label>
                            <div class="form-control-static col-md-8">
                              Resumed 22-Apr-2017
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nama <br>Contract Engineer :</label>
                            <div class="form-control-static col-md-8">
                              J. J. Thompson
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Email :</label>
                            <div class="form-control-static col-md-8">
                              jthomp@econ.com
                            </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 0">
                            <label class="control-label col-md-4">Nomor Telepon Kantor :</label>
                            <div class="form-control-static col-md-8">
                              031-38429577
                            </div>
                          </div>
                        </div>
                        <!-- ./kol kanan -->
                      </div>
                      <!-- ./row -->
                    </div>
                    <!-- ./box-body -->
                  </div>
                  <!-- ./box -->
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
            <!-- ./tab1 -->
            <!-- tab2 -->
            <div class="tab-pane" id="tab_2">
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-solid">
                    <div class="box-body">
                      <table class="table table-bordered table-condensed table-hover">
                        <thead>
                          <tr>
                            <th>Judul Dokumen</th>
                            <th style="width:75px">Tipe Dokumen</th>
                            <th style="width:75px">Size</th>
                            <th style="width:75px">Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lampiran Contract Order 1</td>
                            <td>PDF</td>
                            <td>34MB</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 2</td>
                            <td>PDF</td>
                            <td>34MB</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 3</td>
                            <td>PDF</td>
                            <td>34MB</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 4</td>
                            <td>PDF</td>
                            <td>34MB</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Lampiran Contract Order 5</td>
                            <td>PDF</td>
                            <td>34MB</td>
                            <td>
                              <div class="text-center">
                                <button type="button" class="btn btn-xs btn-default" >
                                  <span class="glyphicon glyphicon-download-alt"></span>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> 
                </div>
                <!-- ./col -->
              </div>
              <!-- ./row -->
            </div>
            <!-- ./tab2 -->
            
            <div class="row" style="padding-bottom: 0.5rem">
              <div class="col-md-6 text-left">
                <a href="p3bchat.php" class="btn btn-sm btn-info"><i class="fa fa-comment"></i> Tanya Jawab</a>                
              </div>
              <div class="col-md-6 text-right">
                <a href="p3bnotquote.php" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Not Quote</a>
                <a href="p3bquote.php" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Quote</a>
              </div>
            </div>
          </div>
          <!-- ./tabs content -->
        </div>
        <!-- ./div tabs -->
      </form>
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
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>
