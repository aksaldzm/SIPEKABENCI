<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <a class="btn btn-primary btn-round ml-auto" href="<?= site_url('supadmin/lihatLaporan') ?>">
                    <i class="fas fa-angle-double-left"></i>
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            <div class="table-responsive">
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

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($ll as $l) { ?>
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

                            </tr>
                            <?php $no++; ?>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>