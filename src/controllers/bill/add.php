<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: /?notLogin=true');
} else if (isset($_POST['bill'])) {
    require_once "../../models/bill.php";
    require_once "../../models/cart.php";

    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $total = $_POST['total'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $ward = $_POST['ward'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $payment = $_POST['payment'];
    $shipment = $_POST['shipment'];

    $finalAddress = $address . ', ' . $ward . ', ' . $district . ', ' . $city;

    $billId = createBill($userId, $name, $email, $total, $phone, $finalAddress, $note, $payment, $shipment);
    $cart = getAllUserCart($userId);
    foreach ($cart as $item) {
        updateCartBill($item['id'], $billId);
    }
    header('location: /?success=true');
}
