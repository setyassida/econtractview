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

<!-- 
    <div class="content" style="min-height: 0px;">
      <div class="col-md-6">
        <a href="p8f.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Create BCR">Create BCR</button></a>
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
            <div class="col-md-12">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h3> Perubahan Ranking Setelah Koreksi Aritmatik  </h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">


                          <!-- main column-->

                        <table id="dataTable" class="table table-bordered table-condensed table-hover">
                          <thead>
                          <tr>
                            <th style="width:150px" class="text-center">PENAWAR</th>
                            <th style="width:80px">PENAWARAN ASLI (RP)</th>
                            <th style="width:1px">RANKING ASLI</th>
                            <th style="width:80px">PENAWARAN TERKOREKSI (RP)</th>
                            <th style="width:1px">RANGKING KOREKSI</th>
                            <th style="width:200px">PENJELASAN</th>
                            <!-- <th style="width:50px">Action</th> -->
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>
                              <div class="text-center">
                                PT Aimindo Adie Perkasa
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                1.050.000.000
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                1
                              </div>
                            </td>
                            <td>
                              <textarea id="inputKeterangan" rows="1" placeholder="Input nominal" class="form-control" style="resize: none; width: 250px"></textarea>
                            </td>
                            <td>0</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Type Here.." class="form-control" style="resize: none; width: 250px"></textarea></td>
                          
                         </tr>
                          <tr>
                            <td>
                              <div class="text-center">
                                PT Hasanah Sumber Utama
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                1.150.000.000
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                2
                              </div>
                            </td>
                            <td>
                              <textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control" style="resize: none; width: 250px"></textarea>
                            </td>
                            <td>0</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Type Here.." class="form-control" style="resize: none; width: 250px"></textarea></td>

                          </tr>
                          <tr>
                            <td>
                              <div class="text-center">
                                PT Abdi Jati
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                1.250.000.000
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                3
                              </div>
                            </td>
                            <td>
                              <textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control" style="resize: none; width: 250px"></textarea>
                            </td>
                            <td>0</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Type Here.." class="form-control" style="resize: none; width: 250px"></textarea></td>

                          </tr>
                          <tr>
                            <td>
                              <div class="text-center">
                                PT Cemara
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                1.350.000.000
                              </div>
                            </td>
                            <td>
                              <div class="text-center">
                                4
                              </div>
                            </td>
                            <td>
                              <textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control" style="resize: none; width: 250px"></textarea>
                            </td>
                            <td>0</td>
                            <td><textarea id="inputKeterangan" rows="1" placeholder="Type Here.." class="form-control" style="resize: none; width: 250px"></textarea></td>

                          </tr>

                          <tbody>
                        </table>
                        <dir class="col-md-12 box-footer" style="text-align: right;">
                          <a href="p8e.php"><button type="button" class="btn btn-info btn-sm">Save</button></a>
                        </dir>
                      </div>
                  </div>

                </div>
        

      </div>

      <div class="row">
        <div class="col-md-12">
                  <div class="box box-info">
                      <form class="form-horizontal">
                        <div class="box-header with-border">
                          <h3>Penawaran Yang Dikoreksi Berdasarkan Ranking Koreksi ( Tiga Terendah )</h3>
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
                                        <th style="width: 10px" rowspan="1">No</th>
                                        <th>Penawar</th>
                                        <th style="width: 200px">Penawaran Asli (Rp)</th>
                                        <th style="width: 200px">Penawaran Terkoreksi (RP)</th>
                                        <th style="width: 20px" colspan="2">Ranking</th>
<!--                                         <th style="width: 10px">Ranking Asli</th>
                                        <th style="width: 10px">Ranking Koreksi</th> -->
                                        <th>Administrasi</th>
                                        <th>Teknis</th>
                                      </tr>
                                      <tr>
                                        <th style="width: 10px"></th>
                                        <th></th>
                                        <th style="width: 200px"></th>
                                        <th style="width: 200px"></th>
                                        <th style="width: 10px">Asli</th>
                                        <th style="width: 10px">Koreksi</th>
                                        <th></th>
                                        <th></th>
                                      </tr>                                      
                                     <tr>
                                        <td>1.</td>
                                        <td>PT Hasanah Sumber Utama</td>
                                        <td>1.150.000.000</td>
                                        <td>950.000.000</td>
                                        
                                        <td> 2 </td>
                                        <td> 1 </td>
                                        <td> Lulus </td>
                                        <td> lulus </td>
                                        <!-- <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control" style="resize:none"></textarea></td> -->
                                      </tr>
                                      <tr>
                                        <td>2.</td>
                                        <td>PT Aimindo Adie Perkasa</td>
                                        <td>1.050.000.000</td>
                                        <td>1.200.000.000</td>
                                        
                                        <td> 1 </td>
                                        <td> 2 </td>
                                        <td> Lulus </td>
                                        <td> lulus </td>
                                        <!-- <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control" style="resize:none"></textarea></td> -->
                                      </tr>
                                      <tr>
                                        <td>3.</td>
                                        <td>PT Abdi Jati</td>
                                        <td>1.250.000.000</td>
                                       
                                        <td>0</td>
                                        <td> 3 </td>
                                        <td> 3 </td>
                                        <td> Lulus </td>
                                        <td> lulus </td>
                                        <!-- <td><textarea id="inputKeterangan" rows="1" placeholder="Status" class="form-control" style="resize:none"></textarea></td> -->
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="box box-warning">
                                      <div class="box-header with-border">
                                        <h3 class="box-title">HPS PT BADAK NGL</h3>
                                      </div>
                                    <div class="box-body col-md-12">
                                      <table class="table table-bordered">
                                        <tr>
                                          <th>HPS Minimum</th>
                                          <th>HPS Most Likely</th>
                                          <th>HPS Maksimum</th>
                                        </tr>
                                        <tr>
                                          <td> Rp 970.000.000 </th>
                                          <td> Rp 5.000.000.000 </th>
                                          <td> Rp 3.000.000.000 </th>
                                        </tr>
                                      </table>
                                    </div>

                                  </div>
                                </div>
                            </div>

                          </div>
                           <div class="col-md-12 box-footer" style="text-align: right;">
                           <a href="p8c.php">
                                    <button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;">
                                    Back
                                  </button>               
                          </a>
                                    <a href="p8f.php"><button type="button" class="btn btn-success btn-sm" title="Lanjut Rincian Penawaran">Lanjut Rincian Penawaran</button></a>
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
