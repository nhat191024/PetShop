<?php
require_once "./models/source.php";

if ($edit) {
    $source = getSourceById($edit);
    require_once './views/edit/source.php';
}
