<?php 
require_once 'pdo.php';

function getAllManufacturers() {
    $sql = "SELECT * FROM manufacturer";
    return pdo_query($sql);
}

function getManufacturerById($id) {
    $sql = "SELECT * FROM manufacturer WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllManufacturersByPage($page, $pageSize) {
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM manufacturer LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createManufacturer($name) {
    $sql = "INSERT INTO manufacturer (name) VALUES ('$name')";
    pdo_execute($sql);
}

function deleteManufacturer($id) {
    $sql = "DELETE FROM manufacturer WHERE id = $id";
    pdo_execute($sql);
}