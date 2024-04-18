<?php
session_start();
require_once "../models/account.php";
if (isset($_POST['loginBtn'])) {
    $username = $_POST['logUsername'];
    $password = $_POST['logPassword'];
    loginAuth($username, $password);
}

function loginAuth($username, $password)
{
    $email = accountGetByEmail($username);
    $user = accountGetByUsername($username);
    if (!$email && !$user) {
        header('Location: /?loginFailed=true');
    } else if ($password == $email['password'] || $password == $user['password']) {
        $_SESSION['loggedIn'] = true;
        if ($user) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
        } else {
            $_SESSION['username'] = $email['username'];
            $_SESSION['user_id'] = $email['id'];
            $_SESSION['role'] = $email['role'];
        }
        header('Location: /');
    } else {
        header('Location: /?loginFailed=true');
    }
}
