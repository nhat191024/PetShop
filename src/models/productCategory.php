<?php
require_once "pdo.php";
function getProductCategory() {
    $sql = "SELECT * FROM product_category";
    return pdo_query($sql);
}
function createProductCategory($productCategoryName) {
    $sql = "INSERT INTO product_category (name) VALUES ('$productCategoryName')";
    pdo_execute($sql);
}
?>