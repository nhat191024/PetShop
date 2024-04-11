<?php
require_once "./models/manufacturer.php";

if ($edit) {
    $manufacturer = getManufacturerById($edit);
    require_once './views/edit/manufacturer.php';
}