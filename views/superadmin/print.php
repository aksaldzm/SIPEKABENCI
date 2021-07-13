<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets') ?> /img/BPBDclp.png" type="image/x-icon" />
</head>
<style>
    .line-title {
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
    }
</style>

<body>
    <!--<img src="<?= site_url('assets/img/BPBDclp.png') ?>" class="float-left" style="position: absolute; width: 60px; height: auto;">-->
    <table style="width: 100%;">
        <tr>
            <td>
                <span style="line-height: 1.6; ">
                    <?php foreach ($log as $l) { ?>
                        <p>Hari / Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?= $l['tgl_piket'] ?>
                            <br>Koordinator Piket&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $l['koor_piket'] ?>
                            <br>Petugas Piket&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $l['petugas_piket'] ?>
                            <br>
                            <br>
                            <br> <b><u>LOG BOOK PUSDALOPS BPBD</u></b>
                        </p>
                    <?php } ?>
                </span>
            </td>

        </tr>
    </table>

    <hr class="line-title">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>

                <th>Jenis Bencana</th>
                <th>Tanggal Kejadian</th>
                <th>Lokasi</th>
                <th>Dampak</th>
                <th>Sumber Informasi</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($log as $l) { ?>
                <tr>
                    <td><?= $no ?></td>

                    <td align="center"><?= $l['jenis_bnc'] ?></td>
                    <td align="center"><?= $l['tgl_kejadian'] ?><br><?= $l['waktu'] ?> WIB</td>
                    <td align="center"><?= $l['lokasi'] ?></td>
                    <td align="center"><?= $l['dampak'] ?></td>
                    <td align="center"><?= $l['sumber_inf'] ?></td>
                    <td align="center"><?= $l['keterangan'] ?></td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>