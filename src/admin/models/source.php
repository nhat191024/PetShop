<?php
require_once "pdo.php";
function getAllSource()
{
    $sql = "SELECT * FROM pet_source";
    return pdo_query($sql);
}

function getSourceById($id)
{
    $sql = "SELECT * FROM pet_source WHERE id = $id";
    return pdo_query_one($sql);
}

function getAllSourceByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM pet_source LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function createSource($name)
{
    $sql = "INSERT INTO pet_source (name) VALUES ('$name')";
    pdo_execute($sql);
}

function deleteSource($id)
{
    $sql = "DELETE FROM pet_source WHERE id = $id";
    pdo_execute($sql);
}
