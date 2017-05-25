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
        Evaluasi Teknis
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
      <div class="box box-danger">
          <form class="form-horizontal" action="p6-edit-next.php">
          <div class="box-header with-border">
            <h4>Form Evaluasi Teknis</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            
              <div class="form-group"> 
                <label class="control-label col-md-2">Nomor Kontrak : </label>
                <div class="form-control-static col-md-10">
                  CA-17001
                </div>
                
              </div>
              
            

            <div class="col-md-12">
              

              <table class="table table-bordered table-condensed table-stripped table-hover">
                <thead>
                  <tr>
                    <td style="width:25px">No.</td>
                    <td style="width:150px">Nama Rekanan</td>
                    <td style="width:75px">Score</td>
                    <td>Kesimpulan</td>
                    <td>Dokumen Hasil Evaltek</td>
                    <td style="width:300px">Keterangan Singkat</td>

                    <td>Dokumen Klarifikasi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>PT MAJU JAYA</td>
                    <td><div class="text-center">75</div></td>
                    
                    <!-- <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" placeholder="Wajib isi jika tidak lulus..."></textarea>
                    </td> -->
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <td></td>
                    <td></td>
                    <!-- <td>
                      <input type="file" class="input-sm" style="width:175px" required>
                    </td> -->
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>PT HARAPAN BANGSA</td>
                    <td><div class="text-center">69</div></td>
                    <td>
                      <span class="text-red">Tidak Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" required></textarea>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>PT KARYA MAS</td>
                    <td><div class="text-center">76</div></td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <td></td>
                    <td></td>
                    <!-- <td>
                      <input type="file" class="input-sm" style="width:175px" required>
                    </td> -->
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>PT CAHAYA TERANG</td>
                    <td><div class="text-center">87</div></td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <!-- <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" placeholder="Wajib isi jika tidak lulus..."></textarea>
                    </td> -->
                    <td></td>
                    <td></td>
                    <!-- <td>
                      <input type="file" class="input-sm" style="width:175px" required>
                    </td> -->
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>PT MAKMUR ABADI</td>
                    <td><div class="text-center">92</div></td>
                    <td>
                      <span class="text-green">Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <!-- <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" placeholder="Wajib isi jika tidak lulus..."></textarea>
                    </td> -->
                    <td></td>
                    <td></td>
                    <!-- <td>
                      <input type="file" class="input-sm" style="width:175px" required>
                    </td> -->
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>PT HAN WOK STEEL</td>
                    <td><div class="text-center">58</div></td>
                    <td>
                      <span class="text-red">Tidak Lulus</span>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                    <!-- <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" placeholder="Wajib isi jika tidak lulus..."></textarea>
                    </td> -->
                    <td>
                      <textarea class="form-control input-sm" rows="2" style="resize:none" required></textarea>
                    </td>
                    <td>
                      <input type="file" class="input-sm" style="width:180px" required>
                    </td>
                  </tr>
                </tbody>
              </table>

              
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">

            <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#submitModal"><span class="glyphicon glyphicon-edit"></span> Submit</button>
            <!-- <button type="button" class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#saveModal" style="margin-right:5px"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button> -->
            <!-- <a href="p6.php"><button type="button" class="btn btn-default btn-sm" style="margin-right:5px">Back</button></a> -->
            
            <div id="submitModal" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-green">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Anda Yakin?</h4>
                  </div>
                  <div class="modal-body">
                    Data yang Anda masukan tidak dapat diubah setelah proses ini.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Tidak</button>
                    <a href="p6-view-approved.php"><button type="button" class="btn btn-sm btn-success">Ya</button></a>
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
