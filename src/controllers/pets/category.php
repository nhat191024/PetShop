<?php
require_once './models/pets.php';
require_once './models/source.php';
require_once './models/petCategory.php';
if ($category != "") {
    $listPet = getAllPetByCategoryId($category);
    require_once './views/petCategory.php';
    if($listPet == null){
        echo "<h1 class='text-center'>Category doesn't have any pet.</h1>";
    }
}
