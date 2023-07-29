<?php
$brush_price = 5;

echo '<table border="1" align="center">';
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

// for ($counter = 10; $counter <= 100; $counter += 5) {
$counter = 10;
do {
    echo "<tr><td>";
    echo "$counter";
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";
    $counter += 5;
} while ($counter <= 100);

echo "</table>";
