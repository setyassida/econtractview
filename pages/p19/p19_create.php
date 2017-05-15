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
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
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

    <?php include "p19header.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Evaluasi Semester
          <small>CA-17001</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-list"></i> Variation Order</a></li>
          <li><a href="p2a.php">Evaluasi Semester</a></li>
          <li class="active"><a href="p2cdraft.php">CA-17001</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-body">
            <dl class="dl-horizontal">
              <div class="col-md-4">
                <dt>Nomor Kontrak :</dt>
                <dd>CO-17001</dd>
              </div>
              <div class="col-md-4">
                <dt>Judul Pekerjaan :</dt>
                <dd>PENGADAAN SISTEM INFORMASI</dd>
              </div>
              <div class="col-md-4">
                <dt>Suplier :</dt>
                <dd>PT. Suka Abadi</dd>
              </div>
            </dl>
          </div>
          <!-- /.box-body -->
        </div>

        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Jasa Pemborongan</a></li>
            <li><a href="#tab_2" data-toggle="tab">Jasa Tenaga Kerja</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <form class="form-horizontal">
                <div class="box-body">
                  <table class="table table-bordered table-hover table-condensed">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Pertanyaan</th>
                        <th class="text-center" style="width:200px;">Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Apakah Manajer Lapangan mampu menangani pekerjaannya dengan baik ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>Apakah perlengkapan / peralatan dapat mendukung pelaksanaan pekerjaan ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Apakah kondisi dari perlengkapan sesuai dan dapat dioperasikan dengan aman ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Apakah perlengkapan tersebut diperiksa kelayakannya secara berkala ? </td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Apakah kualitas dan kemampuan kerja Kontraktor sudah memuaskan ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Apakah Kontraktor menyediakan peralatan keselamatan kerja (sepatu kerja, alat pelindung lainnya) kepada pekerjanya, sesuai dengan standar PT. Badak ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Apakah selama ini Kontraktor membayar gaji pekerjanya dengan tepat waktu ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Apakah Kontraktor mempunyai pekerja yang mampu dan dapat dihubungi setiap saat ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Apakah Kontraktor menanggapi dengan cepat jika terjadi kesulitan pada pekerjaan ataupun pada pekerjanya ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Apakah Kontraktor menyediakan fasilitas  telepon,  di kantornya ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>Apakah pekerjaan telah diselesaikan dengan memuaskan ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td>Apakah Kontraktor mengikuti prosedur/ petunjuk dari PT Badak tentang Keselamatan Kerja dan Plant Safety Management (PSM) ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>
                      <tr>
                        <td>13</td>
                        <td>Apakah Kontraktor mengikuti prosedur yang berkaitan dengan lindungan lingkungan seperti ISO 14001 ?</td>
                        <td class="text-center"><form>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 1
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 2
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 3
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio"> 4
                          </label>
                        </form></button></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">


                  <div class="col-md-10">
                    Kategori Kode penilaian adalah sebagai berikut: <br>
                    <div class="col-md-1"><span class="label label-default">1</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Kurang, dengan nilai 25</div>
                    <div class="col-md-1"><span class="label label-default">2</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Cukup, dengan nilai 50</div>
                    <div class="col-md-1"><span class="label label-default">3</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Baik, dengan nilai 75</div>
                    <div class="col-md-1"><span class="label label-default">4</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Sangat Baik, dengan nilai 100</div>
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-default pull-right"><span class="glyphicon glyphicon-floppy-disk"></span>Save </button>
                  </div>

                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="box-body">
                <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th class="text-center">Pertanyaan</th>
                      <th class="text-center" style="width:200px;">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Apakah Manajer Lapangan mampu menangani pekerjaannya dengan baik dan memahami hal hal yang bersifat kontraktual  serta bertindak kooperatif dalam melaksanakan pekerjaan kontrak ini ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Apakah tersedia fasilitas telepon/fax untuk mendukung operasi pekerjaan ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Apakah Kontraktor menyediakan tenaga kerja sesuai dengan yang dipersyaratkan pada dokumen kontrak ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Apakah Kontraktor telah melaksanakan safety regulation yang dipersyaratkan pada dokumen kontrak ? </td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Apakah Kontraktor telah melaksanakan hal hal yang ditentukan dalam aturan Ketenagakerjaan termasuk system pengupahan yang telah  dipersyaratkan dalam dokumen kontrak ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Apakah Kontraktor bertanggung jawab penuh terhadap pengelolaan tenaga kerjanya ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Apakah Kontraktor telah melakukan administrasi proyek dgn baik termasuk sistem pelaporan ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Apakah Kontraktor menanggapi dengan cepat apabila timbul masalah pada pekerjanya ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Apakah Kontraktor mengikuti petunjuk dari Pengawas PT Badak tentang Keselamatan Kerja dan Plant Safety Management (PSM) ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Apakah Kontraktor mengikuti prosedur yang berkaitan dengan lindungan lingkungan seperti ISO 14001 ?</td>
                      <td class="text-center"><form>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 1
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 2
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 3
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio"> 4
                        </label>
                      </form></button></td>
                    </tr>

                  </tbody>
                </table>

              </div>
              <div class="box-footer">

                <div class="col-md-10">
                  Kategori Kode penilaian adalah sebagai berikut: <br>
                  <div class="col-md-1"><span class="label label-default">1</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Kurang, dengan nilai 25</div>
                  <div class="col-md-1"><span class="label label-default">2</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Cukup, dengan nilai 50</div>
                  <div class="col-md-1"><span class="label label-default">3</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Baik, dengan nilai 75</div>
                  <div class="col-md-1"><span class="label label-default">4</span></div> <div class="col-md-11" style="margin-left:-5rem">: menyatakan Sangat Baik, dengan nilai 100</div>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-default pull-right"><span class="glyphicon glyphicon-floppy-disk"></span>Save </button>
                </div>



              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>

      </section>
      <!-- /.content -->


      <footer class="main-footer" style="margin-left:0;">
        <strong>Copyright &copy; 2017 <a href="http://www.badaklng.co.id"> PT Badak NGL</a>.</strong> All rights
        reserved.
      </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
    </script>
  </body>
  </html>
