<?php
if (!isset($_POST['createPet_Categories'])) {
    header('Location: /admin/?view=Pet_Categories');
} else {
    require_once "../../../models/petCategory.php";
    $name = $_POST['petCategory'];
    createPetCategory($name);
    header('Location: /admin/?view=Pet_Categories');
}
