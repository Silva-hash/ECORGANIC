<?php
session_start();

function get_products() {
    // Conexión a la base de datos
    $conn = mysqli_connect("localhost", "root", "", "ecorganic_db");
    if (!$conn) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }

    // Consulta para obtener los productos
    $query = "SELECT * FROM productos";
    $result = mysqli_query($conn, $query);

    $productos = array();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $productos[] = $row;
        }
    }

    mysqli_close($conn);
    return $productos;
}

function add_cart($id_producto) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (!in_array($id_producto, $_SESSION['carrito'])) {
        $_SESSION['carrito'][] = $id_producto;
    }

    // Mostrar un mensaje de éxito usando Toastify.js
    echo '<script>Toastify({
        text: "Producto agregado al carrito",
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#32CD32",
        stopOnFocus: true
    }).showToast();</script>';
}

function get_cart() {
    if (!isset($_SESSION['carrito'])) {
        return array();
    }

    $conn = mysqli_connect("localhost", "root", "", "ecorganic_db");
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta para obtener los productos en el carrito
    $query = "SELECT * FROM productos WHERE id IN (" . implode(',', $_SESSION['carrito']) . ")";
    $result = mysqli_query($conn, $query);

    $carrito = array();
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $carrito[] = $row;
        }
    }

    mysqli_close($conn);
    return $carrito;
}

function remove_cart($id_producto) {
    if (!isset($_SESSION['carrito'])) {
        return;
    }

    // Eliminar producto del carrito
    if (($key = array_search($id_producto, $_SESSION['carrito'])) !== false) {
        unset($_SESSION['carrito'][$key]);
    }
}
?>
