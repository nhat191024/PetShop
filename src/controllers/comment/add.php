<?php
session_start();
require_once "../../models/comment.php";

if(isset($_POST['comment-btn'])){
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $content = $_POST['comment-content'];
    createComment($product_id, $user_id, $content);
    header("Location: http://petshop.com/?view=detailProduct&details=$product_id");
}