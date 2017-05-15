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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
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
<body class="hold-transition skin-red	 fixed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php @include('p17header.php') ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <h1>
        Contract Order
        <small>Abort Evaluasi Komersial VO</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Order</li>
        <li class="active">Abort Evaluasi Komersial VO</li>
      </ol>
    </section>

      <!-- Main content -->

      <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-danger">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi Kontrak</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <div class="row">
                <!-- left column -->
                <div class="col-md-6">

                  <!-- <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Nomor Risalah Pre-Bid Meeting:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">0001/BB41/2017-532</p>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Nomor Kontrak:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">CA-17001</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Tanggal:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">17-01-2016</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Judul Kontrak:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Pengadaan Sistem Informasi Kepegawaian</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3" for="noKontrak">Jenis Kontrak:</label>
                    <div class="col-md-9">
                      <p class="form-control-static">Gabungan LS & HS</p>
                    </div>
                  </div>

                </div>
                <!-- /left column -->

                <!-- right column -->
                <div class="col-md-6">
                  <div class="box box-danger">
                      <div class="box-body">
                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                          Untuk melakukan proses Abort, Anda wajib menyertakan Alasan Abort dan Dokumen Pendukung Proses Abort pada kolom berikut.    
                        </p>
                        <div class="col-md-12">

                          <div class="form-group">
                            <label>Alasan Abort :</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..." style="resize:none" required></textarea>
                          </div>
                          <div class="form-group">
                            <label>Dokumen Pendukung Proses Abort:</label>
                            <input type="file" id="inputFile" multiple required>
                          </div>
                          
                        </div>
                      </div>
                  </div>

                </div>
                <!-- /right column -->
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
              <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#abortModal">
              <span class="glyphicon glyphicon-remove"></span> Abort
              </button>

              <div id="abortModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Are You Sure to Abort It?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Proses ini akan menghapus <strong><span class="text-red">SELURUH DATA</span></strong> yang berkaitan dengan Dokumen ini.</p>
                      <p>Proses ini akan mengirimkan notifikasi kepada :</p>
                      <li>Contract Organisator</li>
                      <li>Contract Engineer</li>
                      <li>Lead Contract Engineer</li>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
                      <a href="p17CE.php"><button type="submit" class="btn btn-danger">Yes, Abort Now!</button></a>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>

              <a href="p17iCE.php">
                <button type="button" class="btn btn-default pull-right" style="margin-right: 5px;">
                  Back
                </button>
              </a>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
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
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

<script>
  //Date picker
  $('#datepicker').datepicker({
    autoclose: true
  });
</script>


</body>
</html>
