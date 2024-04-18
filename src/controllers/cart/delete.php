<?php
if(!isset($_GET['id'])){
    header('Location: /');
} else {
    $id = $_GET['id'];
    require_once "../../models/cart.php";
    deleteCartItem($id);
    header('Location: /');
}