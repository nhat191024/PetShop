<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Colors');
} else {
    require_once "../../models/color.php";
    $id = $_POST['id'];
    deleteColor($id);
    header('Location: /admin/?view=Colors');
}