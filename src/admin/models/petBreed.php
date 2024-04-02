<?php
require_once "pdo.php";

function getAllBreed() {
    $sql = "SELECT * FROM breed";
    return pdo_query($sql);
}

function getBreedById($id) {
    $sql = "SELECT * FROM breed WHERE id = $id";
    return pdo_query_one($sql);
}

function createBreed($breedName) {
    $sql = "INSERT INTO breed (name) VALUES ('$breedName')";
    pdo_execute($sql);
}
?>