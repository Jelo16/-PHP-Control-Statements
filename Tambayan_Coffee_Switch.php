<?php
// coffee shop order selection
$choice = 2; // change this to 1–5 to simulate a customer choice
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

<?php
switch ($choice) {
    case 1:
        $order = "Caramel Macchiato - ₱150";
        break;
    case 2:
        $order = "Iced Spanish Latte - ₱120";
        break;
    case 3:
        $order = "Mocha Espresso - ₱135";
        break;
    case 4:
        $order = "Cold Brew - ₱110";
        break;
    case 5:
        $order = "Americano - ₱95";
        break;
    default:
        $order = "Sorry, we don't have that. Try choosing 1–5.";
}
?>

<p><strong>You ordered:</strong> <?= $order ?></p>


<hr>

<h2>Available Drinks</h2>

<ul>
    <li>1. Caramel Macchiato — ₱150</li>
    <li>2. Iced Spanish Latte — ₱120</li>
    <li>3. Mocha Espresso — ₱135</li>
    <li>4. Cold Brew — ₱110</li>
    <li>5. Americano — ₱95</li>
</ul>

<footer>
    <p>Open 7am–9pm daily | Follow us @tambayancoffee</p>
</footer>

</body>
</html>
