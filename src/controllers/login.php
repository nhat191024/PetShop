<?php
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
            setcookie('loggedIn', 'true', time() + 3600, '/');
            if($user){
                setcookie('username', $user['username'], time() + 3600, '/');
                setcookie('role', $user['role'], time() + 3600, '/');
            } else {
                setcookie('username', $email['username'], time() + 3600, '/');
                setcookie('role', $email['role'], time() + 3600, '/');
            }
            header('Location: /');
        } else {
            header('Location: /?loginFailed=true');
        }
    }
}
