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
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
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
        Contract Order
        <small>Evaluasi Komersial</small>
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

  <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Evaluasi Teknis</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered text-center">
                          <tr>
                            <th style="width: 10px" rowspan="2" >No</th>
                            <th style="width: 100px" rowspan="2" >Penawar</th>
                            <th style="width: 100px" rowspan="2" >Score</th>
                            <th style="width: 100px" colspan="2" >PT Badak NGL</th>
                            
                          </tr>
                          <tr>
                            <th style="width: 200px" >Penjelasan</th>
                            <th style="width: 200px" >Kesimpulan</th>
                            
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>PT Hasanah Sumber Utama</td>
                            <td>78,04</td>
                            <td>Penawaran sesuai dengan segi teknis</td>
                            <td>Lulus</td>
                            
                          </tr>
                          
                        </table>

                      </div>
                     

                </div>


              </div>
            </div>
          </form>
        </div>    


    </div>



  </div>

  <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Evaluasi Komersial</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
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
                            <th>Penawar</th>
                            <th style="width: 200px">Penawaran Asli (Rp)</th>
                            <th style="width: 200px">Penawaran Terkoreksi (RP)</th>
                            <th style="width: 100px">Nilai Negosiasi (RP)</th>
                            <th style="width: 10px">Hasil Evaluasi Ke - </th>
                            <th>Administrasi</th>
                            <th>Teknis</th>
                            <th>Komersial</th>
                          </tr>
                          <tr>

                            <td>PT Hasanah Sumber Utama</td>
                            <td>1.150.000.000</td>
                            <td>950.000.000</td>
                            <td>950.000.000</td>
                            <td> 2 </td>
                            <td> Lulus </td>
                            <td> Lulus </td>
                            <td> Wajar </td>
                          </tr>
                          
                        </table>

                      </div>
                     

                </div>


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
          <div class="well well-sm">
            <h4>Hasil evaluasi komersial telah selesai</h4>
            
            
            <br>
          
          </div>
      
            
            
        </div>
        <div class="box-footer">
           <div class="col-md-6"> 
            <a href="p17.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Kembali ke menu browse"><span class="glyphicon glyphicon-ok-circle"></span> Finish</button></a>
             
           </div>

           <div class="col-md-6">
              <div class="form-group">
                          <label class="control-label col-md-6" for="noKontrak">Download BCR</label>
                          <div class="col-md-6">
                            <td><button type="button" class="btn btn-default btn-xs" ><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                            <td><a><button  type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></td>
                          </div>
              </div>

              <br>
              <div class="form-group">
                          <label class="control-label col-md-6" for="noKontrak">Download Evalkom</label>
                          <div class="col-md-6">
                            <td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                            <td><a><button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></a></td>
                          </div>
              </div>

           </div>
        </div>

        </div>

    </div>

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
