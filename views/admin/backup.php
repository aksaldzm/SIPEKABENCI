<!-- Laporan Fasilitas Umum-->
<table id="add-row" class="display table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Id Laporan</th>
            <th>Nama</th>
            <th>Gedung</th>
            <th>Sekolah</th>
            <th>Rumah Makan</th>
            <th>Masjid</th>
            <th>Tanggul Sungai</th>
            <th>Puskesmas</th>
            <th>Jembatan</th>
            <th>Jl.Nasional</th>
            <th>Jl.Kabupaten</th>
            <th>Turab Jalan</th>
            <th>Bendungan</th>
            <th>Jl.Desa</th>
            <th>Tanggal Kejadian</th>
            <th style="width: 10%">Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Id Laporan</th>
            <th>Nama</th>
            <th>Gedung</th>
            <th>Sekolah</th>
            <th>Rumah Makan</th>
            <th>Masjid</th>
            <th>Tanggul Sungai</th>
            <th>Puskesmas</th>
            <th>Jembatan</th>
            <th>Jl.Nasional</th>
            <th>Jl.Kabupaten</th>
            <th>Turab Jalan</th>
            <th>Bendungan</th>
            <th>Jl.Desa</th>
            <th>Tanggal Kejadian</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($lap as $l) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $l['id_laporan'] ?></td>
                <td><?= $l['nama'] ?></td>
                <td align="center"><?= $l['gedung'] ?></td>
                <td align="center"><?= $l['sekolah'] ?></td>
                <td align="center"><?= $l['rumah_makan'] ?></td>
                <td align="center"><?= $l['masjid'] ?></td>
                <td align="center"><?= $l['tanggul_sungai'] ?></td>
                <td align="center"><?= $l['puskesmas'] ?></td>
                <td align="center"><?= $l['jembatan'] ?></td>
                <td align="center"><?= $l['jalan_nas'] ?></td>
                <td align="center"><?= $l['jalan_kab'] ?></td>
                <td align="center"><?= $l['turab_jalan'] ?></td>
                <td align="center"><?= $l['bendungan'] ?></td>
                <td align="center"><?= $l['jalan_des'] ?></td>
                <td><?= $l['tanggal_kejadian'] ?></td>
                <td>
                    <div class="form-button-action">
                        <a data-toggle="modal" data-target="#editLapfa<?= $l['id_lapfa'] ?>" class="btn btn-link btn-primary btn-lg">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a href="<?= base_url('supadmin/hapusAkun/') . $l['id_lapfa'] ?>" class="btn btn-link btn-danger hapus">
                            <i class="fa fa-times"></i> Hapus
                        </a>
                    </div>
                </td>
            </tr>
            <?php $no++; ?>
            <div class="modal fade" id="editLapfa<?= $l['id_lapfa'] ?>" tabindex="-1" aria-labelledby="editLapfa<?= $l['id_lapfa'] ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editlapru<?= $l['id_lapfa'] ?>Label">Edit Laporan Fasilitas Umum</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/editFasilitas') ?>" method="post">
                                <div class="form-group form-group-default">
                                    <label>Id Laporan</label>
                                    <input type="hidden" name="id" value="<?= $l['id_lapfa'] ?>">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $l['id_laporan'] ?>" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $l['nama'] ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Gedung</label>
                                            <input type="number" class="form-control" name="kantor" value="<?= $l['gedung'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Sekolah</label>
                                            <input type="number" class="form-control" name="sekolah" value="<?= $l['sekolah'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Rumah Makan</label>
                                            <input type="number" class="form-control" name="rmakan" value="<?= $l['rumah_makan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Masjid</label>
                                            <input type="number" class="form-control" name="masjid" value="<?= $l['masjid'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Tanggul Sungai</label>
                                            <input type="number" class="form-control" name="tanggul" value="<?= $l['tanggul_sungai'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Puskesmas</label>
                                            <input type="number" class="form-control" name="puskesmas" value="<?= $l['puskesmas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Jemabatan</label>
                                            <input type="number" class="form-control" name="jembatan" value="<?= $l['jembatan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Jalan Nasional</label>
                                            <input type="number" class="form-control" name="jlnas" value="<?= $l['jalan_nas'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Jalan Kabupaten</label>
                                            <input type="number" class="form-control" name="jlkab" value="<?= $l['jalan_kab'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Turab Jalan</label>
                                            <input type="number" class="form-control" name="turap" value="<?= $l['turab_jalan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Bendungan</label>
                                            <input type="number" class="form-control" name="bendung" value="<?= $l['bendungan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Jalan Desa</label>
                                            <input type="number" class="form-control" name="jldes" value="<?= $l['jalan_des'] ?>" required>
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
</table>
<!--End-->

