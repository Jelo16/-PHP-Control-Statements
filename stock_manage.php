<?php
declare(strict_types=1);  // 1. Strict types turned on

// Multidimensional array for products (keys = product name, values = price + stock)
$storeProducts = [
    "Arabica Coffee Beans"     => [ "price" => 260.00, "stock" => 9 ],
    "Robusta Coffee Beans"     => [ "price" => 180.00, "stock" => 15 ],
    "Espresso Blend"           => [ "price" => 320.00, "stock" => 6 ],
    "Cold Brew Concentrate"    => [ "price" => 290.00, "stock" => 12 ],
    "Hazelnut Syrup"           => [ "price" => 150.00, "stock" => 5 ],
    "Caramel Syrup"            => [ "price" => 160.00, "stock" => 18 ],
    "Brown Sugar"              => [ "price" => 90.00,  "stock" => 8 ],
    "Milk (Liter)"             => [ "price" => 75.00,  "stock" => 20 ],
];

// Global tax rate variable
$tax_rate = 12; // 12% VAT

// Function — reorder message
function get_reorder_message(int $currentStock): string {
    return ($currentStock < 10) ? "Yes" : "No"; // 5. Ternary operator
}

// Function — total stock value
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity; // 7.
}

// Function — total tax due
function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100); // 9.
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store Stock Monitoring</title>

    <!-- Load External CSS -->
    <link rel="stylesheet" href="stock_design.css">
</head>
<body>

<h1>Tambayan Coffee — Stock Level Monitor</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

<?php foreach ($storeProducts as $product_name => $data): ?>

    <?php
        $price = $data["price"];
        $stock = $data["stock"];
    ?>

    <tr>
        <td><?= $product_name ?></td>
        <td><?= $stock ?></td>
        <td><?= get_reorder_message($stock) ?></td>
        <td><?= number_format(get_total_value($price, $stock), 2) ?></td>
        <td><?= number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
    </tr>

<?php endforeach; ?>

</table>

</body>
</html>
