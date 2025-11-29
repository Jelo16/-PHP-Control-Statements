<?php
// Updated Loop Example - Tambayan Coffee
// Clean for-loop / foreach display with matching theme.

$menu = [
    "Kapeng Barako" => 80,
    "Spanish Latte" => 120,
    "Caramel Macchiato" => 150,
    "Mocha Espresso" => 140,
];
?>

<!doctype html>
<html>
<head>
    <title>Tambayan Coffee - Loop Demo</title>
    <link rel="stylesheet" href="tambayan.css">
</head>
<body>

<h1>Tambayan Coffee</h1>
<h2>Loops – Coffee Menu</h2>

<div class="container">
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Coffee</th>
                <th>Price (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $item => $price): ?>
                <tr>
                    <td><?= $item ?></td>
                    <td><?= number_format($price, 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<footer>
    <p>Thank you for visiting Tambayan Coffee!</p>
</footer>

</body>
</html>
