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

    <?php include "p1header.php" ?>

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
        <div class="box box-default">
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
                  <a href="p1_approver.php"><button type="button" class="btn btn-default pull-right"><span class="glyphicon glyphicon-floppy-disk"></span>Save </button></a>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="box-body">
                <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Lampiran</th>
                      <th class="text-center" style="width:170px;">Download Template</th>
                      <th class="text-center" style="width:100px;">Refer Form</th>
                      <th style="width:100px;">Upload Lampiran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-red">Cost Commitment*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#costModal"></span> Isi Form</button></td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">Evaluasi Kinerja Kontraktor*</td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">Form Evaltek*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">Justifikasi PR Service*</td>
                      <td class="text-center">-</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> Isi Form</button></td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">Lingkup Kerja*</td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">Penilaian Resiko* </td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#resikoModal"></span> Isi Form</button></td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td class="text-red">SHEQ Notice*</td>
                      <td class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>Daftar Material </td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>Gambar </td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>Request For Proposal (RFP) </td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                    <tr>
                      <td>Spesifikasi Teknis </td>
                      <td class="text-center">-</td>
                      <td class="text-center">-</td>
                      <td><input class="input-sm" type="file" id="exampleInputFile"></td>
                    </tr>
                  </tbody>
                </table>
                <br><br>
                <p>Cetatan :</p>
                <p class="text-red">* Mandatory</p>
              </div>
              <div class="box-footer">
                <a href="p1_approver.php"><button type="button" class="btn btn-default pull-right"><span class="glyphicon glyphicon-floppy-disk"></span>Save </button></a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>

      </section>
      <!-- /.content -->


      <footer class="main-footer" style="margin-left:0;">
        <strong>Copyright &copy; 2017 <a href="http://www.badaklng.co.id"> PT Badak NGL</a>.</strong> All rights
        reserved.
      </footer>

      <div id="costModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-blue">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Form : Cost Commitment</h4>
            </div>
            <div class="modal-body">
              <p>Proses ini akan memperpanjang Opening Date Contract Order yang berkaitan dengan Dokumen ini.</p>
              <div class="col-md-12">

                  <div class="col-md-6" style="margin-bottom: 0.5rem">
                    <div class="form-group">
                      <div class="input-group date">
                        <input type="text" class="form-control input-sm" id="datepicker1" placeholder="Bid Opening Date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-bottom: 0.5rem">
                    <div class="form-group bootstrap-timepicker">
                      <div class="input-group">
                        <input type="text" class="form-control timepicker input-sm">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                <!-- /.bid closing / opening date -->
              </div>
              <p>Proses ini akan mengirimkan notifikasi kepada semua bidder</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Extend Opening Date</button>
            </div>
          </div>
            <!-- /.modal-content -->
        </div>
      </div>
      <!-- /.modal -->

      <div id="resikoModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-blue">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Form : Penilaian Resiko</h4>
            </div>
            <div class="modal-body">
              <div class="col-md-12">

                  <div class="col-md-12" style="margin-bottom: 0.5rem">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <div class="input-group date">
                        <input type="text" class="form-control input-sm" id="datepicker1" placeholder="Bid Opening Date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Lama Pekerjaan (Dalam Bulan)</label>
                      <input type="number" class="form-control input-sm" id="exampleInputPassword1" placeholder="4">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Pekerjaan</label>
                      <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nomor Kontrak</label>
                      <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Lokasi Pekerjaan</label>
                      <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Kategori Resiko</label>
                      <select class="form-control">
                        <option>R (Rendah)</option>
                        <option>S (Sedang)</option>
                        <option>T (Tinggi)</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" rows="4" placeholder="Enter ..."></textarea>
                    </div>
                  </div>

                <!-- /.bid closing / opening date -->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit Form</button>
            </div>
          </div>
            <!-- /.modal-content -->
        </div>
      </div>
      <!-- /.modal -->

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
