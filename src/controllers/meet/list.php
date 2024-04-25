<?php
require_once "./models/meet.php";
require_once "./models/pets.php";
$listMeet = isset($_SESSION['user_id']) ? getMeetByUserId($_SESSION['user_id']) : '';
require_once "./views/components/Meet.php";