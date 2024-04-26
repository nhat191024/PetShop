<?php
require_once "pdo.php";

function getAllBreeds()
{
    $sql = "SELECT * FROM breed";
    return pdo_query($sql);
}

function getBreedById($id)
{
    $sql = "SELECT * FROM breed WHERE id = ?";
    return pdo_query_one($sql, $id);
}