<?php
$day = date("l"); // Monday–Sunday

$promo = match ($day) {
    "Monday" => "₱5 off any Brewed Coffee!",
    "Tuesday" => "Free cookie for every Latte!",
    "Wednesday" => "Buy 1 Take 1 — Iced Breeze!",
    "Thursday" => "₱20 OFF Caramel Daydream!",
    "Friday" => "Happy Hour: 2–5PM 20% OFF!",
    default => "Weekend Chill Promo — Free Upsize!"
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambayan Coffee — Match</title>
<link rel="stylesheet" href="tambayan.css">
</head>
<body>

<?php include "includesheader.php"; ?>

<h1>Match Expression Promo</h1>
<p>Today is <strong><?= $day ?></strong></p>
<h2><?= $promo ?></h2>

<?php include "includesfooter.php"; ?>
</body>
</html>
