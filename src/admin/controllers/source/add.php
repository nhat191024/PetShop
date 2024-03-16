<?php
if (!isset($_POST['createSources'])) {
    header('Location: /admin/?view=Sources');
} else {
    require_once "../../models/source.php";
    $name = $_POST['petSource'];
    createSource($name);
    header('Location: /admin/?view=Sources');
}
