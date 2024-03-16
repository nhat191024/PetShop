<?php
require_once "./models/color.php";
$listColor = getAllColor();
if($view == "Colors"){
    require_once './views/color.php';
}