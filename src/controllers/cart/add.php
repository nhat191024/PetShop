<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: http://petshop.com/?view=detailProduct&details=' . $_POST['id'] . '&notLogin=true');
} else if (isset($_POST['add-btn'])) {
    require_once "../../models/cart.php";
    $product_id = $_POST['id'];
    $user_id = $_SESSION['user_id'];
    $quantity = $_POST['quantity'];

    $cart = getAllUserCart($_SESSION['user_id']);
    foreach ($cart as $item) {
        if ($item['product_id'] == $product_id) {
            $quantity += $item['quantity'];
            deleteCartItem($item['id']);
        }
    }

    createCart($product_id, $user_id, $quantity);
    header('location: http://petshop.com/?view=detailProduct&details=' . $_POST['id']. '&addSuccess=true');
}
