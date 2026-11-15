
<?php
$nilai = 76;

if ($nilai > 80) {
    $huruf = "A";
} elseif ($nilai > 73) {
    $huruf = "B+";
} elseif ($nilai > 65) {
    $huruf = "B";
} elseif ($nilai > 60) {
    $huruf = "C+";
} elseif ($nilai > 50) {
    $huruf = "C";
} elseif ($nilai > 39) {
    $huruf = "D";
} else {
    $huruf = "E";
}

$keterangan = match ($huruf) {
    "A", "B+", "B" => "Sangat baik / Baik",
    "C+", "C" => "Cukup",
    default => "Perlu mengulang",
};

echo "Nilai $nilai = $huruf ($keterangan)";
?>
