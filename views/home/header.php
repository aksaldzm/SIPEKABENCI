<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets') ?> /img/BPBDclp.png" type="image/x-icon" />
    <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> -->
    <script src="<?= base_url('assetsLTE/template/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/586cda27d0.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets') ?> /sliding/css/BootSideMenu.css" rel="stylesheet">
    <!-- LEAFLET -->
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

    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
        }

        #mapid {
            height: 695px;
        }
    </style>
</head>

<body>