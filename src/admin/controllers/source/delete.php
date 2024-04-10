<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Sources');
} else {
    require_once "../../models/source.php";
    $id = $_POST['id'];
    deleteSource($id);
    header('Location: /admin/?view=Sources');
}