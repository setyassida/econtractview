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
<body class="Resume-transition skin-red fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php include "p2header.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contract Order
        <small>Resume</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p2.php">Bidder List</a></li>
        <li><a href="#">CA-17001</a></li>
        <li class="active"><a href="p2.php">Resume</a></li>
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
                <h3 class="box-title">Informasi Contract Order</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body "> 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-md-3" for="noKontrak">Contract Order</label>
                      <div class="col-md-9">
                        <p class="form-control-static">CA-17001</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3" for="">Judul Pekerjaan</label>   
                      <div class="col-md-9">
                        <p class="form-control-static">REGULAR INSPECTION OF LIFTING GEARS</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3" for="">Durasi</label>   
                      <div class="col-md-9">
                        <p class="form-control-static">2 Bulan</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3" for="">Jenis Jasa</label>   
                      <div class="col-md-9">
                        <p class="form-control-static">Pemborongan Pekerjaan</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3" for="">Kualifikasi Syarat Peserta Pengadaan</label>   
                      <div class="col-md-9">
                        <p class="form-control-static">M (Rp. 500 Juta <= NK <= Rp. 10 M)</p>
                      </div>
                    </div>
                  </div>
                  <!-- ./col kiri -->
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="box-body">
                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                          Untuk melakukan proses Resume, Anda wajib menyertakan Alasan Resume dan Dokumen Pendukung Proses Resume pada kolom berikut.    
                        </p>
                        <div class="col-md-12">

                          <div class="form-group">
                            <label>Alasan Resume :</label>
                            <textarea class="form-control" rows="5" placeResumeer="Enter . . ." style="resize:none" required></textarea>
                          </div>
                          <div class="form-group">
                            <label>Dokumen Pendukung Proses Resume:</label>
                            <input type="file" id="inputFile" multiple required>
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
                
                <button type="button" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" data-toggle="modal" data-target="#resumeModal">
                <span class="glyphicon glyphicon-play"></span> Resume
                </button>

                <div id="resumeModal" class="modal ">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-blue">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Anda yakin?</h4>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
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
