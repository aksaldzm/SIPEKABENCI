<section class="content">
    <div class="container-fluid">
        <div class="row">
            <?= $this->session->flashdata('message'); ?>
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Data Akun</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-danger text-lg ml-4"><?= $error; ?></div>
                        <?= form_open_multipart('supadmin/tambahAkun'); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Alamat E-mail" name="email" required>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select class="form-control" name="level_id" required>
                                        <option value="">Pilih level</option>
                                        <?php foreach ($level as $lvl) { ?>
                                            <option value="<?= $lvl['id_level'] ?>"><?= $lvl['level'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('level_id', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="upt">UPT Asal</label>
                                    <select class="form-control" name="upt" required>
                                        <option value="">Pilih UPT</option>
                                        <?php foreach ($upt as $upt) { ?>
                                            <option value="<?= $upt['id_upt'] ?>"><?= $upt['nama_upt'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('upt', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="passsword">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="passsword2">Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="Re-Password" required>
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto">Foto Profile</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto" aria-describedby="inputGroupFileAddon04" required>
                                        <label class="custom-file-label" for="foto">Pilih File</label>
                                    </div>
                                    <small class="text-danger pl-3">*ukuran file max 2mb dengan format .jpg .jpeg .png</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nama">Kode UPT</label>
                                    <input type="text" class="form-control" placeholder="Kode UPT" name="kode" required>
                                    <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
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