<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-outline card-primary" style="width: 100%;height:auto;">
                <div class="card-header">
                    <a href="#" class="btn btn-sm btn-primary mx-1" data-toggle="modal" data-target="#tambahData">
                        <span>Tambah Data</span><i class="fal fa-plus ml-2"></i>
                    </a>
                    <a href="<?= site_url('admin/petaTempatevakuasi') ?>" class="btn btn-sm btn-primary mx-1">
                        <span>Lihat Peta</span><i class="fas fa-map-marked-alt ml-2"></i>
                    </a>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped" style="width: 100%;height:auto;">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Koordinat</th>
                                    <th>No Telp</th>
                                    <th>Luas</th>
                                    <th>Kapasitas</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <?php $no = 1; ?>
                                <?php foreach ($tempat as $tpt) { ?>
                                    <!-- MODAL EDIT KECAMATAN -->
                                    <div class="modal fade" id="edit<?= $tpt['id_tempat'] ?>" tabindex="-1" aria-labelledby="edit<?= $tpt['id_tempat'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit<?= $tpt['id_tempat'] ?>Label">Edit Tempat Evakuasi</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/editTempat') ?>" method="post">
                                                        <div class="row form-group">
                                                            <div class="col-6">
                                                                <label>Nama Tempat</label>
                                                                <input type="hidden" name="id" value="<?= $tpt['id_tempat'] ?>">
                                                                <input type="text" class="form-control" name="nama" value="<?= $tpt['nama_tempat'] ?>" required>
                                                            </div>
                                                            <div class="col-6"><label>Alamat</label>
                                                                <textarea class="form-control" name="alamat" required><?= $tpt['alamat'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-6">
                                                                <label>Latitude</label>
                                                                <input type="text" class="form-control" name="latitude" value="<?= $tpt['latitude'] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Longitude</label>
                                                                <input type="text" class="form-control" name="longitude" value="<?= $tpt['longitude'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-6">
                                                                <label>No Telp</label>
                                                                <input type="number" class="form-control" name="telp" value="<?= $tpt['no_telp'] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Luas m<sup>2</sup></label>
                                                                <input type="number" class="form-control" name="luas" value="<?= $tpt['luas'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-6">
                                                                <label>Kapasitas</label>
                                                                <input type="number" class="form-control" name="kapasitas" value="<?= $tpt['kapasitas'] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Keterangan</label>
                                                                <input type="text" class="form-control" name="keterangan" value="<?= $tpt['keterangan'] ?>" required>
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
                                    <tr>
                                        <td class="text-center"><?= $no; ?></td>
                                        <td><?= $tpt['nama_tempat'] ?></td>
                                        <td><textarea class="form-control" cols="30" rows="5" readonly><?= $tpt['alamat'] ?></textarea></td>
                                        <td><?= $tpt['latitude'] ?>, <?= $tpt['longitude'] ?></td>
                                        <td><?= $tpt['no_telp'] ?></td>
                                        <td><?= $tpt['luas'] ?></td>
                                        <td><?= $tpt['kapasitas'] ?></td>
                                        <td><?= $tpt['keterangan'] ?></td>
                                        <td>
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a type="button" data-toggle="modal" data-target="#edit<?= $tpt['id_tempat'] ?>" class="dropdown-item">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= base_url('data/hapusTempat/') . $tpt['id_tempat'] ?>" class="dropdown-item hapus"><i class="far fa-trash-alt"></i> Hapus</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Tempat</th>
                                    <th>Alamat</th>
                                    <th>Koordinat</th>
                                    <th>No Telp</th>
                                    <th>Luas</th>
                                    <th>Kapasitas</th>
                                    <th>Keterangan</th>
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

<!-- MODAL Tambah Data KECAMATAN -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Tempat Evakuasi</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahTempat') ?>" method="post">
                    <div class="row form-group">
                        <div class="col-6">
                            <label>Nama Tempat</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="col-6"><label>Alamat</label>
                            <textarea class="form-control" name="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <label>Latitude</label>
                            <input type="text" class="form-control" name="latitude" required>
                        </div>
                        <div class="col-6">
                            <label>Longitude</label>
                            <input type="text" class="form-control" name="longitude" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <label>No Telp</label>
                            <input type="number" class="form-control" name="telp" required>
                        </div>
                        <div class="col-6">
                            <label>Luas m<sup>2</sup></label>
                            <input type="number" class="form-control" name="luas" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <label>Kapasitas</label>
                            <input type="number" class="form-control" name="kapasitas" required>
                        </div>
                        <div class="col-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required>
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