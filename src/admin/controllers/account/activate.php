<?php
require_once "../../models/account.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    accountUpdateStatus($id, 1);
    header("Location: /admin/?view=Accounts");
}