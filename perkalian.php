
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian</title>
</head>
<body>

<h2>Tabel Perkalian 1 - 10</h2>

<table border="1" cellpadding="6">
<?php for ($i = 1; $i <= 10; $i++): ?>
    <tr style="background: <?= $i % 2 === 0 ? '#E8F5E9' : '#FFFFFF' ?>">
        <?php for ($j = 1; $j <= 10; $j++): ?>
            <td><?= $i * $j ?></td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>

</body>
</html>
