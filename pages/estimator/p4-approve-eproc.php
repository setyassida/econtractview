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

    <? include("p4-header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contract Order
        <small>Harga Perkiraan Sendiri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="p4.php">Harga Perkiraan Sendiri</a></li>
        <li>0001/HPS/2017</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 1</span>
              <strong>Sarah Connor</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 2</span>
              <strong>Katniss Everdeen</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box" style="box-shadow: 0 0 3px 3px rgba(0, 140, 186, 0.5)">
            <span class="info-box-icon bg-gray"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 3</span>
              <strong>Peeta Mellark</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-clock-o"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 4</span>
              <strong>Jack Sparrow</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-clock-o"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
      </div>

      
      <div class="box">
        <form class="form-horizontal">
          <div class="box-header with-border">
            <h4>Informasi HPS</h4>
          </div>
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label col-md-4">Nomor HPS :</label>
                <div class="form-control-static col-md-8">
                  0001/HPS/2017
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Tanggal Opening :</label>
                <div class="form-control-static col-md-8">
                  01-11-2017
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Nomor Kontrak :</label>
                <div class="form-control-static col-md-8">
                  <a href="#">CA-17001</a>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Judul Pekerjaan :</label>
                <div class="form-control-static col-md-8">
                  PEMELIHARAAN INFRASTRUKTUR
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Durasi Pekerjaan :</label>
                <div class="form-control-static col-md-8">
                  50 Hari
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Jenis Jasa :</label>
                <div class="form-control-static col-md-8">
                  Jasa Pemborongan Pekerjaan, Jasa Penyedia Tenaga Kerja
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Klasifikasi Pemilihan :</label>
                <div class="form-control-static col-md-8">
                  nilai antara bidang M-Z
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4">Bobot Nilai CO :</label>
                <div class="form-control-static col-md-8">

                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div style="margin-top:20px">
              </div>
              <div class="box box-solid" >
                <div class="box-body">
                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Nilai HPS yang ditentukan oleh Estimator    
                  </p>

                  <div class="form-group">
                    <label class="control-label col-md-4">HPS Minimum :</label>
                    <div class="form-control-static col-md-8">
                      Rp 1.000.000.000,00
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4">HPS Most Likely :</label>
                    <div class="form-control-static col-md-8">
                      Rp 3.500.000.000,00
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4">HPS Maximum :</label>
                    <div class="form-control-static col-md-8">
                      Rp 5.000.000.000,00
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-4">Dokumen Pendukung HPS :</label>
                    <div class="form-control-static col-md-8">
                      <button class="btn btn-default btn-xs" style="margin-right:5px"><span class="glyphicon glyphicon-download-alt"></span></button>sample_document.docx
                    </div>
                  </div>
                   
                  
                  <div id="uploadModal" class="modal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-green">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Are You Sure to Upload?</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label class="control-label col-md-4">Upload File Hasil Scan :</label>
                            <div class="col-md-6">
                              <input type="file" class="form-control input-sm" required>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-default btn-sm">Yes, Upload This File</button>
                        </div>
                      </div>
                        <!-- /.modal-content -->
                    </div>
                  </div>

                  

                </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-12">
                <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#approveModal">Approve</button> 
                <button type="button" class="btn btn-danger btn-sm pull-right" style="margin-right:5px" data-toggle="modal" data-target="#rejectModal">Reject</button>
                <a href="p4.php"><button type="button" class="btn btn-default btn-sm pull-right" style="margin-right:5px">Back</button></a>

                <div id="approveModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-green">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Are You Sure to Approve It?</h4>
                    </div>
                    <div class="modal-body">
                      Proses ini akan memberikan notifikasi kepada Approver berikutnya.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success btn-sm">Yes, Approve It</button>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>

              <div id="rejectModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-red">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Are You Sure to Approve It?</h4>
                    </div>
                    <div class="modal-body">
                      Proses ini akan memberikan notifikasi kepada seluruh Approver dan mengembalikan Proses HPS ke status <span class="text-red">DRAFT</span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger btn-sm">Yes, Reject It</button>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>


              </div>
            </div>
          </div>
        </form>
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
