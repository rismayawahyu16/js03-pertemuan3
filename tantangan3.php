
<?php
$n = 10;

$a = 0;
$b = 1;

echo "Deret Fibonacci: ";

for ($i = 1; $i <= $n; $i++) {

    echo $a;

    if ($i < $n) {
        echo ", ";
    }

    $c = $a + $b;
    $a = $b;
    $b = $c;
}
?>
