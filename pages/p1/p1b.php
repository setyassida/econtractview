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
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
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

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>E</b>-Ct</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>E-Contract</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Ibu Nia</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Vice President
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Process Menu</li>

          <!-- Contract Order -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Contract Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- BIDDER LIST -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Bidder List</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Pre Bid Meeting -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Pre-Bid Meeting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- HPS -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Harga Perkiraan Sendiri</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Administrasi -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Administrasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Teknis -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Teknis</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Komersial -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Evaluasi Komersial</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- LoA -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Letter of Agreement</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Kick of Meeting -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kick_of_Meeting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- LoI -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Letter of Intent</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Evaluasi Administrasi -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Kontrak</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- CoC -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Certificate of Completion</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- VO -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Variation Order</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>

          <!-- Report -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pembuatan Kontrak Baru
          <small>Metode Pemilihan Langsung</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
          <li><a href="p2a.php">Contract Order</a></li>
          <li class="active"><a href="p2cdraft.php">Pembuatan Kontrak Baru</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-danger">
          <div class="box-body">
            <dl class="dl-horizontal">
              <div class="col-md-6">
                <dt>Nomor PR Service :</dt>
                <dd>CO-17001</dd>
              </div>
              <div class="col-md-6">
                <dt>Tanggal :</dt>
                <dd>24-04-2017</dd>
              </div>
            </dl>
          </div>
          <!-- /.box-body -->
        </div>
        
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Detail</a></li>
            <li><a href="#tab_2" data-toggle="tab">Lampiran</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <form class="form-horizontal">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Judul Pekerjaan</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="JUDUL PEKERJAAN MAKSIMAL 255 KARAKTER DAN MENGGUNAKAN HURUF KAPITAL"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Mulai:</label>

                    <div class="col-sm-4">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right input-sm" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Durasi</label>

                    <div class="col-sm-4">
                      <input type="number" class="form-control input-sm" id="inputEmail3" placeholder="Lama Pengerjaan (Dalam Hari/Bulan/Tahun)">
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control input-sm">
                        <option>Bulan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Selesai :</label>
                    <label for="inputEmail3" class="col-sm-10 form-control-static ">Minggu, 23 April 2017</label>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Kontrak Rutin</label>
                    <div class="col-sm-8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                          Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Referensi Nomor Kontrak</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Cari data">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Pembebanan Biaya</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Cari data">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Perkiraan Nilai Kontrak:</label>

                    <div class="col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios1" value="option1" checked>&#8804 Rp. 5M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option2">
                          Rp 5 M &#8804 Rp 10 M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option2">
                          Rp 10 M &#8804 Rp 20 M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option2">
                          Rp 20 M &#8804 Rp 30 M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option2">
                          > Rp 30 M
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Simpan</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="box-body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Keterangan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lingkup Kerja</td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cost Commitment <a href="#"><span class="label label-info">Download Template</span></a></td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Justifikasi PR Service</td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Form Evaltek</td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>SHEQ Notice <a href="#"><span class="label label-info">Download Template</span></a></td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Penilaian Resiko <a href="#"><span class="label label-info">Download Template</span></a></td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Request For Proposal </td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Daftar Material </td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Gambar </td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Spesifikasi Teknis </td>
                      <td><input type="file" id="exampleInputFile"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>

      </section>
      <!-- /.content -->


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
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
    </script>
  </body>
  </html>
