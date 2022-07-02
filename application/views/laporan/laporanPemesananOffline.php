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
      <!-- <th class="col-md-1 text-center">TANGGAL PEMESANAN</th> -->
      <th class="col-md-1 text-center">NAMA BARANG</th>
      <th class="col-md-1 text-center">HARGA BARANG</th>
      <th class="col-md-1 text-center">JUMLAH PEMBELIAN</th>
      <th class="col-md-1 text-center">HARGA TOTAL PEMBELIAN</th>
    </tr>
    <?php
    $total = 0;
    $i = 1;
    // $list = $this->MMasterBarang->datalist();
    foreach ($list as $l) : ?>
      <tr>
        <td><?= $i ?></td>
        <!-- <td><?= $l->tanggal_pemesanan ?></td> -->
        <td><?= $l->nama_barang ?></td>
        <td><?= number_format($l->harga_barang, 2) ?></td>
        <td><?= $l->jumlah_beli ?></td>
        <td>Rp. <?php $n = $l->total_pembelian;
                echo number_format($n, 2) ?></td>
      </tr>
    <?php
      $i++;
      $total += $n;
    endforeach ?>
    <td colspan="4">
      <center>Total Harga</center>
    </td>
    <td>Rp. <?= number_format($total, 2) ?></td>
    </tr>
  </table>

</body>
<script>
  window.print();
</script>

</html>