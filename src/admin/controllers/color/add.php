<?php
if (!isset($_POST['createColors'])) {
    header('Location: /admin/?view=Colors');
} else {
    require_once "../../models/color.php";
    $name = $_POST['petColor'];
    createColor($name);
    header('Location: /admin/?view=Colors');
}
