<?php
require_once "pdo.php";
function getAllCart()
{
    $sql = "SELECT * FROM cart";
    return pdo_query($sql);
}

function getAllUserCart($id)
{
    $sql = "SELECT * FROM cart WHERE user_id = $id";
    return pdo_query($sql);
}

function createCart($product_id, $user_id, $quantity){
    $sql = "INSERT INTO cart (product_id, user_id, quantity) VALUES ($product_id, $user_id, $quantity)";
    pdo_execute($sql);
}

function updateCart($product_id, $user_id, $quantity, $id){
    $sql = "UPDATE cart SET product_id = $product_id, user_id = $user_id, quantity = $quantity WHERE id = $id";
    pdo_execute($sql);
}

function updateCartQuantity($id, $quantity){
    $sql = "UPDATE cart SET quantity = $quantity WHERE id = $id";
    pdo_execute($sql);
}

function deleteCartItem($id){
    $sql = "DELETE FROM cart WHERE id = $id";
    pdo_execute($sql);
}