<?php
require_once "./models/bill.php";
require_once "./models/account.php";
$listBill = getAllBill();
//if view is not set or view is not Bills, redirect to 404 page
if ($view == "Bills") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of bills per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listBill) / $pageSize);
    // Get all bills with limit number of bills per page
    $listBillPage = getAllBillByPage($page, $pageSize);
    require_once './views/bill.php';
}