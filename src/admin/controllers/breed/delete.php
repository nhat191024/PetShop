<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Breeds');
} else {
    require_once "../../models/breed.php";
    $id = $_POST['id'];
    deleteBreed($id);
    header('Location: /admin/?view=Breeds');
}