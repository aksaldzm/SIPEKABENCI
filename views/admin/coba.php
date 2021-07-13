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
                    <a href="<?= site_url('admin/petaPotensi') ?>" class="btn btn-sm btn-primary mx-1">
                        <span>Lihat Peta</span><i class="fas fa-map-marked-alt ml-2"></i>
                    </a>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="width: 100%;height:auto;" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Bencana</th>
                                    <th>Resiko</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <?php $no = 1; ?>
                                <?php foreach ($potensi as $potensi) { ?>
                                    <!-- MODAL EDIT POTENSI BENCANA -->
                                    <div class="modal fade" id="edit<?= $potensi['id_potensi'] ?>" tabindex="-1" aria-labelledby="edit<?= $potensi['id_potensi'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit<?= $potensi['id_potensi'] ?>Label">Edit Data Potensi Bencana</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/editPotensi') ?>" method="post">
                                                        <div class="form-group" id="form-kecamatan2">
                                                            <label>Nama Kecamatan</label>
                                                            <input type="hidden" value="<?= $potensi['id_potensi'] ?>" name="id">
                                                            <select name="kecamatan" class="form-control" id="kecamatan2" required>
                                                                <?php foreach ($kecamatan as $kec) { ?>
                                                                    <?php if ($potensi['id_kecamatan'] == $kec['id_kecamatan']) { ?>
                                                                        <option value="<?= $kec['id_kecamatan'] ?>" selected><?= $kec['nama_kecamatan'] ?></option>
                                                                    <?php } else { ?>
                                                                        <option value="<?= $kec['id_kecamatan'] ?>"><?= $kec['nama_kecamatan'] ?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Desa</label>
                                                            <select name="desa" class="form-control" id="desa2" required>
                                                                <?php foreach ($desa as $des) { ?>
                                                                    <?php if ($potensi['id_desa'] == $des['id_desa']) { ?>
                                                                        <option value="<?= $des['id_desa'] ?>" selected><?= $des['nama_desa'] ?></option>
                                                                    <?php } else { ?>
                                                                        <option value="<?= $des['id_desa'] ?>"><?= $des['nama_desa'] ?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tipe Bencana</label>
                                                            <select name="bencana" class="form-control" required>
                                                                <?php foreach ($bencana as $ben) { ?>
                                                                    <?php if ($potensi['bencana_id'] == $ben['id_bencana']) { ?>
                                                                        <option value="<?= $ben['id_bencana'] ?>" selected><?= $ben['nama_bencana'] ?></option>
                                                                    <?php } else { ?>
                                                                        <option value="<?= $ben['id_bencana'] ?>"><?= $ben['nama_bencana'] ?></option>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tingkat Resiko</label>
                                                            <select name="resiko" class="form-control" required>
                                                                <?php if ($potensi['resiko'] == 'Tinggi') { ?>
                                                                    <option value="Tinggi" selected>Tinggi</option>
                                                                    <option value="Sedang">Sedang</option>
                                                                    <option value="Rendah">Rendah</option>
                                                                <?php } else if ($potensi['resiko'] == 'Sedang') { ?>
                                                                    <option value="Tinggi">Tinggi</option>
                                                                    <option value="Sedang" selected>Sedang</option>
                                                                    <option value="Rendah">Rendah</option>
                                                                <?php } else { ?>
                                                                    <option value="Tinggi">Tinggi</option>
                                                                    <option value="Sedang">Sedang</option>
                                                                    <option value="Rendah" selected>Rendah</option>
                                                                <?php } ?>
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
                                    </div>
                                    <tr>
                                        <td class="text-center"><?= $no; ?></td>
                                        <td><?= $potensi['nama_kecamatan'] ?></td>
                                        <td><?= $potensi['nama_desa'] ?></td>
                                        <td><?= $potensi['nama_bencana'] ?></td>
                                        <td>
                                            <?php if ($potensi['resiko'] == 'Rendah') { ?>
                                                <span class="badge bg-success">Rendah</span>
                                            <?php } else if ($potensi['resiko'] == 'Sedang') { ?>
                                                <span class="badge bg-warning">Sedang</span>
                                            <?php } else { ?>
                                                <span class="badge bg-danger">Tinggi</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a type="button" data-toggle="modal" data-target="#edit<?= $potensi['id_potensi'] ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('admin/hapusPotensi/') . $potensi['id_potensi'] ?>" class="btn btn-sm btn-outline-danger hapus"><i class="far fa-trash-alt"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->

                                    <?php $no++; ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kecamatan</th>
                                    <th>Desa</th>
                                    <th>Bencana</th>
                                    <th>Resiko</th>
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

<!-- MODAL ADD DATA -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
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
                            <?php foreach ($resiko as $resiko) { ?>
                                <option value="<?= $resiko ?>"><?= $resiko ?></option>
                            <?php } ?>
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
</div>