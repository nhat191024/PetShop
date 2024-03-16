<?php
require_once "./models/source.php";
$listSource = getAllSource();
if($view == "Sources"){
    require_once './views/source.php';
}


