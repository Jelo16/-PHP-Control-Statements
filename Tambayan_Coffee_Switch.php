<?php
// coffee shop order thing
$choice = 2; // whatever the customer picked
?>

<!doctype html>
<html>
<head>
    <title>Tambayan Coffee Menu</title>
    <link rel="stylesheet" href="tambayan.css">
</head>
<body>

<h1>Tambayan Coffee</h1>
<h2>Your Order</h2>

<div class="container">
    <p>You picked item #<?= $choice ?></p>
    
    <?php
    // TODO: maybe add prices later?
    switch ($choice) {
        case 1:
            echo "Caramel Macchiato - ₱150";
            break;
        case 2:
            echo "Iced Spanish Latte - ₱120"; // most popular
            break;
        case 3:
            echo "Mocha Espresso - ₱135";
            break;
        case 4:
            echo "Cold Brew - ₱110";
            break;
        case 5:
            echo "Americano - ₱95"; // basic but good
            break;
        default:
            echo "Sorry, we don't have that. Try 1-5";
    }
    ?>
    
    <br><br>
    <button onclick="alert('Order confirmed!')">Confirm Order</button>
</div>

<footer>
    <p>Open 7am-9pm daily | Follow us @tambayancoffee</p>
</footer>

</body>
</html>