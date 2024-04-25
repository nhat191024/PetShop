<?php
if(!isset($_GET['id'])){
    header('Location: /');
} else {
    $id = $_GET['id'];
    require_once "../../models/meet.php";
    updateMeetStatus($id, 3);
    header('Location: /?cancelMeet=true');
}