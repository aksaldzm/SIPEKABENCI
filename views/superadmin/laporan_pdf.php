<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <table class="display table table-striped table-hover">
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
                <th>Foto Kejadian</th>
                <th>Jumlah Kerugian</th>

            </tr>
        </thead>
        <tfoot>
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
                <th>Foto Kejadian</th>
                <th>Jumlah Kerugian</th>

            </tr>
        </tfoot>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($lap as $l) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $l['id_laporan'] ?></td>
                    <td><?= $l['nama_user'] ?></td>
                    <td align="center"><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama'] ?></td>
                    <td align="center"><?= $l['nama_bencana'] ?></td>
                    <td align="center"><?= $l['tanggal_kejadian'] ?></td>
                    <td align="center"><?= $l['waktu_kejadian'] ?> WIB</td>
                    <td align="center"><?= $l['kordinat'] ?></td>
                    <td><img src="<?= base_url('assets/img/foto_kejadian/') . $l['foto_kejadian']; ?>" width="400px" height="200px"></td>
                    <td><?= $l['jumlah_kerugian'] ?></td>

                </tr>
                <?php $no++; ?>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>