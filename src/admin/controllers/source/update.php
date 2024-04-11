<?php
if (!isset($_POST['updateSources'])) {
    header('Location: /admin/?view=Sources');
} else {
    require_once "../../models/source.php";

    $id = $_POST['id'];
    $name = $_POST['petSource'];

    updateSource($id, $name);
    header('Location: /admin/?view=Sources');
}
