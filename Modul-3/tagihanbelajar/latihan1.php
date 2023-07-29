<?php

function getJenisKelamin($input)
{
    if ($input === 'M') {
        return "LAKI-LAKI";
    }
}

echo getJenisKelamin('M');
