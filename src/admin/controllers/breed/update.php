<?php
if (!isset($_POST['updateBreeds'])) {
    header('Location: /admin/?view=Breeds');
} else {
    require_once "../../models/breed.php";

    $id = $_POST['id'];
    $name = $_POST['petBreed'];

    updateBreed($id, $name);
    header('Location: /admin/?view=Breeds');
}