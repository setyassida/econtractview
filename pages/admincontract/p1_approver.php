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
  <!-- DataTables -->
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
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-red fixed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php include "p1headerbaru.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contract Order
          <small>CA-17001</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
          <li><a href="p2a.php">Contract Order</a></li>
          <li class=""><a href="#">CA-17001</a></li>
          <li class="active"><a href="#">Approve</a></li>

        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 1</span>
                <strong>Scott Summers</strong>
                <br><br>
                <div class="text-right text-success"><i class="fa fa-check"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 2</span>
                <strong>Jean Grey</strong>
                <br><br>
                <div class="text-right text-success"><i class="fa fa-check"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-gray"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 3</span>
                <strong>Bobby Drake</strong>
                <br><br>
                <div class="text-right text-info"><i class="fa fa-clock-o"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-gray"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 4</span>
                <strong>Kitty Pryde</strong>
                <br><br>
                <div class="text-right text-info"><i class="fa fa-clock-o"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-gray"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 5</span>
                <strong>James Howlett</strong>
                <br><br>
                <div class="text-right text-info"><i class="fa fa-clock-o"></i></div>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- ./row approver -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                Download Dokumen Lampiran
              </div>
              <div class="box-body">
                <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Lampiran</th>
                      <th class="text-center" style="width:170px;">Download Lampiran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=" ">Cost Commitment*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                    </tr>
                    <tr>
                      <td class=" ">Evaluasi Kinerja Kontraktor*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td class=" ">Form Evaltek*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                    </tr>
                    <tr>
                      <td class=" ">Justifikasi PR Service*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td class=" ">Lingkup Kerja*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td class=" ">Penilaian Resiko* </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td class="">SHEQ Notice*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td>Daftar Material </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>


                    </tr>
                    <tr>
                      <td>Gambar </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>


                    </tr>
                    <tr>
                      <td>Request For Proposal (RFP) </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                    <tr>
                      <td>Spesifikasi Teknis </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>

                    <tr>
                      <td>Lain-lain </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div

          </div>
        </div>
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Contract Order</h3>
              </div>
              <div class="box-body">
                <dl>
                  <dt>Nomor Kontrak</dt>
                  <dd>CA-17001</dd> <br>
                  <dt>Judul Pekerjaan</dt>
                  <dd>Jasa Pemborongan Pekerjaan Pembuangan Sampah, Drum Bekas, Pemeliharaan Taman dan Kebersihan Lingkungan di Area Zone-I & II di PT Badak NGL Bontang, Paket “B” Tahun 2017” </dd> <br>
                  <dt>Jenis Kontrak</dt>
                  <dd>Lump Sum (LS), Harga Satuan (HS), Gabungan LS & HS </dd> <br>
                  <dt>Harga Kontrak <span class="small"><i>(Termasuk PPN 10%)</i></span></dt>
                  <dd>Rp. 400.000.000,- </dd> <br>
                  <dt>Durasi Kontrak</dt>
                  <dd>Durasi : 4 Bulan</dd>
                  <dd>Mulai : 17 September 2016 </dd>
                  <dd>Selesai : 10 Januari 2017 </dd> <br>
                </dl>
              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="pull-right" style="margin-left: 1rem">
                      <a href="p1_approve.php"><button class="btn btn-success pull-right btn-sm">Approve</button></a>
                    </div>
                    <div class="pull-right" style="margin-left: 1rem">
                      <a href="p1_reject.php"><button type="button" class="btn btn-danger pull-right btn-sm">Reject</button></a>
                    </div>
                    <div class="pull-right" style="margin-left: 1rem">
                      <a href="p1_cancel.php"><button type="button" class="btn btn-warning pull-right btn-sm">Cancel</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- /.col -->
        </div>
        <!-- /.row -->

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
  <!-- page script -->
  <script>
  $(document).ready(function(){
    $('[data-toggle="abort"]').tooltip();
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable();
  });
  </script>
</body>
</html>
