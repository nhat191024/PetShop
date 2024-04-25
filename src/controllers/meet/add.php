<?php
require_once "../../models/meet.php";

if(isset($_POST['meet'])){
    $pet = $_POST['petId'];
    $user = $_POST['userId'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $datetime = $date . " " . $time . ":00";

    createMeet($pet, $user, $datetime);
    header("location: /?view=detailPet&details=" . $pet . "&meet=true");
}