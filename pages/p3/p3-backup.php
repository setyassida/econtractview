<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.hr {
			border-top: 1px dotted #000000 !important;
			margin-bottom:5px !important;
			margin-top:5px !important;
		}
	</style>
	<title>Prebid Meeting</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap style -->
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<!-- daterange picker -->
	<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="../../plugins/datepicker/bootstrap-datepicker.css">
	<!-- bootstrap timepicker -->
	<link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="../../resources/css/font-awesome.min.css">
	<!-- ptb style -->
	<link rel="stylesheet" href="../../resources/css/ptbapps.css">


	<!-- jquery js -->
	<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- bootstrap js -->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
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
				<h4 class=""><b>PREBID MEETING</b></h4>
				<p>Dokumen Prebid Meeting</p>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h5>
								<span class="glyphicon glyphicon-list-alt"></span>&nbsp;<strong>Informasi Kontrak</strong>
							</h5>
						</div>
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-3">Nomor Kontrak :</label>
										<div class="col-md-3">
											<p class="form-control-static">CO-17001</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Nomor PR Services :</label>
										<div class="col-md-3">
											<p class="form-control-static">CA-17001</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Jenis Kontrak :</label>
										<div class="col-md-3">
											<p class="form-control-static">Pemilihan Langsung</p>
										</div>
									</div>

								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-md-4">Tanggal Opening :</label>
										<div class="col-md-3">
											<p class="form-control-static">17 April 2018</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Status :</label>
										<div class="col-md-3">
											<p class="form-control-static">WAITING</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">Unduh Template Risalah Prebid Meeting :</label>
										<div class="col-md-3">
											<button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-download-alt"></span></button>
										</div>
									</div>

								</div>

								<!-- KOLOM KANAN -->
								

								<div class="col-md-12">
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<b>Upload Dokumen Prebid Meeting</b>
										</div>
										<div class="panel-body">
											<table id="dataTable" class="table table-hover">
												<thead>
													<tr>
														<th class="col-md-1">No</th>
														<th class="col-md-3">Nama Dokumen</th>
														<th class="col-md-1"></th>
														<th class="col-md-6">File</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Risalah Prebid Meeting</td>
														<td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#1">Choose File</button></td>
														<td>belum ada file terpilih</td>
													</tr>
													<tr>
														<td>2</td>
														<td>Breakdown Penawaran</a></td>
														<td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#1">Choose File</button></td>
														<td>belum ada file terpilih</td>
													</tr>
												</tbody>
											</table>

											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addMoreModal"><span class="glyphicon glyphicon-plus"></span> Add More </button>

											<!-- Modal Choose File-->
											<div id="1" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title"><strong>Risalah Prebid Meeting</strong></h4>
														</div>
														<div class="modal-body">
															<div class="col-md-12">
																<div class="form-group">
																	<label class="control-label" for="exampleInputFile">Dokumen : </label>
																	<input type="file" id="inputFile" multiple>
																</div>
																<div class="form-group">
																	<label class="control-label" for="description">Deskripsi : </label>
																	<textarea class="form-control" rows="5" id="description" name="description" style="resize:none"></textarea>
																</div>
															</div>
															<button id="okButton" type="button" class="btn btn-primary btn-md" data-dismiss="modal" value="1">Ok</button>
														</div>
														
														
													</div>
													
												</div>

											</div>

											<!-- Modal Add More-->
											<div id="addMoreModal" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title"><strong>Add More</strong></h4>
														</div>
														<div class="modal-body">
															<div class="col-md-12">
																<div class="form-group">
																	<label class="control-label" for="exampleInputFile">Nama Dokumen : </label>
																	<input class="form-control" type="text" id="addMoreNamaDokumen">
																</div>
															</div>
															
															<button type="button" id="addMoreButton" class="btn btn-primary btn-md " data-dismiss="modal" onclick="">Add</button>

														</div>
														
														
													</div>
													
												</div>

											</div>



										</div>
									</div>
								</div>

								<div class="col-md-6">
									<button class="btn btn-danger btn-lg"> Abort </button>
									<button class="btn btn-success btn-lg"> Upload </button>
								</div>

							</div>
						</form>


					</div>
				</div>
			</div>

		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">Place sticky footer content here.</p>
		</div>
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

  <script type="text/javascript">
  	//addMore button
  	$("#addMoreButton").click(function(){
    	
    	//get value of nama dokumen
    	var namaDokumen = $("#addMoreNamaDokumen").val();
    	$("#addMoreNamaDokumen").val("");

    	//get last number
    	var text = $("#dataTable tr:last").find("td:first").text();
    	text++;

    	var data = "<tr><td>" + String(text) + "</td><td>" + namaDokumen + "</td><td><button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#myModal'>Choose File</button></td></tr>";

    	

    	$("#dataTable tr:last").after(data);
		});

		//ok choose file button
		$("#okButton").click(function(){
			//get okButton value
			var trNum = $("#okButton").val();

			//find td with first column value same as button value
			var tableRow = $("#dataTable td").filter(function() {
			    return $(this).text() == trNum;
			}).closest("tr");
    	
			//get 
			var files = $('#inputFile').prop("files");
			var names = $.map(files, function(val) { return val.name; });

    	//replace column filename
    	tableRow.find("td:last").text(names);

    	alert(tableRow.find("td:last").text());

		});


  </script>
</body>
</html>
