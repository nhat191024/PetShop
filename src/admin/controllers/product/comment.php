<?php
if($comment != ''){
    require_once "./models/comment.php";
    require_once "./models/product.php";
    require_once "./models/manufacturer.php";
    require_once "./models/productCategory.php";
    require_once "./models/account.php";

    $listComment = getCommentBuyProductId($comment);
    $product = getProductById($comment);
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $pageSize = 8;
    $totalPage = ceil(count($listComment) / $pageSize);
    $listCommentPage = getCommentByPageByProductId($comment, $page, $pageSize);

    require_once './views/comment/product.php';
}