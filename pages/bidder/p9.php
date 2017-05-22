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
    <?php include "p9header.php" ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Sanggah LOA
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Contract Order</a></li>
          <li class="active">Letter of Award</li>
          <li>CA-17001</li>
          <li>Sanggah</li>
        </ol>
      </section>

      <!-- iNote-->



      <!-- Main content -->

      <section class="content">
        <div class="col-md-6">
          <div class="box box-success">
            <div class="row">
              <div class="col-md-12">
                <div class="box-header with-border">
                  <h3 class="box-title">Informasi Kontrak</h3>
                </div>
                <div class="box-body">

                  <dl>
                    <dt>Contract Order</dt>
                    <dd>CA-17001</dd> <br>
                    <dt>Judul Pekerjaan</dt>
                    <dd>REGULAR INSPECTION OF LIFTING GEARS</dd> <br>
                    <dt>Durasi</dt>
                    <dd>2 Bulan</dd> <br>
                    <dt>Jenis Jasa</dt>
                    <dd>Pemborongan Pekerjaan</dd> <br>
                    <dt>Tanggal Terbit LOA</dt>
                    <dd>Rabu, 17-04-2017</dd> <br>
                    <dt>Masa Waktu Sanggah</dt>
                    <dd>3 hari lagi (sampai dengan Mingg, 21 April 2017)</dd> <br>
                    <dt>Dokumem LoA</dt>
                    <dd><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></dd> <br>
                  </dl>


                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="box box-success">
            <div class="row">
              <div class="col-md-12">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Sanggah</h3>
                </div>
                <div class="box-body">
                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Maksimum ukuran tiap file yang diupload adalah <span class="text-red">50MB</span>!
                  </p>

                  <table id="dataTable" class="table table-bordered table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>Judul Dokumen</th>
                        <th style="width:250px">Upload File</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dokumen Sanggahan</td>
                        <td><input type="file" id="" accept=".pdf"></td>
                      </tr>
                      <tr>
                        <td>Bukti Transfer</td>
                        <td><input type="file" id="" accept=".pdf"></td>
                      </tr>
                    </tbody>
                  </table>

                  <div style="height:20px">
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Alasan Sanggah :</label>
                    <div class="col-md-9">
                      <textarea id="inputKeterangan" rows="5" placeholder="Type Here.." class="form-control" style="resize:none"></textarea>
                    </div>
                  </div>
                </div>
                <button style="margin-right:3em; margin-bottom:2em; margin-top:1em;" type="button" class="btn btn-success btn-md pull-right" id="btnAdd" data-toggle="modal" data-target="#sanggahModal">Sanggah</button>
              </div>

            </div>
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

    <div id="sanggahModal" class="modal">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span aria-hidden="true">&times;</span></button>
  						<h4 class="modal-title">Are you sure?</h4>
  					</div>

  					<div class="modal-footer">
  						<button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
  						<button type="submit" class="btn btn-success">Yes</button>
  					</div>
  				</div>
  				<!-- /.modal-content -->
  			</div>
  		</div>

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
