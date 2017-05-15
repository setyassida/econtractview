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

    <?php include "p2header.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Bidder List
          <small>BL-17003</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p2a.php">Bidder List</a></li>
        <li class="active"><a href="#">BL-17003</a></li>
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
              <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Approver 3</span>
                <strong>Bobby Drake</strong>
                <br><br>
                <div class="text-right text-danger"><i class="fa fa-times"></i></div>
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
        </div><!--row approver-->

        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Contract Order</h3>
              </div>
              <div class="box-body">
                <dl>
                  <dt>Contract Order</dt>
                  <dd>CA-17001</dd>
                  <dt>Judul Pekerjaan</dt>
                  <dd>REGULAR INSPECTION OF LIFTING GEARS</dd>
                  <dt>Durasi</dt>
                  <dd>2 Bulan</dd>
                  <dt>Jenis Jasa</dt>
                  <dd>Pemborongan Pekerjaan</dd>
                  <dt>Kualifikasi Syarat Peserta Pengadaan</dt>
                  <dd>M (Rp. 500 Juta <= NK <= Rp. 10 M)</dd>
                </dl>
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Data Bidder List</h3>
                <div class="mark pull-right"><strong>Status: </strong>ABORTED</div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-4">
                    <dl>
                      <dt>Nomor Bidder List</dt>
                      <dd>BL-17003</dd>
                      <dt>Tanggal Dibuat</dt>
                      <dd>22-Apr-2017</dd>
                      <dt>Waktu Dibuat</dt>
                      <dd>13:30</dd>
                      <dt>Klasifikasi</dt>
                      <dd>M</dd>
                      <dt>Kualifikasi</dt>
                      <dd>Kecil</dd>
                      <dt>
                    </dl>
                  </div>
                  <div class="col-md-4">
                    <dl>
                      <dt>Tingkat Risiko</dt>
                      <dd>Sedang</dd>
                      <dt>Publish Date</dt>
                      <dd>22-Sep-2017</dd>
                      <dt>Kuota Area</dt>
                      <table class="table table-condensed table-bordered">
                        <tbody>
                          <tr>
                            <td>Bontang</td>
                            <td>2</td>
                          </tr>
                          <tr>
                            <td>Kalimantan Timur</td>
                            <td>1</td>
                          </tr>
                          <tr>
                            <td>Domestik</td>
                            <td>3</td>
                          </tr>
                        </tbody>
                      </table>
                    </dl>
                  </div>
                  </div>
                </div>
              </div>
              <!-- box bidder list -->

              </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-success">
                    <div class="box-header">
                      <h3 class="box-title">Active Bidder</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-condensed">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Penawar</th>
                              <th>Masa SIO</th>
                              <th>Penalti Poin</th>
                              <th>Sanksi</th>
                              <th>Added By</th>
                              <th>Added Date</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Perusahaan A</td>
                              <td>1 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>System</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <span class="fa fa-ban"></span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Perusahaan B</td>
                              <td>2 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>Approver</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <a href="#">
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="abort" title="Remove this bidder"><span class="fa fa-times"></span></button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>3 </td>
                              <td>Perusahaan C</td>
                              <td>1 Bulan</td>
                              <td>0</td>
                              <td>-</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>
                                <div class="text-center">
                                  <a href="#">
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="abort" title="Remove this bidder"><span class="fa fa-times"></span></button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                      <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                        <a href="#" class="btn btn-info pull-right btn-sm"><span class="fa fa-plus"></span> Add Bidder</a>
                      </div>
                    </div>
                  </div>
                    <!-- /.box -->

                    <!-- box bidder list -->
                  <div class="box box-danger">
                      <div class="box-header">
                        <h3 class="box-title">Removed Bidder</h3>
                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped table-condensed">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Penawar</th>
                              <th>Added By</th>
                              <th>Added Date</th>
                              <th>Removed By</th>
                              <th>Removed Date</th>
                              <th>Alasan Remove</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Perusahaan D</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>Approver</td>
                              <td>23-Apr-2017</td>
                              <td>Terkena Sanksi</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Perusahaan E</td>
                              <td>CE</td>
                              <td>22-Apr-2017</td>
                              <td>Approver</td>
                              <td>23-Apr-2017</td>
                              <td>Terkena Sanksi</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                        <!-- /.box-body -->
                  </div>
                    <!-- /.box -->
                </div>
              </div>
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
