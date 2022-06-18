<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA PELANGGAN</title>
</head>

<body>
    <h3 style="text-align: center;"></h3>
    <table border="1" CELLSPACING="0" paddingspacing="10">
        <tr>
            <td style="text-align: center;">NO</td>
            <td style="text-align: center;">ID PELANGGAN</td>
            <td style="text-align: center;">NAMA PELANGGAN</td>
            <td style="text-align: center;">JENIS KELAMIN</td>
            <td style="text-align: center;">NO HP</td>
            <td style="text-align: center;">ALAMAT</td>
            <td style="text-align: center;">E-MAIL</td>
        </tr>
        <?php
        $i = 1;
        $list = $this->MCostomer->datalist();
        foreach ($list as $l) : ?>
            <tr>
                <td style="text-align: center;"><?= $i ?></td>
                <td><?= $l->id ?></td>
                <td><?= $l->nama ?></td>
                <td><?= $l->jenis_kelamin ?></td>
                <td><?= $l->no_telp ?></td>
                <td><?= $l->alamat ?></td>
                <td><?= $l->email ?></td>
            </tr>
        <?php
            $i++;
        endforeach ?>
    </table>
</body>
<script>
    window.print();
</script>
</html>