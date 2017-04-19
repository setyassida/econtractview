<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-datepicker.css">
  <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-timepicker.css">
  <link rel="stylesheet" type="text/css" href="../resources/css/ptbapps.css">

  <script src="../resources/js/jquery.js"></script>
  <script src="../resources/js/bootstrap.js"></script>
  <script src="../resources/js/ptbapps.js"></script>
  <script src="../resources/js/bootstrap-datepicker.js"></script>
  <script src="../resources/js/bootstrap-timepicker.js"></script>

  <title>E-Contract</title>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <strong>E-Contract &nbsp;<span class="glyphicon glyphicon-wrench"></span></strong>
            </a>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tsngNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contract Order <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="contractorder.php">Browse</a></li>
                    <li><a href="cocreate.php">Create</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <span class="glyphicon glyphicon-info-sign"></span> <strong>Ini belum selesai</strong>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>
              <span class="glyphicon glyphicon-wrench"></span>&nbsp;<strong>Form Pemilihan Langsung</strong>
            </h5>
          </div>
          <div class="panel-body">
            <div class="container">
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="control-label col-md-2" for="email">Nomor PR Service:</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="email" placeholder="CO17001" disabled="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2" for="pwd">Tanggal:</label>
                  <div class="col-md-10">
                    <input type="password" class="form-control" id="pwd" placeholder="04-19-2017" disabled="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2" for="kr">Kontrak Rutin:</label>
                  <div class="col-md-10">
                    <label class="radio-inline"><input type="radio" name="optradio">Ya</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Tidak</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2" for="rnk">Referensi Nomor Kontrak:</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="rnk" placeholder="Referensi nomor kontrak sebelumnnya (LOOKUP)">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-2" for="kb">Kode Pembebanan Biaya:</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="kb" placeholder="Kode pembebanan biaya (LOOKUP)">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2" for="jp">Judul Pekerjaan:</label>
                  <textarea class="col-md-10 " rows="5" id="jp"></textarea>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-2" for="dur">Durasi</label>
                  <div class="col-md-1">
                    <input type="number" min="1" class="form-control" id="dur" placeholder="">
                  </div>
                  <div class="col-md-1">
                    <select class="form-control">
                      <option value="day">Hari</option>
                      <option value="month">Bulan</option>
                      <option value="year">Tahun</option>
                    </select>
                  </div>
                </div>





                <div class="form-group">
                  <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="well well-md">
          <div class="text-info text-center">
            <small>E-Contract <strong>Team</strong><br>Badak LNG(<strong><i>2017</i></strong>)</small>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
