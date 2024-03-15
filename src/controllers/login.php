<?php 
    $loginData = isset($_POST['loginData']) ? $_POST['loginData'] : 'nothing';

    if ($loginData != 'nothing') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        loginHandle($email, $password);
    }

function loginHandle ($email, $password) {
    require_once "../models/account.php";
    $account = accountGetByEmail($email);
    if ($account) {
        if (password_verify($password, $account['password'])) {
            $_SESSION['user'] = $account;
            header('Location: /');
        } else {
            echo "Wrong password";
        }
    } else {
        echo "Account not found";
    }
}

?>