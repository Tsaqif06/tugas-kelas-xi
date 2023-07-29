<?php
function getDiskon($jmlBayar)
{
    if ($jmlBayar >= 500000) {
        return 50;
    } else if ($jmlBayar >= 100000) {
        return 10;
    } else if ($jmlBayar >= 50000) {
        return 5;
    }
}
function getTotalBayar($jmlBayar)
{
    return $jmlBayar - ($jmlBayar * (getDiskon($jmlBayar) / 100));
}
$jmlBayar = 500000;
$diskon = getDiskon($jmlBayar);
$totalBayar = getTotalBayar($jmlBayar);
echo "Jumlah Bayar: Rp. " . number_format($jmlBayar, 0, ',', '.') . "<br>";
echo "Diskon: " . $diskon . "%<br>";
echo "Total Bayar: Rp. " . number_format($totalBayar, 0, ',', '.');
