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
<body class="hold-transition skin-red fixed layout-top-nav">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php include "p1headerkosong.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Contract Order
          <small>CO-17001</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="/ecp01001">Contract Order</a></li>
          <li class=""><strong>CO-17001</strong></li>

        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Contract Order</h3>
              </div>
              <div class="box-body">
                <dl>
                  <dt>Nomor PR Service</dt>
                  <dd>CO-17001</dd> <br>
                  <dt>Judul Pekerjaan</dt>
                  <dd>Jasa Pemborongan Pekerjaan Pembuangan Sampah, Drum Bekas, Pemeliharaan Taman dan Kebersihan Lingkungan di Area Zone-I & II di PT Badak NGL Bontang, Paket “B” Tahun 2017” </dd> <br>
                  <dt>Jenis Kontrak</dt>
                  <dd>Lump Sum (LS), Harga Satuan (HS), Gabungan LS & HS </dd> <br>
                  <dt>Harga Kontrak <span class="small"><i>(Termasuk PPN 10%)</i></span></dt>
                  <dd>Rp. 400.000.000,- </dd> <br>
                  <dt>Durasi Kontrak</dt>
                  <dd>Durasi : 4 Bulan</dd>
                  <dd>Mulai : 17 September 2016 </dd>
                  <dd>Selesai : 10 Januari 2017 </dd> <br>
                </dl>
              </div>
              <div class="box-footer">
                <div class="row">

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header">
                Modify Contract Order
              </div>
              <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Perkiraan Nilai Kontrak:</label>
                    <div class="col-sm-8">
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
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option3">
                          Rp 10 M &#8804 Rp 20 M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option4">
                          Rp 20 M &#8804 Rp 30 M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="radiolama" id="optionsRadios2" value="option5">
                          > Rp 30 M
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Jenis Jasa:</label>
                    <div class="col-sm-8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="jenisJasa" id="optionsRadios1" value="jenis1" checked>&#8804 Rp. 5M
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="jenisJasa" id="optionsRadios2" value="jeniss2">
                          Rp 5 M &#8804 Rp 10 M
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Kualifikasi Syarat Peserta Pengadaan:</label>
                    <div class="col-sm-8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="syaratPeserta" id="optionsRadios1" value="jenis1" checked>K (Rp. 25 Juta <= Nilai Proyek (NK) < Rp. 500 Juta)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="syaratPeserta" id="optionsRadios2" value="jeniss2">
                          M (Rp. 500 Juta <= NK <= Rp. 10 M)
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="syaratPeserta" id="optionsRadios2" value="jeniss2">
                          B (NK > Rp. 10 M)
                        </label>
                      </div>
                    </div>
                  </div>

                  <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Nama Dokumen</th>
                      <th style="width:100px;" class="text-center">Upload Dokumen</th>
                      <th style="width:100px;" class="text-center">Dokumen Terupload</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-red">Dokumen RFP*</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#uploadModal"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</button></div></td>
                      <td><a data-toggle="modal" data-target="#filesModal-1" style="cursor:pointer">1 Files</a></td>

                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="box-footer">
                <button type="button" class="btn btn-success pull-right btn-sm" style="margin-right: 5px;" data-toggle="modal" data-target="#ApproveModal">
                  <span class="fa fa-check"></span> Submit
                </button>
              </div>
            </div

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

  </div>
  <!-- ./wrapper -->

  <div id="approveModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="form-horizontal">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda Yakin?</h4>
                      </div>
                      <div class="modal-body">

                          <p class="well well-sm o-shadow">Apakah anda yakin untuk memberikan APPROVE pada contract order berikut?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-success">Yes</button>
                      </div>
                    </form>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>
              <div id="rejectModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="form-horizontal">
                      <div class="modal-header bg-red">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda Yakin?</h4>
                      </div>
                      <div class="modal-body">

                          <p class="well well-sm o-shadow">Apakah anda yakin untuk melakukan REJECT pada contract order berikut?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger">Yes</button>
                      </div>
                    </form>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>
              <div id="cancelModal" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form class="form-horizontal">
                      <div class="modal-header bg-yellow">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Anda Yakin?</h4>
                      </div>
                      <div class="modal-body">

                          <p class="well well-sm o-shadow">Apakah anda yakin untuk melakukan CANCEL pada contract order berikut?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-warning">Yes</button>
                      </div>
                    </form>
                  </div>
                    <!-- /.modal-content -->
                </div>
              </div>

              <div id="filesModal-1" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cost Commitment</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-2" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Evaluasi Kinerja Kontraktor</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-3" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Evaltek</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-4" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Justifikasi PR Service</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-5" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lingkup Kerja</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-6" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Penilaian Resiko</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-7" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">SHEQ Notice</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-8" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Daftar Material</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-9" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Gambar</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-10" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Request For Proposal (RFP)</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-11" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Spesifikasi Teknis</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="filesModal-12" class="modal">
        <form class="form-horizontal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Dokumen Lain-Lain</h4>
              </div>
              <div class="modal-body">

                <table class="table table-hover table-bordered table-condensed">
                  <thead>
                    <tr>
                      <td>No.</td>
                      <td>Judul Dokumen</td>
                      <td>Keterangan Dokumen</td>
                      <td>Download</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Judul Dokumen Pertama</td>
                      <td>Dokumen tambahan pertama</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Judul Dokumen Kedua</td>
                      <td>Dokumen tambahan kedua</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Judul Dokumen Ketiga</td>
                      <td>Dokumen tambahan ketiga</td>
                      <td><div class="text-center"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span> Download</button></div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm pull-left" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>


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
  $(document).ready(function(){
    $('[data-toggle="abort"]').tooltip();
  });
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable();
  });
  </script>
</body>
</html>
