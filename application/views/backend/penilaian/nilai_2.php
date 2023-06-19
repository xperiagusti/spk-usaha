<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0">Data Nilai Alternatif</h3>
			</div>
		</div>
		<div class="content-body">
			
			<div class="row">
				<div class="col-12">
					<div class="card">
							<div class="card-body">
								<a class="btn btn-primary btn-md ml-2" href="" data-toggle="modal" data-target="#addNewModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah</a>
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
                                                <th>Alternatif</th>
                                                <th>Kriteria</th>
                                                <th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                <?php 
                                                    $count=0; foreach ($alternatif->result() as $row) : 
                                                ?>
                                                <tr>
                                                   
                                                    <td><?php echo $row->alternatif_kode;?></td>
                                                    <td><?php echo $row->alternatif_usaha;?></td>
                                                    <td><?php echo $row->item_parameter.' Items';?></td>
                                                    <td class=" text-center">
                                                        <a href="#" class="btn btn-blue btn-md update-record" data-alternatif_kode="<?php echo $row->alternatif_kode;?>" data-alternatif_usaha="<?php echo $row->alternatif_usaha;?>"> 
                                                        <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-pink btn-md delete-record" data-alternatif_kode="<?php echo $row->alternatif_kode;?>">
                                                        <i class="fa fa-trash-o"></i>
                                                        </a>
                                                        
                                                        <!-- <a href="#" class="btn btn-blue btn-md" title="Detail"  data-toggle="modal" data-target="#modalEdit<?= $i->nilai_id ?>">
														    <i class="fa fa-pencil-square-o"></i>
                                                		</a>
                                                		<a href="#" class="btn btn-pink btn-md" title="Edit" data-toggle="modal" data-target="#modalHapus<?= $i->nilai_id ?>">
                                                    		
                                                		</a> -->
                                                    </td>
                                                </tr>
                                                <?php endforeach;?>
                                            </tbody>
											</table>
										
									</div>
								</div>
							</div>
						
					</div>
				</div>
			</div>
		</div>

        <div class="modal fade text-left" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="myModalLabel34">Tambah Nilai Alternatif</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                    <form action="<?php echo site_url('nilai_2/create');?>" method="post">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alternatif: </label>
										<select name="alternatif"  class="form-control">
                                            <?php foreach ($data_alternatif->result() as $row) :?>
                                                <option value="<?php echo $row->alternatif_kode;?>"><?php echo $row->alternatif_usaha;?></option>
                                            <?php endforeach;?>
                                        </select>     
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Parameter: </label>
                                        <select class="bootstrap-select" name="parameter[]" data-width="100%"  data-live-search="true" multiple required>

                                            <?php foreach ($parameter->result() as $kx) :?>
                                                <option value="<?php echo $kx->parameter_id;?>">
                                                    <?php foreach($kriteria->result() as $kt) :
														if($kx->kriteria_kode == $kt->kriteria_kode)
                                                        {
															echo $kt->kriteria_nama." (".$kx->parameter_ukuran ." | ".$kx->parameter_nilai.")" ;
														}
												    endforeach;?>
                                                </option>
                                            <?php endforeach;?>
                                        </select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" value="save">
						</div>
					</form>
				</div>
			</div>
		</div>
      

        
        <div class="modal fade text-left" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel34">Update Nilai Alternatif</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo site_url('nilai_2/update');?>" method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alternatif</label>
                                        <input type="text" name="alternatif_edit" class="form-control" placeholder="Alternatif Name" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Parameter</label>
                                        <select class="bootstrap-select strings" name="parameter_edit[]" data-width="100%" data-live-search="true" multiple required>
                                        <?php foreach ($parameter->result() as $kx) :?>
                                            <option value="<?php echo $kx->parameter_id;?>">
                                                <?php foreach($kriteria->result() as $kt) :
                                                    if($kx->kriteria_kode == $kt->kriteria_kode)
                                                    {
                                                    echo $kt->kriteria_nama." (".$kx->parameter_ukuran . "|" . $kx->parameter_nilai.")" ;
                                                    }
                                                    endforeach;?>
                                            </option>
                                        <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="edit_id" required>
                            <!-- <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-sm">Update</button> -->

                            <input type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="Close">
							<input type="submit" class="btn btn-outline-primary btn-md" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       

       
        <div class="modal fade" id="DeleteModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo site_url('nilai_2/delete');?>" method="post">
                        <div class="modal-body bg-danger">

                        <label class="text-center text-white">Anda yakin ingin menghapus data ini ?</label>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="delete_id" required>
                            <input type="reset" class="btn btn-outline-secondary btn-md" data-dismiss="modal" value="close">
							<input type="submit" class="btn btn-outline-primary btn-md" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        lkjljljlkj
        

        



	

