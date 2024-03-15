<?php
require_once "../models/account.php";
if (isset($_POST['loginBtn'])) {
    $email = $_POST['logEmail'];
    $password = $_POST['logPassword'];
    loginAuth($email, $password);
}

function loginAuth($email, $password)
{
    $account = accountGetByEmail($email);
    if(!$account){
        header('Location: /');
    }
}
