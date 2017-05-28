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

  <?php @include('p8header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <section class="content-header">
      <h1>
        Evaluasi Komersial
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                    <label class="control-label col-md-3" for="noKontrak">Tanggal Pembukaan:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">17-01-2016</p>
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
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">HPS</h3>
                    </div>
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tr>
                          <th>HPS Minimum</th>
                          <th>HPS Most Likely</th>
                          <th>HPS Maksimum</th>
                        </tr>
                        <tr>
                          <td> Rp 4.500.000 </th>
                          <td> Rp 5.000.000 </th>
                          <td> Rp 3.000.000 </th>
                        </tr>
                      </table>
                    </div>


                  </div>

                  <div class="box box-success">
                      <div class="box-header with-border">
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="form-group">
                          <label class="control-label col-md-5" for="noKontrak">Contract Existing Termasuk PPN 10% / 1.1</label>
                          <div class="col-md-6">
                            <textarea id="inputKeterangan" rows="1" placeholder="0" class="form-control input-sm" style="resize:none"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5" for="noKontrak">Contract Existing Tidak Termasuk PPN 10% / 1.1</label>
                          <div class="col-md-6">
                            <textarea id="inputKeterangan" rows="1" placeholder="0" class="form-control input-sm" style="resize:none"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5" for="noKontrak">Durasi</label>
                          <div class="col-md-6">
                            <textarea id="inputKeterangan" rows="1" placeholder="0" class="form-control input-sm" style="resize:none"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5" for="noKontrak">Jumlah TK</label>
                          <div class="col-md-6">
                            <textarea id="inputKeterangan" rows="1" placeholder="0" class="form-control input-sm" style="resize:none"></textarea>
                          </div>
                        </div>
                      </div>

                  </div>

                </div>
                <!-- /right column -->
              </div>

              <div class="col-md-12">



              <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Penilaian Hasil Evaluasi</h3>
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
                                  <th style="width: 10px">No</th>
                                  <th>Penawar</th>
                                  <th style="width: 200px">Penawaran Asli (Rp)</th>
                                  <th style="width: 200px">Penawaran Terkoreksi (RP)</th>
                                  <th style="width: 100px">Nilai Negosiasi (RP)</th>
                                  <th style="width: 10px">Ranking Asli</th>
                                  <th style="width: 10px">Ranking Koreksi</th>
                                  <th>Administrasi</th>
                                  <th>Teknis</th>
                                  <th>Komersial</th>
                                  <th>Penalty</th>
                                  <th>Sanksi</th>
                                </tr>
                                <tr>
                                  <td>1.</td>
                                  <td>PT Hasanah Sumber Utama</td>
                                  <td>1.150.000.000</td>
                                  <td>950.000.000</td>
                                  <td>950.000.000</td>
                                  <td> 2 </td>
                                  <td> 1 </td>
                                  <td> Lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                </tr>
                                <tr>
                                  <td>2.</td>
                                  <td>PT Aimindo Adie Perkasa</td>
                                  <td>1.050.000.000</td>
                                  <td>1.200.000.000</td>
                                  <td>950.000.000</td>
                                  <td> 1 </td>
                                  <td> 2 </td>
                                  <td> Lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                </tr>
                                <tr>
                                  <td>3.</td>
                                  <td>PT Abdi Jati</td>
                                  <td>1.250.000.000</td>
                                  <td>950.000.000</td>
                                  <td>0</td>
                                  <td> 3 </td>
                                  <td> 2 </td>
                                  <td> Lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <td> lulus </td>
                                  <!-- <td><textarea id="inputKeterangan" rows="1" placeholder="Status" class="form-control" style="resize:none"></textarea></td> -->
                                  <td> lulus </td>

                                </tr>
                              </table>
                            </div>

                      </div>
                    </div>
                  </div>

              </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-1" for="noKontrak">Catatan Panitia Pengadaan</label>
                <div class="col-md-6">
                  <textarea id="inputKeterangan" rows="5" placeholder="input..." class="form-control input-sm" style="resize:none"></textarea>
                </div>
              </div>
            
              <h4>Pengesahan Panitia Pengadaan</h4>
              <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-1" for="noKontrak">Ketua:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="MUHAIMIN" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                    <label class="control-label col-md-1" for="noKontrak">Sekretaris:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="AGUS SUSANTO" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                </div>
    
               <div class="form-group">
                    <label class="control-label col-md-1" for="noKontrak">Alt Ketua:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="MOHAMMAD FAROUK RIZA" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                    <label class="control-label col-md-1" for="noKontrak">Anggota:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="SALLY IRENE" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-1" for="noKontrak">Anggota:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="NASRUL SYAHRUDDIN" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                    <label class="control-label col-md-1" for="noKontrak">Anggota:</label>
                    <div class="col-md-5">
                        <textarea id="inputKeterangan" rows="1" placeholder="MULYA FITRAH UTAMA" class="form-control input-sm" style="resize:none"></textarea>
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-md-1" for="noKontrak">Anggota:</label>
                    <div class="col-md-5">
                      <textarea id="inputKeterangan" rows="1" placeholder="ANAS MALIK ABDULLAH" class="form-control input-sm" style="resize:none"></textarea>
                    </div>
                </div>


              </div>
              

              <div class="form-group">
                <div class="col-md-5">
                  <!-- <a href="p8abort.php"><button type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"> </span> Abort </button></a> -->
                  <a href="p8d.php"><button type="button" class="btn bg-purple btn-sm"><span class="glyphicon glyphicon-retweet"> </span> Re Evaluasi </button></a>
                  <a href="p8d.php"><button type="button" class="btn bg-navy btn-sm"><span class="glyphicon glyphicon-repeat"> </span> Re Bid </button></a>
                  <!-- <a href="#"><button type="button" class="btn bg-navy btn-sm"><span class="glyphicon glyphicon-retweet"> </span> Re Bid </button></a> -->
                  <a href="p8.php"><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"> </span> Submit </button></a>
                 
                </div>
                <div class="col-md-6" style="text-align: right;">
                  <!-- <button type="button" disabled="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                  <a href="#!"><button type="button" disabled="" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a> -->

                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </form>
        </div>


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
