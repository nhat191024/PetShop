<?php
require_once 'pdo.php';

function getAllProduct()
{
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}

function getProductById($id)
{
    $sql = "SELECT * FROM product WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllProductByCategoryId($id)
{
    $sql = "SELECT * FROM product WHERE category_id = $id";
    return pdo_query($sql);
}