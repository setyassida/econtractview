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

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <img src="../../resources/images/logo_mini.png" class="logo-lg">

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>e</b>Contract</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../resources/images/avatar/icon2.png" class="user-image" alt="User Image">
              <span class="hidden-xs">ESTIMATOR</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../resources/images/avatar/icon2.png" class="img-circle" alt="User Image">

                <p>
                 ESTIMATOR

                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../resources/images/avatar/icon2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ESTIMATOR</p>

        </div>
      </div>
      <!-- search form -->
<!--       <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Process</li>
        <li class="treeview">

          <!-- menu dashboard -->

          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>

        <!-- menu contract order  -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Contract Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../p1/p1.php"><i class="fa fa-circle-o"></i> Contract</a></li>
            <li><a href="../p2/p2a.php"><i class="fa fa-circle-o"></i> Bidder List</a></li>
            <li><a href="../p3/p3.php"><i class="fa fa-circle-o"></i> Prebid Meeting</a></li>
            <li><a href="../p4/p4.php"><i class="fa fa-circle-o"></i> Harga Perkiraan Sendiri</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Evaluasi Administrasi</a></li>
            <li><a href="../p6/p6.php"><i class="fa fa-circle-o"></i> Evaluasi Teknis</a></li>
            <li  class="active"><a href="browse_evalkom.php"><i class="fa fa-circle-o"></i> Evaluasi Komersial</a></li>
            <li><a href="../p9/p9.php"><i class="fa fa-circle-o"></i> LoA</a></li>
            <li><a href="../p10/p10.php"><i class="fa fa-circle-o"></i> Kick-of-meeting</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> LoI</a></li>     
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Kontrak</a></li> 
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> CoC</a></li> 
          </ul>
        </li>

                <!-- VO menu -->
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>VO</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>


                <!-- Report menu -->
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Report</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>BSO</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Contract Order
        <small>Evaluasi Komersial</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contract Order</li>
        <li class="active">Evaluasi Komersial</li>
      </ol>
    </section>

<!-- 
    <div class="content" style="min-height: 0px;">
      <div class="col-md-6">
        <a href="eval3.php"><button type="button" class="btn btn-success btn-sm" data-toggle="hold" title="Create BCR">Create BCR</button></a>
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
            <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> HPS Most Likely </h5>
                      </div>
                      <!-- /.box-header -->
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
                          <!-- main column-->

                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="eval2b.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

            </div>

            <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 1  </h5>
                      </div>
                      <!-- /.box-header -->
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


                          <!-- main column-->

                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="eval2b.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

                </div>

                <!-- bidder 2 -->
            <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 2 </h5>
                      </div>
                      <!-- /.box-header -->
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

                          <!-- main column-->

                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="eval2b.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

                </div>
                <!-- closed bidder 2 -->

                <!-- bidder 3 -->
            <div class="col-md-3">
                    <div class="box box-success">
                      <div class="box-header with-border">

                        <h5> Rincian Penawaran Bidder 3 </h5>
                      </div>
                      <!-- /.box-header -->
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

                          <!-- main column-->

                        
                        <div class="col-md-12 box-footer" style="text-align: right;">
                          <a href="eval2b.php"><button type="button" class="btn btn-info btn-sm">Simpan</button></a>
                        </div>
                      </div>
                  </div>

            </div>
                <!-- closed bidder 4 -->
        

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
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
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
                           <div class="col-md-12 box-footer" style="text-align: right;">
                                    <a href="eval3.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
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
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
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
                           <div class="col-md-12 box-footer" style="text-align: right;">
                                    <a href="eval3.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
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
                                        <td>Profit</td>
                                        <td>100</td>
                                        <td>60</td>
                                        <td><textarea id="inputKeterangan" rows="1" placeholder="Input nominal.." class="form-control input-sm" style="resize: none; width: 200px"></textarea></td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                      </tr>
                                      <tr>
                                        <td>5.</td>
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
                           <div class="col-md-12 box-footer" style="text-align: right;">
                                    <a href="eval2.php"><button type="button" class="btn btn-info btn-sm" title="Lanjut Rincian Penawaran">Simpan</button></a>
                                    <a href="eval.php">
                                    <button type="button" class="btn btn-default btn-sm" style="margin-right: 5px;">
                                    Back
                                  </button>               
                          </a>
                                    <a href="eval4.php"><button type="button" class="btn btn-success btn-sm" title="Lanjut Rincian Penawaran">Lanjut Halaman Negosiasi</button></a>
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
