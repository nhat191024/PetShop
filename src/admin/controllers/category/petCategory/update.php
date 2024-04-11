<?php
require_once "../../../models/petCategory.php";

if(!isset($_POST['updatePet_Categories'])){
    header('Location: /admin/?view=Pet_Categories');
} else {
    $id = $_POST['id'];
    $name = $_POST['petCategory'];

    updatePetCategory($id, $name);
    header('Location: /admin/?view=Pet_Categories');
}