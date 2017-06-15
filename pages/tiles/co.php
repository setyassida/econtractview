<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Browse Contract Order
      <small>Cari Contract Order</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-list"></i> Home</a></li>
      <li class="active"><a href="p2a.php">Browse Contract Order</a></li>
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
            <a href="p1a.php"><button class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Buat Contract Order Baru</button></a>
          </div>
          <!-- /.box-header -->
          <div class="box-body ">
            <table id="example1" class="table table-bordered table-striped table-condensed">
              <thead>
              <tr>
                <th>No. Contract</th>
                <th>Judul Pekerjaan</th>
                <th>Status</th>
                <th>Status/Proses</th>
                <th>Tanggal Dibuat</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><a href="#">CB-17001</a></td>
                <td>REGULAR INSPECTION OF LIFTING GEARS</td>
                <td class="text-center"><span class="label label-primary">Draft</span></td>
                <td>Prebid Meeting</td>
                <td>20-Jan-2017</td>
              </tr>
              <tr>
                <td><a href="#">CC-17001</a></td>
                <td>TR-G DEAD LEGS UNDER INSULATION LINE SURVEY</td>
                <td class="text-center"><span class="label label-info">Approved</span></td>
                <td>Prebid Meeting</td>
                <td>21-Feb-2017</td>
              </tr>
              <tr>
                <td><a href="#">CA-17003</a></td>
                <td>SPRING SUPPORT INSPECTION PROGRAM 2016</td>
                <td class="text-center"><span class="label label-danger">Aborted</span></td>
                <td>Prebid Meeting</td>
                <td>22-Feb-2017</td>
              </tr>
              <tr>
                <td><a href="#">CA-17002</a></td>
                <td>REGULAR INSPECTION OF LIFTING APPLIANCE</td>
                <td class="text-center"><span class="label label-warning">Hold</span></td>
                <td>Evaluasi Teknis</td>
                <td>23-Apr-2017</td>
              </tr>
              <tr>
                <td><a href="p1_approver.php">CA-17001</a></td>
                <td>STEAM CONDENSATE LINE</td>
                <td class="text-center"><span class="label label-success">Published</span></td>
                <td>Bidder List</td>
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
              <li><span class="label label-primary">Draft</span> : Contract Order di-draft</li>
              <li><span class="label label-warning">Hold</span> : Contract Order di-hold</li>
              <li><span class="label label-danger">Aborted</span> : Contract Order di-abort</li>
              <li><span class="label label-info">Approved</span> : Contract Order di-approve</li>
              <li><span class="label label-success">Published</span> : Contract Order di-publish</li>
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
