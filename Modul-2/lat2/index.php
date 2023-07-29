<?php
function hitungSegitigaSikuSiku($alas, $tinggi)
{
    return ['luas' => 0.5 * $alas * $tinggi, 'keliling' => $alas + $tinggi + sqrt($alas * $alas + $tinggi * $tinggi)];
}

function hitungPersegi($sisi)
{
    return ['luas' => $sisi * $sisi, 'keliling' => 4 * $sisi];
}

function hitungPersegiPanjang($panjang, $lebar)
{
    return ['luas' => $panjang * $lebar, 'keliling' => 2 * ($panjang + $lebar)];
}

function hitungLingkaran($jariJari)
{
    return ['luas' => 3.14 * $jariJari * $jariJari, 'keliling' => 2 * 3.14 * $jariJari];
}

$alasSegitiga = 6;
$tinggiSegitiga = 8;
$hasilSegitiga = hitungSegitigaSikuSiku($alasSegitiga, $tinggiSegitiga);
echo "Luas segitiga siku-siku: " . $hasilSegitiga['luas'] . "<br>";
echo "Keliling segitiga siku-siku: " . $hasilSegitiga['keliling'] . "<br>";

$sisiPersegi = 5;
$hasilPersegi = hitungPersegi($sisiPersegi);
echo "Luas persegi: " . $hasilPersegi['luas'] . "<br>";
echo "Keliling persegi: " . $hasilPersegi['keliling'] . "<br>";

$panjangPersegiPanjang = 7;
$lebarPersegiPanjang = 9;
$hasilPersegiPanjang = hitungPersegiPanjang($panjangPersegiPanjang, $lebarPersegiPanjang);
echo "Luas persegi panjang: " . $hasilPersegiPanjang['luas'] . "<br>";
echo "Keliling persegi panjang: " . $hasilPersegiPanjang['keliling'] . "<br>";

$jariJariLingkaran = 10;
$hasilLingkaran = hitungLingkaran($jariJariLingkaran);
echo "Luas lingkaran: " . $hasilLingkaran['luas'] . "<br>";
echo "Keliling lingkaran: " . $hasilLingkaran['keliling'] . "<br>";
