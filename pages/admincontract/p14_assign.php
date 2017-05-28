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
          Assign LCE & SPVE
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li ><a href="p2a.php">Variation Order</a></li>
          <li class="active"><a href="p2b.php">Create Variation Order</a></li>
        </ol>
      </section>


      <section class="content">

        <div class="row">

          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Assign LCE & SPVE</h3>
              </div>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pickedByCE1">Pilih LCE</label>
                    <div class="input-group">
                      <input type="text" class="form-control input-sm" id="pickedByCE1" placeholder="Lookup...">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="pickedByCE1">Pilih SPVE</label>
                    <div class="input-group">
                      <input type="text" class="form-control input-sm" id="pickedByCE1" placeholder="Lookup...">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>


              </div>
              <div class="box-footer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="pull-right" style="margin-left: 1rem">
                      <a href="p1_approver.php"><button class="btn btn-success pull-right btn-sm">Assign</button></a>
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

    <div id="amandemenModal" class="modal ">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-green">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Anda yakin untuk Amandemen Kontrak?</h4>
            </div>
            <div class="modal-body">
              <p>Proses ini akan melakukan amandemen kontrak pada bagian ruang lingkup, <b>dokumen ruang lingkup akan diperbarui.</b></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn pull-left" data-dismiss="modal">Close</button>
              <a href="p14_assign"><button type="submit" class="btn btn-success">Ya, saya setuju untuk amandemen kontrak </button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      </div>


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
