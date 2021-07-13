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

                        </tr>
                    </thead>
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

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($ll as $l) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $l['id_laporan'] ?></td>
                                <td><?= $l['nama'] ?></td>
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