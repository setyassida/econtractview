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

    <?php include "p14header.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create Variation Order
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li ><a href="p2a.php">Variation Order</a></li>
          <li class="active"><a href="p2b.php">Create Variation Order</a></li>
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
                      <label for="pickedByCE1">No. Kontrak</label>
                      <div class="input-group">
                        <input type="text" class="form-control input-sm" id="pickedByCE1" placeholder="Pilih Contract Order">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE2">Judul Pekerjaan</label>
                      <textarea type="text" class="form-control input-sm" name="name" rows="3" cols="45" placeholder="" disabled>REGULAR INSPECTION OF LIFTING GEARS</textarea>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE2">Tanggal Mulai</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE2" placeholder="17-08-2016" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE2">Tanggal Selesai</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE2" placeholder="17-04-2017" disabled>
                    </div>
                  </div>

                  <div class="col-md-4" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE3">Kode Pembebanan Biaya</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE3" placeholder="#" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">No. Perubahan Amandemen Kontrak</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="CA-17001#02" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">Tanggal Pembuatan VO</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="10-11-2016" disabled>
                    </div>
                  </div>

                  <div class="col-md-4" style="margin-left: 1rem;margin-right: 1rem">
                    <div class="form-group">
                      <label for="pickedByCE4">Kontraktor</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="Supplier A" disabled>
                    </div>
                    <div class="form-group">
                      <label for="pickedByCE4">Jenis Kontrak</label>
                      <input type="text" class="form-control input-sm" id="pickedByCE4" placeholder="Lump Sum (LS), Harga Satuan (HS), Gabungan LS & HS" disabled>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer ">
                  <a href="p14b_amandemenRL.php" class="btn btn-success pull-right btn-sm">Amandemen Kontrak</a>
                </div>

              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->

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
