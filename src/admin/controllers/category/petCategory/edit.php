<?php
require_once "./models/petCategory.php";

if ($edit) {
    $petCategory = getPetCategoryById($edit);
    require_once './views/edit/petCategory.php';
}
