<?php
function getKeterangan($nilai)
{
    if ($nilai > 85 && $nilai <= 100) {
        return ['nilai' => 'A', 'ket' => 'Sangat Bagus'];
    } else  if ($nilai > 75 && $nilai <= 85) {
        return ['nilai' => 'B', 'ket' => 'Baik'];
    } else  if ($nilai > 65 && $nilai <= 75) {
        return ['nilai' => 'C', 'ket' => 'Cukup'];
    } else if ($nilai >= 0 && $nilai <= 65) {
        return ['nilai' => 'D', 'ket' => 'Kurang'];
    } else {
        return "<b>Nilai Diluar Range</b>";
    }
}
$ketA = getKeterangan(100);
$ketB = getKeterangan(80);
$ketC = getKeterangan(70);
$ketD = getKeterangan(60);
$ketE = getKeterangan(120);
echo "Input 100, Nilai = " . $ketA['nilai'] . " Keterangan = " . $ketA['ket'] . "<br>";
echo "Input 80, Nilai = " . $ketB['nilai'] . " Keterangan = " . $ketB['ket'] . "<br>";
echo "Input 70, Nilai = " . $ketC['nilai'] . " Keterangan = " . $ketC['ket'] . "<br>";
echo "Input 60, Nilai = " . $ketD['nilai'] . " Keterangan = " . $ketD['ket'] . "<br>";
echo "Input 120, " . $ketE;
