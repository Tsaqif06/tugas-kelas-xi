<?php
$teman[1] = "Pebrianto";
$teman[2] = "Arie Tino";
$teman[3] = "Rajif Agung Yunmar";
$teman[5] = "Nasrokhah Noviati";
$teman[7] = "Sulidar Fitri";

$i = 1;
while (isset($teman[$i])) {
    echo $teman[$i] . '<br>';
    $i++;
    if ($i == 4 || $i == 6) {
        $i++;
    }
}
