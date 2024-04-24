<?php
require_once "../../models/bill.php";
if(isset($_POST['shipping'])){
    $id = $_POST['id'];

    updateBillStatus($id, 2);
    header("Location: /admin/?view=Bills");
} else {
    $id = $_POST['id'];
    $status = $_POST['status'];

    updateBillStatus($id, 3);
    header("Location: /admin/?view=Bills");
}