<?php
require_once "views/components/NavBar.php";

switch ($view) {
    case "/":
        require_once "views/home.php";
        break;
}
