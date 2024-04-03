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

function getAllPetByPage($page, $pageSize) {
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM pet LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createPet($category_id, $name, $color_id, $price, $age, $gender, $source, $breed, $vaccination, $img_path) {
    $sql = "INSERT INTO pet (category_id, name, color_id, price, age, gender, source, breed_id, vaccination, img_path) VALUES ($category_id, '$name', $color_id, $price, $age, '$gender', '$source','$breed', '$vaccination', '$img_path')";
    pdo_execute($sql);
}
?>