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

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-danger text-lg ml-4"><?= $error; ?></div>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped" style="width: 100%;height:auto;">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>File Peta</th>
                                    <th>Tanggal Upload</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <?php $no = 1; ?>
                                <?php foreach ($json as $json) { ?>
                                    <!-- MODAL EDIT Desa -->
                                    <div class="modal fade" id="edit<?= $json['id_map'] ?>" tabindex="-1" aria-labelledby="edit<?= $json['id_map'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit<?= $json['id_map'] ?>Label">Edit Map</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= form_open_multipart('admin/editGeojson') ?>
                                                    <div class="form-group">
                                                        <label for="proposal">File GeoJson</label>
                                                        <div class="custom-file">
                                                            <input type="hidden" value="<?= $json['id_map'] ?>">
                                                            <input type="file" class="custom-file-input" name="file" aria-describedby="inputGroupFileAddon04" required>
                                                            <label class="custom-file-label" for="file">Pilih File</label>
                                                        </div>
                                                        <small class="text-danger pl-3">*format file harus .geojson</small><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <select name="tipe" class="form-control" required>
                                                            <option value=""></option>
                                                            <?php if ($json['tipe'] == 1) { ?>
                                                                <option value="1" selected>Kecamatan</option>
                                                                <option value="2">Desa</option>
                                                            <?php } else { ?>
                                                                <option value="1">Kecamatan</option>
                                                                <option value="2" selected>Desa</option>
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
                                        <td>
                                            <a href="<?= site_url('index.php/pengecek/download_proposal/') . $json['id_map'] ?>">Download <?= $json['file_map'] ?> <i class="fas fa-download"></i></a>
                                        </td>
                                        <td><?php if ($json['tipe'] == 1) { ?>Peta Kecamatan<?php } else { ?>Peta Desa<?php } ?></td>
                                        <td><?= $json['date_up'] ?></td>
                                        <td>
                                            <a type="button" data-toggle="modal" data-target="#edit<?= $json['id_map'] ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('admin/hapusDesa/') . $json['id_map'] ?>" class="btn btn-sm btn-outline-danger hapus">
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
                                    <th>File Peta</th>
                                    <th>Tanggal Upload</th>
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

<!-- MODAL Tambah Map -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Tambah Map</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('admin/tambahGeojson') ?>
                <div class="form-group">
                    <label for="proposal">File GeoJson</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="file">Pilih File</label>
                    </div>
                    <small class="text-danger pl-3">*format file harus .txt</small><br>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="tipe" class="form-control" required>
                        <option value=""></option>
                        <option value="1">Kecamatan</option>
                        <option value="2">Desa</option>
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