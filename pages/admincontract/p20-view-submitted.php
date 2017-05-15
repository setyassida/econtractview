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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../../resources/css/custom-style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-red fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php include("p20-header.php");?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporting
        <small>CSMS dan Tenaga Kerja</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="p20.php">CSMS dan Tenaga Kerja</a></li>
        <li class="active">CA-17001</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box">
        <form class="form-horizontal">
        <div class="box-header with-border">
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h4>Informasi Umum</h4></div>
              <div class="box-body">
                
                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Nama Perusahaan :</label>
                  <div class="form-control-static col-md-10">
                    PT MAJU JAYA
                  </div>
                </div>
                
                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Nomor Kontrak :</label>
                  <div class="form-control-static col-md-10">
                    CA-17001
                  </div>
                </div>

                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Judul Pekerjaan :</label>
                  <div class="form-control-static col-md-10">
                    REGULAR INSPECTION OF LIFTING GEARSR
                  </div>
                </div>

                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Durasi  :</label>
                  <div class="form-control-static col-md-10">
                    2 Bulan
                  </div>
                </div>


                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Departemen/Section :</label>
                  <div class="form-control-static col-md-10">
                    Departemen A
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>

          

          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h4>Summary Report Tenaga Kerja</h4>
              </div>
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Jenis Kelamin Perempuan : </label>
                    <div class="form-control-static col-md-6">
                      25
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Jenis Kelamin Laki - Laki :</label>
                    <div class="form-control-static col-md-6">
                      37
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Jumlah Keseluruhan :</label>
                    <div class="form-control-static col-md-6">
                      62
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Overhead :</label>
                    <div class="form-control-static col-md-6">
                      15
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Pekerja :</label>
                    <div class="form-control-static col-md-6">
                      47
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Golongan :</label>
                    <div class="form-control-static col-md-6">
                      -
                    </div>
                  </div>

                  <div class="form-group no-margin">
                    <label class="control-label col-md-2">Durasi Kerja :</label>
                    <div class="form-control-static col-md-6">
                      -
                    </div>
                  </div>                  

                </div>
              </div>
              
            </div>
          </div>

          <div class="col-md-12">
            <div class="box">
              <form class="form-horizontal">
                <div class="box-header with-border">
                  <h4>Laporan Lainnya</h4>
                </div>
                <div class="box-body">
                  <table class="table table-bordered table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Laporan</th>
                        <th style="width:150px">Upload Hasil Scan</th>
                      <tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Form CR 01 Form Laporan CSMS</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>2.</td>
                        <td>Form PJA 01 Daftar Periksa Pre Job Activities</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>3.</td>
                        <td>Form WIP 01 Daftar Periksa Inspeksi Keselamatan</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>4.</td>
                        <td>Form WIP 02 Daftar Periksa Program Keselamatan</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>5.</td>
                        <td>Form WIP 03 Evaluasi SHEQ Bulanan</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>6.</td>
                        <td>Laporan Tenaga Kerja</td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  
                </div>
                



                            
            </div>

          </div>

          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Kontraktor : </label>
                  <div class="form-control-static col-md-3">
                    Hasanuddin
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2">Jabatan Kontraktor : </label>
                  <div class="form-control-static col-md-3">
                    Senior Manager
                  </div>
                </div>
              </div>

            </div>
          </div>
          

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <a href="p20.php"><button type="button" class="btn btn-default btn-sm pull-right" style="margin-right:5px"> Back</button></a>
        </div>
        </form>
      </div>
      <!-- /.box -->
	</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a href="http://www.badaklng.co.id"> PT Badak NGL</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

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
