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

  <?php @include('p17header2.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Evaluasi Komersial VO
        <small>Detail Evaluasi Komersial VO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Order</li>
        <li class="active">Evaluasi Komersial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box-body">
        <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">BCR ( Rekomendasi Panitia Pengadaan )</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <div class="row">
                <!-- left column -->
                <div class="col-md-6">

                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Nomor Kontrak:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">CA-17001</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Judul Pekerjaan:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Kontrak Jasa Penambahan Alat Berat</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Hari / Tanggal :</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Kamis, 17-01-2016</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Metode Pengadaan:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Pengadaan Langsung</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Jenis Kontrak:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Harga Satuan</p>
                    </div>
                  </div>

                </div>
                <!-- /left column -->

                <!-- right column -->
                <div class="col-md-6">
                

                  <div class="box box-success">
                      <div class="box-header with-border">
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="well well-sm">
                          <p>Dari hasil analisis dan evaluasi perubahan kontrak terlampir panitia pengaddan mengusulkan :</p>
                          <h4>Kontraktor yang ditunjuk adalah <p><strong>PT SALEBBA JAYA</strong></p></h4>
                          <h4>Total Harga Amandemen <p><strong>Rp 28.892.293.000,00 termasuk PPN 10%</strong></p></h4>

                        </div>

                        

                  </div>

                </div>
                <!-- /right column -->
              </div>

              <div class="col-md-12">



              <div class="box box-success">
                  <div class="box-header with-border">
                    
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <!-- left column -->
                      <div class="col-md-12">
                        <h4>Alasan perubahan</h4>
                        <div>
                          <textarea disabled="" id="inputKeterangan" rows="5" placeholder="Diambil dari VO" class="form-control input-sm" style="resize:none"></textarea>
                        </div>

                        <h4>Rekomendasi</h4>
                        <div class="well well-sm">
                          <p>Berdasarkan alasan perubahan dan evaluasai terlampir, maka kepada <strong>PT SALEBBA JAYA</strong> untuk dilakukan penambahan biaya sebesar <strong>Rp 1.915.000.000,00</strong> tidak termasuk PPN 10% sesuai ijin prinsip sehingga total nilai kontrak asli <strong>CA-104033</strong> semula sebesar <strong>Rp 26.977.293.000,00</strong> tidak termasuk PP 10% berubah menjadi kontrak Amandemen <strong>01</strong> dengan total harga secara keseluruhan sebesar <strong>Rp 28.892.293.000,00/1.1</strong> tidak termasuk PPN 10% atau <strong>Rp 28.892.2994.000,00</strong> termasuk PPN 10%</p>
                        </div>

                            <!-- /.box-header -->
                            <div class="box-body">
                              <table class="table table-bordered">
                                <tr>
                                  <th style="width: 10px">Jadwal Kontrak</th>
                                  <th style="width: 10px">Asli</th>
                                  <th style="width: 10px">perubahan</th>
                                </tr>
                                <tr>
                                  <td>Mulai</td>
                                  <td>15-05-2016</td>
                                  <td>16-06-2016</td>
                                </tr>
                                <tr>
                                  <td>Berakhir</td>
                                  <td>17-10-2017</td>
                                  <td>16-11-2017</td>
                                </tr>
                                <tr>
                                  <td>Durasi</td>
                                  <td>12 Bulan</td>
                                  <td>13 Bulan</td>
                                </tr>                                
                              </table>
                            </div>

                      </div>
                    </div>
                  </div>

              </div>
              </div>
              

              <div class="form-group">
                <label class="control-label col-md-1" for="noKontrak">Action</label>
                <div class="col-md-5">
                  <!-- <a href="p17abort.php"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"> </span> Abort </button></a> -->
                  <a href="p17CE.php"><button type="button" class="btn btn-default btn-sm"></span> Back </button></a>
                  <a href="p17abort.php"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"> </span> Abort </button></a>
                  <!-- <a href="#"><button type="button" class="btn bg-navy btn-sm"><span class="glyphicon glyphicon-retweet"> </span> Re Bid </button></a> -->
                 
                </div>
                
                
              </div>

            </div>
            <!-- /.box-body -->
          </form>
        </div>

<!--         <div class="box-footer">
                  <a href="p17.php"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"> </span> Submit </button></a>
        </div> -->
          <!-- /right column -->
      </div>
    </section>

    <section class="content" style="min-height: 0px;">
      <!-- Info boxes -->
      <div class="box-body">

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
