<?php
require_once "./models/manufacturer.php";
$listManufacturer = getAllManufacturers();
if ($view == "Manufacturers") {
    // Current page
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // number of Items per page
    $pageSize = 8;
    // Total page
    $totalPage = ceil(count($listManufacturer) / $pageSize);
    $listManufacturerPage = getAllManufacturersByPage($page, $pageSize);
    require_once './views/manufacturer.php';
}
