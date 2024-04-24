<?php
require_once "./models/bill.php";
$listBill = isset($_SESSION['user_id']) ? getBillByUserId($_SESSION['user_id']) : '';
require_once "./views/components/bill.php";
