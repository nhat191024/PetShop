<?php
if (!isset($_POST['updateProducts'])) {
    header('Location: /admin/?view=Products');
} else {
    require_once "../../models/product.php";
    $id = $_POST['id'];
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

    $old_img = getProductById($id)['img_path'];

    if ($img_error == 4) {
        $img_path = $old_img;

        updateProduct(
            $id,
            $name,
            $price,
            $manufacturer_id,
            $category_id,
            $quantity,
            $description,
            $img_path
        );
        header('Location: /admin/?view=Products');
    } else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $img_new_name = uniqid("PRODUCT-", true) . "." . $img_ex;
        $img_path = 'upload/' . $img_new_name;
        $img_upload_path = '../../../upload/' . $img_new_name;
        move_uploaded_file($img_tmp_name, $img_upload_path);
        unlink('../../../' . $old_img);

        updateProduct(
            $id,
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
