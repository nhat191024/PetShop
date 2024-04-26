<?php
require_once "./models/pets.php";
require_once './controllers/category/petCategory/list.php';
require_once './controllers/color/list.php';
require_once './controllers/source/list.php';
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
require_once './models/petComment.php';
require_once './models/account.php';
$listPet = getAllPet();
$pet = getPetById($details);
if ($details != null) {
    require_once './views/detailsPet.php';
}