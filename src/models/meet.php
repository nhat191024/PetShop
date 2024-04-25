<?php
require_once "pdo.php";

function getMeetByUserId($user_id){
    $sql = "SELECT * FROM meet WHERE user_id = $user_id";
    return pdo_query($sql);
}

function updateMeetStatus($id, $status){
    $sql = "UPDATE meet SET status = $status WHERE id = $id";
    pdo_query($sql);
}

function createMeet($pet_id, $user_id, $datetime){
    $sql = "INSERT INTO meet (user_id, pet_id, datetime) VALUES ($user_id, $pet_id, '$datetime')";
    pdo_query_one($sql);
}

function deleteMeet($id){
    $sql = "DELETE FROM meets WHERE id = $id";
    pdo_query($sql);
}