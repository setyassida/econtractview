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

  <?php include "p15bheader.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penawaran VO
        <small>Penawaran VO Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p15b.php">Penawaran VO</a></li>
        <li><a href="p15bviewawaitquote.php">Detail VO</a></li>
        <li class="active"><a href="p15bnotquote.php">Not Quote</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal">
            <!-- box bidder list -->
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Informasi Contract Order</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body "> 
                <div class="row">
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
                    <div class="form-group" style="margin-bottom: 0">
                      <label class="control-label col-md-4">Bid Closing/<br>Opening Date :</label>
                      <div class="form-control-static col-md-8">
                        22-Apr-2017 / 30-Mei-2017
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
                  <!-- ./col kiri -->
                  <div class="col-md-6">
                    <div class="box box-danger">
                      <div class="box-body">
                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                          Untuk melakukan proses Not Quote, Anda wajib menyertakan alasan tidak menawar pada kolom berikut.    
                        </p>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Alasan Tidak Menawar :</label>
                            <textarea class="form-control" rows="5" placeholder="Alasan tidak menawar" style="resize:none" required></textarea>
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
                
                <button type="button" class="btn btn-danger pull-right btn-sm" style="margin-right: 5px;" data-toggle="modal" data-target="#RejectModal">
                <span class="glyphicon glyphicon-remove"></span> Not Quote
                </button>

                <div id="RejectModal" class="modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-red">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda yakin tidak menawar?</h4>
                      </div>
                      <div class="modal-body">
                        <p>Proses ini akan menolak tawaran yang berkaitan dengan Dokumen ini.</p>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes, Reject Now!</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                </div>

                <!-- <a href="p15.php">
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
