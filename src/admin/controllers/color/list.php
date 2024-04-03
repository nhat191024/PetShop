<?php
require_once "./models/color.php";
$listColor = getAllColor();
if ($view == "Colors") {
    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page
    $pageSize = 8; // number of breeds per page
    $totalPage = ceil(count($listColor) / $pageSize); // Total page
    if (isset($_GET['colorPrev']) && $page > 1) {
        $page--;
    } else if (isset($_GET['colorNext']) && $page < $totalPage) {
        $page++;
    }
    $listColorPage = getAllColorByPage($page, $pageSize);
    require_once './views/color.php';
}
