<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'Dashboard';

require_once 'views/components/SideNav.php';
require_once 'views/components/Header.php';

switch ($view){
    case 'Dashboard':
        require_once 'views/dashboard.php';
        break;
    case 'products':
        require_once 'views/admin/products.php';
        break;
    case 'categories':
        require_once 'views/admin/categories.php';
        break;
    case 'orders':
        require_once 'views/admin/orders.php';
        break;
    case 'users':
        require_once 'views/admin/users.php';
        break;
    case 'settings':
        require_once 'views/admin/settings.php';
        break;
    default:
        require_once 'views/dashboard.php';
        break;
}
