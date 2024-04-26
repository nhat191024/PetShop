<?php
require_once "./models/account.php";

$listAccount = getAllAccount();
if ($view == "Accounts") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $pageSize = 6;
    $totalPage = ceil(count($listAccount) / $pageSize);
    $listAccountPage = getAccountByPage($page, $pageSize);

    require_once './views/account.php';
}
