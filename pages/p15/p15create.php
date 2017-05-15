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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
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
          Bidder List VO
          <small>Buat Bidder List</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li ><a href="p15.php">Bidder List VO</a></li>
          <li class="active"><a href="p15create.php">Create Bidder List VO</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">


        <div class="row">
          <form class="form-horizontal">
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Contract Order Reference</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE1">Contract Order</label>
                      <div class="input-group">
                        <input type="text" class="form-control input-sm" id="pickedByCE1" placeholder="Pilih Contract Order">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE2">Judul Pekerjaan</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE2" placeholder="REGULAR INSPECTION OF LIFTING GEARS" disabled>
                    </div>
                  </div>
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE3">Durasi</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE3" placeholder="2 Bulan" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">Jenis Jasa</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="Pemborongan Pekerjaan" disabled>
                    </div>
                  </div>
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE4">Kualifikasi Syarat Peserta Pengadaan</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="M (Rp. 500 Juta <= NK <= Rp. 10 M)" disabled>
                    </div>
                  </div>                      
                  
                </div>
                <!-- /.box-body -->

              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->

            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Bidder List Form</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                  <!-- kol 1 -->
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="generatedBySystem1">Nomor Bidder List</label>
                      <input type="text" class="form-control input-sm" id="generatedBySystem1" placeholder="BL-17001" disabled>
                    </div>
                    <div class="form-group">
                      <label for="generatedBySystem2">Tanggal Dibuat</label>
                      <input type="text" class="form-control input-sm" id="generatedBySystem2" placeholder="17-Feb-2017" disabled>
                    </div>
                    <!-- <div class="form-group">
                      <label for="generatedBySystem3">Waktu</label>
                      <input type="text" class="form-control input-sm" id="generatedBySystem3" placeholder="13:30" disabled>
                    </div> -->
                    <!-- Date -->
                    <div class="form-group">
                      <label>Publish Date Bidder List</label>
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right input-sm" id="datepicker">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- kol 1 end -->

                  <!-- kol 2 -->
                  <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                   <div class="form-group">
                     <label for="inputByCE1">Klasifikasi</label>
                     <input type="text" class="form-control input-sm" id="inputByCE1" placeholder="M-Z">
                   </div>

                   <div class="form-group">
                    <label>Kualifikasi</label>
                    <div class="col-md-12">
                      <label class="radio-inline" >
                        <input type="radio" name="optradio1" checked>Kecil
                      </label>
                      <label class="radio-inline" >
                        <input type="radio" name="optradio1">Non-Kecil
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tingkat Risiko</label>
                    <div class="col-md-12">
                      <label class="radio-inline" >
                        <input type="radio" name="optradio2" checked>Rendah
                      </label>
                      <label class="radio-inline" >
                        <input type="radio" name="optradio2">Sedang
                      </label>
                      <label class="radio-inline" >
                        <input type="radio" name="optradio2">Tinggi
                      </label>
                    </div>
                  </div>
                </div>
                <!-- kol 2 end -->

                <div class="col-md-3" style="margin-left: 1rem;margin-right: 1rem">
                  <label>Kuota Area</label>
                  <table class="table table-condensed table-bordered table-hover">
                    <tbody>
                      <tr>
                        <td>Bontang</td>
                        <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                      </tr>
                      <tr>
                        <td>Kalimantan Timur</td>
                        <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                      </tr>
                      <tr>
                        <td>Domestik</td>
                        <td><input type="number" min="0" class="form-control input-sm" id="pickedByCE4" placeholder="0" ></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer ">
              <!-- <button type="submit" class="btn btn-info pull-right">Generate Bidder List</button> -->
              <a href="p15cdraft.php" class="btn btn-success pull-right btn-sm">Generate Bidder List</a>
            </div>
            <!-- /.box-footer -->
 
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->

      </form>
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
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
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
  $(function () {
    $("#example1").DataTable();
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
</script>
</body>
</html>
