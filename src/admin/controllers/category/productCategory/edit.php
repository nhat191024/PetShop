<?php 
require_once "./models/productCategory.php";

if($edit){
    $productCategory = getProductCategoryById($edit);
    require_once './views/edit/productCategory.php';
}