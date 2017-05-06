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

  <?php include "p2header.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bidder List
        <small>Daftar Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li class="active"><a href="p2a.php">Bidder List</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

        <!-- box bidder list -->
          <div class="box box-danger">
            <div class="box-header">
              <!-- <h3 class="box-title">Result</h3> -->
              <a href="p2b.php"><button class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Buat Bidder List Baru</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body "> 
              <table id="example1" class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>No. Bidder List</th>
                  <th>No. Contract</th>
                  <th>Judul Pekerjaan</th>
                  <th>Status</th>
                  <th>Tanggal Dibuat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="p2cdraft.php">BL-17001</a></td>
                  <td><a href="#">CB-17001</a></td>
                  <td>REGULAR INSPECTION OF LIFTING GEARS</td>
                  <td class="text-center"><span class="label label-primary">Draft</span></td>
                  <td>20-Jan-2017</td>
                </tr>
                <tr>
                  <td><a href="p2capproved.php">BL-17002</a></td>
                  <td><a href="#">CC-17001</a></td>
                  <td>TR-G DEAD LEGS UNDER INSULATION LINE SURVEY</td>
                  <td class="text-center"><span class="label label-info">Approved</span></td>
                  <td>21-Feb-2017</td>
                </tr>
                <tr>
                  <td><a href="p2caborted.php">BL-17003</a></td>
                  <td><a href="#">CA-17003</a></td>
                  <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                  <td class="text-center"><span class="label label-danger">Aborted</span></td>
                  <td>22-Feb-2017</td>
                </tr>
                <tr>
                  <td><a href="p2chold.php">BL-17004</a></td>
                  <td><a href="#">CA-17002</a></td>
                  <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                  <td class="text-center"><span class="label label-warning">Hold</span></td>
                  <td>23-Apr-2017</td>
                </tr>
                <tr>
                  <td><a href="p2cpublished.php">BL-17005</a></td>
                  <td><a href="#">CA-17001</a></td>
                  <td>STEAM CONDENSATE LINE</td>
                  <td class="text-center"><span class="label label-success">Published</span></td>
                  <td>24-Apr-2017</td>
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
                <li><span class="label label-primary">Draft</span> : Bidder list di-draft</li>
                <li><span class="label label-warning">Hold</span> : Bidder list di-hold</li>
                <li><span class="label label-danger">Aborted</span> : Contract Order di-abort</li>
                <li><span class="label label-info">Approved</span> : Bidder list di-approve</li>
                <li><span class="label label-success">Published</span> : Bidder list di-publish</li>
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
