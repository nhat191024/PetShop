<?php
require_once "./models/product.php";
require_once "./models/manufacturer.php";
require_once "./models/productCategory.php";
require_once "./models/comment.php";
$listProduct = getAllProducts();
if ($view == "Products") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listProduct) / $pageSize);
    $listProductPage = getAllProductsByPage($page, $pageSize);
    require_once './views/product.php';
}
