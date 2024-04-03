<?php
require_once "./models/breed.php";
$listBreed = getAllBreed();
if ($view == "Breeds") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
    $pageSize = 8; // number of breeds per page
    $totalPage = ceil(count($listBreed) / $pageSize); // Total page
    if (isset($_GET['breedsPrev']) && $page > 1) {
        $page--;
    } else if (isset($_GET['breedsNext']) && $page < $totalPage) {
        $page++;
    }
    $listBreedPage = getAllBreedByPage($page, $pageSize);
    require_once './views/breed.php';
}