<?php
require_once "./models/breed.php";
$listBreed = getAllBreed();
//if view is not set or view is not Breeds, redirect to 404 page
if ($view == "Breeds") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of breeds per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listBreed) / $pageSize);
    // Get all breeds with limit number of breeds per page
    $listBreedPage = getAllBreedByPage($page, $pageSize);
    require_once './views/breed.php';
}
