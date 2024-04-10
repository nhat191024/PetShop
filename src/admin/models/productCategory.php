<?php
require_once "pdo.php";
function getProductCategory() {
    $sql = "SELECT * FROM product_category";
    return pdo_query($sql);
}

function getProductCategoryById($id) {
    $sql = "SELECT * FROM product_category WHERE id = $id";
    return pdo_query_one($sql);
}

function getProductCategoryByPage($page, $pageSize) {
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM product_category LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createProductCategory($productCategoryName) {
    $sql = "INSERT INTO product_category (name) VALUES ('$productCategoryName')";
    pdo_execute($sql);
}

function deleteProductCategory($id) {
    $sql = "DELETE FROM product_category WHERE id = $id";
    pdo_execute($sql);
}