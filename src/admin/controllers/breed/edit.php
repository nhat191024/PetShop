<?php
require_once "./models/breed.php";

if ($edit) {
    $breed = getBreedById($edit);
    require_once './views/edit/breed.php';
}
