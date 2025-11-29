<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambayan Coffee — For Loop</title>
<link rel="stylesheet" href="tambayan.css">
</head>
<body>

<?php include "includes/header.php"; ?>

<h1>Loyalty Card Stamp Progress</h1>

<?php
for ($i = 1; $i <= 12; $i++) {
    echo "<p>Stamp $i ⭐</p>";
}
?>

<?php include "includes/footer.php"; ?>
</body>
</html>
