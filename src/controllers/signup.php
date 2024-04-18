<?php
session_start();
require_once "../models/account.php";
if (isset($_POST['signupBtn'])) {
    $username = $_POST['signupUsername'];
    $email = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];
    $role = 2;
    accountCreate($username, $email, $password, $role);

    $newUser = accountGetByUsername($username);
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $newUser['username'];
    $_SESSION['user_id'] = $newUser['id'];
    $_SESSION['role'] = $newUser['role'];
    header('Location: /');
}