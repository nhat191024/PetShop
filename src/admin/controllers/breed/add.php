<?php
if (!isset($_POST['createBreeds'])) {
    header('Location: /admin/?view=Breeds');
} else {
    require_once "../../models/petBreed.php";
    $name = $_POST['breedName'];
    createBreed($name);
    header('Location: /admin/?view=Breeds');
}
