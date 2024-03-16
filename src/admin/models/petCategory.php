<?php
require_once "pdo.php";
function getPetCategory()
{
    $sql = "SELECT * FROM pet_category";
    return pdo_query($sql);
}

function getPetCategoryById($id)
{
    $sql = "SELECT * FROM pet_category WHERE id = $id";
    return pdo_query_one($sql);
}

function createPetCategory($petCategoryName)
{
    $sql = "INSERT INTO pet_category (name) VALUES ('$petCategoryName')";
    pdo_execute($sql);
}
