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

function getAllColorByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM color LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createColor($name)
{
    $sql = "INSERT INTO color (name) VALUES ('$name')";
    pdo_execute($sql);
}

function updateColor($id, $name)
{
    $sql = "UPDATE color SET name = '$name' WHERE id = $id";
    pdo_execute($sql);
}

function deleteColor($id)
{
    $sql = "DELETE FROM color WHERE id = $id";
    pdo_execute($sql);
}
