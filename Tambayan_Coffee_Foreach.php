<?php
$drinks = [
    "Tambayan Brew" => "Bold & strong",
    "Cloud Latte" => "Creamy & smooth",
    "Iced Breeze" => "Cold & refreshing",
    "Caramel Daydream" => "Sweet & silky"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambayan Coffee — Foreach Loop</title>
<link rel="stylesheet" href="tambayan.css">
</head>
<body>

<?php include "includes/header.php"; ?>

<h1>Our Coffee Lineup</h1>

<?php foreach ($drinks as $item => $desc): ?>
    <p><strong><?= $item ?>:</strong> <?= $desc ?></p>
<?php endforeach; ?>

<?php include "includes/footer.php"; ?>
</body>
</html>
