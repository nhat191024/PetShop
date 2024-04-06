<?php
require_once "./models/productCategory.php";
$listProductCategory = getProductCategory();
if ($view == "Product_Categories") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 5;
    // Total page
    $totalPage = ceil(count($listProductCategory) / $pageSize);
    $listProductCategoryPage = getProductCategoryByPage($page, $pageSize);
    require_once './views/productCategory.php';
}
