<?php
$stir = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambayan Coffee — Do While</title>
<link rel="stylesheet" href="tambayan.css">
</head>
<body>

<?php include "includes/header.php"; ?>

<h1>Stirring Your Drink</h1>

<?php
do {
    echo "<p>Stir action #$stir</p>";
    $stir++;
} while ($stir <= 3);
?>

<?php include "includes/footer.php"; ?>
</body>
</html>
