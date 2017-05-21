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
        <small>Menambah rincian evalkom VO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Evaluasi Komersial VO</li>
        <li class="active">Menambah rincian evalkom VO</li>
      </ol>
    </section>

<!-- 
    <div class="content" style="min-height: 0px;">
      <div class="col-md-6">
        <a href="p17f.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Create BCR">Create BCR</button></a>
        <button data-target="#modalBCR" type="button" class="btn bg-navy btn-sm" data-toggle="modal" title="Detail BCR">Detail BCR</button>
      </div>
    </div> -->

    <div id="modalBCR" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail BCR Submit</h4>
          </div>
          <div class="modal-body">
            <h4>BCR ( Rekomendasi panitia pengadaan)<span class="fa fa-close"></span></h4>
            <h4>BCR ( Rekomendasi fungsi pengadaan)<span class="fa fa-check"></span></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>
          <!-- /.modal-content -->
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
            
                    
        

      </div>

      <div class="row">
        <div class="col-md-12">
                  <div class="box box-info">
                      <form class="form-horizontal">
                        <div class="box-header with-border">
                          <h3>Rincian Penawaran Evaluasi Komersial VO</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">

                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 200px">Jenis Pekerjaan</th>
                                        
                                        <th style="width: 100px" >HPS PT Badak NGL (Rp)</th>
                                        <th style="width: 200px" >Penawaran PT Salebba Jaya (RP)</th>
                                        <th style="width: 100px">Analisis Evaluasi</th>
                                      </tr>
                                      <tr>
                                        <td><textarea id="inputKeterangan" rows="3" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Diambil dari VO dan editable" class="form-control input-sm" style="resize:none"></textarea></td>
                                      </tr>
                                    </table>
                                    <br>
                                    <div class="col-md-12" style="text-align: left;">
                                      <a href="p17c.php"><button type="button" class="btn btn-success btn-sm" title="Kembali Rincian"><span class="fa fa-plus"></span> Tambah Rincian</button></a>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <h4>Detail Rincian Yang Sudah Masuk </h4>
                                    <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 200px;">Uraian Pekerjaan</th>
                                        <th style="width: 200px;">HPS PT Badak NGL (Rp)</th>
                                        <th style="width: 150px" >Penawaran PT Salebba Jaya (Rp)</th>
                                        <th style="width: 100px" >Analisis Evaluasi</th>
                                        
                                      </tr>
                                                                           
                                      <tr>
                                        
                                        <td>Total Nilai Kontrak Terakhir</td>
                                        <td>By sistem</td>
                                        <!-- <td>Rp 5.000.000.000</td>
                                        <td>Wajar</td> -->
                                          <td><textarea id="inputKeterangan" rows="1" placeholder="Rp 5.000.000.000" class="form-control input-sm" style="resize:none"></textarea></td>
                                          <td><textarea id="inputKeterangan" rows="1" placeholder="wajar" class="form-control input-sm" style="resize:none"></textarea></td>

                                      </tr>
                                      <tr>
                                        <td>Total Nilai VO</td>
                                        <td>HPS Most likely</td>
                                        <!-- <td>Rp 5.000.000.000</td>
                                        <td>Wajar</td> -->

                                          <td><textarea id="inputKeterangan" rows="1" placeholder="Rp 5.000.000.000" class="form-control input-sm" style="resize:none"></textarea></td>
                                          <td><textarea id="inputKeterangan" rows="1" placeholder="wajar" class="form-control input-sm" style="resize:none"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Total Nilai Kontrak Amandement</td>
                                        <td>= SUM</td>
                                        <td>Rp 5.000.000.000</td>
                                        <td>wajar</td>
                                      </tr>

                                      <tr>
                                        <td>Total Nilai Kontrak Amandement ( Nilai Termasuk PPN 10% )</td>
                                        <td>= poin 3 * 1,1</td>
                                        <td>Rp 5.000.000.000</td>
                                        <td></td>
                                      </tr>
                                    </table>
                                  </div>
                                  
                                </div>
                            </div>

                          </div>
                           <div class="col-md-12 box-footer" style="text-align: right;">
                                     <a href="p17c.php">
                                    <button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;">
                                    Back
                                  </button>               
                          </a>
                          
                                    <a href="p17c.php"><button type="button" class="btn btn-success btn-sm" title="Kembali Rincian">Simpan</button></a>
                            </div>
                        </div>
                      </form>
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
