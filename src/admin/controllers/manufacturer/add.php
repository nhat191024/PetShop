<?php
if (!isset($_POST['createManufacturers'])) {
    header('Location: /admin/?view=Manufacturers');
} else {
    require_once "../../models/manufacturer.php";
    $name = $_POST['manufacturerName'];
    createManufacturer($name);
    header('Location: /admin/?view=Manufacturers');
}
