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
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($lap as $l) { ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $l['id_laporan'] ?></td>
                                        <td><?= $l['nama_user'] ?></td>
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
                                            <a data-toggle="modal" data-target="#editLapfa<?= $l['id_lapfa'] ?>" href="" class="badge badge-primary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-default<?= $l['id_lapfa'] ?>" href="" class="badge badge-danger">
                                                <i class="fas fa-times"></i> Hapus
                                            </a>
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

                                    <div class="modal fade" id="modal-default<?= $l['id_lapfa'] ?>">
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
                                                    <a href="<?= base_url('admin/hapusFasilitas/') . $l['id_lapfa'] ?>" class="btn btn-primary">Hapus Data</a>
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