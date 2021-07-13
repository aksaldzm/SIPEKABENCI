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
    <img src="<?= site_url('assets/img/BPBDclp.png') ?>" class="float-left" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    Laporan Kejadian Bencana Kabupaten Cilacap
                    <br>BPBD Kabupaten Cilacap
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Laporan</th>
                <th>Nama</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Bencana</th>
                <th>Tanggal Kejadian</th>
                <th>Waktu Kejadian</th>
                <th>Koordinat</th>

                <th>K.MD</th>
                <th>K.LB</th>
                <th>K.LR</th>
                <th>R.RBH</th>
                <th>R.RB</th>
                <th>R.RS</th>
                <th>R.RR</th>
                <th>R.TE</th>
                <th>R.TA</th>
                <th>F.Gedung</th>
                <th>F.Sekolah</th>
                <th>F.Rumah Makan</th>
                <th>F.Masjid</th>
                <th>F.Tanggul Sungai</th>
                <th>F.Puskesmas</th>
                <th>F.Jembatan</th>
                <th>F.Jl.Nasional</th>
                <th>F.Jl.Kabupaten</th>
                <th>F.Turab Jalan</th>
                <th>F.Bendungan</th>
                <th>F.Jl.Desa</th>
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
                <th>Jumlah Kerugian</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($lap as $l) { ?>
                <tr>
                    <td><?= $no ?></td>

                    <td><?= $l['id_laporan'] ?></td>
                    <td><?= $l['nama_user'] ?></td>
                    <td align="center"><?= $l['nama_kecamatan'] ?></td>
                    <td align="center"><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama_bencana'] ?></td>
                    <td align="center"><?= $l['tanggal_kejadian'] ?></td>
                    <td align="center"><?= $l['waktu_kejadian'] ?> WIB</td>
                    <td align="center"><?= $l['kordinat'] ?></td>

                    <td align="center"><?= $l['mnggl_dunia'] ?></td>
                    <td align="center"><?= $l['luka_ber'] ?></td>
                    <td align="center"><?= $l['luka_ring'] ?></td>
                    <td align="center"><?= $l['roboh'] ?></td>
                    <td align="center"><?= $l['rusak_ber'] ?></td>
                    <td align="center"><?= $l['rusak_sed'] ?></td>
                    <td align="center"><?= $l['rusak_ring'] ?></td>
                    <td align="center"><?= $l['terendam'] ?></td>
                    <td align="center"><?= $l['terancam'] ?></td>
                    <td align="center"><?= $l['gedung'] ?></td>
                    <td align="center"><?= $l['sekolah'] ?></td>
                    <td align="center"><?= $l['rumah_makan'] ?></td>
                    <td align="center"><?= $l['masjid'] ?></td>
                    <td align="center"><?= $l['tanggul_sungai'] ?></td>
                    <td align="center"><?= $l['puskesmas'] ?></td>
                    <td align="center"><?= $l['jembatan'] ?></td>
                    <td align="center"><?= $l['jalan_nas'] ?></td>
                    <td align="center"><?= $l['jalan_kab'] ?></td>
                    <td align="center"><?= $l['turab_jalan'] ?></td>
                    <td align="center"><?= $l['bendungan'] ?></td>
                    <td align="center"><?= $l['jalan_des'] ?></td>
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
                    <td align="center"><?= $l['jumlah_kerugian'] ?></td>
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