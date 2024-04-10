<?php
if(!isset($_POST['delete'])) {
    header('Location: /admin/?view=Pet_Categories');
} else {
    require_once "../../../models/petCategory.php";
    $id = $_POST['id'];
    deletePetCategory($id);
    header('Location: /admin/?view=Pet_Categories');
}