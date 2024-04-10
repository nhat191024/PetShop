<?php
if (!isset($_POST['createProducts'])) {
    header('Location: /admin/?view=Products');
} else {
    require_once "../../models/product.php";

    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $manufacturer_id = $_POST['productManufacturer'];
    $category_id = $_POST['productCategory'];
    $quantity = $_POST['productQuantity'];
    $description = $_POST['productDescription'];
    $img_name = $_FILES['productImg']['name'];
    $img_tmp_name = $_FILES['productImg']['tmp_name'];
    $img_size = $_FILES['productImg']['size'];
    $img_error = $_FILES['productImg']['error'];

    if ($img_error == 0) {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $img_new_name = uniqid("PRODUCT-", true) . "." . $img_ex;
        $img_path = 'upload/' . $img_new_name;
        $img_upload_path = '../../../upload/' . $img_new_name;
        move_uploaded_file($img_tmp_name, $img_upload_path);

        createProduct(
            $name,
            $price,
            $manufacturer_id,
            $category_id,
            $quantity,
            $description,
            $img_path
        );
        header('Location: /admin/?view=Products');
    }
}
