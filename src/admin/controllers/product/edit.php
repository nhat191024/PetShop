<?php
require_once "./models/product.php";
require_once "./models/manufacturer.php";
require_once "./models/productCategory.php";

if ($edit) {
    $product = getProductById($edit);
    require_once './views/edit/product.php';
}