<!--Laporan Lain-->
<table id="add-row" class="display table table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Id Laporan</th>
            <th>Nama</th>
            <th>Irigasi</th>
            <th>Tebing</th>
            <th>Sawah</th>
            <th>Perkebunan</th>
            <th>Tambak</th>
            <th>Talud</th>
            <th>Pasar</th>
            <th>Pergerakan Tanah</th>
            <th>Pengungsi (Jiwa)</th>
            <th>Pengungsi (KK)</th>
            <th>Tanggal Kejadian</th>
            <th style="width: 10%">Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Id Laporan</th>
            <th>Nama</th>
            <th>Irigasi</th>
            <th>Tebing</th>
            <th>Sawah</th>
            <th>Perkebunan</th>
            <th>Tambak</th>
            <th>Talud</th>
            <th>Pasar</th>
            <th>Pergerakan Tanah</th>
            <th>Pengungsi (Jiwa)</th>
            <th>Pengungsi (KK)</th>
            <th>Tanggal Kejadian</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($lap as $l) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $l['id_laporan'] ?></td>
                <td><?= $l['nama'] ?></td>
                <td align="center"><?= $l['saluran_irigasi'] ?></td>
                <td align="center"><?= $l['tebing'] ?></td>
                <td align="center"><?= $l['sawah'] ?></td>
                <td align="center"><?= $l['perkebunan'] ?></td>
                <td align="center"><?= $l['tambak'] ?></td>
                <td align="center"><?= $l['talud'] ?></td>
                <td align="center"><?= $l['pasar'] ?></td>
                <td align="center"><?= $l['pergerakan_tnh'] ?></td>
                <td align="center"><?= $l['pengungsi_jiwa'] ?></td>
                <td align="center"><?= $l['pengungsi_kk'] ?></td>
                <td><?= $l['tanggal_kejadian'] ?></td>
                <td>
                    <div class="form-button-action">
                        <a data-toggle="modal" data-target="#editLapla<?= $l['id_lapla'] ?>" class="btn btn-link btn-primary btn-lg">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a href="<?= base_url('supadmin/hapusAkun/') . $l['id_lapla'] ?>" class="btn btn-link btn-danger hapus">
                            <i class="fa fa-times"></i> Hapus
                        </a>
                    </div>
                </td>
            </tr>
            <?php $no++; ?>
            <div class="modal fade" id="editLapla<?= $l['id_lapla'] ?>" tabindex="-1" aria-labelledby="editLapla<?= $l['id_lapla'] ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editlapru<?= $l['id_lapla'] ?>Label">Edit Laporan Lainnya</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/editLainnya') ?>" method="post">
                                <div class="form-group form-group-default">
                                    <label>Id Laporan</label>
                                    <input type="hidden" name="id" value="<?= $l['id_lapla'] ?>">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $l['id_laporan'] ?>" required>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $l['nama'] ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Saluran Irigasi</label>
                                            <input type="number" class="form-control" name="irigasi" value="<?= $l['saluran_irigasi'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Tebing</label>
                                            <input type="number" class="form-control" name="tebing" value="<?= $l['tebing'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Sawah</label>
                                            <input type="number" class="form-control" name="sawah" value="<?= $l['sawah'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Perkebunan</label>
                                            <input type="number" class="form-control" name="kebun" value="<?= $l['perkebunan'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Tambak</label>
                                            <input type="number" class="form-control" name="tambak" value="<?= $l['tambak'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Talud</label>
                                            <input type="number" class="form-control" name="talud" value="<?= $l['talud'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Pasar</label>
                                            <input type="number" class="form-control" name="pasar" value="<?= $l['pasar'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Pergerakan Tanah</label>
                                            <input type="number" class="form-control" name="tnhgr" value="<?= $l['pergerakan_tnh'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Pengungsi Jiwa</label>
                                            <input type="number" class="form-control" name="pengungsi" value="<?= $l['pengungsi_jiwa'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Pengungsi KK</label>
                                            <input type="number" class="form-control" name="png" value="<?= $l['pengungsi_kk'] ?>" required>
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
</table>
<!--End-->

