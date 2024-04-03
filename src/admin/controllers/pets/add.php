<?php
if (!isset($_POST['createPets'])) {
    header('Location: /admin/?view=Pets');
} else {
    require_once "../../models/pets.php";
    $category_id = $_POST['petCategory'];
    $name = $_POST['petName'];
    $color_id = $_POST['petColor'];
    $price = $_POST['petPrice'];
    $age = $_POST['petAge'];
    $gender = $_POST['petGender'];
    $breed = $_POST['petBreed'];
    $source = $_POST['petSource'];
    $vaccination = $_POST['petVaccination'];
    $img_name = $_FILES['petImg']['name'];
    $img_tmp_name = $_FILES['petImg']['tmp_name'];
    $img_size = $_FILES['petImg']['size'];
    $img_error = $_FILES['petImg']['error'];

    if ($img_error == 0) {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $img_new_name = uniqid("PET-", true) . "." . $img_ex;
        $img_path = 'upload/' . $img_new_name;
        $img_upload_path = '../../../upload/' . $img_new_name;
        move_uploaded_file($img_tmp_name, $img_upload_path);

        createPet($category_id, $name, $color_id, $price, $age, $gender, $source, $breed, $vaccination, $img_path);
        header('Location: /admin/?view=Pets');
    }
}
