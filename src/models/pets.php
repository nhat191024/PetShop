<?php
require_once "pdo.php";
function getPetByCategoryId($id)
{
    $sql = "SELECT * FROM pet WHERE category_id = $id";
    return pdo_query($sql);
}

function getPetById($id)
{
    $sql = "SELECT * FROM pet WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllPet()
{
    $sql = "SELECT * FROM pet";
    return pdo_query($sql);
}

function getAllPetByCategoryId($id)
{
    $sql = "SELECT * FROM pet WHERE category_id = $id";
    return pdo_query($sql);
}
