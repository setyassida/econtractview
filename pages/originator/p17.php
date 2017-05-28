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

<?php include('p17header.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Evaluasi Komersial
        <small>Konfirmasi Ketersediaan Anggaran</small>
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
        <div class="box box-danger">
            <div class="box-header">
              <div class="row">
                      <div class="col-md-3">
                        <dt>Contract Order:</dt>
                        <dd>CA-17001</dd>
                      </div>
                      <div class="col-md-4">
                        <dt>Judul Pekerjaan:</dt>
                         <dd>Kontrak Jasa Penambahan Alat Berat</dd>
                      </div>
                      <div class="col-md-4">
                        <dt>Kurs Dollar:</dt>
                         <dd>Rp 13.400</dd>
                      </div>

                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
               <div class="col-md-12">
                  
                      
                                            
                </div>

              <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 100px" colspan="2">Cost Commitment</th>
                                        
                                        <th style="width: 200px" colspan="2">HPS PT. Badak NGL Belum Termasuk PPN 10%</th>
                                        <th style="width: 200px" colspan="2">Penawaran Rekanan Belum Termausk PPN 10%</th>
                                        <th style="width: 100px" colspan="3">Kekurangan Anggaran</th>
<!--                                         <th style="width: 10px">Ranking Asli</th>
                                        <th style="width: 10px">Ranking Koreksi</th> -->
                                        <th>Keterangan</th>
                                        
                                      </tr>
                                      <tr>
                                        <th style="width: 100px">USD</th>
                                        
                                        <th style="width: 200px">Rp. (1)</th>
                                        <th style="width: 200px">Min</th>
                                        <th style="width: 100px">Max</th>
                                        <th style="width: 100px">Min</th>
                                        <th style="width: 100px">Max</th>
                                        <th style="width: 100px">USD</th>
                                        <th style="width: 100px">Rp. (3)</th>
                                        <th> % </th>
                                        <th> </th>
                                        
                                      </tr>                                      
                                     <tr>
                                        <td>$ 32.200</td>
                                        <td>$ 32.200</td>
                                        
                                        <td>$ 45.552,09</td>
                                        <td>$ 46.722,09</td>
                                        <td>$ 48.667,16</td>
                                        
                                        <td>$ 59.104,48</td>
                                        <td>###### </td>
                                        <td> -51,141% </td>
                                        <td> -51,141% </td>
                                        <td> harga tersebut merupakan hasil negosiasi maximum </td>
                                        <!-- <td><textarea id="inputKeterangan" rows="1" placeholder="Status.." class="form-control" style="resize:none"></textarea></td> -->
                                      </tr>
                                      
                                    </table>
                                    <br>
                              <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <div class="row">
                                          <label class="control-label col-md-3" for="noKontrak">Opsi Originator:</label>
                                      </div>
                                      <div class="row col-md-12">
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            Anggaran tersedia dan pekerjaan diperlukan, pengadaan dapat diproses lanjut
                                          </label>
                                        </div>
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Anggaran tidak tersedia, rebid dengan terlebih dulu revisi scope of work
                                          </label>
                                        </div>
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                            Anggaran tidak tersedia, pengadaan dibatalkan
                                          </label>
                                        </div>
                                      </div>
                                    </div>

                                </div>

                              </div>


                              <div class="row">
                                <div class="col-md-12">
                                  <div class="well well-sm">
                                        <h5>Konfirmasi ketersediaan ini kami tunggu hingga tanggal <strong> 24 Maret 2017</strong></h5>
                                        <h5>Melewati tanggal tersebut kami anggap tidak bersedia dan proses pengadaan tidak dilanjutkan</h5>
                                  </div>

                                </div>
                                

                              </div>                 
                                      
            </div>
            <!-- /.box-body -->
          <div class="box-footer col-md-12" style="text-align: right;">
              <!-- <button type="submit" class="btn btn-info pull-right">Generate Bidder List</button> -->
              <div class="col-md-6" style="text-align: left;">
                <a href="p17.php"><button type="button" class="btn btn-default btn-sm">Back</button></a>
              <a href="p17.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span>Submit</a>
              </div>


              <div class="col-md-6" style="text-align: right;">
                <td><button type="button" class="btn btn-default btn-xs" disabled=""><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
              <td><a href="p3-upload.php?no=C0-17001"><button disabled="" type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></td>
              </div>
              

          </div>
            </div>

          <!-- /.box -->
        </div>


<!--  content wrapper-->
      </div>
    </section>

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



