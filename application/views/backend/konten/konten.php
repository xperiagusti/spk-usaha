
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0">Data konten</h3>
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
													<th>No</th>
													<th>Alternatif</th>
													<th>Judul</th>
													<th>Jenis</th>
                                                    <th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1;?>
												<?php foreach ($konten_grab as $i)  : ?>
													<tr>
                                                        <td><?= $no;?></td>
														<td>
															<?php foreach($alternatif_grab as $kr) :
																if($kr->alternatif_kode == $i->alternatif_kode){
																	echo $kr->alternatif_usaha;
																}
															endforeach;?>
														</td>
														<td><?= $i->konten_judul;?></td>
														<td><?= $i->konten_jenis;?></td>
														<td class=" text-center">
															<a href="#" class="btn btn-blue btn-md" title="Detail"  data-toggle="modal" data-target="#modalEdit<?=$i->konten_id ?>">
																<i class="fa fa-pencil-square-o"></i>
                                                				</a>
                                                				<a href="#" class="btn btn-pink btn-md" title="Edit" data-toggle="modal" data-target="#modalHapus<?= $i->konten_id ?>">
                                                    			<i class="fa fa-trash-o"></i>
                                                			</a>
														</td>
													</tr>
												<?php $no++; endforeach; ?>
											</table>
										
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
						<h3 class="modal-title" id="myModalLabel34">Tambah Konten</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('konten/create')?>" method="POST" enctype="multipart/form-data">
						<div class="modal-body">

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alternatif : </label>
										<select name="kode"  class="form-control">
											<?php foreach($alternatif_grab as $ix):?>
												<option value="<?= $ix->alternatif_kode?>"><?= $ix->alternatif_usaha?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Judul Konten: </label>
										<input type="text" placeholder="Judul konten" name="judul" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Jenis Konten: </label>
										<select name="jenis" class="form-control">
											<option value="artikel">Artikel</option>
											<option value="video">Video</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>URL : </label>
                                        <textarea name="url" class="form-control" required></textarea>
									</div>
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" name="save_konten" value="save">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php foreach ($konten_grab as $i)  : ?>
			<div class="modal fade text-left" id="modalEdit<?= $i->konten_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Edit Konten</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('konten/edit')?>" method="POST" enctype="multipart/form-data">
							<div class="modal-body">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Alternatif: </label>
											<select name="kode"  class="form-control">
												<?php foreach($alternatif_grab as $ix):?>
													<option value="<?= $ix->alternatif_kode?>" <?php if($ix->alternatif_kode == $i->alternatif_kode) {echo "selected";}?>><?= $ix->alternatif_usaha?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Judul konten: </label>
											<input type="text" placeholder="judul konten" name="judul" value="<?= $i->konten_judul ?>" class="form-control" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Jenis konten: </label>
											<select name="jenis" class="form-control">
												<option value="artikel" <?php if($i->konten_jenis=='artikel'){echo "checked";} else {}?>>Artikel</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>URL: </label>
                                            <textarea name="url" class="form-control" required><?= $i->konten_url ?></textarea>
											<input type="hidden" placeholder="kontenname" name="id" class="form-control" value="<?= $i->konten_id ?>" readonly="readonly">
										</div>
									</div>
								</div>


							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="edit_konten" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>


			<?php
		endforeach;
		foreach ($konten_grab as $i)  : 
			?>

			<div class="modal fade text-left" id="modalHapus<?= $i->konten_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myModalLabel34">Konfirmasi</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('konten/delete')?>" method="POST">
							<div class="modal-body bg-danger">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="hidden" name="id" value="<?= $i->konten_id?>">
											<label class="text-center text-white">Anda yakin ingin menghapus konten ini ?</label>
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
								<input type="submit" class="btn btn-outline-primary btn-md" name="delete_konten" value="Delete">
							</div>
						</form>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
