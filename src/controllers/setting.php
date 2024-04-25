<?php
if (!isset($_SESSION['loggedIn'])) {
    header('Location: /');
    exit();
} else {
    require_once "./models/account.php";
    $account = getAccountById($_SESSION['user_id']);

    require_once "./views/setting.php";
}