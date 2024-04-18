<?php
require_once "pdo.php";
function accountGetByUsername($username)
{
    $sql = "SELECT * FROM account WHERE username = '$username'";
    return pdo_query_one($sql);
}

function accountGetByEmail($email)
{
    $sql = "SELECT * FROM account WHERE email = '$email'";
    return pdo_query_one($sql);
}

function getAccountById($id)
{
    $sql = "SELECT * FROM account WHERE id = $id";
    return pdo_query_one($sql);
}

function accountCreate($username, $email, $password, $role)
{
    $sql = "INSERT INTO account (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
    return pdo_execute($sql);
}
