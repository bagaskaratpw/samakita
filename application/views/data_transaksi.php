<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url("");?>asset/images/favicon.ico" type="image/ico" />

	<title>Samakita | Data Transaksi</title>
	<?php $this->load->view("include/css");?>
</head>

<body class="nav-md">

	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Samakita</span></a>
					</div>

					<div class="clearfix"></div>


					<br />

					<?php $this->load->view('include/sidebar');?>
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">

						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Daftar Transaksi</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-4">
							<div class="x_panel">
								<div class="x_title">
									<h2>Input Transaksi</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<div class="form-group">
										<div class="form-line">
										<!-- <form action="" enctype="multipart/form-data"></form> -->
											<?php echo form_open_multipart('transaksi/tambah_checkout'); ?>
											<div class="form-row">
												<!-- <div class="form-group col-md-6">
													<label for="inputid"> No. Invoice</label>
													<input type="text" class="form-control" id="id_barang"
														name="id_barang">
												</div> -->
												<div class="form-group col-md-12">
													<label for="inputunit">Invoice Date</label>
													<input class="form-control" class='date' type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
												</div>
											</div>
											<div class="form-group">
												<label>Barang</label>
												<select name="barang" id="barang" class="form-control select2" required>
													<option value="">Pilih Barang</option>
													<?php
													foreach($kode as $kode)
													{
													echo '<option value="'.$kode['id_barang'].'">'.$kode['id_barang']." - ".$kode['nama_barang'].'</option>';
													}
													?>
												</select>
											</div>
											<input type="hidden" id="nama_barang" name="nama_barang">
											<div class="form-group">
												<div class="row">
													<div class="col-md-4">
														<label>Unit</label>
														<input type="type" class="form-control" id="unit" name="unit" readonly>
													</div>
													<div class="col-md-8">
														<label>Harga</label>
														<input type="text" class="form-control" id="harga" name="harga" readonly>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Banyak</label>
												<input type="number" name="quantity" id="" value="1" class="quantity form-control" required>
											</div>
											<button type="submit" class="btn btn-primary">ADD</button>
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="x_panel">
								<div class="x_title">
									<h2>Daftar Belanja</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form class="form-label-left input_mask" action="<?php echo base_url('transaksi/tambah_transaksi') ?>" method="POST">

										<table class="table table-bordered">
											<thead>
												<tr>
												<th style="align-center">Id Barang</th>
												<th>Nama Barang</th>
												<th>unit</th>
												<th>Harga</th>
												<th>Banyak</th>
												<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($data_checkout as $c): ?>
												<input type="hidden" name="c_tgl_trans" value="<?php echo $c['tgl_trans']; ?>">
												<tr>
													<td>
														<?php echo $c['kode_item']; ?>
														<input type="hidden" name="c_kode_item[]" value="<?php echo $c['kode_item']; ?>">
													</td>
													<td>
														<?php echo $c['nama_barang']; ?>
														<input type="hidden" name="c_nama_barang[]" value="<?php echo $c['nama_barang']; ?>">
													</td>
													<td>
														<?php echo $c['unit']; ?>
														<input type="hidden" name="c_unit[]" value="<?php echo $c['unit']; ?>">
													</td>
													<td>
														Rp. <?php echo number_format($c['amount'],2,',','.'); ?>
														<input type="hidden" name="c_amount[]" value="<?php echo $c['amount']; ?>">
													</td>
													<td>
														<?php echo $c['quantity']; ?>
														<input type="hidden" name="c_quantity[]" value="<?php echo $c['quantity']; ?>">
													</td>
													<td>
													-
													</td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
										<button type="submit" class="btn btn-primary">Checkout</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /ROW -->

					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="dashboard_graph">
								<div class="col-md-12 col-sm-12 ">
									<div class="x_panel">
										<div class="x_title">
											<h2>Data Transaksi <small>Pelanggan</small></h2>
											<ul class="nav navbar-right panel_toolbox">
												<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
										<div class="x_content">
											<div class="row">
												<div class="col-sm-12">
													<div class="card-box table-responsive">
														<!-- Button trigger modal -->

														<!-- Modal detail -->
														<div class="modal fade" id="modaldetail">
															<div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																	<?php echo form_open('Welcome/detail_trans', array('class' => 'form- horizontal', 'autocomplete' => 'off') );?>
																	<div class="modal-header">
																		<h5 class="modal-title">Detail Transaksi
																		</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<table class="table table-striped table-bordered" style="width:100%">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>No Invocie</th>
																					<th>Kode Item</th>
																					<th>Nama Barang</th>
																					<th>Unit</th>
																					<th>Harga</th>
																					<th>Jumlah Beli</th>
																					<th>Total Harga</th>
																				</tr>
																			</thead>
																			<tbody id="table_detail">
																				<tr>
																					<td></td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>

														<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th style="text-align : center; ">NO. Invoice
																	</th>
																	<th style="text-align : center;">Invoice Date
																	</th>
																	<th>Detail</th>
																</tr>
															</thead>

															<tbody>
																<?php foreach($trans as $data) {?>
																<tr>
																	<td>
																		<?php echo $data['no_inv'];?>
																	</td>
																	<td>
																		<?php echo $data['tgl_trans'];?>
																	</td>
																	<td>
																		<a href=""
																			class="mb-2 btn btn-outline-danger mr-2">
																			<i class="fa fa-trash"
																				aria-hidden="true"></i>
																		</a>
																		<a href=""
																			class="mb-2 btn btn-outline-warning mr-2">

																			<i class="fa fa-edit"
																				aria-hidden="true"></i>

																		</a>
																		<button type="button" class="btn btn-outline-primary mr-2 mb-2 btn_detail" id="btn_detail" data-id="<?php echo $data['no_inv']; ?>">
																			<i class="fa fa-info" aria-hidden="true"></i>
																		</button>
																		<!-- <a href="#modaldetail" data-toggle="modal"
																			class="mb-2 btn btn-outline-primary mr-2">

																			<i class="fa fa-info"
																				aria-hidden="true"></i>

																		</a> -->
																	</td>
																</tr>
																<?php }?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<br />

				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->


		</div>
		<!-- main container -->
	</div>
	<!-- container -->


	<?php $this->load->view("include/js");?>

	<script>
	$(function(){
		$(".select2").select2();
		// $("#datepicker").datepicker({
		// 	autoclose: true,
		// });
	});
	$("#barang").change(function(){
		$.getJSON('<?php echo base_url("Welcome/ajax_kode/"); ?>'+$(this).val())
			.then(res => {
			$("#nama_barang").val(res.nama_barang);
			$("#harga").val(res.harga);
			$("#unit").val(res.unit);
		});
	});
	$('#datatable-responsive').on('click', '#btn_detail', function(){
		var no_inv = $(this).data('id');
		$.ajax({
			url: '../transaksi/coba',
			type: 'GET',
			data: {no_inv:no_inv},
			dataType: 'JSON',
			success: (res) => {
				console.log(res);
				$('#modaldetail').modal('show');
				var html = '';
				var i, no=1;
				for(i=0; i<res.length; i++){
					html += '<tr>'+
							'<td>'+no+++'</td>'+
							'<td>'+res[i].no_inv+'</td>'+
							'<td>'+res[i].kode_item+'</td>'+
							'<td>'+res[i].nama_barang+'</td>'+
							'<td>'+res[i].unit+'</td>'+
							'<td>'+res[i].harga+'</td>'+
							'<td>'+res[i].quantity+'</td>'+
							'<td>'+res[i].amount+'</td>'+
							'</tr>';
				}
				$('#table_detail').html(html);
			},
			error: (err) => {

			}
		});
	});;
	</script> 
</body>

</html>
