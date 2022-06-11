<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>
</head>

<body>
    
    <h3 style="text-align: center;">DAFTAR PEMESANAN</h3>
    <table border="1" CELLSPACING="0" paddingspacing="10">
        <tr>
           <th class="col-md-1">NO</th>
           <th class="col-md-1 text-center">TANGGAL PEMESANAN</th>
                                        <th>NAMA PELANGGAN</th>
                                        <th class="col-md-1 text-center">NAMA BARANG</th>
                                        <th class="col-md-1 text-center">HARGA BARANG</th>
                                        <th class="col-md-1 text-center">JUMLAH PEMBELIAN</th>
                                        <th class="col-md-1 text-center">HARGA TOTAL PEMBELIAN</th>
        </tr>
        <?php
        $i = 1;
        // $list = $this->MMasterBarang->datalist();
        foreach ($list as $l) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $l->tanggal_pemesanan ?></td>
                <td><?= $l->nama ?></td>
                <td><?= $l->nama_barang ?></td>
                <td><?= $l->harga_barang ?></td>
                <td><?= $l->jumlah_beli ?></td>
                <td><?= $l->total_pembelian ?></td>
            </tr>
        <?php
            $i++;
        endforeach ?>
    </table>

</body>
<!-- <script>
    window.print();
</script> -->

</html>