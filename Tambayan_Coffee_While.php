<?php
$count = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambayan Coffee — While Loop</title>
<link rel="stylesheet" href="tambayan.css">
</head>

<body>
<?php include "includes/header.php"; ?>

<h1>Brewing Countdown</h1>

<?php
while ($count > 0) {
    echo "<p>Brewing in $count...</p>";
    $count--;
}
?>
<p><strong>Your coffee is ready!</strong></p>

<?php include "includes/footer.php"; ?>
</body>
</html>
