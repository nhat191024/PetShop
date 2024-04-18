<?php
require_once './models/product.php';
require_once './models/manufacturer.php';
require_once './models/productCategory.php';
if ($category != "") {
    $listProduct = getAllProductByCategoryId($category);
    require_once './views/productCategory.php';
    if($listProduct == null){
        echo "<h1 class='text-center'>No product in this category</h1>";
    }
}
