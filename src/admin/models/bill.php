<?php
require_once 'pdo.php';

function getAllBill()
{
    $sql = "SELECT * FROM bill";
    return pdo_query($sql);
}

function getAllBillByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM bill LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function updateBillStatus($id, $status)
{
    $sql = "UPDATE bill SET status = $status WHERE id = $id";
    return pdo_execute($sql);
}