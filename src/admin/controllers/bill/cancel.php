<?php
require_once "../../models/bill.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    updateBillStatus($id, 4);
    header("Location: /admin/?view=Bills");
}