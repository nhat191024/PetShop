<?php
require_once "./models/color.php";

if ($edit) {
    $color = getColorById($edit);
    require_once './views/edit/color.php';
}