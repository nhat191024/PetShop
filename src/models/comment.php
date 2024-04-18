<?php
require_once 'pdo.php';

function getAllProductComment($product_id)
{
    $sql = "SELECT * FROM comment WHERE product_id = $product_id";
    return pdo_query($sql);
}

function createComment($product_id, $account_id, $content)
{
    $sql = "INSERT INTO comment (product_id, user_id, content) VALUES ($product_id, $account_id, '$content')";
    pdo_execute($sql);
}