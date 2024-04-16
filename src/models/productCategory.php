<?php
require_once "pdo.php";
function getProductCategory() {
    $sql = "SELECT * FROM product_category";
    return pdo_query($sql);
}

function getProductCategoryById($id){
    $sql = "SELECT * FROM product_category WHERE id = $id";
    return pdo_query_one($sql);
}
?>