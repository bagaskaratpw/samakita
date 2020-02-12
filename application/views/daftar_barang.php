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
                                <h3>Daftar Barang </h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>
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
                                                            Tambah Barang
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Data
                                                                                Barang
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <?php echo form_open('Welcome/tambah_barang', array('class' => 'form-horizontal', 'autocomplete' => 'off')); ?>
                                                                                    <div class="form-row">
                                                                                        <div class="form-group col-md-6">
                                                                                            <label for="inputid">Id Barang</label>
                                                                                            <input type="text" class="form-control" id="id_barang" name="id_barang">
                                                                                        </div>
                                                                                        <div class="form-group col-md-6">
                                                                                            <label for="inputunit">Unit</label>
                                                                                            <input type="text" class="form-control" id="unit" name="unit">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputnama">Nama Barang</label>
                                                                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputharga">Harga</label>
                                                                                        <input type="text" class="form-control" id="harga" name="harga">
                                                                                    </div>
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">submit</button>
                                                                                    <?php echo form_close(); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                           
                                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="text-align : center;">Id Barang</th>
                                                                        <th style="text-align : center;">Nama Barang</th>
                                                                        <th style="text-align : center;">Unit</th>
                                                                        <th style="text-align : center;">Harga</th>
                                                                        <th style="text-align : center;"> Action </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($data as $barang) {?>
                                                                    <tr>
                                                                        <td style="text-align : center;"><?php echo $barang['id_barang'];?> </td>
                                                                        <td style="text-align : center;"> <?php echo $barang['nama_barang'];?></td>
                                                                        <td style="text-align : center;"><?php echo $barang['unit'];?></td>
                                                                        <td style="text-align : center;"><?php echo $barang['harga'];?></td>
                                                                        <td style="text-align : center;">
                                                                            <a href="<?php echo base_url('Welcome/hapus_barang/').$barang['id_barang'];?>" class="mb-2 btn btn-outline-danger mr-2">
                                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="javascript:void(0);" class="editbtn mb-2 btn btn-outline-warning mr-2" data-toggle="tooltip" data-placement="bottom" data-id="<?php echo $barang['id_barang'];?>">																		
                                                                            <i class="fa fa-edit" aria-hidden="true"></i>																		
                                                                            </a>
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <?php }?>
                                                                </tbody>
                                                            </table>
															 <!-- Modaledit -->
															 <div class="modal fade" id="modaledit" tabindex="-1"
                                                                role="dialog" aria-labelledby="modaledit"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Data
                                                                                Barang
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <?php echo form_open('Welcome/editbarang', array('class' => 'form-horizontal', 'autocomplete' => 'off')); ?>
                                                                                    <div class="form-row">
                                                                                        <div class="form-group col-md-6">
                                                                                            <label for="inputid">Id Barang</label>
                                                                                            <input type="text" class="form-control" id="editid" name="editid">
                                                                                        </div>
                                                                                         <div class="form-group col-md-6">
                                                                                            <label for="inputunit">Unit</label>
                                                                                            <input type="text" class="form-control" id="editunit" name="editunit">
                                                                                        </div> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputnama">Nama Barang</label>
                                                                                        <input type="text" class="form-control" id="editnama" name="editnama">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputharga">Harga</label>
                                                                                        <input type="text" class="form-control" id="editharga" name="editharga">
                                                                                    </div>
                                                                                    <button type="button" class="btn btn-secondary"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">submit</button>
                                                                                    <?php echo form_close(); ?>
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
                                    </div>
                                    <div class="clearfix"></div>
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
        <?php $this->load->view("include/js");?>
        <script>
        	
			  // Create & Edit Form
			  $('#editModal form').on('submit', function(e) {
                    let t = $(this);
                    e.preventDefault();
                    $.ajax({
                        url: t.attr('action'),
                        method: t.attr('method'),
                        data: t.serialize(),
                        success: (res) => {
                            let resObj = JSON.parse(res);
							
                            if (resObj.status === true) {
                                swal({
                                    title: "Sukses!",
                                    text: resObj.message,
									
                                    type: "success",
                                    confirmButtonText: "OK",
                                    closeOnConfirm: false,
                                }, function(isConfirm) {
                                    if (isConfirm) {
                                        location.reload();
										
                                    }
                                });
                            }
                        },
                        error: (err) => {
                            
                            if ($('#editModal form')) {
                                $('#error2').html(
                                    `<div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        ${err.responseText}
                                    </div>`);
                            }
                        }
                    })
                });


			//Edit Data
			$(document).on('click', '.editbtn', function() {
				var myId = $(this).data('id');
				$.ajax({
					type: "GET",
					url: "<?php echo base_url('Welcome/get')?>",
					dataType: "JSON",
					data: {
						id: myId
					},
					success: function(data) {
						$.each(data, function(id_barang,nama_barang, unit, harga) {
							$('#modaledit').modal('show');	
							$('[name="editid"]').val(data.id_barang);
							$('[name="editnama"]').val(data.nama_barang);
							$('[name="editunit"]').val(data.unit);
							$('[name="editharga"]').val(data.harga);						                     
						});
					}
				});
				return false;
			});
        </script>
    </body>
</html>