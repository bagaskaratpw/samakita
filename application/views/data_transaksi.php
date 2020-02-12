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
				<!-- top tiles -->
				<div class="row" style="display: inline-block;">

				</div>
				<!-- /top tiles -->

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
													<button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#exampleModal">
														Tambah Transaksi
													</button>

													<!-- Modal -->
													<div class="modal fade" id="exampleModal" tabindex="-1"
														role="dialog" aria-labelledby="exampleModalLabel"
														aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Data
																		Transaksi</h5>
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="form-group">
																		<div class="form-line">
																			
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Save
																		changes</button>
																</div>
															</div>
														</div>
													</div>

													<!-- Modal detail -->
													 <div class="modal fade" id="modaldetail">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<?php echo form_open('Welcome/detail_trans', array('class' => 'form- horizontal', 'autocomplete' => 'off') );?>
																<div class="modal-header">
																	<h5 class="modal-title">Detail Transaksi</h5>
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="form-group">
																		<div class="form-line">
																			<?php 
																				$data = array('type' =>'hidden', 'class' => 'form-control', 'name' => 'no_inv', 'id' => 'no_inv', 'value' => set_value('no_inv'), 'required'=>'true');
																				echo form_input($data);
																			?>
																			<?php ?>
																		</div>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div> 
													<table id="datatable-responsive"
														class="table table-striped table-bordered dt-responsive nowrap"
														cellspacing="0" width="100%">
														<thead>
															<tr>
																<th style="text-align : center; ">NO. Invoice</th>
																<th style="text-align : center;">Invoice Date</th>
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
																	<a href="" class="mb-2 btn btn-outline-danger mr-2">																
																			<i class="fa fa-trash"
																				aria-hidden="true"></i>																	
																	</a>
																	<a href="" class="mb-2 btn btn-outline-warning mr-2">
																		
																			<i class="fa fa-edit"
																				aria-hidden="true"></i>
																		
																	</a>
																	<a href="#modaldetail" data-toggle="modal" class="mb-2 btn btn-outline-primary mr-2">
																	
																		<i class="fa fa-info" aria-hidden="true"></i>
																		
																	</a>
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
	</div>

	<?php $this->load->view("include/js");?>

	<!-- <script>
		$(document).on('click', '.modaldetail', function () {
			car myId = $(this).data('id');
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('Welcome/get')?>",
				dataType: "JSON",
				data: {
					id: myId
				},
				success: function (data) {
					$.each(data, function (no_inv, kode_item, nama_item, unit) {
						$('#modaldetail').modal('show');
						$('[name="no_inv"]').val(data.no_inv);
						$('[name="kode_item"]').val(data.kode_item);
						$('[name="nama_item"]').val(data.nama_item);
						$('[name="unit"]').val(data.unit);

					});
				}
			});
			return false;

		});

	</script> -->
</body>

</html>
