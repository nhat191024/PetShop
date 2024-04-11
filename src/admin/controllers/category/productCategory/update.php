<?php
require_once "../../../models/productCategory.php";

if (!isset($_POST['updateProduct_Categories'])) {
    header('Location: /admin/?view=Product_Categories');
} else {
    $id = $_POST['id'];
    $name = $_POST['productCategory'];

    updateProductCategory($id, $name);
    header('Location: /admin/?view=Product_Categories');
}
