<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-outline card-primary" style="width: 100%;height:auto;">
                <div class="card-header">
                    <a class="btn btn-success" href="<?= base_url('admin/pdf') ?>">Export PDF</a>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="width: 100%;height:auto;" id="example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Laporan</th>
                                    <th>Nama</th>
                                    <th>Roboh</th>
                                    <th>Rusak Berat</th>
                                    <th>Rusak Sedang</th>
                                    <th>Rusak Ringan</th>
                                    <th>Terendam</th>
                                    <th>Terancam</th>
                                    <th>Tanggal Kejadian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($lap as $l) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $l['id_laporan'] ?></td>
                                        <td><?= $l['nama_user'] ?></td>
                                        <td align="center"><?= $l['roboh'] ?></td>
                                        <td align="center"><?= $l['rusak_ber'] ?></td>
                                        <td align="center"><?= $l['rusak_sed'] ?></td>
                                        <td align="center"><?= $l['rusak_ring'] ?></td>
                                        <td align="center"><?= $l['terendam'] ?></td>
                                        <td align="center"><?= $l['terancam'] ?></td>
                                        <td><?= $l['tanggal_kejadian'] ?></td>
                                        <td>

                                            <a data-toggle="modal" data-target="#editLapru<?= $l['id_lapru'] ?>" href="" class="badge badge-primary ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-default<?= $l['id_lapru'] ?>" href="" class="badge badge-danger">
                                                <i class="fas fa-times"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <div class="modal fade" id="editLapru<?= $l['id_lapru'] ?>" tabindex="-1" aria-labelledby="editLapru<?= $l['id_lapru'] ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editlapru<?= $l['id_lapru'] ?>Label">Edit Laporan Rumah</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/editRumah') ?>" method="post">
                                                        <div class="form-group form-group-default">
                                                            <label>Id Laporan</label>
                                                            <input type="hidden" name="id" value="<?= $l['id_lapru'] ?>">
                                                            <input type="text" class="form-control" name="id_laporan" value="<?= $l['id_laporan'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group form-group-default">
                                                            <label>Nama</label>
                                                            <input type="text" class="form-control" name="nama" value="<?= $l['nama_user'] ?>" readonly>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Roboh</label>
                                                                    <input type="number" class="form-control" name="rbh" value="<?= $l['roboh'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Rusak Berat</label>
                                                                    <input type="number" class="form-control" name="rb" value="<?= $l['rusak_ber'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Rusak Sedang</label>
                                                                    <input type="number" class="form-control" name="rs" value="<?= $l['rusak_sed'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Rusak Ringan</label>
                                                                    <input type="number" class="form-control" name="rr" value="<?= $l['rusak_ring'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Terendam</label>
                                                                    <input type="number" class="form-control" name="td" value="<?= $l['terendam'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-default">
                                                                    <label>Terancam</label>
                                                                    <input type="number" class="form-control" name="tr" value="<?= $l['terancam'] ?>" required>
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

                                    <div class="modal fade" id="modal-default<?= $l['id_lapru'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Apakah anda yakin?</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Data akan dihapus!</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <a href="<?= base_url('admin/hapusRumah/') . $l['id_lapru'] ?>" class="btn btn-primary">Hapus Data</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Id Laporan</th>
                                    <th>Nama</th>
                                    <th>Roboh</th>
                                    <th>Rusak Berat</th>
                                    <th>Rusak Sedang</th>
                                    <th>Rusak Ringan</th>
                                    <th>Terendam</th>
                                    <th>Terancam</th>
                                    <th>Tanggal Kejadian</th>
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