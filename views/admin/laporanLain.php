<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-outline card-primary" style="width: 100%;height:auto;">
                <!--<div class="card-header">

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style="width: 100%;height:auto;" id="example1">
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
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($lap as $l) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $l['id_laporan'] ?></td>
                                        <td><?= $l['nama_user'] ?></td>
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
                                            <a data-toggle="modal" data-target="#editLapla<?= $l['id_lapla'] ?>" class="badge badge-primary ">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="<?= base_url('supadmin/hapusAkun/') . $l['id_lapla'] ?>" class="badge badge-danger">
                                                <i class="fas fa-times"></i> Hapus
                                            </a>
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