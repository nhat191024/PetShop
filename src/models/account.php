<?php 
require_once "pdo.php";
function accountGetByEmail($email){
    $sql = "SELECT * FROM account WHERE email = '$email'";
    return pdo_query_one($sql);
}
?>