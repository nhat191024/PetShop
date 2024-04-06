<?php
require_once "./models/pets.php";
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
require_once './models/breed.php';
$listPet = getAllPet();
if ($view == "Pets") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 5;
    // Total page
    $totalPage = ceil(count($listProductCategory) / $pageSize);
    $listPetPage = getAllPetByPage($page, $pageSize);
    require_once './views/pet.php';
}
