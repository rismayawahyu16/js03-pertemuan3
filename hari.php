
<?php
date_default_timezone_set("Asia/Jakarta");

$hari = match ((int) date("N")) {
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jumat",
    6 => "Sabtu",
    7 => "Minggu",
};

echo "<p>Hari ini: $hari</p>";

$matkul = [
    "Pemrograman Web",
    "Basis Data Lanjut",
    "Jaringan Komputer"
];

echo "<ol>";

foreach ($matkul as $mk) {
    echo "<li>$mk</li>";
}

echo "</ol>";
?>
