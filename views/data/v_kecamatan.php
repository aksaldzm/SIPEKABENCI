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

                    <a href="<?= site_url('admin/petaKecamatan') ?>" class="btn btn-sm btn-primary mx-1">
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
                                    <th>Id Kecamatan</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <?php $no = 1; ?>
                                <?php foreach ($kecamatan as $kec) { ?>
                                    <!-- MODAL EDIT KECAMATAN -->
                                    <div class="modal fade" id="edit<?= $kec['id_k'] ?>" tabindex="-1" aria-labelledby="edit<?= $kec['id_k'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit<?= $kec['id_k'] ?>Label">Edit Data Kecamatan</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/editKecamatan') ?>" method="post">
                                                        <div class="form-group">
                                                            <label>Id Kecamatan</label>
                                                            <input type="hidden" name="id" value="<?= $kec['id_k'] ?>">
                                                            <input type="number" class="form-control" name="id_kecamatan" value="<?= $kec['id_kecamatan'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Kecamatan</label>
                                                            <input type="text" class="form-control" name="kecamatan" value="<?= $kec['nama_kecamatan'] ?>" required>
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
                                        <td><?= $kec['id_kecamatan'] ?></td>
                                        <td><?= $kec['nama_kecamatan'] ?></td>
                                        <td>
                                            <a type="button" data-toggle="modal" data-target="#edit<?= $kec['id_k'] ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('admin/hapusKecamatan/') . $kec['id_k'] ?>" class="btn btn-sm btn-outline-danger hapus">
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
                                    <th>Id Kecamatan</th>
                                    <th>Nama Kecamatan</th>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Data Kecamatan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambahKecamatan') ?>" method="post">
                    <div class="form-group">
                        <label>Id Kecamatan</label>
                        <input type="number" class="form-control" name="id_kecamatan" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" required>
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