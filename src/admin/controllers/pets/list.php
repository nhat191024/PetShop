<?php
require_once "./models/pets.php";
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
require_once './models/breed.php';
$listPet = getAllPet();
if ($view == "Pets") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
    $pageSize = 5; // number of pets per page
    $totalPage = ceil(count($listPet) / $pageSize); // Total page
    // Process the Prev and Next buttons
    if(isset($_GET['petsPrev']) && $page > 1) {
        $page--;
    } else if(isset($_GET['petsNext']) && $page < $totalPage) {
        $page++;
    }
    $listPetPage = getAllPetByPage($page, $pageSize);
    require_once './views/pet.php';
}
