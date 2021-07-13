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
                            <th>Roboh</th>
                            <th>Rusak Berat</th>
                            <th>Rusak Sedang</th>
                            <th>Rusak Ringan</th>
                            <th>Terendam</th>
                            <th>Terancam</th>
                            <th>Tanggal Kejadian</th>

                        </tr>
                    </thead>
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

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($ll as $l) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $l['id_laporan'] ?></td>
                                <td><?= $l['nama'] ?></td>
                                <td align="center"><?= $l['roboh'] ?></td>
                                <td align="center"><?= $l['rusak_ber'] ?></td>
                                <td align="center"><?= $l['rusak_sed'] ?></td>
                                <td align="center"><?= $l['rusak_ring'] ?></td>
                                <td align="center"><?= $l['terendam'] ?></td>
                                <td align="center"><?= $l['terancam'] ?></td>
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