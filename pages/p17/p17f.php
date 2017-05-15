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
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php @include('p17header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Evaluasi Komersial VO
        <small>Negosiasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Evaluasi Komersial VO</li>
        <li class="active">Negosiasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
            <div class="col-md-12">
                      <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Negosiasi</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 200px">Nama Kontraktor</th>
                            <th style="width: 200px">Nilai Negosiasi</th>
                            <th style="width: 200px">Hasil Negosiasi</th>
                            <th style="width: 200px">Upload Dokumen Risalah Nego</th>

                          </tr>
                          <tr>
                            <td>PT Hasanah Sumber Utama</td>
                            <td>Rp 1.150.000.000</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control" style="resize:none"></textarea></td>
                            <td><div class="text-center"><a href="p3-upload.php?no=C0-17001"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></div></td>
                          </tr>
                        </table>
                      </div>

                </div>
              </div>
              <div class="col-md-12" style="text-align: right;">
                <a href="p17c.php"><button type="button" class="btn btn-warning btn-sm" data-toggle="hold" title="Kembali ke menu evaluasi komersial VO">Re Evaluasi</button></a>   
                <a href="p17.php"><button type="button" class="btn btn-info btn-sm" data-toggle="hold" title="Simpan">Simpan</button></a>
              </div>
            </div>
          </form>
        </div>    

            </div>
      </div>

        <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- <div class="well well-sm">
            <h4>Nilai penawaran terendah(setelah hasil negosiasi atau hasil koreksi) wajar lebih besar dari total budget cost commitment <span class="fa fa-close"></span></h4>
            <h4>Perlu dimasukkan budget rate setiap tahun <span class="fa fa-close"></span></h4>
            <h5>Masukan batas waktu konfirmasi</h5>
            <div class="input-group date col-md-3">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">

            </div>
            <br>
          <a href="p17_pcb.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Kirim Ketersediaan Anggaran Ke Project Coordinator"><span class="fa fa-send"></span> Kirim Form Ketersediaan</button></a>
          </div> -->
          <div class="well well-sm">
            <h4>Nilai negosiasi sudah disubmit <span class="fa fa-check"></span></h4>
                      
          </div>
      
            
            
        </div>
        <div class="box-footer">
        
           <a href="p17.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Kembali ke menu browse"><span class="glyphicon glyphicon-ok-circle"></span> Finish</button></a>
        </div>

        </div>

    </div>

    </div>
    
    </section>
    
<!--  content wrapper-->
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2017 <a href="http://badaklng.co.id">PT Badak NGL</a>.</strong> All rights reserved.
  </footer>

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
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script>
  $(document).ready(function(){
    $('[data-toggle="hold"]').tooltip();
    $('[data-toggle="resume"]').tooltip();
    $('[data-toggle="abort"]').tooltip();
  });

  $(function () {
    $("#dataTable").DataTable();
    $('#datepicker').datepicker({
      autoclose: true
    });
  });

  
</script>

</body>
</html>
