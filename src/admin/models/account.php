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