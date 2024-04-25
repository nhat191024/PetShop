<?php
require_once "pdo.php";

function getAllComment()
{
    $sql = "SELECT * FROM comment";
    return pdo_query($sql);
}

function getCommentBuyProductId($id)
{
    $sql = "SELECT * FROM comment WHERE product_id = $id";
    return pdo_query($sql);
}

function getCommentByPageByProductId($id, $page, $pageSize)
{
    $firstIndex = ($page - 1) * $pageSize;
    $sql = "SELECT * FROM comment WHERE product_id = $id LIMIT $firstIndex, $pageSize";
    return pdo_query($sql);
}

function deleteComment($id)
{
    $sql = "DELETE FROM comment WHERE id = $id";
    return pdo_execute($sql);
}