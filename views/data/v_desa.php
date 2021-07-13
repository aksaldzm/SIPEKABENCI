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

                    <a href="<?= site_url('admin/petaDesa') ?>" class="btn btn-sm btn-primary mx-1">
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
                                    <th>Kecamatan</th>
                                    <th>Id Desa</th>
                                    <th>Nama Desa</th>
                                    <th>Koordinat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <?php $no = 1; ?>
                                <?php foreach ($desa as $d) { ?>
                                    <!-- MODAL EDIT Desa -->
                                    <div class="modal fade" id="edit<?= $d['id_d'] ?>" tabindex="-1" aria-labelledby="edit<?= $d['id_d'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit<?= $d['id_d'] ?>Label">Edit Data Desa</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/editDesa') ?>" method="post">
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input type="hidden" name="id" value="<?= $d['id_d'] ?>">
                                                            <select name="kecamatan" class="form-control" required>
                                                                <?php foreach ($kecamatan as $kec) { ?>
                                                                    <?php if ($kec == $d['id_kecamatan']) { ?>
                                                                        <option value="<?= $kec['id_kecamatan'] ?>" selected><?= $kec['nama_kecamatan'] ?></option>
                                                                    <?php } ?>
                                                                    <option value="<?= $kec['id_kecamatan'] ?>"><?= $kec['nama_kecamatan'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Id Desa</label>
                                                            <input type="number" class="form-control" name="id_desa" value="<?= $d['id_desa'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Desa</label>
                                                            <input type="text" class="form-control" name="desa" value="<?= $d['nama_desa'] ?>" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-6">
                                                                <label>Latitude</label>
                                                                <input type="number" class="form-control" name="latitude" value="<?= $d['latitude'] ?>" required>
                                                            </div>
                                                            <div class="col-6">
                                                                <label>Longitude</label>
                                                                <input type="number" class="form-control" name="longitude" value="<?= $d['longitude'] ?>" required>
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
                                        <td><?= $d['nama_kecamatan'] ?></td>
                                        <td><?= $d['id_desa'] ?></td>
                                        <td><?= $d['nama_desa'] ?></td>
                                        <td>{<?= $d['latitude'] ?>, <?= $d['longitude'] ?>}</td>
                                        <td>
                                            <a type="button" data-toggle="modal" data-target="#edit<?= $d['id_d'] ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('admin/hapusDesa/') . $d['id_d'] ?>" class="btn btn-sm btn-outline-danger hapus">
                                                <i class="fa fa-times"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Kecamatan</th>
                                    <th>Id Desa</th>
                                    <th>Nama Desa</th>
                                    <th>Koordinat</th>
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

<!-- MODAL Tambah Data Desa -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Data Desa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahDesa') ?>" method="post">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select name="kecamatan" class="form-control" required>
                            <option value=""></option>
                            <?php foreach ($kecamatan as $kec) { ?>
                                <option value="<?= $kec['id_kecamatan'] ?>"><?= $kec['nama_kecamatan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Id Desa</label>
                        <input type="number" class="form-control" name="id_desa" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Desa</label>
                        <input type="text" class="form-control" name="desa" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Latitude</label>
                            <input type="number" class="form-control" name="latitude" required>
                        </div>
                        <div class="col-6">
                            <label>Longitude</label>
                            <input type="number" class="form-control" name="longitude" required>
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