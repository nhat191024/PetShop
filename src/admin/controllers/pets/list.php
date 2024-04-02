<?php
require_once "./models/pets.php";
require_once './controllers/category/petCategory/list.php';
require_once './controllers/color/list.php';
require_once './controllers/source/list.php';
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
$listPet = getAllPet();
if ($view == "Pets") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
    $pageSize = 5; // number of pets per page
    $totalPage = ceil(count(getAllPet()) / $pageSize); // Total page
    // Process the Prev and Next buttons
    if(isset($_GET['petsPrev']) && $page > 1) {
        $page--;
    } else if(isset($_GET['petsNext']) && $page < $totalPage) {
        $page++;
    }
    $listPet = getAllPetByPage($page, $pageSize);
    require_once './views/pet.php';
}
