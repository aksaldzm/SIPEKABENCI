<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <!--<h3 class="card-title">Title</h3>-->

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
                                        <th>Koordinator Piket</th>
                                        <th>Petugas Piket</th>
                                        <th>Tanggal Piket</th>
                                        <th>Jenis Bencana</th>
                                        <th>Tanggal Kejadian</th>
                                        <th>Lokasi</th>
                                        <th>Dampak</th>
                                        <th>Sumber Informasi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Koordinator Piket</th>
                                        <th>Petugas Piket</th>
                                        <th>Tanggal Piket</th>
                                        <th>Jenis Bencana</th>
                                        <th>Tanggal Kejadian</th>
                                        <th>Lokasi</th>
                                        <th>Dampak</th>
                                        <th>Sumber Informasi</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($log as $l) { ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $l['koor_piket'] ?></td>
                                            <td><?= $l['petugas_piket'] ?></td>
                                            <td align="center"><?= $l['tgl_piket'] ?></td>
                                            <td align="center"><?= $l['jenis_bnc'] ?></td>
                                            <td align="center"><?= $l['tgl_kejadian'] ?><br><?= $l['waktu'] ?> WIB</td>
                                            <td align="center"><?= $l['lokasi'] ?></td>
                                            <td align="center"><?= $l['dampak'] ?></td>
                                            <td align="center"><?= $l['sumber_inf'] ?></td>
                                            <td align="center"><?= $l['keterangan'] ?></td>

                                            <td align="center">

                                                <a href="<?= base_url('Petugas_piket/Print/') .  $l['id_logbook']  ?>" class="badge badge-success ">
                                                    <i class="fas fa-search-plus"></i> Print
                                                </a>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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