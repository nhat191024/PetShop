<?php
require_once "pdo.php";

function getManufacturerById($id){
    $sql = "SELECT * FROM manufacturer WHERE id = $id";
    return pdo_query_one($sql); 
}

