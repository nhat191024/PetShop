<?php
require_once 'pdo.php';

function getAllProducts()
{
    $sql = "SELECT * FROM product";
    return pdo_query($sql);
}

function getProductById($id)
{
    $sql = "SELECT * FROM product WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllProductsByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM product LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createProduct($name, $price, $manufacturer, $category_id, $quantity, $description, $img_path)
{
    $sql = "INSERT INTO product (name, price, manufacturer_id, category_id, quantity, description, img_path) VALUES ('$name', '$price', '$manufacturer', '$category_id', '$quantity', '$description', '$img_path')";
    pdo_execute($sql);
}

function updateProduct($id, $name, $price, $manufacturer, $category_id, $quantity, $description, $img_path)
{
    $sql = "UPDATE product SET name = '$name', price = '$price', manufacturer_id = '$manufacturer', category_id = '$category_id', quantity = '$quantity', description = '$description', img_path = '$img_path' WHERE id = $id";
    pdo_execute($sql);
}

function deleteProduct($id)
{
    $sql = "DELETE FROM product WHERE id = $id";
    pdo_execute($sql);
}
