<!DOCTYPE html>
<html lang="en">
<head>
<style>
.content-wrapper,
.right-side,
.main-footer {
  -webkit-transition: -webkit-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -moz-transition: -moz-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  -o-transition: -o-transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, margin 0.3s ease-in-out;
  margin-left: 0px;
  z-index: 820;
}
.layout-top-nav .content-wrapper,
.layout-top-nav .right-side,
.layout-top-nav .main-footer {
  margin-left: 0;
}
@media (max-width: 767px) {
  .content-wrapper,
  .right-side,
  .main-footer {
    margin-left: 0;
  }
}
@media (min-width: 768px) {
  .sidebar-collapse .content-wrapper,
  .sidebar-collapse .right-side,
  .sidebar-collapse .main-footer {
    margin-left: 0;
  }
}
@media (max-width: 767px) {
  .sidebar-open .content-wrapper,
  .sidebar-open .right-side,
  .sidebar-open .main-footer {
    -webkit-transform: translate(230px, 0);
    -ms-transform: translate(230px, 0);
    -o-transform: translate(230px, 0);
    transform: translate(230px, 0);
  }
}
.content-wrapper,
.right-side {
  min-height: 100%;
  background-color: #ecf0f5;
  z-index: 800;
}
.main-footer {
  background: #fff;
  padding: 15px;
  color: #444;
  border-top: 1px solid #d2d6de;
}
</style>
  <title>E-Contract</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap style -->
  <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../resources/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../resources/css/bootstrap-datepicker.css">
  <!-- bootstrap timepicker -->
  <link rel="stylesheet" href="../resources/css/bootstrap-timepicker.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="../resources/css/font-awesome.min.css">
  <!-- ptb style -->
  <link rel="stylesheet" href="../resources/css/ptbapps.css">
  <style>
   .hr {
     border-top: 1px dotted #000000 !important;
     margin-bottom:5px !important;
     margin-top:5px !important;
   }
 </style>
 <title>E-Contract</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- bootstrap style -->
 <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
 <!-- daterange picker -->
 <link rel="stylesheet" href="../resources/daterangepicker/daterangepicker.css">
 <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="../resources/css/bootstrap-datepicker.css">
 <!-- bootstrap timepicker -->
 <link rel="stylesheet" href="../resources/css/bootstrap-timepicker.min.css">
 <!-- font awesome -->
 <link rel="stylesheet" href="../resources/css/font-awesome.min.css">
 <!-- ptb style -->
 <link rel="stylesheet" href="../resources/css/ptbapps.css">


 <!-- jquery js -->
 <script src="../resources/js/jquery.min.js"></script>
 <!-- bootstrap js -->
 <script src="../resources/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default" style="margin-bottom:2px;" >
    <div class="container-fluid">
      <img style="width:20%;" src="../resources/img/badak.png" alt="">
    </div>
  </nav>

  <nav class="navbar navbar-default" style="margin-bottom:2px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><b>E-Contract</b></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contract Order
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Browse</a></li>
              <li><a href="#">Buat Contact Order</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="text-center">
        <h4 class=""><b>PERMINTAAN PEMBUATAN KONTRAK</b></h4>
        <p>Purchase Request Service (PR Service).</p>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;<strong>Form Pemilihan Langsung</strong>
              </h5>
            </div>
            <div class="panel-body">

              <form role="form">
                <div class="col-md-6">

                  <div class="form-group">
                    <label for="email">Nomor PR Service:</label>
                    <input type="text" class="form-control" id="email" placeholder="CO17001" disabled="true">
                  </div>

                  <div class="form-group">
                    <label for="pwd">Tanggal:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="04-19-2017" disabled="true">
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <label for="kr">Kontrak Rutin:</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Ya
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Tidak
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="rnk">Referensi Nomor Kontrak:</label>
                    <input type="text" class="form-control" id="rnk" placeholder="Referensi nomor kontrak sebelumnnya (LOOKUP)">
                  </div>

                  <div class="form-group">
                    <label for="kb">Kode Pembebanan Biaya:</label>
                    <input type="text" class="form-control" id="kb" placeholder="Kode pembebanan biaya (LOOKUP)">
                  </div>
                </div>

                <!-- KOLOM KANAN -->
                <div class="col-md-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Judul Pekerjaan</label>
                    <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                  </div>

                  <div class="form-group">
                    <label for="dur">Durasi: </label>
                    <div class="">
                    </div>
                    <div class="col-md-2">
                      <input type="number" min="1" class="form-control col-md-3" id="dur" placeholder="">
                    </div>
                    <div class="col-md-2">
                      <select class="form-control">
                        <option value="day">Hari</option>
                        <option value="month">Bulan</option>
                        <option value="year">Tahun</option>
                      </select>
                    </div>
                    <div class="col-md-8">
                      <br><br>
                    </div>
                  </div>

                  <!-- Date range -->
                  <div class="form-group">
                    <label  >Tannggal (Mulai-Selesai): </label>
                    <div class="input-group col-md-6">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                    <br>
                  </div>
                  <!-- /.form group -->

                  <!-- radio -->
                  <div class="form-group">
                    <label for="kr">Perkiraan Nilai Kontrak:</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>&#8804 Rp. 5M
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Rp 5 M &#8804 Rp 10 M
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Rp 10 M &#8804 Rp 20 M
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Rp 20 M &#8804 Rp 30 M
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        > Rp 30 M
                      </label>
                    </div>
                    <br>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <i><b>Lampiran</b></i>
                    </div>
                    <div class="panel-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Lingkup Kerja</td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Cost Commitment <a href="#"><span class="label label-info">Download Template</span></a></td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Justifikasi PR Service</td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Form Evaltek</td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>SHEQ Notice <a href="#"><span class="label label-info">Download Template</span></a></td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Penilaian Resiko <a href="#"><span class="label label-info">Download Template</span></a></td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Request For Proposal </td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Daftar Material </td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Gambar </td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Spesifikasi Teknis </td>
                            <td><input type="file" id="exampleInputFile"></td>
                          </tr>
                        </tbody>
                      </table>
                      <span class="col-md-2">
                        <button type="button" class="btn btn-block btn-success btn-xs">+ Tambah Lampiran</button>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-md-1 col-md-offset-11">
                  <button class="btn btn-success btn-lg"> SUBMIT </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2017 <a style="color:#ab0101" href="http://www.badaklng.co.id">PT Badak NGL</a>.</strong> All rights
    reserved.
  </footer>
    <!-- momment js -->
    <script src="../resources/js/moment.js"></script>
    <!-- ptb js -->
    <script src="../resources/js/ptbapps.js"></script>
    <!-- daterangepicker js -->
    <script src="../resources/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../resources/js/bootstrap-datepicker.js"></script>
    <!-- bootstrap timepicker -->
    <script src="../resources/js/bootstrap-timepicker.min.js"></script>

    <script type="text/javascript">
    //Date range picker
    $('#reservation').daterangepicker();
  </script>
</body>
</html>
