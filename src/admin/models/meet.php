<?php
require_once "pdo.php";

function getAllMeet()
{
    $sql = "SELECT * FROM meet";
    return pdo_query($sql);
}

function getMeetByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM meet LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function updateMeetStatus($id, $status)
{
    $sql = "UPDATE meet SET status = $status WHERE id = $id";
    return pdo_execute($sql);
}

function updateMeetStatusById($id, $status)
{
    $sql = "UPDATE meet SET status = $status WHERE id = $id";
    return pdo_execute($sql);
}