<?php
echo  "Hello from admin";
include_once 'views/components/sideNav.php';
// if (!isset($_GET['action'])) {
//     include 'views/dashboard.php';
// } else {
//     $action = $_GET['action'];
//     switch ($action) {
//         case 'category':
//             include 'views/category/list.php';
//             break;
//     }
// }