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

  <?php include "p3bheader.php" ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penawaran
        <small>Penawaran Bidder</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
        <li><a href="p3b.php">Penawaran</a></li>
        <li><a href="p3bviewawaitquote.php">Detail</a></li>
        <li class="active"><a href="p3bnotquote.php">Quote</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal">
            <!-- box bidder list -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Ikuti Penawaran</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body "> 
                <div class="row">
                  <!-- kolom kiri -->
                  <div class="col-md-6">
                    <div class="form-group" >
                      <label class="control-label col-md-4">Nilai Penawaran</label>
                      <div class="col-md-8"><input type="text" class="form-control input-sm" id="nilaiPenawaran" placeholder="500000000"></div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-4">Terbilang</label>
                      <div class="col-md-8"><input type="text" class="form-control input-sm" placeholder="Lima Ratus Juta Rupiah" disabled></div> 
                    </div>
                    <div class="form-group" >
                      <label class="control-label col-md-4">Price Validity</label>
                      <div class="col-md-8">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">1 Bulan</option>
                          <option>2 Bulan</option>
                          <option>3 Bulan</option>
                          <option>4 Bulan</option>
                        </select>
                      </div>
                    </div>
                    <div>
                      <label class="control-label col-md-4">Template Surat Penawaran</label>
                      <div class="col-md-8">
                        <button style="margin-top: 1rem" type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                        Maksimum ukuran tiap file yang diupload adalah <span class="text-red">50MB</span>!    
                      </p>

                      <table id="dataTable" class="table table-bordered table-condensed table-hover">
                        <thead>
                          <tr>
                            <th>Judul Dokumen</th>
                            <th style="width:250px">Filename</th>
                            <th style="width:40px">Act</th>
                            <th style="display:none">Keterangan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Surat Penawaran</td>
                            <td><input type="file" id="" accept=".pdf"></td>
                            <td></td>
                            <td style="display:none"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>

                  <!-- /.kolom kiri -->
                  <div class="col-md-6">
                    <div class="box box-primary">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="box-body">
                            
                            <div style="height:20px">
                            </div>

                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                              Tambahkan dokumen pendukung lainnya melalui kolom berikut.   
                            </p>
                            <div class="form-group">
                              <label class="control-label col-md-4">Judul Dokumen</label>
                              <div class="col-md-8">
                                <input id="inputJudulDokumen" type="text" class="input-sm form-control">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-4">Filename</label>
                              <div class="col-md-8">
                                <input id="inputFile" type="file" class="input-sm">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-4">Keterangan</label>
                              <div class="col-md-8">
                                <textarea id="inputKeterangan" rows="5" placeholder="Type Here.." class="form-control" style="resize:none"></textarea>
                              </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-xs pull-right" id="btnAdd"><span class="glyphicon glyphicon-plus"></span> Add</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.kolom kanan -->
                </div>
                <!-- /.row box-body -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-success btn-sm pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#okModal">
                <span class="fa fa-check"></span> Upload
                </button>

                <div id="okModal" class="modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda yakin?</h4>
                      </div>
                      <div class="modal-body">
                        <p>Dokumen yang disampaikan adalah benar dan dapat dipertanggungjawabkan. Apabila di kemudian hari ditemukan bahwa dokumen yang telah disampaikan tidak benar atau ada pemalsuan, maka kami bersedia dikenakan sanksi oleh aturan yang berlaku.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn pull-left" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success">Ya</button>
                      </div>
                    </div>
                      <!-- /.modal-content -->
                  </div>
                </div>
                <!-- /.modal -->
              </div>
              <!-- ./box-footer -->
            </div>
            <!-- /.box -->
          </form>
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
