<?php
include_once "views/components/NavBar.php";

switch ($view) {
    case "/":
        include_once "views/home.php";
        break;
}
?>