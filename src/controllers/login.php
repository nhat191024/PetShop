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
    if(!$email && !$user){
        header('Location: /?loginFailed=true');
    } else if($email || $user){
        //! I has to use cookie instead of session because session is not working and i don't know why, i will fix it later (i hope so xD)
        if($password == $email['password'] || $password == $user['password']){
            $_SESSION['loggedIn'] = true;
            if($user){
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
            } else {
                $_SESSION['username'] = $email['username'];
                $_SESSION['role'] = $email['role'];
            }
            header('Location: /');
        } else {
            header('Location: /?loginFailed=true');
        }
    }
}
