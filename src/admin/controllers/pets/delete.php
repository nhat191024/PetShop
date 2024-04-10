<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Pets');
} else {
    require_once "../../models/pets.php";
    $id = $_POST['id'];
    deletePet($id);
    header('Location: /admin/?view=Pets');
}