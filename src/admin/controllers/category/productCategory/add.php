<?php
if (!isset($_POST['createProduct_Categories'])) {
    header('Location: /admin/?view=Product_Categories');
} else {
    require_once "../../../models/productCategory.php";
    $name = $_POST['productCategory'];
    createProductCategory($name);
    header('Location: /admin/?view=Product_Categories');
}
