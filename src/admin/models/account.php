<?php
require_once "pdo.php";

function getAllAccount()
{
    $sql = "SELECT * FROM account";
    return pdo_query($sql);
}

function getAccountById($id)
{
    $sql = "SELECT * FROM account WHERE id = $id";
    return pdo_query_one($sql);
}

function getAccountByPage($page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM account LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function accountUpdate($id, $username, $email, $role, $avatar)
{
    $sql = "UPDATE account SET username = '$username', email = '$email', role = $role, avatar = '$avatar' WHERE id = $id";
    pdo_execute($sql);
}

function accountUpdateStatus($id, $status)
{
    $sql = "UPDATE account SET status = $status WHERE id = $id";
    pdo_execute($sql);
}