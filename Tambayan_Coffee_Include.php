<?php 
$list_of_coffee = [
    "Tambayan Brew",
    "Cloud Latte",
    "Iced Breeze",
    "Caramel Daydream"
];

$best = $list_of_coffee[3];

switch ($best) {
    case "Tambayan Brew":
        $offer = "Get ₱10 off when you pair it with any pastry!";
        break;
    case "Cloud Latte":
        $offer = "Buy 1 Take 1 every Friday!";
        break;
    case "Iced Breeze":
        $offer = "Free extra ice or flavor shot today!";
        break;
    case "Caramel Daydream":
        $offer = "Add whipped cream for FREE!";
        break;
    default:
        $offer = "No specials for today...";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambayan Coffee - Switch Case</title>

    <link rel="stylesheet" href="tambayan.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <h2>Today’s Special Offer for Our Best-Selling Drink:</h2>
    <p><?= htmlspecialchars($offer, ENT_QUOTES, 'UTF-8') ?></p>

    <?php include 'includes/footer.php'; ?>
</body>
</html>