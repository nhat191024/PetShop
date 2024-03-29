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

function createSchedule($user, $product, $quantity)
{
    $sql = "INSERT INTO pet_schedule (pet_id, user_id, data) VALUES ('$product', '$user', '$quantity')";
    pdo_execute($sql);
}
