<?php

function getJenisKelamin($input)
{
    if ($input === 'M') {
        return "LAKI-LAKI";
    } else {
        return "WANITA";
    }
}

echo "Hasil menginputkan M = " . getJenisKelamin('M') . "<br>";
echo "Hasil menginputkan A = " . getJenisKelamin('A') . "<br>";
echo "Hasil menginputkan L = " . getJenisKelamin('L');