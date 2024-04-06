<?php
require_once "./models/color.php";
$listColor = getAllColor();
if ($view == "Colors") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listColor) / $pageSize);
    $listColorPage = getAllColorByPage($page, $pageSize);
    require_once './views/color.php';
}
