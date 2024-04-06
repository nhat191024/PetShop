<?php
require_once "./models/petCategory.php";
$listPetCategory = getPetCategory();
if($view == "Pet_Categories") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
    $pageSize = 5; // number of pets per page
    $totalPage = ceil(count($listPetCategory) / $pageSize); // Total page
    $listPetCategoryPage = getPetCategoryByPage($page, $pageSize);
    require_once './views/petCategory.php';
}