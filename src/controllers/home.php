<?php 
require_once "./models/pets.php";
require_once './models/petCategory.php';
require_once './models/color.php';
require_once './models/source.php';
require_once './models/manufacturer.php';
require_once './models/productCategory.php';
require_once './controllers/product/list.php';
require_once './controllers/pets/list.php';
if($view == "/"){
    require_once "./views/home.php";
}
?>