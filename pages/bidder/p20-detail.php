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

  <?php include("p20-header.php");?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reporting
        <small>CSMS dan Tenaga Kerja</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="p20.php">CSMS dan Tenaga Kerja</a></li>
        <li><a href="p20-view.php">CA-17001</a></li>
        <li>1</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box">
        <form class="form-horizontal">
        <div class="box-header with-border">
          <h4>Data Pekerja</h4>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          
            <div class="col-md-12">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Nama Pekerja:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control input-sm" >
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label col-md-4">Nomor Badge:</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control input-sm">
                    </div>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Jam Kerja Riil:</label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="number" class="form-control input-sm">
                      <div class="input-group-addon">
                        Jam
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Tipe Pekerja:</label>
                  <div class="col-md-8">
                    <select class="form-control input-sm">
                      <option>Overhead</option>
                      <option>Pekerja</option>
                    </select>
                  </div>
                </div> 
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Jabatan:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control input-sm">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Jam Kerja Lembur:</label>
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="number" class="form-control input-sm">
                      <div class="input-group-addon">
                        Jam
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Jenis Kelamin:</label>
                  <div class="col-md-8">
                    <select class="form-control input-sm">
                      <option>L</option>
                      <option>P</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Departemen atau Section:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control input-sm">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Jam Kerja Hilang:</label>
                  <div class="col-md-4">
                    <input type="number" class="form-control input-sm" placeholder="izin">
                    
                  </div>
                  <div class="col-md-4">
                    <input type="number" class="form-control input-sm" placeholder="sakit">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Tempat Lahir:</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control input-sm" >
                  </div>
                </div> 
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Golongan:</label>
                   <div class="col-md-4">
                    <select class="form-control input-sm">
                      <option>Daily</option>
                      <option>Shift</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="number" class="form-control input-sm">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4"></label>
                  <div class="col-md-4">
                    <input type="number" class="form-control input-sm" placeholder="cuti">
                  </div>
                  <div class="col-md-4">
                    <input type="number" class="form-control input-sm" placeholder="dinas">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Tanggal Lahir:</label>
                  <div class="col-md-8">
                    <div class="input-group date">

                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                      
                        <input type="text" class="form-control input-sm" id="datepicker">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Durasi Kerja :</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control input-sm" id="datepicker2" placeholder="start..">
                    
                  </div>

                  <div class="col-md-4">
                    <input type="text" class="form-control input-sm" id="datepicker3" placeholder="end..">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Masa Kerja :</label>
                  <div class="col-md-4">
                    <select class="form-control input-sm">
                      <option>Jan</option>
                      <option>Feb</option>
                      <option>Mar</option>
                      <option>Apr</option>
                      <option>Mei</option>
                      <option>Jun</option>
                      <option>Jul</option>
                      <option>Agu</option>
                      <option>Sep</option>
                      <option>Okt</option>
                      <option>Nov</option>
                      <option>Des</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <select class="form-control input-sm">
                      <option>Jan</option>
                      <option>Feb</option>
                      <option>Mar</option>
                      <option>Apr</option>
                      <option>Mei</option>
                      <option>Jun</option>
                      <option>Jul</option>
                      <option>Agu</option>
                      <option>Sep</option>
                      <option>Okt</option>
                      <option>Nov</option>
                      <option>Des</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4">
                
              </div>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="control-label col-md-4">Ketarangan :</label>
                  <div class="col-md-8">
                    <textarea rows="3" class="form-control input-sm" style="resize:none"></textarea>
                  </div>
                </div>
              </div>
            </div>





          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn btn-default btn-sm pull-right" data-toggle="modal" data-target="#saveModal"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
          <button type="button" class="btn btn-default btn-sm" style="margin-right:5px" data-toggle="modal" data-target="#backModal"> Back</button>

          <div id="backModal" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-gray">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Are You Sure to Back?</h4>
                </div>
                <div class="modal-body">
                  Data yang belum disimpan akan hilang
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                  <a href="p20-view-bulan.php"><button type="button" class="btn btn-default btn-sm">Yes</button></a>
                </div>
              </div>
                <!-- /.modal-content -->
            </div>
          </div>
        </div>

        <div id="saveModal" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-gray">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Are You Sure to Save?</h4>
                </div>
                <div class="modal-body">
                  Data lama akan diperbarui dengan data yang anda masukan
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-default btn-sm">Yes</button>
                </div>
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
  $(document).ready(function(){
    $('[data-toggle="hold"]').tooltip();
    $('[data-toggle="resume"]').tooltip();
    $('[data-toggle="abort"]').tooltip();
      //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('#datepicker2').datepicker({
      autoclose: true
    });

    $('#datepicker3').datepicker({
      autoclose: true
    });

    $(function () {
      $("#dataTable").DataTable();
    });

  });
</script>



</body>
</html>
