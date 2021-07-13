<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"></h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url('Admin/lapor'); ?>" method="POST" enctype="multipart/form-data">
                            <input id="id_user" name="id_user" type="hidden" value="   <?= $user['id_user']; ?>">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">


                                        <label for="jns_bencana" class="placeholder">ID Laporan</label>
                                        <input id="id_laporan" name="id_laporan" type="text" class="form-control " value="<?= $user['kode']; ?>-<?php echo sprintf("%03s", $id_lap); ?>" readonly>
                                        <small id="emailHelp" class="form-text text-muted">* Id Laporan</small>
                                        <label for="jns_bencana" class="placeholder"></label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <div class="form-group" id="form-kecamatan">
                                        <label for="selectFloatingLabel" class="placeholder">Kecamatan</label>
                                        <select class="form-control select2" id="kecamatan" name="kecamatan" required>
                                            <option value="" selected disabled>--Pilih Kecamatan--</option>
                                            <?php foreach ($kec as $k) : ?>
                                                <option value="<?= $k['id_kecamatan']; ?>"><?= $k['nama_kecamatan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto Profil</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>-->

                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group ">
                                        <label for="selectFloatingLabel" class="placeholder">Jenis bencana</label>
                                        <select class="form-control select2" id="jns_bencana" name="jns_bencana" required>
                                            <option value="" selected disabled>--Pilih Jenis Bencana--</option>
                                            <?php foreach ($ben as $b) : ?>
                                                <option value="<?= $b['id_bencana']; ?>"><?= $b['nama_bencana']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-5">
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Koordinat GPS</label>
                                        <input id="koordinat" name="koordinat" type="text" class="form-control select2" required>

                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Upload Foto Kejadian</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto" aria-describedby="inputGroupFileAddon04" required>
                                            <label class="custom-file-label" for="foto">Pilih File</label>
                                        </div>
                                        <small class="text-danger pl-3">*ukuran file max 2mb dengan format .jpg .jpeg .png</small>

                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-5">

                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Tanggal & Waktu Kejadian</label>
                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                        <small id="emailHelp" class="form-text text-muted">* Tanggal Kejadian</small>
                                        <label for="jns_bencana" class="placeholder"></label>
                                    </div>

                                    <div class="form-group">

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <input type="text" class="form-control timepicker" data-target="#timepicker" />
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>

                                        <small id="emailHelp" class="form-text text-muted">* Waktu Kejadian</small>
                                    </div>

                                </div>

                            </div>
                            <br>
                            <br>
                            <h4 class="text-primary" align="center"><b>Kerusakan/Kerugian</b></h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <h4 class="text-danger"><b>Fasilitas Umum</b></h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Kantor/gedung</label>
                                        <input id="kantor" name="kantor" type="number" class="form-control">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Sekolah</label>
                                        <input id="sekolah" name="sekolah" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Rumah Makan</label>
                                        <input id="rmakan" name="rmakan" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Masjid/Mushola</label>
                                        <input id="masjid" name="masjid" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Tanggul Sungai (Titik)</label>
                                        <input id="tanggul" name="tanggul" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Puskesmas</label>
                                        <input id="puskesmas" name="puskesmas" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Jembatan</label>
                                        <input id="jembatan" name="jembatan" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Jalan Nasional</label>
                                        <input id="jlnas" name="jlnas" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Jalan Kabupaten (Titik)</label>
                                        <input id="jlkab" name="jlkab" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Turap Jalan (Titik)</label>
                                        <input id="turap" name="turap" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Bendungan</label>
                                        <input id="bendung" name="bendung" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Jalan Desa (Titik)</label>
                                        <input id="jldes" name="jldes" type="number" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <h4 class="text-danger"><b>Lainnya</b></h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Saluran Irigasi/Air</label>
                                        <input id="irigasi" name="irigasi" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Tebing (Titik)</label>
                                        <input id="tebing" name="tebing" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Sawah (Ha)</label>
                                        <input id="sawah" name="sawah" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Perkebunan</label>
                                        <input id="kebun" name="kebun" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Tambak (Ha)</label>
                                        <input id="tambak" name="tambak" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Talud</label>
                                        <input id="talud" name="talud" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Pasar</label>
                                        <input id="pasar" name="pasar" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Pergerakan Tanah (Titik)</label>
                                        <input id="tnhgr" name="tnhgr" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Pengungsi (Jiwa)</label>
                                        <input id="pengungsi" name="pengungsi" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Pengungsi (KK)</label>
                                        <input id="png" name="png" type="number" class="form-control ">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <h4 class="text-danger"><b>Rumah</b></h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Roboh</label>
                                        <input id="rbh" name="rbh" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Rusak Berat</label>
                                        <input id="rb" name="rb" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Rusak Sedang</label>
                                        <input id="rs" name="rs" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Rusak Ringan</label>
                                        <input id="rr" name="rr" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Terendam (KK)</label>
                                        <input id="terendam" name="terendam" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Terancam (KK)</label>
                                        <input id="terancam" name="terancam" type="number" class="form-control ">
                                    </div>
                                </div>


                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <h4 class="text-danger"><b>Korban</b></h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Meninggal Dunia</label>
                                        <input id="md" name="md" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Luka Berat</label>
                                        <input id="lb" name="lb" type="number" class="form-control ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Luka Ringan</label>
                                        <input id="lr" name="lr" type="number" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <h4 class="text-danger"><b>Jumlah Kerugian</b></h4>
                                    <hr>
                                    <div class="form-group ">
                                        <label for="jns_bencana" class="placeholder">Masukan Jumlah Kerugian</label>
                                        <input id="rugi" name="rugi" type="text" class="form-control ">
                                    </div>

                                </div>
                            </div>

                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->