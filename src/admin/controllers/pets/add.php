<?php
if (!isset($_POST['createPets'])) {
    header('Location: /admin/?view=Pets');
} else {
    require_once "../../models/pets.php";
    $category_id = $_POST['petCategory'];
    $name = $_POST['petName'];
    $color_id = $_POST['petColor'];
    $price = $_POST['petPrice'];
    $age = $_POST['petAge'];
    $gender = $_POST['petGender'];
    $source = $_POST['petSource'];
    $vaccination = $_POST['petVaccination'];
    createPet($category_id, $name, $color_id, $price, $age, $gender, $source, $vaccination, $quantity);
    header('Location: /admin/?view=Pets');
}
