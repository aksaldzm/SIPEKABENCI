<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <!--<h3 class="card-title">Title</h3>-->
                        <a class="btn btn-success" href="<?= base_url('supadmin/pdf') ?>">Export PDF</a>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
                        <div class="table-responsive">
                            <table id="example1" class="display table table-striped table-hover">
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
                                        <th>K.MD</th>
                                        <th>K.LB</th>
                                        <th>K.LR</th>
                                        <th>R.RBH</th>
                                        <th>R.RB</th>
                                        <th>R.RS</th>
                                        <th>R.RR</th>
                                        <th>R.TE</th>
                                        <th>R.TA</th>
                                        <th>F.Gedung</th>
                                        <th>F.Sekolah</th>
                                        <th>F.Rumah Makan</th>
                                        <th>F.Masjid</th>
                                        <th>F.Tanggul Sungai</th>
                                        <th>F.Puskesmas</th>
                                        <th>F.Jembatan</th>
                                        <th>F.Jl.Nasional</th>
                                        <th>F.Jl.Kabupaten</th>
                                        <th>F.Turab Jalan</th>
                                        <th>F.Bendungan</th>
                                        <th>F.Jl.Desa</th>
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
                                        <th>K.MD</th>
                                        <th>K.LB</th>
                                        <th>K.LR</th>
                                        <th>R.RBH</th>
                                        <th>R.RB</th>
                                        <th>R.RS</th>
                                        <th>R.RR</th>
                                        <th>R.TE</th>
                                        <th>R.TA</th>
                                        <th>F.Gedung</th>
                                        <th>F.Sekolah</th>
                                        <th>F.Rumah Makan</th>
                                        <th>F.Masjid</th>
                                        <th>F.Tanggul Sungai</th>
                                        <th>F.Puskesmas</th>
                                        <th>F.Jembatan</th>
                                        <th>F.Jl.Nasional</th>
                                        <th>F.Jl.Kabupaten</th>
                                        <th>F.Turab Jalan</th>
                                        <th>F.Bendungan</th>
                                        <th>F.Jl.Desa</th>
                                        <th>L.Irigasi</th>
                                        <th>L.Tebing</th>
                                        <th>L.Sawah</th>
                                        <th>L.Perkebunan</th>
                                        <th>L.Tambak</th>
                                        <th>L.Talud</th>
                                        <th>L.Pasar</th>
                                        <th>L.Pergerakan Tanah</th>
                                        <th>L.Pengungsi (Jiwa)</th>
                                        <th>L.Pengungsi (KK)</th>
                                        <th>Jumlah Kerugian</th>
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
                                            <td align="center"><?= $l['mnggl_dunia'] ?></td>
                                            <td align="center"><?= $l['luka_ber'] ?></td>
                                            <td align="center"><?= $l['luka_ring'] ?></td>
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
                                            <td align="center"><?= $l['jumlah_kerugian'] ?></td>
                                        </tr>
                                        <?php $no++; ?>
                                        <div class="modal fade" id="detail<?= $l['id_laporan'] ?>" tabindex="-1" aria-labelledby="detail<?= $l['id_laporan'] ?>Label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="detail<?= $l['id_laporan'] ?>Label">Pilih Detail</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a href="<?= base_url('Supadmin/lihatRumah/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Rumah</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="<?= base_url('Supadmin/lihatFasilitasUmum/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Fasilitas Umum</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="<?= base_url('Supadmin/lihatLainnya/') . $l['id_laporan'] ?>" class="badge badge-primary">Laporan Lainnya</a>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <p>Keterangan : </p>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->