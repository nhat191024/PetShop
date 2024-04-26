<?php
require_once './models/account.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $account = getAccountById($id);
    if ($account == null) {
        header('Location: /admin/?view=Accounts');
    }
    require_once './views/edit/account.php';
} else {
    header('Location: /admin/?view=Accounts');
}