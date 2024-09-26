<?php
session_start();

// Eliminar producto del carrito
if (isset($_GET['product'])) {
    $product = $_GET['product'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['name'] == $product) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

header("Location: carrito.php");
exit();
?>
