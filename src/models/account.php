<?php 
require_once "pdo.php";
function accountGetByUsername($username ){
    $sql = "SELECT * FROM account WHERE username = '$username'" ;
    return pdo_query_one($sql);
}

function accountGetByEmail($email){
    $sql = "SELECT * FROM account WHERE email = '$email'";
    return pdo_query_one($sql);
}
?>