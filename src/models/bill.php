<?php

function getBillByUserId($userId)
{
    $sql = "SELECT * FROM bill WHERE user_id = $userId";
    return pdo_query($sql);
}

function updateBillStatus($id, $status)
{
    $sql = "UPDATE bill SET status = $status WHERE id = $id";
    pdo_execute($sql);
}

function createBill($userId, $name, $email, $total, $phone, $address, $note, $payment, $shipment)
{
    $sql = "INSERT INTO bill (user_id, name, email, total, phone_number, address, note, payment_method, shipment_method) VALUES ($userId, '$name', '$email', '$total', '$phone','$address', '$note', '$payment', '$shipment')";
    $a = pdo_execute($sql);
    return $a;
}
