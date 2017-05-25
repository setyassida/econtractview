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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="../../bootstrap/css/custom.css"

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

    <?php include("p3-header.php");?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pre-Bid Meeting
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Pre-Bid Meeting</a></li>
          <li><a href="#">0001/BB41/2017-041</a></li>
          <li class="active">Upload</li>
        </ol>
      </section>

      <!-- iNote-->

      

      <!-- Main content -->

      <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box">
          <form class="form-horizontal">
            <div class="box-header with-border">
              <h3 class="box-title">Informasi Kontrak</h3>

              <div class="col-md-3 pull-right text-right">
                <small>Lihat dokumen yang telah ter-upload <a href="p3-detail.php">disini</a></small>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <div class="row">
                <!-- left column -->
                <div class="col-md-6">

                  <div class="box">
                    <div class="box-body">
                      <div class="col-md-12">
                        <div class="form-group no-margin">
                          <label class="control-label col-md-6" for="noKontrak">Nomor Risalah Pre-Bid Meeting:</label>
                          <div class="col-md-6">
                            <p class="form-control-static">0001/BB41/2017-532</p>
                          </div>
                        </div>
                        <div class="form-group no-margin">
                          <label class="control-label col-md-6" for="noKontrak">Nomor Kontrak:</label>
                          <div class="col-md-6">
                            <p class="form-control-static">CA-17001</p>
                          </div>
                        </div>
                        <div class="form-group no-margin">
                          <label class="control-label col-md-6" for="noKontrak">Tanggal:</label>
                          <div class="col-md-6">
                            <p class="form-control-static">17-Jan-2016</p>
                          </div>
                        </div>
                        <div class="form-group no-margin">
                          <label class="control-label col-md-6" for="noKontrak">Judul Kontrak:</label>
                          <div class="col-md-6">
                            <p class="form-control-static">Pengadaan Sistem Informasi Kepegawaian</p>
                          </div>
                        </div>
                        <div class="form-group no-margin">
                          <label class="control-label col-md-6" for="noKontrak">Jenis Kontrak:</label>
                          <div class="col-md-6">
                            <p class="form-control-static">Lump Sum (LS), Harga Satuan (HS), Gabungan LS & HS</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /left column -->

                <!-- right column -->
                <div class="col-md-6">
                  <div class="box ">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover">
                            <thead>
                              <tr>
                                <th>Judul Dokumen</th>
                                <th>Upload</th>
                                <th>Uploaded Files</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Risalah Pre-Bid Meeting</td>
                                <td><div class="text-center"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                                <td><a data-toggle="modal" data-target="#filesModal-1" style="cursor:pointer">1 Files</a></td>
                                
                                
                              </tr>
                              <tr>
                                <td>Breakdown Penawaran</td>
                                <td><div class="text-center"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                                <td><a data-toggle="modal" data-target="#filesModal-2" style="cursor:pointer">1 Files</a></td>
                              </tr>
                              <tr>
                                <td>Dokumen Pendukung</td>
                                <td><div class="text-center"><button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                                <td><a data-toggle="modal" data-target="#filesModal-3" style="cursor:pointer">3 Files</a></td>
                                
                              </tr>
                            </tbody>
                          </table>
                          <div id="uploadModal" class="modal">
                            <form class="form-horizontal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-green">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Upload Dokumen</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                      Maksimum ukuran tiap file yang diupload adalah <span class="text-red">50MB</span>!    
                                    </p>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Judul :</label>
                                      <div class="col-md-8">
                                        <input type="text" class="form-control input-sm">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Dokumen :</label>
                                      <div class="col-md-8">
                                        <input type="file" class="form-control input-sm">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Keterangan :</label>
                                      <div class="col-md-8">
                                        <textarea class="form-control input-sm" rows="4" style="resize:none"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-success">Upload</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div id="filesModal-1" class="modal">
                            <form class="form-horizontal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-green">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Risalah Pre-Bid Meeting</h4>
                                  </div>
                                  <div class="modal-body">

                                    <table class="table table-hover table-bordered table-condensed">
                                      <thead>
                                        <tr>
                                          <td>No.</td>
                                          <td>Judul Dokumen</td>
                                          <td>Keterangan Dokumen</td>
                                          <td>Download</td>
                                          <td>Action</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1.</td>
                                          <td>Judul Dokumen Pertama</td>
                                          <td>Dokumen tambahan pertama</td>
                                          <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                                          <td><div class="text-center"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></div></td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Kembali</button>  
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>

                          <div id="filesModal-2" class="modal">
                            <form class="form-horizontal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-green">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Breakdown Penawaran</h4>
                                  </div>
                                  <div class="modal-body">

                                    <table class="table table-hover table-bordered table-condensed">
                                      <thead>
                                        <tr>
                                          <td>No.</td>
                                          <td>Judul Dokumen</td>
                                          <td>Keterangan Dokumen</td>
                                          <td>Download</td>
                                          <td>Action</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1.</td>
                                          <td>Judul Dokumen Pertama</td>
                                          <td>Dokumen tambahan pertama</td>
                                          <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                                          <td><div class="text-center"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></div></td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Kembali</button>  
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div id="filesModal-3" class="modal">
                            <form class="form-horizontal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header bg-green">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Dokumen Pendukung</h4>
                                  </div>
                                  <div class="modal-body">

                                    <table class="table table-hover table-bordered table-condensed">
                                      <thead>
                                        <tr>
                                          <td>No.</td>
                                          <td>Judul Dokumen</td>
                                          <td>Keterangan Dokumen</td>
                                          <td>Download</td>
                                          <td>Action</td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1.</td>
                                          <td>Judul Dokumen Pertama</td>
                                          <td>Dokumen tambahan pertama</td>
                                          <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                                          <td><div class="text-center"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></div></td>
                                        </tr>
                                        <tr>
                                          <td>2.</td>
                                          <td>Judul Dokumen Kedua</td>
                                          <td>Dokumen tambahan kedua</td>
                                          <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                                          <td><div class="text-center"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></div></td>
                                        </tr>
                                        <tr>
                                          <td>3.</td>
                                          <td>Judul Dokumen Ketiga</td>
                                          <td>Dokumen tambahan ketiga</td>
                                          <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                                          <td><div class="text-center"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></div></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Kembali</button>  
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>

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
              
              <button type="button" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#submitModal">
              <span class="glyphicon glyphicon-cloud-upload"></span> Submit
              </button>

              

              <button type="button" class="btn btn-warning btn-sm pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#holdModal"><span class="glyphicon glyphicon-pause"></span> Hold</button>
              <button type="button" class="btn btn-info btn-sm pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#resumeModal"><span class="glyphicon glyphicon-play"></span> Resume</button>
              <!-- <a href="p3.php"><button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;"> Back</button></a> -->
              <a href="#"><button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;"><span class="glyphicon glyphicon-download-alt"></span> Download Template</button></a>

              <div id="submitModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-green">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Anda Yakin?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Pastikan file pendukung yang Anda upload telah sesuai. Anda <span class="text-red">TIDAK DAPAT</span> merubah <i>Dokumen Pre-Bid Meeting</i> dan <i>Breakdown Anggaran</i> setelah melakukan proses ini.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Tidak</button>
                      <button type="submit" class="btn btn-sm btn-success">Ya</button>
                    </div>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>

              <div id="resumeModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="form-horizontal">
                      <div class="modal-header bg-aqua">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda Yakin?</h4>
                      </div>
                      <div class="modal-body">
                        <p class="well well-sm no-shadow">Anda perlu melakukan <i>exteng opening date</i> untuk melakukan resume Pre-Bid Meeting.</p>
                        <div class="form-group">
                          <label class="control-label col-md-4">Extend Opening Date: </label>
                          <div class="col-md-6">
                            <div class="input-group date">
                              <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control" id="datepicker" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-sm btn-info">Ya</button>
                      </div>
                    </form>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>

              <div id="holdModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="form-horizontal">
                      <div class="modal-header bg-yellow">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda Yakin?</h4>
                      </div>
                      <div class="modal-body">
                        
                          <p class="well well-sm o-shadow">Anda wajib menyertakan alasan Hold pada kolom berikut.</p>
                          <div class="form-group">
                            <label class="control-label col-md-3">Alasan Hold :</label>
                            <div class="col-md-9">
                              <textarea rows="3" class="form-control" style="resize:none" required></textarea>
                            </div>
                          </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-sm btn-warning">Ya</button>
                      </div>
                    </form>
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

  //jquery untuk menghilangkan addded dokumen
  $("#btnRemove").click(function(){
    
  });

  

  //jQuery for add dokumen tambahan
  $("#btnAdd").click(function(){
    //get all value of add form
    var judulDokumen = $("#inputJudulDokumen").val();
    var $inputFile = $("#inputFile");
    var keterangan = $("#inputKeterangan").val();

    //clone input file
    var $cloneFile = $inputFile.clone();
    $cloneFile.attr({id:"1", class:""});

    //create object tr
    var $tr = $("<tr />");
    var $td1 = $("<td />");
    $td1.html(judulDokumen);
    
    var $td2 = $("<td />");
    $td2.append($cloneFile);
    
    var $td3 = $("<td />");
    $td3.append("<div class='text-center'><button type='button' class='btn btn-xs btn-default btnRemove'><span class='glyphicon glyphicon-remove'></span></button></div>");
    
    var $td4 = $("<td />");
    $td4.html(keterangan);
    $td4.attr({style:"display:none"});


    $tr.append($td1);
    $tr.append($td2);
    $tr.append($td3);
    $tr.append($td4);

    //menambahnkan objeck
    $("#dataTable tr:last").after($tr);

    //clear add form
    $("#inputJudulDokumen").val("");

    var $e = $("#inputFile");

    $e.wrap('<form>').closest('form').get(0).reset();
    $e.unwrap();

    $("#inputKeterangan").val("");

    //register event
    $(".btnRemove").click(function(){
      $(this).closest("tr").remove();
    });
  });


  
</script>


</body>
</html>
