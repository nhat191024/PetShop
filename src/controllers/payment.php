<?php
if($view != 'payment' || empty($cart) || !isset($_SESSION['loggedIn'])) {
    header('Location: /');
    exit();
} else {
    require_once "./models/cart.php";
    require_once "./models/product.php";
    require_once "./models/productCategory.php";
    require_once "./models/manufacturer.php";
    require_once "./models/account.php";

    $cart = getAllUserCart($_SESSION['user_id']);

    require_once "./views/payment.php";
}