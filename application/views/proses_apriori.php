<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url("");?>asset/images/favicon.ico" type="image/ico" />

	<title>Samakita | Apriori </title>
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
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Proses Apriori </h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">

						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Input <small>Support dan Confidence</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="row">
										<div class="col-sm-12">
											<div class="col-md-6 col-sm-6  form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" id="inputSuccess2"
													placeholder="Minimal Support">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
													<input type="text" style="width: 200px" name="reservation" id="reservation"
														class="form-control" value="01/01/2018 - 01/25/2018" />
												</div>
											</div>
											<div class="col-md-6 col-sm-6  form-group has-feedback">
												<input type="text" class="form-control has-feedback-left" id="inputSuccess2"
													placeholder="Minimal Confidence">
												<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
											</div>
										</div>

									</div>
									<div class="ln_solid"></div>
									<div class="item form-group">
										<div class="col-md-6 col-sm-6">
											<button type="submit" class="btn btn-success">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="clearfix"></div>


						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Itemset 1 </h2>
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

												<table id="datatable" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</thead>


													<tbody>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Itemset 2 </h2>
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

												<table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</thead>


													<tbody>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Itemset 3</h2>
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

												<table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
															<th>Name</th>
															<th>Position</th>
															<th>Office</th>
															<th>Age</th>
															<th>Start date</th>
															<th>Salary</th>
														</tr>
													</thead>


													<tbody>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>

			</div>

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
	</div>

	<script>
		$('#datatable').DataTable();
		$('#datatable2').DataTable();
		$('#datatable3').DataTable();

	</script>

	<?php $this->load->view("include/js");?>

</body>

</html>
