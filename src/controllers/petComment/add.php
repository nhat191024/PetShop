<?php
session_start();
require_once "../../models/petComment.php";

if (isset($_POST['comment-btn'])) {
    $pet_id = $_POST['pet_id'];
    $user_id = $_SESSION['user_id'];
    $content = $_POST['comment-content'];
    createComment($pet_id, $user_id, $content);
    header("Location: http://petshop.com/?view=detailPet&details=$pet_id");
}
