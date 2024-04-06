<?php
require_once "./models/source.php";
$listSource = getAllSource();
if ($view == "Sources") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listProductCategory) / $pageSize);
    $listSourcePage = getAllSourceByPage($page, $pageSize);
    require_once './views/source.php';
}
