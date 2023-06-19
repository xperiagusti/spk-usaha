
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0">Dashboard</h3>
			</div>
		</div>
		<div class="content-body">
			
			    <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="<?= base_url('alternatif')?>">
                        <div class="card1 card-statistic-1">
                            <div class="card-icon1 bg-blue">
                                <i class="ft-feather" style="font-size:25px; color:white;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                <h5>Total Alternatif</h5>
                                </div>
                                <div class="card-body">
                                <?php echo $alternatif;?>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="<?= base_url('kriteria')?>">
                        <div class="card1 card-statistic-1">
                            <div class="card-icon1 bg-primary">
                                <i class="ft-command " style="font-size:25px; color:white;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                <h5>Total Kriteria</h5>
                                </div>
                                <div class="card-body">
                                <?php echo $kriteria;?>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="<?= base_url('konten')?>">
                        <div class="card1 card-statistic-1">
                            <div class="card-icon1 bg-pink">
                                <i class="ft-image" style="font-size:25px; color:white;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                <h5>Total Konten</h5>
                                </div>
                                <div class="card-body">
                                <?php echo $konten;?>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="<?= base_url('user')?>">
                        <div class="card1 card-statistic-1">
                            <div class="card-icon1 bg-warning">
                                <i class="ft-user" style="font-size:25px; color:white;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                <h5>Total User</h5>
                                </div>
                                <div class="card-body">
                                <?php echo $user;?>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
			    </div>

                <div class="row match-height">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hasil Rangking</h4>
                            <!-- <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
										<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
										<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
										<li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-hovered ">
                                        <tr>
                                        <td>Rangking</td>
                                        <td>Kode</td>
                                        <td>Nama</td>
                                        <td>Nilai</td>
                                        </tr>
                                        <?php $no=0; foreach ($hasil_report as $key => $value) : $no++;?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $value->alternatif_kode ?></td>
                                            <td><?= $value->alternatif_usaha ?></td>
                                            <td><?= $value->hr_value ?></td>
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


		