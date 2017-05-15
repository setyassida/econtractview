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

  <?php include "p15bheader.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penawaran VO
        <small>Penawaran VO Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li class="active"><a href="p15b.php">Penawaran VO</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

        <!-- box bidder list -->
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Tawaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
              <table id="example1" class="table table-bordered table-striped table-condensed table-hover">
                <thead>
                  <tr>
                    <th style="width:100px">Nomor Kontrak</th>
                    <th >Judul Pekerjaan</th>
                    <th style="width:100px">Status</th>
                    <th style="width:100px"></th>                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CA-17001</td>
                    <td>STEAM CONDENSATE LINE</td>
                    <td class="text-center"><span class="label label-warning">Await Quote</span></td>
                    <td class="text-center"><a href="p15bviewawaitquote.php"><button class="btn btn-xs btn-default">Lihat Detail</button></a></td>
                  </tr>
                  <tr>
                    <td>CA-17002</td>
                    <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                    <td class="text-center"><span class="label label-success">Quote</span></td>
                    <td class="text-center"><a href="p15bviewquote.php"><button class="btn btn-xs btn-default">Lihat Detail</button></a></td>
                  </tr>
                  <tr>
                    <td>CA-17003</td>
                    <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                    <td class="text-center"><span class="label label-danger">Not Quote</span></td>
                    <td class="text-center"><a href="p15bviewnotquote.php"><button class="btn btn-xs btn-default">Lihat Detail</button></a></td>
                  </tr>

                </tbody>
                <tfoot>
                <!-- <tr>
                  <th>Bidder List No</th>
                  <th>Contract No</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr> -->
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h4>Keterangan status</h4>
              <ul>
                <li><span class="label label-warning">Await Quote</span> : Bidder belum menjawab penawaran</li>
                <li><span class="label label-danger">Not Quote</span> : Bidder tidak ikut menawar</li>
                <li><span class="label label-success">Quote</span> : Bidder ikut menawar</li>
              </ul>
            </div>
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
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>
