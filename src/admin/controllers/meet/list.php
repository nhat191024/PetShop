<?php
require_once "./models/meet.php";
require_once "./models/account.php";
require_once "./models/pets.php";

$listMeet = getAllMeet();

if($view == 'Meet_schedules') {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of meets per page
    $pageSize = 2;
    // Total page
    $totalPage = ceil(count($listMeet) / $pageSize);
    // Get all meets with limit number of meets per page
    $listMeetPage = getMeetByPage($page, $pageSize);
    require_once './views/meet.php';
}