<?php
require_once "./models/cart.php";
require_once "./models/product.php";
$listCart = isset($_SESSION['user_id']) ? getAllUserCart($_SESSION['user_id']) : '';
require_once "./views/components/Cart.php";