<!--MAnajemen Akun-->
<table id="add-row" class="display table table-striped table-hover">
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
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($akun as $akun) { ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $akun['nama'] ?></td>
                <td><?= $akun['email'] ?></td>
                <td><?= $akun['level'] ?></td>
                <td><?= $akun['nama_upt'] ?></td>
                <td><?php if ($akun['active'] == 1) { ?> Yes <?php } else { ?> No <?php } ?></td>
                <td>
                    <div class="form-button-action">
                        <a data-toggle="modal" data-target="#editAkun<?= $akun['id_user'] ?>" class="btn btn-link btn-primary btn-lg">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <a href="<?= base_url('supadmin/hapusAkun/') . $akun['id_user'] ?>" class="btn btn-link btn-danger hapus">
                            <i class="fa fa-times"></i> Hapus
                        </a>
                    </div>
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
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $akun['nama'] ?>" required>
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
                                                <?php foreach ($upt as $upt) { ?>
                                                    <?php if ($akun['upt'] == $upt['id_upt']) { ?>
                                                        <option value="<?= $upt['id_upt'] ?>" selected><?= $upt['nama_upt'] ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $upt['id_upt'] ?>"><?= $upt['nama_upt'] ?></option>
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
</table>
<!--End-->

<!--Tambah akun-->
<div class="col-md-12">
    <div class="card">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Form Buat Akun</h4>
                <a class="btn btn-primary btn-round ml-auto" href="<?= site_url('supadmin/akun') ?>">
                    <i class="fas fa-angle-double-left"></i>
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="text-danger text-lg ml-4"><?= $error; ?></div>
            <?= form_open_multipart('supadmin/tambahAkun'); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" placeholder="Alamat E-mail" name="email" required>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" name="level_id" required>
                            <option value="">Pilih level</option>
                            <?php foreach ($level as $lvl) { ?>
                                <option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
                            <?php } ?>
                        </select>
                        <?= form_error('level_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="upt">UPT Asal</label>
                        <select class="form-control" name="upt" required>
                            <option value="">Pilih UPT</option>
                            <?php foreach ($upt as $upt) { ?>
                                <option value="<?= $upt['id_upt'] ?>"><?= $upt['nama_upt'] ?></option>
                            <?php } ?>
                        </select>
                        <?= form_error('upt', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="passsword">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="passsword2">Password</label>
                        <input type="password" class="form-control" name="password2" placeholder="Re-Password" required>
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="foto">Foto Profile</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" aria-describedby="inputGroupFileAddon04" required>
                            <label class="custom-file-label" for="foto">Pilih File</label>
                        </div>
                        <small class="text-danger pl-3">*ukuran file max 2mb dengan format .jpg .jpeg .png</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama">Kode UPT</label>
                        <input type="text" class="form-control" placeholder="Kode UPT" name="kode" required>
                        <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End-->

<!--Lihat Lap(supadmin)-->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
<div class="table-responsive">
    <table id="add-row" class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Laporan</th>
                <th>Nama</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Bencana</th>
                <th>Tanggal Kejadian</th>
                <th>Waktu Kejadian</th>
                <th>Koordinat</th>
                <th>Foto Kejadian</th>
                <th>Jumlah Kerugian</th>
                <th style="width: 10%">Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Id Laporan</th>
                <th>Nama</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Bencana</th>
                <th>Tanggal Kejadian</th>
                <th>Waktu Kejadian</th>
                <th>Koordinat</th>
                <th>Foto Kejadian</th>
                <th>Jumlah Kerugian</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($lap as $l) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $l['id_laporan'] ?></td>
                    <td><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama_bencana'] ?></td>
                    <td align="center"><?= $l['tanggal_kejadian'] ?></td>
                    <td align="center"><?= $l['waktu_kejadian'] ?> WIB</td>
                    <td align="center"><?= $l['kordinat'] ?></td>
                    <td><img src="<?= base_url('assets/img/foto_kejadian/') . $l['foto_kejadian']; ?>" width="400px" height="200px"></td>
                    <td><?= $l['jumlah_kerugian'] ?></td>
                    <td align="center">

                        <a data-toggle="modal" data-target="#detail<?= $l['id_laporan'] ?>" class="badge badge-success " href="">
                            <i class="fas fa-search-plus"></i> Detail Laporan
                        </a>

                    </td>
                </tr>
                <?php $no++; ?>
                <div class="modal fade" id="detail<?= $l['id_laporan'] ?>" tabindex="-1" aria-labelledby="detail<?= $l['id_laporan'] ?>Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detail<?= $l['id_laporan'] ?>Label">Pilih Detail</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="<?= base_url('Supadmin/lihatRumah/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Rumah</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="<?= base_url('Supadmin/lihatFasilitasUmum/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Fasilitas Umum</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="<?= base_url('Supadmin/lihatLainnya/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Lainnya</a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </tbody>
    </table>
</div>
<!--End-->