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
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <?php @include('p8header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <section class="content-header">
      <h1>
        Evaluasi Komersial
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Evaluasi Komersial</li>
        
      </ol>
    </section>

<!-- 
    <div class="content" style="min-height: 0px;">
      <div class="col-md-6">
        <a href="p8f.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Create BCR">Create BCR</button></a>
        <button data-target="#modalBCR" type="button" class="btn bg-navy btn-sm" data-toggle="modal" title="Detail BCR">Detail BCR</button>
      </div>
    </div> -->

    <div id="modalBCR" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Detail BCR Submit</h4>
          </div>
          <div class="modal-body">
            <h4>BCR ( Rekomendasi panitia pengadaan)<span class="fa fa-close"></span></h4>
            <h4>BCR ( Rekomendasi fungsi pengadaan)<span class="fa fa-check"></span></h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>
          <!-- /.modal-content -->
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
            <!-- box pertama awal -->

            <div class="col-md-12">
              <div class="box box-primray">
                <div class="box-header with-border">
                  <h5>Rincian Bidder</h5>
                </div>
                <div class="box-body">
                          <table class="text-center table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 200px">Uraian Pekerjaan</th>
                                        <th colspan="2" style="width: 200px;">HPS Most Likely</th>
                                        <th colspan="2" style="width: 200px;">PT Aimindo Adie P Rp</th>
                                        <th colspan="2" style="width: 200px;">PT Hasanah Sumber Utama Rp</th>
                                        <th colspan="2" style="width: 200px;">PT Abdi Jati Rp</th>                                        
                                      </tr>
                                      <tr>
                                        <th></th>
                                        <th>Lumpsum</th>
                                        <th>Satuan</th>
                                        <th>Lumpsum</th>
                                        <th>Satuan</th>
                                        <th>Lumpsum</th>
                                        <th>Satuan</th>
                                        <th>Lumpsum</th>
                                        <th>Satuan</th>
                                      </tr>                                      
                                      <tr>
                                        <td>Biaya Jasa</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>

                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Biaya Alat</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>

                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Biaya Material</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>

                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Biaya Lainnya</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>

                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 100px"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Sub Total (a)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Overhead (b)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>Profit (c)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      </table>         
                                    <div class="col-md-12 box-footer" style="text-align: left;">
                                    <a href="p8f.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
                            </div>           

                </div>

              </div>

            
            </div>



            <!-- box pertama akhir -->
<!--             <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> HPS Most Likely </h5>
                      </div>
                      <div class="box-body">
                          <dt>Biaya Jasa</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Alat</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Material</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Lainnya</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Sub Total (a)</dt>
                          <dd> Rp 0 </dd>
                          <dt>Over Head (b)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Profit (c)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Total</dt>
                          <dd>a + b + c</dd>
                          <dt>Total Harga</dt>
                          <dd>Akan divalidasi dengan HPS most likely</dd>

                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="p8e.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

            </div>
 -->
<!--             <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 1  </h5>
                      </div>
                      <div class="box-body">
                            <dt>Biaya Jasa</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Alat</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Material</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Lainnya</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Sub Total (a)</dt>
                          <dd> Rp 0 </dd>
                          <dt>Over Head (b)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Profit (c)</dt> 
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Total</dt>
                          <dd>a + b + c</dd>
                          <dt>Total Harga</dt>
                          <dd>Akan divalidasi dengan penawaran asli</dd>



                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="p8e.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

                </div>
 -->
                <!-- bidder 2 -->
<!--             <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 2 </h5>
                      </div>
                      <div class="box-body">
                            <dt>Biaya Jasa</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Alat</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Material</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Lainnya</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Sub Total (a)</dt>
                          <dd> Rp 0 </dd>
                          <dt>Over Head (b)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Profit (c)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Total</dt>
                          <dd>a + b + c</dd>
                          <dt>Total Harga</dt>
                          <dd>Akan divalidasi dengan penawaran asli</dd>


                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="p8e.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

                </div>
 -->                <!-- closed bidder 2 -->

                <!-- bidder 3 -->
<!--             <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 3 </h5>
                      </div>
                      <div class="box-body">
                            <dt>Biaya Jasa</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Alat</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Material</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Biaya Lainnya</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Sub Total (a)</dt>
                          <dd> Rp 0 </dd>
                          <dt>Over Head (b)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Profit (c)</dt>
                          <dd><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea>
                          </dd>
                          <dt>Total</dt>
                          <dd>a + b + c</dd>
                          <dt>Total Harga</dt>
                          <dd>Akan divalidasi dengan penawaran asli</dd>


                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="p8e.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

            </div>
 -->                <!-- closed bidder 4 -->
        

      </div>

      <div class="row">
        <div class="col-md-12">
                  <div class="box box-info">
                      <form class="form-horizontal">
                        <div class="box-header with-border">
                          <h5>Penjelasan Analisa Komersial</h5>
                          <h5>Bidder 1</h5>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">

                                  <!-- /.box-header -->
                                  <div class="box-body"> 
                                    
                                    <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 10px" rowspan="1">No</th>
                                        <th style="width: 100px">Pekerjaan</th>
                                        <th style="width: 100px">HPS</th>
                                        <th style="width: 100px">Penawaran Asli</th>
                                        <th style="width: 10px">Pengeluaran</th>
                                        <th style="width: 100px">Saldo</th>
                                        <th style="width: 150px">Prosentase Penawaran vs HPS (-) lebih rendah (+) lebih tinggi</th>
                                        <th style="width: 50px">Analisa Evaluasi</th>
                                        
                                      </tr>
                                      <tr>
                                        <th style="width: 10px"></th>
                                        <th style="width: 100px"></th>
                                        <th style="width: 100px">a</th>
                                        <th style="width: 100px">b</th>
                                        <th style="width: 10px">c</th>
                                        <th style="width: 100px">d = b - c</th>
                                        <th style="width: 150px"> + / -</th>
                                        <th style="width: 50px"> wajar / tidak wajar</th>
                                      </tr>                                      
                                      <tr>
                                        <td>1.</td>
                                        <td>Biaya Jasa</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>2.</td>
                                        <td>Biaya Alat</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>3.</td>
                                        <td>Biaya Material</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>4.</td>
                                        <td>Overhead</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      </table>
                                      

                                  </div>

                            </div>

                          </div>
                           <div class="col-md-12 box-footer" style="text-align: left;">
                                    <a href="p8f.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
                            </div>
                        </div>
                      </form>
                    </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
                  <div class="box box-info">
                      <form class="form-horizontal">
                        <div class="box-header with-border">
                          <h5>Penjelasan Analisa Komersial</h5>
                          <h5>Bidder 2</h5>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">

                                  <!-- /.box-header -->
                                  <div class="box-body"> 
                                    
                                      
                                                                        <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 10px" rowspan="1">No</th>
                                        <th style="width: 100px">Pekerjaan</th>
                                        <th style="width: 100px">HPS</th>
                                        <th style="width: 100px">Penawaran Asli</th>
                                        <th style="width: 10px">Pengeluaran</th>
                                        <th style="width: 100px">Saldo</th>
                                        <th style="width: 150px">Prosentase Penawaran vs HPS (-) lebih rendah (+) lebih tinggi</th>
                                        <th style="width: 50px">Analisa Evaluasi</th>
                                        
                                      </tr>
                                      <tr>
                                        <th style="width: 10px"></th>
                                        <th style="width: 100px"></th>
                                        <th style="width: 100px">a</th>
                                        <th style="width: 100px">b</th>
                                        <th style="width: 10px">c</th>
                                        <th style="width: 100px">d = b - c</th>
                                        <th style="width: 150px"> + / -</th>
                                        <th style="width: 50px"> wajar / tidak wajar</th>
                                      </tr>                                      
                                      <tr>
                                        <td>1.</td>
                                        <td>Biaya Jasa</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>2.</td>
                                        <td>Biaya Alat</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>3.</td>
                                        <td>Biaya Material</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>4.</td>
                                        <td>Overhead</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      </table>
                                      

                                  </div>

                            </div>

                          </div>
                           <div class="col-md-12 box-footer" style="text-align: left;">
                                    <a href="p8f.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
                            </div>
                        </div>
                      </form>
                    </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
                  <div class="box box-info">
                      <form class="form-horizontal">
                        <div class="box-header with-border">
                          <h5>Penjelasan Analisa Komersial</h5>
                          <h5>Bidder 3</h5>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">

                                  <!-- /.box-header -->
                                  <div class="box-body"> 
                                
                                    <table class="table table-bordered table-condensed">
                                      <tr>
                                        <th style="width: 10px" rowspan="1">No</th>
                                        <th style="width: 100px">Pekerjaan</th>
                                        <th style="width: 100px">HPS</th>
                                        <th style="width: 100px">Penawaran Asli</th>
                                        <th style="width: 10px">Pengeluaran</th>
                                        <th style="width: 100px">Saldo</th>
                                        <th style="width: 150px">Prosentase Penawaran vs HPS (-) lebih rendah (+) lebih tinggi</th>
                                        <th style="width: 50px">Analisa Evaluasi</th>
                                        
                                      </tr>
                                      <tr>
                                        <th style="width: 10px"></th>
                                        <th style="width: 100px"></th>
                                        <th style="width: 100px">a</th>
                                        <th style="width: 100px">b</th>
                                        <th style="width: 10px">c</th>
                                        <th style="width: 100px">d = b - c</th>
                                        <th style="width: 150px"> + / -</th>
                                        <th style="width: 50px"> wajar / tidak wajar</th>
                                      </tr>                                      
                                      <tr>
                                        <td>1.</td>
                                        <td>Biaya Jasa</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>2.</td>
                                        <td>Biaya Alat</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>3.</td>
                                        <td>Biaya Material</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>4.</td>
                                        <td>Overhead</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      </table>                                      

                                  </div>

                            </div>

                          </div>
                           <div class="col-md-12 box-footer">
                              <div class="col-md-6">
                                    <a href="p8f.php"><button style="text-align: left;" type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
                                    <a href="p8d.php">
                              </div>
                              <div class="col-md-6" style="text-align: right;">
                                   <button type="button" class="btn btn-default btn-sm" style="margin-right: 5px; text-align: right;">Back</button> </a>
                                    <a href="p8g.php"><button style="text-align: right;" type="button" class="btn btn-success btn-sm" title="Lanjut Rincian Penawaran">Lanjut Hasil Evaluasi</button></a>

                              </div>
                            </div>
                        </div>
                      </form>
                    </div>

        </div>
      </div>
      

     

    </section>
    
<!--  content wrapper-->
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright &copy; 2017 <a href="http://badaklng.co.id">PT Badak NGL</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../../dist/js/pages/dashboard2.js"></script> -->
<!-- AdminLTE for demo purposes -->
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
