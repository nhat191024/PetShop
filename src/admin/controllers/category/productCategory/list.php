<?php
require_once "./models/productCategory.php";
$listProductCategory = getProductCategory();
if ($view == "Product_Categories") {
    require_once './views/productCategory.php';
}
