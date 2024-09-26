<?php
session_start();

// Inicializar el carrito si no está ya inicializado
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$productName = $_POST['name'];
$productPrice = $_POST['price'];
$quantity = $_POST['quantity'];

// Buscar si el producto ya está en el carrito
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['name'] == $productName) {
        $item['quantity'] += $quantity;
        $found = true;
        break;
    }
}

// Si el producto no está en el carrito, añadirlo
if (!$found) {
    $_SESSION['cart'][] = array(
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => $quantity
    );
}

header("Location: productos.php");
exit();
?>
