<?php
$nis = "22760 / 1765 . 063";
$namalengkap = "Ahmad Tsaqif Al Arifin";
$namapanggilan = "Tsaqif";
$jeniskelamin = "Laki-laki";
$tempatlahir = "Malang";
$tanggallahir = "02/08/2006";
$umur = DateTime::createFromFormat('d/m/Y', $tanggallahir)->diff(new Datetime())->y;
$alamat = "Wajak, Kab. Malang";
$kelas = "XI RPL C";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Tugas Kelas XI</title>
    <style>
        body {width: 100%;height: 100vh;overflow: hidden;}
        .container {position: relative;transform: translate(-50%, -50%);left: 50%;top: 50%;width: 500px;border: 2px solid #000;font-family: Arial, Helvetica, sans-serif;box-sizing: border-box;padding: 15px 20px;}
        h2 {text-align: center;margin-top: 0;}
        table tr td {padding-top: 20px;}
    </style>
</head>
<body>
    <div class="container">
        <h2>BIODATA SISWA</h2>
        <table>
            <tr><td>NIS</td><td>: <?= $nis ?></td></tr>
            <tr><td>Nama Lengkap</td><td>: <?= $namalengkap ?></td></tr>
            <tr><td>Nama Panggilan</td><td>: <?= $namapanggilan ?></td></tr>
            <tr><td>Jenis Kelamin</td><td>: <?= $jeniskelamin ?></td></tr>
            <tr><td>Tempat Lahir</td><td>: <?= $tempatlahir ?></td></tr>
            <tr><td>Tanggal Lahir</td><td>: <?= $tanggallahir ?></td></tr>
            <tr><td>Umur</td><td>: <?= $umur ?></td></tr>
            <tr><td>Alamat</td><td>: <?= $alamat ?></td></tr>
            <tr><td>Kelas</td><td>: <?= $kelas ?></td></tr>
        </table>
    </div>
</body>
</html>