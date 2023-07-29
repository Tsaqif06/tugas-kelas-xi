<?php
function segitiga1($kondisi)
{
    for ($i = 1; $i <= $kondisi; $i += 1) {
        for ($j = 0; $j < $i; $j += 1) {
            echo '*';
        }
        echo '<br>';
    }
}
function segitiga2($kondisi)
{
    for ($i = $kondisi; $i >= 1; $i -= 1) {
        for ($j = 0; $j < $i; $j += 1) {
            echo '*';
        }
        echo '<br>';
    }
}
function segitiga3($kondisi)
{
    for ($i = $kondisi + 1; $i >= 1; $i -= 1) {
        for ($j = 1; $j < $i; $j += 1) {
            echo $j;
        }
        echo '<br>';
    }
}
function segitiga4($kondisi)
{
    for ($i = 1; $i <= $kondisi + 1; $i += 1) {
        for ($j = 1; $j < $i; $j += 1) {
            echo $j;
        }
        echo '<br>';
    }
}
segitiga1(5);
echo "<br>Dan<br><br>";
segitiga2(5);
echo "<br><br>";
segitiga3(5);
echo "<br>Dan<br><br>";
segitiga4(5);
