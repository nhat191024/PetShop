<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Product_Categories');
} else {
    require_once "../../../models/productCategory.php";
    $id = $_POST['id'];
    deleteProductCategory($id);
    header('Location: /admin/?view=Product_Categories');
}