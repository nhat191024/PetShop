<?php
require_once "pdo.php";
function getPetByCategoryId($id) {
    $sql = "SELECT * FROM pet WHERE category_id = $id"; 
    return pdo_query($sql); 
}

function getAllPet() {
    $sql = "SELECT * FROM pet";
    return pdo_query($sql);
}

function createPet($category_id, $name, $color_id, $price, $age, $gender, $source, $vaccination, $quantity) {
    $sql = "INSERT INTO pet (category_id, name, color_id, price, age, gender, source, vaccination, quantity) VALUES ($category_id, '$name', $color_id, $price, $age, '$gender', '$source', '$vaccination', '$quantity')";
    pdo_execute($sql);
}
?>