<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Barang</title>
</head>

<body>

  <h3 style="text-align: center;">KWITANSI BENGKEL MANG MAMAD</h3>
  <table>
    <?php foreach ($barang as $brg) ?>
    <tr>
      <td>Nomor Faktur </td>
      <td>:</td>
      <td><?= $brg->id_pelanggan ?></td>
    </tr>
    <tr>
      <td>Tanggal Pemesanan </td>
      <td>:</td>
      <td><?= $brg->tanggal_pemesanan ?></td>
    </tr>
  </table>
  <table border="1" CELLSPACING="0" paddingspacing="10">
    <tr>
      <th class="col-md-1">NO</th>
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
        <td><?= $l->nama_barang ?></td>
        <td><?= $l->harga_barang ?></td>
        <td><?= $l->jumlah_beli ?></td>
        <td><?= $l->total_pembelian ?></td>
      </tr>
    <?php
      $i++;
    endforeach ?>
  </table>
  <br>
  <br>
  <table>
    <tr>
      <td>Serang,</td>
      <td>
        <?php
        echo date('d-M-Y');
        ?>
      </td>
    </tr>
    <tr hight=100>
      <td>
        <br>
        <br>
        <br>
      </td>
      <td></td>
    </tr>

    <tr>
      <td colspan="2">Mang Mamad</td>

    </tr>
  </table>

</body>
<script>
  window.print();
</script>

</html>