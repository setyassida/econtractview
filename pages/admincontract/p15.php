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

    <?php include "p15header.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Bidder List
          <small>BL17001</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p15.php">Bidder List VO</a></li>
        <li class="active"><a href="p15cdraft.php">BL-17001</a></li>
      </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Variation Order</h3>
                <div class="mark pull-right"><strong>VO Number:</strong> 2</div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <dl>
                      <dt>Nomor Contract Order</dt>
                      <dd>CA-17001</dd>
                      <dt>Amandemen ke</dt>
                      <dd>#2</dd>
                      <dt>Tanggal Dibuat</dt>
                      <dd>20-Jan-2017</dd>                      
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl>
                      <dt>Judul Pekerjaan</dt>
                      <dd>REGULAR INSPECTION OF LIFTING GEARS</dd>
                      <dt>Keterangan Perubahan</dt>
                      <dd>Ruang Lingkup</dd>
                    </dl>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- <div class="box-footer">
                
              <!-- /.box-footer -->
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Data Bidder List</h3>
                <div class="mark pull-right"><strong>Status: </strong>DRAFT</div>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <dl>
                      <dt>Nomor Bidder List</dt>
                      <dd>BL-17001</dd>
                      <dt>Tanggal Dibuat</dt>
                      <dd>22-Apr-2017</dd>
                      <dt>Waktu Dibuat</dt>
                      <dd>13:30</dd>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl>
                      <dt>Klasifikasi</dt>
                      <dd>M</dd>
                      <dt>Kualifikasi</dt>
                      <dd>Kecil</dd>
                    </dl>
                  </div>
                </div>
              </div>
              <!-- /. box body  -->
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
                    </tbody>
                  </table>
                </div>
              </div>
                <!-- /.box-body -->
              <!-- <div class="box-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-info pull-right btn-sm"><span class="fa fa-plus"></span> Add Bidder</a>
                </div>
              </div> -->
              <!-- /.box-footer -->
            </div>
              <!-- /.box -->

          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-body">
                <div class="col-md-12">
                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Untuk melanjutkan proses, Anda wajib mengisi kolom berikut.    
                  </p>
                  <div class="form-group" style="margin-bottom: 0.5rem">
                    <label>No. Undangan Pengadaan:</label>
                    <input type="text" class="form-control input-sm" id="generatedBySystem2" placeholder="0001/BB43/2017-040" disabled>
                  </div>
                  <div class="form-group" style="margin-bottom: 0.5rem">
                    <label>Pesan Invitation Note:</label>
                    <textarea class="form-control" rows="3" placeholder="Keterangan Tambahan" style="resize:none" required></textarea>
                  </div>
                  
                </div>
              </div>
              <!-- /.box body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-right btn-sm" style="margin-right: 5px;" data-toggle="modal" data-target="#sendModal">
                    <span class="glyphicon glyphicon-send"></span> Publish
                    </button>

                    <div id="sendModal" class="modal fade">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                          <div class="modal-header bg-blue">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Anda yakin?</h4>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                          </div>
                        </div>
                          <!-- /.modal-content -->
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
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
