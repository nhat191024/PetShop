<?php
if (!isset($_POST['createBreeds'])) {
    header('Location: /admin/?view=Breeds');
} else {
    require_once "../../models/breed.php";
    $name = $_POST['petBreed'];
    createBreed($name);
    header('Location: /admin/?view=Breeds');
}
