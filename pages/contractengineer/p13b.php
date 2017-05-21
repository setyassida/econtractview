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
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
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

  <?php @include('p13header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Certification Of Completion
        <!-- <small>Evaluasi Komersial</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li class="active">Contract Order</li> -->
        <li class="active">  Certification Of Completion</li>
      </ol>
    </section>

    

        <section class="content">
      <!-- Info boxes -->
      <div class="box-body">
        <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Kontrak</h3>
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
                            <p class="form-control-static">JASA ANNUAL TECHINAL SIPPORT (ATS) PERANGKAT LUNAK ORACLE ERP DI PT. BADAK NGL</p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3" for="noKontrak">Schedule Kontrak:</label>
                          <div class="col-md-9">
                            <p class="form-control-static">1 - Mei - 2016 s/d 30-Mei-2018</p>
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3" for="noKontrak">Tagihan ke:</label>
                          <div class="col-md-9">
                            <p class="form-control-static">1</p>
                          </div>
                        </div>

                </div>
                <!-- /left column -->

                <!-- right column -->
                <div class="col-md-6">
                  <div class="box box-success">
                      <div class="box-header with-border">
                        <p>Detail COC</p>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Schedule Penagihan</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                      <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                      <input disabled="" type="text" class="form-control pull-right" id="datepicker">
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Nilai Kontrak Asli</label>
                            <div class="col-md-6">
                              <textarea disabled="" id="inputKeterangan" rows="1" placeholder="Rp 4,937,575,500.00" disabled="" class="form-control input-sm" style="resize:none"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Nilai Kontrak Tambah / Kurang</label>
                            <div class="col-md-6">
                              <textarea disabled="" id="inputKeterangan" rows="1" placeholder="Rp -"  class="form-control input-sm" style="resize:none"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Nilai Kontrak Perubahan ( Amandemen )</label>
                            <div class="col-md-6">
                              <textarea disabled="" id="inputKeterangan" rows="1" placeholder="Rp - " class="form-control input-sm" style="resize:none"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Total Progress yang lalu</label>
                            <div class="col-md-6">
                              <textarea disabled="" id="inputKeterangan" rows="1" placeholder="0%" class="form-control input-sm" style="resize:none"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Total Progress tambahan</label>
                            <div class="col-md-6">
                              <textarea id="inputKeterangan" rows="1" placeholder="25%" class="form-control input-sm" style="resize:none" disabled=""></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-6" for="noKontrak">Total Progress sampai saat ini</label>
                            <div class="col-md-6">
                              <textarea id="inputKeterangan" rows="1" placeholder="25%" class="form-control input-sm" style="resize:none" disabled=""></textarea>
                            </div>
                          </div>
                      </div>
                      <div class="box-footer">
                          
                         <a href="#!"><button type="button" class="btn btn-primary btn-sm" data-toggle="hold" title="Simpan COC"><span class="fa fa-send"></span> Simpan</button></a>
                      </div>

                  </div>

                </div>
                <!-- /right column -->
              </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="well well-sm">
                          <h4>Dengan ini menyatakan bahwa pekerjaan tersebut telah diselesaikan <strong>25.00%</strong>  dari kontrak asli dan telah sesuai dengan spesifikasi dan lingkup yang tertuan dalam perjanjian kontrak</h4>
                          <h4>Pembayaran saat ini adalah sebesar <strong>25.00%</strong> dan penangguhan pembauaran sebesar <strong>0,000%</strong>  *)</h4>
                          <h5>(* Total pembayaran harus sesuai dengan progress tambahan</h5>
                          <br>
                        </div>

                        
                          <div class="col-md-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Penangguhan pembayaran tersebut diatas sehubungan dengan
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Jaminan Pemeliharaan
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Perhitungan Penalty Keterlambatan
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Retensi
                              </label>
                            </div>                            
                          </div>
                          <div class="col-md-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Penangguhan pembayaran tersebut diatas sehubungan dengan
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" disabled="">
                                Kontrak Harga Satuan
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input disabled="" type="checkbox">
                                Pengakhiran Kontrak
                              </label>
                            </div>
                                                        
                          </div>
                      </div>

                      </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <p>Perhitungan Nilai Pembayaran</p>
                        <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="col-md-12">
                          <table class="table table-bordered table-condensed">
                            <thead>
                              <tr>
                                <th>KODE PEMBEBANAN</th>
                                <th>URAIAN PEKERJAAN</th>
                                <th>PROGRESS</th>
                                <th>NILAI KONTRAK</th>
                                <th>NILAI PEMBAYARAN</th>
                              </tr>

                            </thead>
                            <tr>
                              <th><strong>A-HGB0-FA000-75103-00</strong></th>
                              <th><strong>JASA ANNUAL TECHNICAL SUPPORT (ATS) PERANGKAT LUNAK ORACLE ERP DI PT. BADAK NGL</strong></th>
                              <th><strong>25.000%</strong></th>
                              <th><strong>Rp 4,937,575,500.00</strong></th>
                              <th><strong>Rp 1,234,292,875.00</strong></th>
                            </tr>

                          </table>

                        </div>


                        <div class="col-md-12">
                          <table class="table table-bordered table-condensed">
                            <tbody>
                            <tr>
                              <th>Nilai Kontrak Asli</th>
                              <th></th>
                              <th>Rp 4,937,575,500.00</th>
                            </tr>
                            <tr>
                              <th>Nilai Kontrak Tambahan</th>
                              <th></th>
                              <th>Rp -</th>
                            </tr>
                            <tr>
                              <th>Nilai Kontrak Perubahan</th>
                              <th></th>
                              <th>Rp -</th>
                            </tr>
                            <tr>
                              <th>Total Tagihan yang lalu</th>
                              <th>Rp -</th>
                              <th></th>
                            </tr>
                            <tr>
                              <th>Total Tagihan saat ini</th>
                              <th>Rp 1,234,292,875.00</th>
                              <th></th>
                            </tr>
                            <tr>
                              <th>Total Tagihan</th>
                              <th></th>
                              <th>Rp 1,234,292,875.00</th>
                            </tr>
                            <tr>
                              <th>Nilai Tagihan</th>
                              <th></th>
                              <th>Rp 3,703,181,625.00</th>
                            </tr>
                            <tr>
                              <th>Nilai KOntrak Tambahan</th>
                              <th></th>
                              <th>Rp -</th>
                            </tr>
                            <tr>
                              <th>Nilai Kontrak Perubahan</th>
                              <th></th>
                              <th>Rp -</th>
                            </tr>
                            </tbody>

                          </table>

                        </div>


                          
                      </div>

                      </div>
                      <div class="box-footer">

                      <div class="col-md-6"> 
                        <a href="p13.php"><button type="button" class="btn btn-default btn-sm"> Back </button></a>
                         


                      </div>

                         <div class="col-md-6" style="text-align: right;">
                           <td><button type="button" class="btn btn-default btn-xs" ><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                           <td><a href="#"><button  type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></td>

                         </div>


                      </div>
                  </div>

                </div>

            </div>
            <!-- /.box-body -->
          </form>
        </div>

          <!-- /right column -->
      </div>

      <div class="row">
        

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
  })
</script>

</body>
</html>
