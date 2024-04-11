<?php
if (!isset($_POST['updateManufacturers'])) {
    header('Location: /admin/?view=Manufacturers');
} else {
    require_once "../../models/manufacturer.php";
    $id = $_POST['id'];
    $name = $_POST['manufacturerName'];

    updateManufacturer($id, $name);
    header('Location: /admin/?view=Manufacturers');
}