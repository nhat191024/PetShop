<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: /?notLogin=true');
} else if (isset($_POST['bill'])) {
    require_once "../../models/bill.php";
    require_once "../../models/cart.php";
    require_once "../../models/product.php";
    require_once "../../models/pets.php";

    $type = $_POST['type'];
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

    $single = "";
    if (isset($_POST['single'])) {
        $single = $_POST['single'];
    };

    $finalAddress = $address . ', ' . $ward . ', ' . $district . ', ' . $city;

    $billId = createBill($type, $userId, $name, $email, $total, $phone, $finalAddress, $note, $payment, $shipment);

    if ($single == "") {
        $cart = getAllUserCart($userId);
        foreach ($cart as $item) {
            updateCartBill($item['id'], $billId);

            $product = getProductById($item['product_id']);
            updateProductQuantity($product['id'], $product['quantity'] - $item['quantity']);
        }
    } else {
        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];
            updateProductQuantity($productId, getProductById($productId)['quantity'] - 1);
        };

        if (isset($_POST['petId'])) {
            $petId = $_POST['petId'];
            updatePetStock($petId, 0);
        };
    }

    header('location: /?success=true');
}
