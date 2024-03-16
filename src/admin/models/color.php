<?php
require_once "pdo.php";
function getAllColor()
{
    $sql = "SELECT * FROM color";
    return pdo_query($sql);
}

function getColorById($id)
{
    $sql = "SELECT * FROM color WHERE id = $id";
    return pdo_query_one($sql);
}

function createColor($name)
{
    $sql = "INSERT INTO color (name) VALUES ('$name')";
    pdo_execute($sql);
}
