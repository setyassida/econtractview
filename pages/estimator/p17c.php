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
        <small>Detail Evalkom VO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Evaluasi Komersial VO</li>
        <li class="active">Detail evalkom VO</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-md-4">
             <div class="box box-success">
                <form class="form-horizontal">
                  <div class="box-header">
                  <h3 class="box-title">Detail Contract</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                   </div>
                  </div>

                  <div class="box-body">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Nomor Kontrak:</label>
                        <div class="col-md-9">
                          <p class="form-control-static">CA-17001</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Nomor Perubahan:</label>
                        <div class="col-md-9">
                          <p class="form-control-static">CB-17002</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Judul Pekerjaan:</label>
                        <div class="col-md-9">
                          <p class="form-control-static">JASA PEMBORONGAN PEKERJAAN SIPIL DAN PEMELIHARAAN BANGUNAN AREA LANT, MARINE & PSF DI PT BADAK NGL</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Durasi:</label>
                        <div class="col-md-9">
                          <p class="form-control-static">Jadwal Asli : 16 - 10 - 2016 sampai 17 - 04 - 2017</p>
                          <p class="form-control-static">Jadwal Perubahan : 16 - 10 - 2016 sampai 17 - 04 - 2017</p>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Jenis Kontrak :</label>
                        <div class="col-md-9">
                          <p class="form-control-static">Lump Sum</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Perubahan Yang Akan Dilaksanakan:</label>
                        <div class="col-md-9">
                          <textarea id="inputKeterangan" rows="5" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="noKontrak">Alasan Perubahan:</label>
                        <div class="col-md-9">
                          <textarea id="inputKeterangan" rows="5" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea>
                        </div>
                      </div>
                        
                  </div>
                  
                </div>

                </form>
                
                



             </div>

          </div>

          <div class="col-md-8">
             <div class="box box-success">
                <form class="form-horizontal">
                  <div class="box-header">

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                   </div>
                   <div>
                     <a href="p17d.php"><button class="btn btn-success btn-sm" type="button">Tambah rincian</button></a>
                   </div>
                  </div>

                  <div class="box-body">
                    <div class="col-md-12">
                      <table class="table table-bordered">
                                      <tr>
                                        <th style="width: 350px;">Uraian Pekerjaan</th>
                                        <th rowspan="2">HPS PT Badak NGL (Rp)</th>
                                        <th style="width: 150px" rowspan="2">Penawaran PT Salebba Jaya (Rp)</th>
                                        <th style="width: 100px" rowspan="2">Analisis Evaluasi</th>
                                        
                                      </tr>
                                      <tr>
                                        <th>Nilai Kontrak Tidak Termasuk PPN 10%</th>                                       
                                      </tr>                                      
                                      <tr>
                                        
                                        <td>Total Nilai Kontrak Terakhir</td>
                                        <td>By sistem</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input here .." class="form-control input-sm" style="resize:none"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input here..." class="form-control input-sm" style="resize:none"></textarea></td>

                                      </tr>
                                      <tr>
                                        <td>Total Nilai VO</td>
                                        <td>HPS Most likely</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input here .." class="form-control input-sm" style="resize:none"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input here .." class="form-control input-sm" style="resize:none"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Total Nilai Kontrak Amandement</td>
                                        <td>= SUM</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>

                                      <tr>
                                        <td>Total Nilai Kontrak Amandement</td>
                                        <td>= poin 3 * 1,1</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </table>
                        
                  </div>
                  
                  
                </div>
                <div class="box-footer">
                      <a href="p17e.php"><button class="pull-right btn btn-success btn-sm" type="button"><span class=""></span> Lanjut ke negosiasi</button></a>
                  </div>
                </form>
                
                



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
  });
</script>

</body>
</html>
