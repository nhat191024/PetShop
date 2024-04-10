<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Products');
} else {
    require_once "../../models/product.php";
    $id = $_POST['id'];
    deleteProduct($id);
    header('Location: /admin/?view=Products');
}