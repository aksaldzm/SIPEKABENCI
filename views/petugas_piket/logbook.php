<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="card card-primary" style="width: 100%;height:auto;">
                <div class="card-header">
                    <h3 class="card-title">Form Logbook</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url('Petugas_piket/simpanLogbook') ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Koordinator Piket</label>
                            <input type="text" name="koor_piket" class="form-control" id="exampleInputEmail1" placeholder="Masukan Koordinator Piket">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Petugas Piket</label>
                            <input type="text" name="petugas_piket" class="form-control" id="exampleInputPassword1" placeholder="Masukan Petugas Piket">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Piket</label>
                            <input type="date" name="tgl_piket" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Jenis Bencana</label>
                            <select class="form-control select2" id="jns_bencana" name="jns_bencana" required>
                                <option value="" selected disabled>--Pilih Jenis Bencana--</option>
                                <?php foreach ($ben as $b) : ?>
                                    <option value="<?= $b['nama_bencana']; ?>"><?= $b['nama_bencana']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal Kejadian</label>
                            <input type="date" name="tgl_kejadian" class="form-control" id="exampleInputPassword1" placeholder="Masukan Petugas Piket">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Waktu Kejadian</label>
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                <input type="text" name="waktu" class="form-control timepicker" data-target="#timepicker" />
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lokasi</label>
                            <textarea class="form-control" name="lokasi" rows="3" placeholder="Masukan Lokasi ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Dampak</label>
                            <textarea class="form-control" name="dampak" rows="3" placeholder="Masukan Dampak ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sumber Informasi</label>
                            <textarea class="form-control" name="sumber" rows="3" placeholder="Masukan Sumber Informasi ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukan Keterangan ..."></textarea>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: [
            <?php foreach ($donut as $key) { ?> '<?= $key['nama_bencana'] ?>', <?php } ?>
        ],
        datasets: [{
            data: [<?php foreach ($donut as $key) { ?> '<?= $key['jumlah'] ?>', <?php } ?>],
            backgroundColor: [<?php foreach ($donut as $key) { ?> '<?= $key['warna'] ?>', <?php } ?>],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    });
</script>