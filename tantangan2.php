
<?php
$n = 5;

echo "<h3>Segitiga Bintang</h3>";

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<h3>Piramida Bintang</h3>";

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "<br>";
}
?>
