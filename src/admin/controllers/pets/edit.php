<?php
require_once "./models/pets.php";
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
require_once './models/breed.php';

if ($edit) {
    $pet = getPetById($edit);
    require_once './views/edit/pet.php';
}
