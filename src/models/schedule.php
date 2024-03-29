<?php
require_once "pdo.php";
function getAllSchedule()
{
    $sql = "SELECT * FROM pet_schedule";
    return pdo_query($sql);
}

function getAllUserSchedule($id)
{
    $sql = "SELECT * FROM pet_schedule WHERE user_id = $id";
    return pdo_query($sql);
}

function createSchedule($user, $pet, $date)
{
    $sql = "INSERT INTO pet_schedule (pet_id, user_id, data) VALUES ( '$pet', '$user', '$date')";
    pdo_execute($sql);
}
