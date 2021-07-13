<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <a class="btn btn-primary btn-round ml-auto" href="<?= site_url('supadmin') ?>">
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
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Bencana</th>
                            <th>Tanggal Kejadian</th>
                            <th>Waktu Kejadian</th>
                            <th>Koordinat</th>
                            <th>Foto Kejadian</th>
                            <th>Roboh</th>
                            <th>Rusak Berat</th>
                            <th>Rusak Sedang</th>
                            <th>Rusak Ringan</th>
                            <th>Terendam</th>
                            <th>Terancam</th>
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
                            <th>Roboh</th>
                            <th>Rusak Berat</th>
                            <th>Rusak Sedang</th>
                            <th>Rusak Ringan</th>
                            <th>Terendam</th>
                            <th>Terancam</th>
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
                                <td><?= $l['nama_user'] ?></td>
                                <td align="center"><?= $l['nama_kecamatan'] ?></td>
                                <td align="center"><?= $l['nama'] ?></td>
                                <td align="center"><?= $l['nama_bencana'] ?></td>
                                <td align="center"><?= $l['tanggal_kejadian'] ?></td>
                                <td align="center"><?= $l['waktu_kejadian'] ?> WIB</td>
                                <td align="center"><?= $l['kordinat'] ?></td>
                                <td><img src="<?= base_url('assets/img/foto_kejadian/') . $l['foto_kejadian']; ?>" width="400px" height="200px"></td>
                                <td align="center"><?= $l['roboh'] ?></td>
                                <td align="center"><?= $l['rusak_ber'] ?></td>
                                <td align="center"><?= $l['rusak_sed'] ?></td>
                                <td align="center"><?= $l['rusak_ring'] ?></td>
                                <td align="center"><?= $l['terendam'] ?></td>
                                <td align="center"><?= $l['terancam'] ?></td>
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
                                <td><?= $l['jumlah_kerugian'] ?></td>

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