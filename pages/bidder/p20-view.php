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
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="../../resources/css/custom-style.css">

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
        <li class="active">CA-17001</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box">
        <form class="form-horizontal">
        <div class="box-header with-border">
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h4>Informasi Umum</h4></div>
              <div class="box-body">
                
                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Nama Perusahaan :</label>
                  <div class="form-control-static col-md-10">
                    PT MAJU JAYA
                  </div>
                </div>
                
                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Nomor Kontrak :</label>
                  <div class="form-control-static col-md-10">
                    CA-17001
                  </div>
                </div>

                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Judul Pekerjaan :</label>
                  <div class="form-control-static col-md-10">
                    REGULAR INSPECTION OF LIFTING GEARSR
                  </div>
                </div>

                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Durasi  :</label>
                  <div class="form-control-static col-md-10">
                    2 Bulan
                  </div>
                </div>


                <div class="form-group no-margin">
                  <label class="control-label col-md-2">Departemen/Section :</label>
                  <div class="form-control-static col-md-10">
                    Departemen A
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>

          

          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h4>Form Laporan Tenaga Kerja</h4>
              </div>
              <div class="box-body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover">
                  <thead>
                  <tr>
                    <th style="width:20px">No.</th>
                    <th>Nama Pekerja</th>
                    <th>Tipe Pekerja</th>
                    <th style="width:30px">Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Lihat Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Jack Sparrow</td>
                    <td>Overhead</td>
                    <td>L</td>
                    <td>Wonogiri</td>
                    <td>01-01-1990</td>
                    <td>
                      <div class="text-center"><a href="p20-detail.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Katniss Everdeen</td>
                    <td>Overhead</td>
                    <td>P</td>
                    <td>Jakarta</td>
                    <td>01-01-1990</td>
                    <td>
                      <div class="text-center"><a href="p20-detail.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Peeta Mellark</td>
                    <td>Pekerja</td>
                    <td>L</td>
                    <td>Blitar</td>
                    <td>01-01-1990</td>
                    <td>
                      <div class="text-center"><a href="p20-detail.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Sarah Connor</td>
                    <td>Pekerja</td>
                    <td>P</td>
                    <td>Bogor</td>
                    <td>01-01-1990</td>
                    <td>
                      <div class="text-center"><a href="p20-detail.php"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Lihat Detail</button></a></div>
                    </td>
                  </tr>
                  
                  <tbody>
                </table>

                
                <a href="p20-detail.php">
                  <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Pekerja</button>
                </a>
              </div>
              
            </div>
          </div>

          <div class="col-md-12">
            <div class="box">
              <form class="form-horizontal">
                <div class="box-header with-border">
                  <h4>Laporan Lainnya</h4>
                </div>
                <div class="box-body">
                  <table class="table table-bordered table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Laporan</th>
                        <th>Status</th>
                        <th style="width:100px">Download Template</th>
                        <th style="width:150px">Upload Hasil Scan</th>
                        <th style="width:100px">Delete Dokumen</th>
                      <tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Form CR 01 Form Laporan CSMS</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-success">Uploaded</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                          <div id="uploadModal" class="modal">
                            <div class="modal-dialog">
                              <form class="form-horizontal">
                                <div class="modal-content">
                                  <div class="modal-header bg-gray">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Upload Laporan</h4>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Dokumen : </label>
                                        <div class="col-md-6">
                                          <input type="file" class="form-control input-sm">
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" value="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                                  </div>
                                </div>
                              </form>
                                <!-- /.modal-content -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>2.</td>
                        <td>Form PJA 01 Daftar Periksa Pre Job Activities</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-success">Uploaded</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <a href="#">Lihat Dokumen</a>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-remove"></span>Delete</button>
                          </div>
                          <div id="deleteModal" class="modal">
                            <div class="modal-dialog">
                              <form class="form-horizontal">
                                <div class="modal-content">
                                  <div class="modal-header bg-red">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Delete Laporan</h4>
                                  </div>
                                  <div class="modal-body">
                                    Proses ini akan menghapus laporan yang telah diupload.
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" value="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-cloud-upload"></span> Delete</button>
                                  </div>
                                </div>
                              </form>
                                <!-- /.modal-content -->
                            </div>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>3.</td>
                        <td>Form WIP 01 Daftar Periksa Inspeksi Keselamatan</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-primary">Waiting for Upload</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" disabled><span class="glyphicon glyphicon-remove"></span>Delete</button>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>4.</td>
                        <td>Form WIP 02 Daftar Periksa Program Keselamatan</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-primary">Waiting for Upload</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" disabled><span class="glyphicon glyphicon-remove"></span>Delete</button>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>5.</td>
                        <td>Form WIP 03 Evaluasi SHEQ Bulanan</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-primary">Waiting for Upload</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#uploadMultipleModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                          </div>
                          <div id="uploadMultipleModal" class="modal">
                            <div class="modal-dialog">
                              <form class="form-horizontal">
                                <div class="modal-content">
                                  <div class="modal-header bg-gray">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Upload Laporan</h4>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Dokumen : </label>
                                        <div class="col-md-6">
                                          <input type="file" class="form-control input-sm" multiple>
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" value="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                                  </div>
                                </div>
                              </form>
                                <!-- /.modal-content -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" disabled><span class="glyphicon glyphicon-remove"></span>Delete</button>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>5.</td>
                        <td>Form Laporan Tenaga Kerja</td>
                        <td>
                          <div class="text-center">
                            <span class="label label-primary">Waiting for Upload</span>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#uploadMultipleModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                          </div>
                          <div id="uploadMultipleModal" class="modal">
                            <div class="modal-dialog">
                              <form class="form-horizontal">
                                <div class="modal-content">
                                  <div class="modal-header bg-gray">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Upload Laporan</h4>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="form-group">
                                        <label class="control-label col-md-2">Dokumen : </label>
                                        <div class="col-md-6">
                                          <input type="file" class="form-control input-sm" multiple>
                                        </div>
                                      </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" value="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button>
                                  </div>
                                </div>
                              </form>
                                <!-- /.modal-content -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="text-center">
                            <button type="button" class="btn btn-danger btn-xs" disabled><span class="glyphicon glyphicon-remove"></span>Delete</button>
                          </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>

                  
                </div>
                <div class="box-footer">
                  Keterangan Status : <br>
                  <div class="col-md-2"><span class="label label-primary">Waiting for Upload</span></div> <div class="col-md-10">: Menunggu upload Laporan Hasil Scan</div>
                  <div class="col-md-2"><span class="label label-success">Uploaded</span></div> <div class="col-md-10">: Laporan Hasil Scan telah diupload</div>
                </div>



                            
            </div>

          </div>

          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Kontraktor : </label>
                  <div class="col-md-3">
                    <input type="text" class="form-control input-sm">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2">Jabatan Kontraktor : </label>
                  <div class="col-md-3">
                    <input type="text" class="form-control input-sm">
                  </div>
                </div>
              </div>

            </div>
          </div>
          

        </div>

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#submitModal"><span class="glyphicon glyphicon-edit"></span> Submit</button>
          <button type="button" class="btn btn-default btn-sm pull-right" style="margin-right:5px" data-toggle="modal" data-target="#saveModal"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
          <a href="p20.php"><button type="button" class="btn btn-default btn-sm pull-right" style="margin-right:5px"> Back</button></a>

          <div id="submitModal" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-green">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Are You Sure to Submit?</h4>
                </div>
                <div class="modal-body">
                  Proses ini akan menyerahkan Laporan CSMS dan Tenaga Kerja ke Project Coordinator. Anda <span class="text-red">TIDAK DAPAT</span> merubah data setelah proses ini.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" value="submit" class="btn btn-success btn-sm">Yes, I Want to Submit It</button>
                </div>
              </div>
                <!-- /.modal-content -->
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
                  Proses ini hanya akan menyimpan data yang telah Anda masukkan <span class="text-red">TANPA</span> menyerahkan Laporan CSMS dan Tenaga ke Project Coordinator. Anda masih dapat memperbarui data yang dimasukkan.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" value="submit" class="btn btn-default btn-sm">Yes, Save It</button>
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

<script>
  $(document).ready(function(){
    $('[data-toggle="hold"]').tooltip();
    $('[data-toggle="resume"]').tooltip();
    $('[data-toggle="abort"]').tooltip();
  });

  $(function () {
    $("#dataTable").DataTable();
  });
</script>



</body>
</html>
