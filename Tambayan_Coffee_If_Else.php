<?php 
$name = "Jelo";
$list_of_coffee = [
    "Tambayan Brew",
    "Cloud Latte",
    "Iced Breeze",
    "Caramel Daydream"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambayan Coffee - If Else</title>

    <link rel="stylesheet" href="tambayan.css">
</head>

<body>
<?php include 'includes/header.php'; ?>
    <h1>Tambayan Coffee</h1>

    <?php 
        if ($name == "Jelo") {
            echo "<h2>Welcome back, coffee lover!</h2>";
        } else {
            echo "<h2>Welcome to Tambayan Coffee!</h2>";
        }
    ?>

    <h2>Our Popular Drinks of the Month:</h2>
    <p><?= $list_of_coffee[0] ?> </p>
    <p><?= $list_of_coffee[1] ?> </p>
    <p><?= $list_of_coffee[2] ?> </p>
    <p><?= $list_of_coffee[3] ?> </p>

<?php include 'includes/footer.php'; ?>
</body>
</html>