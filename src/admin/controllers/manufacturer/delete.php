<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Manufacturers');
} else {
    require_once "../../models/manufacturer.php";
    $id = $_POST['id'];
    deleteManufacturer($id);
    header('Location: /admin/?view=Manufacturers');
}