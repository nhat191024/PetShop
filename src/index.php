<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/PetShop.svg" />
    <title>PetShop</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/db7aab17a8.js" crossorigin="anonymous"></script>
</head>
<style>
    body::-webkit-scrollbar {
        display: none;
    }
</style>

<body>
    <?php
    require_once "./client/models/account.php";

    //TODO: change this when we have a login system
    $action = isset($_GET['action']) ? $_GET['action'] : '/';
    // $isLoggedIn = isset($_SESSION['user']) ? true : false;
    $userRole = isset($_SESSION['user']) ? $_SESSION['user']['role'] : 0;
    $isLoggedIn = true;
    $view = isset($_GET['view']) ? $_GET['view'] : '/';

    switch ($action) {
        case '/':
            require_once "./client/index.php";
            break;
        case 'admin':
            if ($isLoggedIn) {
                require_once "./admin/index.php";
            }
            break;
    }
    ?>
</body>

</html>