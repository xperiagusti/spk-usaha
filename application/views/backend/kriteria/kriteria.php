
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0">Data Kriteria</h3>
			</div>
		</div>

		<div class="content-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
								<a class="btn btn-primary btn-md ml-2" href="" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
						</div>	
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<p>
										<?= $this->session->flashdata('msg');?>
									</p>

									<div class="table-responsive">
										<table class="table table-striped table-bordered complex-headers  text-center">
											<thead>
												<tr>
													<th>Kode</th>
													<th>Kriteria</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($kriteria_grab as $i)  : ?>
													<tr>
														<td><?= $i->kriteria_kode;?></td>
														<td><?= $i->kriteria_nama;?></td>
														<td class=" text-center">
															<!-- <div class="btn-group mr-1 mb-1">
																<button type="button" class="btn btn-icon btn-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i></button>
																<div class="dropdown-menu">
																	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit<?= $i->kriteria_kode ?>">Edit</a>
																	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalHapus<?= $i->kriteria_kode ?>">Hapus</a>
																</div>
															</div> -->
															<a href="#" class="btn btn-blue btn-md" title="Detail"  data-toggle="modal" data-target="#modalEdit<?=$i->kriteria_kode ?>">
																<i class="fa fa-pencil-square-o"></i>
                                                				</a>
                                                				<a href="#" class="btn btn-pink btn-md" title="Edit" data-toggle="modal" data-target="#modalHapus<?= $i->kriteria_kode ?>">
                                                    			<i class="fa fa-trash-o"></i>
                                                			</a>
														</td>
													</tr>
												<?php endforeach; ?>
											</table>
										<!-- </div> -->
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade text-left" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel34">Tambah Kriteria</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('kriteria/create')?>" method="POST" enctype="multipart/form-data">
						<div class="modal-body">

							<!-- <div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Kriteria Kode: </label>
										<input type="text" placeholder="kode" name="kode" class="form-control">
									</div>
								</div>
							</div> -->

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Nama Kriteria: </label>
										<input type="text" placeholder="kriteria" name="nama" class="form-control" required>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" name="save_kriteria" value="save">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php foreach ($kriteria_grab as $i)  : ?>
			<div class="modal fade text-left" id="modalEdit<?= $i->kriteria_kode ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Edit Kriteria</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('kriteria/edit')?>" method="POST" enctype="multipart/form-data">
							<div class="modal-body">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Kriteria Nama: </label>
											<input type="text" placeholder="Kriteria" name="nama" class="form-control" value="<?= $i->kriteria_nama ?>" required>
											<input type="hidden" placeholder="Kriterianame" name="id" class="form-control" value="<?= $i->kriteria_kode ?>" readonly="readonly">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="edit_kriteria" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>


			<?php
		endforeach;
		foreach ($kriteria_grab as $i)  : 
			?>

			<div class="modal fade text-left" id="modalHapus<?= $i->kriteria_kode ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Konfirmasi</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('kriteria/delete')?>" method="POST">
							<div class="modal-body bg-danger">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="hidden" name="kode" value="<?= $i->kriteria_kode?>">
											<label class="text-center text-white">Anda yakin ingin menghapus kriteria <b><?= $i->kriteria_nama ?></b> ?</label>
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="delete_kriteria" value="Delete">
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
