<?php
require_once './models/product.php';
require_once './models/manufacturer.php';
require_once './models/productCategory.php';

$listProduct = getAllProduct();

$product = getProductById($details);
if ($details != null) {
    require_once './views/detailsProduct.php';
}