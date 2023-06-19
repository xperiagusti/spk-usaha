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
									<a class="btn btn-success btn-md" href="" data-toggle="modal" data-target="#modalImport"><i class="ft-upload" aria-hidden="true"></i> Import</a>
								</div>
									
							<div class="card-content collapse show">
								<div class="card-body card-dashboard">
									<p>
										<?= $this->session->flashdata('msg');?>
									</p>

									<div class="table-responsive">
										<table class="table table-striped table-bordered complex-headers  text-center" >
											<thead>
												<tr>
													<th style="display:none">Id</th>
													<th>Kode</th>
													<th>Usaha</th>
													<th>Modal</th>
													<th>Omset</th>
													<th>Laba</th>
													<th>Pesaing</th>
													<th>Tenaga Kerja</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $no=0; foreach ($alternatif_grab as $i)  : $no++; ?>
													<tr>
														<td style="display:none"><?= $no; ?></td>
														<td><?= $i->alternatif_kode;?></td>
														<td><?= $i->alternatif_usaha;?></td>
                                                        <td><?= $i->alternatif_modal;?></td>
														
                                                        <td><?= $i->alternatif_omset;?></td>
														<td><?= $i->alternatif_laba;?></td>
                                                        <td><?= $i->alternatif_pesaing;?></td>
														<td><?= $i->alternatif_pekerja;?></td>
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


		<div class="modal fade text-left" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel34">Tambah Alternatif</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('alternatif2/create')?>" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Jenis Usaha : </label>
										<input type="text" placeholder="jenis usaha" name="jenis_usaha" class="form-control"  required>
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Modal : </label>
										<input type="text"  placeholder="modal" name="modal" class="form-control"  required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Omset : </label>
										<input type="text"  placeholder="omset" name="omset" class="form-control"  required>
									</div>
								</div>
							
							</div>
                            <div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
										<label>Laba : </label>
										<input type="text"  placeholder="laba" name="laba" class="form-control"  required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Jumlah Pesaing : </label>
										<input type="text"  placeholder="jumlah pesaing" name="jumlah_pesaing" class="form-control"  required>
									</div>
								</div>
							</div>

                            <div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
										<label>Tenaga kerja : </label>
										<input type="text"   placeholder="pekerja" name="pekerja" class="form-control"  required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Gambar : </label>
											<input class="form-control-file" type="file" name="alternatif_gambar" accept=".jpg,.png,.jpeg" >
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Deskripsi : </label>
                                        <textarea class="form-control" name="deskripsi" ></textarea>
									</div>
								</div>
							</div>


							
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" name="save_alternatif" value="save">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade text-left" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel34">Upload Data</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('Alternatif2/uploaddata')?>" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="form-row">
								<div class="col-4">
									<input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" value="upload">
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
							<h3 class="modal-title" id="myModalLabel34">Edit Data Alternatif</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('alternatif2/edit')?>" method="POST" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Jenis Usaha : </label>
											<input type="text" placeholder="Jenis Usaha" name="jenis_usaha" class="form-control" value="<?= $i->alternatif_usaha ?>"  required>
											<input type="hidden" placeholder="kode" name="kode" class="form-control" value="<?= $i->alternatif_kode ?>" readonly="readonly">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<label>Modal : </label>
											<input type="text"  placeholder="Modal" name="modal" class="form-control" value="<?= $i->alternatif_modal ?>" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>Omset : </label>
											<input type="text"  placeholder="Omset" name="omset" class="form-control" value="<?= $i->alternatif_omset ?>" required>
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-6">
										<div class="form-group">
										<label>Laba : </label>
											<input type="text"  placeholder="Laba" name="laba" class="form-control" value="<?= $i->alternatif_laba ?>" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>Jumlah Pesaing : </label>
											<input type="text" placeholder="Jumlah Pesaing" name="jumlah_pesaing" class="form-control" value="<?= $i->alternatif_pesaing ?>" required>
										</div>
									</div>
								</div>
								<div class="row">
									

									<div class="col-md-6">
										<div class="form-group">
										<label>Tenaga kerja : </label>
											<input type="text"  placeholder="tenaga kerja" name="pekerja" class="form-control" value="<?= $i->alternatif_pekerja ?>" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>Gambar : </label><label><?= $i->alternatif_gambar?></label>
										<input type="file" class="form-control-file" name="alternatif_gambar" accept=".jpg,.png,.jpeg">
											
											<!-- <img src="<?= base_url('uploads/alternatif/' . $i->alternatif_gambar); ?>" width="250px" height="120px"> -->
											
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										<label>Deskripsi : </label>
                                        <textarea class="form-control" name="deskripsi" ><?= $i->alternatif_deskripsi; ?></textarea>
										
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="edit_alternatif" value="Update">
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
						<form action="<?= base_url('alternatif2/delete')?>" method="POST">
							<div class="modal-body bg-danger">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="hidden" name="kode" value="<?= $i->alternatif_kode?>">
											<label class="text-center text-white">Anda yakin ingin menghapus data alternatif <b><?= $i->alternatif_usaha ?></b> ?</label>
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="delete_alternatif" value="Delete">
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

