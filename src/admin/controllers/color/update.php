<?php
if (!isset($_POST['updateColors'])) {
    header('Location: /admin/?view=Colors');
} else {
    require_once "../../models/color.php";
    $id = $_POST['id'];
    $name = $_POST['petColor'];

    updateColor($id, $name);
    header('Location: /admin/?view=Colors');
}
