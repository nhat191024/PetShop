<?php
require_once "pdo.php";
function getPetByCategoryId($id)
{
    $sql = "SELECT * FROM pet WHERE category_id = $id";
    return pdo_query($sql);
}

function getAllPet()
{
    $sql = "SELECT * FROM pet";
    return pdo_query($sql);
}

function getPetById($id)
{
    $sql = "SELECT * FROM pet WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllPetByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM pet LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createPet($category_id, $name, $color_id, $price, $age, $gender, $source, $breed, $vaccination, $img_path)
{
    $sql = "INSERT INTO pet (category_id, name, color_id, price, age, gender, source_id, breed_id, vaccination, img_path) VALUES ($category_id, '$name', $color_id, $price, $age, '$gender', '$source','$breed', '$vaccination', '$img_path')";
    pdo_execute($sql);
}

function updatePet($id, $category_id, $name, $color_id, $price, $age, $gender, $source, $breed, $vaccination, $img_path)
{
    $sql = "UPDATE pet SET category_id = $category_id, name = '$name', color_id = $color_id, price = $price, age = $age,    gender = '$gender', source_id = '$source', breed_id = '$breed', vaccination = '$vaccination', img_path = '$img_path' WHERE id = $id";
    pdo_execute($sql);
}

function deletePet($id)
{
    $sql = "DELETE FROM pet WHERE id = $id";
    pdo_execute($sql);
}
