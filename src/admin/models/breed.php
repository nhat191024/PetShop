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

function getAllBreedByPage($page, $pageSize) {
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM breed LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createBreed($breedName) {
    $sql = "INSERT INTO breed (name) VALUES ('$breedName')";
    pdo_execute($sql);
}

function deleteBreed($id) {
    $sql = "DELETE FROM breed WHERE id = $id";
    pdo_execute($sql);
}