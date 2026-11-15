
<?php
$total = 0;

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
    $total += $i;
}

echo "<br>Total: $total";

if ($total == 110) {
    echo "<br>Perhitungan benar";
}
?>
