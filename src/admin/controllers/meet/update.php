<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $status = $_GET['status'];
    require_once "../../models/meet.php";
    updateMeetStatus($id, $status);
    header('Location: /admin/?view=Meet_schedules');
}