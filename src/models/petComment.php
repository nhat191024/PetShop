<?php
require_once "pdo.php";

function getAllCommentByPetId($pet_id)
{
    $sql = "SELECT * FROM pet_comment WHERE pet_id = $pet_id";
    return pdo_query($sql);
}

function createComment($pet_id, $user_id, $content)
{
    $sql = "INSERT INTO pet_comment (pet_id, user_id, content) VALUES ($pet_id, $user_id, '$content')";
    return pdo_execute($sql);
}