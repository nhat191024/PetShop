<?php
require_once "./models/petBreed.php";
$listBreed = getAllBreed();
if($view == "Breeds") {
    require_once './views/breed.php';
}