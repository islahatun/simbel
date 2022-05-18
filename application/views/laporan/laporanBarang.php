<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>
</head>

<body>
    <h3 style="text-align: center;"></h3>
    <table border="1" CELLSPACING="0" paddingspacing="10">
        <tr>
            <td>NO</td>
            <td>ID BARANG</td>
            <td>NAMA BARANG</td>
            <td>ID KATEGORI</td>
            <td>SATUAN</td>
            <td>STOK</td>
            <td>HARGA BELI</td>
            <td>HARGA JUAL</td>
            <td>DESKRIPSI</td>
            <td>GAMBAR</td>
        </tr>
        <?php
        $i = 1;
        $list = $this->MMasterBarang->datalist();
        foreach ($list as $l) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $l->id_po ?></td>
                <td><?= $l->nama_barang ?></td>
                <td><?= $l->id_kategori ?></td>
                <td><?= $l->satuan ?></td>
                <td><?= $l->stok ?></td>
                <td><?= $l->harga_beli ?></td>
                <td><?= $l->harga_jual ?></td>
                <td><?= $l->deskripsi ?></td>
                <td><?= $l->gambar ?></td>
            </tr>
        <?php
            $i++;
        endforeach ?>
    </table>
</body>

</html>