<?php
if (!isset($_POST['cartChange'])) {
    header('location: ../../index.php');
    exit();
} else {
    require_once "../../models/cart.php";
    $total = $_POST['cartTotal'];
    if ($total > 1) {
        for ($i = 1; $i <= $total; $i++) {
            $idName = 'id-' . $i;
            $quantityName = 'cartQuantity-' . $i;
            $id = $_POST[$idName];
            $quantity = $_POST[$quantityName];
            updateCartQuantity($id, $quantity);
            header('location: ../../index.php');
        }
    } else {
        $id = $_POST['id'];
        $quantity = $_POST['cartQuantity-0'];
        updateCartQuantity($id, $quantity);
        header('location: ../../index.php');
    }
}
