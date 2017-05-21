<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>eContract Badak NGL</title>
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php include("p6-header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Evalusi Teknis
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="p6.php">Evaluasi Teknis</a></li>
        <li class="active">CA-17001</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="row">
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 1</span>
              <strong>Sarah Connor</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 2</span>
              <strong>Katniss Everdeen</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content" >
              <span class="info-box-text">Approver 3</span>
              <strong>Peeta Mellark</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Approver 4</span>
              <strong>Jack Sparrow</strong>
              <br><br>
              <div class="text-right text-success"><i class="fa fa-check"></i></div>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
      </div>

      <div class="box box-success">
          <form class="form-horizontal">
          <div class="box-header with-border">
            <h4>Form Evaluasi Teknis</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-12">
              <div class="form-group"> 
                <label class="control-label col-md-2">Nomor Kontrak : </label>
                <div class="form-control-static col-md-10">
                  CA-17001
                </div>
                
              </div>
              <div class="form-group">
                <label class="control-label col-md-2">Upload Dokumen Hasil Scan :</label>
                <div class="col-md-6  ">
                  <input type="file" class="input-sm">
                </div>
              </div>
              
            </div>

            <div class="col-md-12">
              

              <table class="table table-bordered table-condensed table-stripped">
                <thead>
                  <tr>
                    <td style="width:25px">No.</td>
                    <td style="width:200px">Nama Rekanan</td>
                    <td style="width:55px">Score</td>
                    <td style="width:125px">Kesimpulan</td>
                    <td>Keterangan Singkat</td>
                    <td style="width:100px">Dokumen Hasil Evaltek</td>
                    <td style="width:100px">Dokumen Klarifikasi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>PT A MAJU JAYA</td>
                    <td>75</td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      -
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <!-- <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button> -->
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>PT B HARAPAN BANGSA</td>
                    <td>80</td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      -
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <!-- <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button> -->
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>PT C KARYA MAS</td>
                    <td>70</td>
                    <td>
                      <span class="text-red">Tidak Lulus</span>
                    </td>
                    <td>
                      Tidak memenuhi kriteria kebutuhan
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>PT D CAHAYA TERANG</td>
                    <td>72</td>
                    <td>
                      <span class="text-red">Tidak Lulus</span>
                    </td>
                    <td>
                      Tidak memenuhi kriteria kebutuhan
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>PT E MAKMUR ABADI</td>
                    <td>78</td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      -
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <!-- <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button> -->
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>PT F HAN WOK STEEL</td>
                    <td>59</td>
                    <td>
                      <span class="text-red">Tidak Lulus</span>
                    </td>
                    <td>
                      Tidak memenuhi uji kelayakan
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                    </td>
                  </tr>
                </tbody>
              </table>

              
            </div>

            <div class="col-md-12">
              
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">

            <a href="p6.php"><button type="button" class="btn btn-default btn-sm" style="margin-right:5px">Back</button></a>
            <button type="button" class="btn btn-default btn-sm" style="margin-right:5px"><span class="glyphicon glyphicon-download-alt"></span> Download Template PDF</button>
            <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-download-alt"></span> Upload</button>
            
            <div id="uploadModal" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Anda Yakin?</h4>
                  </div>
                  <div class="modal-body">
                    <p>Anda tidak dapat merubah dokumen yang di-upload setelah proses ini.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-sm btn-success">Ya</button>
                  </div>
                </div>
                  <!-- /.modal-content -->
              </div>
            </div>
            

          </div>
          </form>
      </div>
      <!-- /.box -->
  </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2017 <a href="http://badaklng.co.id">PT Badak NGL</a>.</strong> All rights reserved.
  </footer>

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
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
  $(function () {
    $("#dataTable").DataTable();
  });
</script>

</body>
</html>
