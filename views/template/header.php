<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIPEKEBENCI | <?= $title; ?></title>
    <link rel="icon" href="<?= base_url('assets') ?> /img/BPBDclp.png" type="image/x-icon" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/font/'); ?>css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assetsLTE/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.jqueryui.min.css">-->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/daterangepicker/daterangepicker.css">
    <!-- ChartJS -->
    <script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Preloader -->
    <link rel="stylesheet" href="<?= base_url('assetsLTE/'); ?>css/preloader.css">
    <!-- jQuery -->
    <script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="<?= base_url('assets') ?> /leaflet/leaflet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets') ?> /cluster/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="<?= base_url('assets') ?> /cluster/dist/MarkerCluster.Default.css" />
    <style type="text/css">
        #mapid {
            height: 680px;
            width: 100%;
        }
    </style>
    <script src="<?= base_url('assets') ?> /leaflet/leaflet.js"></script>
    <script type="text/javascript" src="<?= base_url('assets') ?> /cluster/dist/leaflet.markercluster-src.js"></script>
    <!-- PLUGINS SEARCH CONTROL -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/search/src/leaflet-search.css" />
    <script src="<?= base_url('assets') ?>/search/src/leaflet-search.js"></script>
    <link type="text/css" href="<?= base_url('assets'); ?> /bootstrap-timepicker.min.css" rel="stylesheet">
    <!--<link type="text/css" href="<?= base_url('assetsLTE/'); ?> css/jquery.datetimepicker.min.css" rel="stylesheet">-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="<?= base_url('assetsLTE/'); ?>css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="<?= base_url('assetsLTE/'); ?>css/bootstrap-datetimepicker.min.css">-->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="<?= base_url('assetsLTE/img/') ?>preloader.gif" alt="preloader">
        </div>
    </div>