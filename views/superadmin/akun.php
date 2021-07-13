<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<?= $this->session->flashdata('message'); ?>
			<div class="card card-outline card-primary" style="width: 100%;height:auto;">
				<div class="card-header">
					<a href="<?= base_url('Supadmin/tambahAkun') ?>" class="btn btn-sm btn-primary mx-1">
						<span>Tambah Akun</span><i class="fal fa-plus ml-2"></i>
					</a>
					<!--<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fas fa-minus"></i></button>
					</div>-->
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped" style="width: 100%;height:auto;" id="example1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Level</th>
									<th>UPT Asal</th>
									<th>Active</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($akun as $akun) { ?>
									<tr>
										<td><?= $no ?></td>
										<td><?= $akun['nama_user'] ?></td>
										<td><?= $akun['email'] ?></td>
										<td><?= $akun['level'] ?></td>
										<td><?= $akun['nama_upt'] ?></td>
										<td><?php if ($akun['active'] == 1) { ?> Yes <?php } else { ?> No <?php } ?></td>
										<td>
											<a href="" data-toggle="modal" data-target="#editAkun<?= $akun['id_user'] ?>" class="badge badge-primary ">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a href="<?= base_url('supadmin/hapusAkun/') . $akun['id_user'] ?>" class="badge badge-danger">
												<i class="fas fa-times"></i> Hapus
											</a>
										</td>
									</tr>
									<?php $no++; ?>
									<div class="modal fade" id="editAkun<?= $akun['id_user'] ?>" tabindex="-1" aria-labelledby="editAkun<?= $akun['id_user'] ?>Label" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="editAkun<?= $akun['id_user'] ?>Label">Edit Akun</h5>
													<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<form action="<?= base_url('supadmin/editAkun') ?>" method="post">
														<div class="form-group form-group-default">
															<label>Nama Lengkap</label>
															<input type="hidden" name="id" value="<?= $akun['id_user'] ?>">
															<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $akun['nama_user'] ?>" required>
														</div>
														<div class="form-group form-group-default">
															<label>Alamat Email</label>
															<input type="email" class="form-control" placeholder="Alamat E-mail" name="email" value="<?= $akun['email'] ?>" required>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group form-group-default">
																	<label>Level</label>
																	<select class="form-control" name="level" required>
																		<?php foreach ($level as $lvl) { ?>
																			<?php if ($akun['level_id'] == $lvl['id_level']) { ?>
																				<option value="<?= $lvl['id_level'] ?>" selected><?= $lvl['level'] ?></option>
																			<?php } else { ?>
																				<option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
																			<?php } ?>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group form-group-default">
																	<label>UPT Asal</label>
																	<select class="form-control" name="upt" required>
																		<?php foreach ($upt as $u) { ?>
																			<?php if ($akun['upt'] == $u['id_upt']) { ?>
																				<option value="<?= $u['id_upt'] ?>" selected><?= $u['nama_upt'] ?></option>
																			<?php } else { ?>
																				<option value="<?= $u['id_upt'] ?>"><?= $u['nama_upt'] ?></option>
																			<?php } ?>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group form-group-default">
																	<label>Active</label>
																	<select class="form-control" name="active" required>
																		<?php if ($akun['active'] == 1) { ?>
																			<option value="1" selected>Yes</option>
																			<option value="0">No</option>
																		<?php } else { ?>
																			<option value="1">Yes</option>
																			<option value="0" selected>No</option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
															<button type="submit" class="btn btn-primary">Simpan</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Level</th>
									<th>UPT Asal</th>
									<th>Active</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!--<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Data Potensi Bencana</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahPotensi') ?>" method="post">
                    <div class="form-group" id="form-kecamatan">
                        <label>Nama Kecamatan</label>
                        <select name="kecamatan" class="form-control" id="kecamatan" required>
                            <option value=""></option>
                            <?php foreach ($kecamatan as $kec) { ?>
                                <option value="<?= $kec['id_kecamatan'] ?>"><?= $kec['nama_kecamatan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipe Bencana</label>
                        <select name="bencana" class="form-control" id="bencana" required>
                            <option value=""></option>
                            <?php foreach ($bencana as $ben) { ?>
                                <option value="<?= $ben['id_bencana'] ?>"><?= $ben['nama_bencana'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tingkat Resiko</label>
                        <select name="resiko" class="form-control" required>
                            <option value=""></option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- <script>
    $(document).ready(function() {
        $('#table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('admin/get_json'); ?>",
                "type": "POST"
            },
            "columns": [{
                    "data": "No"
                },
                {
                    "data": "id_kecamatan"
                },
                {
                    "data": "id_desa"
                },
                {
                    "data": "id_bencana"
                },
                {
                    "data": "resiko"
                },
                {
                    "data": "action"
                }
            ],
            "columnDefs": [{
                    "targets": [0, 5],
                    "orderable": true
                },
                {
                    "targets": [2, -1],
                    "classname": "text-center"
                }
            ]
        });
    });
</script> -->