<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->

        <!-- /.row -->


        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-warning">
                    <span class="info-box-icon"><i class="fas fa-exclamation-triangle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Potensi Bencana</span>
                        <span class="info-box-number"><?= $bnc; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-success">
                    <span class="info-box-icon"><i class="fas fa-house-damage"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kerusakan Rumah</span>
                        <span class="info-box-number"><?= $rum; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-danger">
                    <span class="info-box-icon"><i class="fas fa-building"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kerusakan Fasilitas Umum</span>
                        <span class="info-box-number"><?= $fass; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-certificate"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kerusakan Lainnya</span>
                        <span class="info-box-number"><?= $other; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->


                <!-- /.card -->

                <!-- PRODUCT LIST -->

                <!-- /.card -->
            </div>


            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex">
                            <div class="p-1 flex-fill" style="overflow: hidden">
                                <br>
                                <br>


                                <!-- Map will be created here -->
                                <div class="info-box mb-1">
                                    <div class="info-box-icon bg-success elevation-3"><i class="fas fa-file-signature"></i>

                                    </div>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Jumlah Laporan</span>
                                        <span class="info-box-number"><?= $lap; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                <div class="description-block mb-4">
                                    <div class="sparkbar pad" data-color="#fff"></div>
                                    <h5 class="description-header"><?= $rmh; ?></h5>
                                    <span class="description-text">Laporan Kerusakan Rumah</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block mb-4">
                                    <div class="sparkbar pad" data-color="#fff"> </div>
                                    <h5 class="description-header"><?= $fas; ?></h5>
                                    <span class="description-text">Laporan Kerusakan Fasilitas Umum</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block">
                                    <div class="sparkbar pad" data-color="#fff"> </div>
                                    <h5 class="description-header"><?= $ln; ?></h5>
                                    <span class="description-text">Laporan Kerusakan Lainnya</span>
                                </div>
                                <!-- /.description-block -->
                            </div><!-- /.card-pane-right -->
                        </div><!-- /.d-md-flex -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Info Covid-19</h5>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="kopi-covid"></div>
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