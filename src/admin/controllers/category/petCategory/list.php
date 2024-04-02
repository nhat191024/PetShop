<?php
require_once "./models/petCategory.php";
$listPetCategory = getPetCategory();
if($view == "Pet_Categories") {
    require_once './views/petCategory.php';
}