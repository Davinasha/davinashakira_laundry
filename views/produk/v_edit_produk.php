<?php 
session_start();
include_once '../template/header.php'; 
include_once '../template/sidebar.php'; 
include_once '../template/topbar.php'; 
?>

<?php

include_once '../../controllers/c_outlet.php';
include_once '../../controllers/c_produk.php';

$outlet = new c_outlet();
$produk = new c_produk();
?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Edit Produk </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- start form  -->
            <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Edit Produk</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="../../routers/r_produk.php?aksi=update" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <?php 
                                        foreach ($produk->edit($_GET['id']) as $o) {
                                    ?>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="id" class="form-control" value="<?= $o->id ?>" hidden>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Jenis<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nama" name="nama" required="required" class="form-control" value="<?= $o->jenis ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama Paket</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="alamat" class="form-control" type="text" name="nama paket" value="<?= $o->nama_paket ?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="telepon" class="form-control" type="text" name="harga" value="<?= $o->harga ?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Outlet</label>
											<div class="col-md-6 col-sm-6 ">
											<select id="outlet" class = "form-control" name = "id_outlet">
                           <option>choose option</option>
                           <?php foreach ($outlet->tampil() as $o) { ?>
                           <option value="<?= $o->id ?>"><?= $o->nama ?> </option>
                           <?php } ?>  
                           </select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="submit" name="update">Update</button>
											</div>
										</div>
                                        
                    <?php } ?>
									</form>
								</div>
							</div>
						</div>
					</div>			
            <!-- end form  -->

          </div>
        </div>
        <!-- /page content -->


<?php include_once '../template/footer.php';?>