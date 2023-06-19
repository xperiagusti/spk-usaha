
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0">Data Alternatif</h3>
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
										<table class="table table-striped table-bordered complex-headers text-center">
											<thead>
												<tr>
													<th>Kode</th>
													<th>Alternatif</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($alternatif_grab as $i)  : ?>
													<tr>
														<td><?= $i->alternatif_kode;?></td>
														<td><?= $i->alternatif_nama;?></td>
														<td>			
																<a href="#" class="btn btn-blue btn-md" title="Detail"  data-toggle="modal" data-target="#modalEdit<?= $i->alternatif_kode ?>">
																<i class="fa fa-pencil-square-o"></i>
                                                				</a>
                                                				<a href="#" class="btn btn-pink btn-md" title="Edit" data-toggle="modal" data-target="#modalHapus<?= $i->alternatif_kode ?>">
                                                    			<i class="fa fa-trash-o"></i>
                                                				</a>
														</td>
													</tr>
												<?php endforeach; ?>
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


		<div class="modal fade text-left" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel34">Tambah Alternatif</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('alternatif/create')?>" method="POST" enctype="multipart/form-data">
						<div class="modal-body">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alternatif Kode: </label>
										<input type="text" placeholder="kode" name="kode" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Nama Alternatif: </label>
										<input type="text" placeholder="alternatamaif_nama" name="nama" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-lg" name="save_alternatif" value="Submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php foreach ($alternatif_grab as $i)  : ?>
			<div class="modal fade text-left" id="modalEdit<?= $i->alternatif_kode ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Edit Alternatif</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('alternatif/edit')?>" method="POST" enctype="multipart/form-data">
							<div class="modal-body">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Alternatif Nama: </label>
											<input type="text" placeholder="Alternatifname" name="nama" class="form-control" value="<?= $i->alternatif_nama ?>" >
											<input type="hidden" placeholder="Alternatifname" name="id" class="form-control" value="<?= $i->alternatif_kode ?>" readonly="readonly">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-lg" name="edit_alternatif" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>


			<?php
		endforeach;

		foreach ($alternatif_grab as $i)  : 
			?>

			<div class="modal fade text-left" id="modalHapus<?= $i->alternatif_kode ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Konfirmasi</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('alternatif/delete')?>" method="POST">
							<div class="modal-body bg-danger">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="hidden" name="kode" value="<?= $i->alternatif_kode?>">
											<label class="text-center text-white">Anda yakin ingin menghapus alternatif <b><?= $i->alternatif_nama ?></b> ?</label>
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-lg" name="delete_alternatif" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
