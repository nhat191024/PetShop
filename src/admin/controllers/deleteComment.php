<?php
if(isset($_GET['id'])){
    require_once "../models/comment.php";
    $id = $_GET['id'];
    deleteComment($id);
    header('location: /admin/?view=Products&comment=' . $_GET['product']);
}