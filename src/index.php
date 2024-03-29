<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/PetShop.svg" />
    <title>PetShop</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/db7aab17a8.js" crossorigin="anonymous"></script>
</head>
<style>
    body::-webkit-scrollbar {
        display: none;
    }

    body {
        background-color: #f9f9fb;
    }
</style>

<body>
    <?php
    session_start();
    // function automatic destroy session after 30 minutes
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        session_unset();
        session_destroy();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
    require_once "./controllers/category/petCategory/list.php";
    require_once "./controllers/category/productCategory/list.php";
    require_once "./views/components/NavBar.php";

    $loginFailed = isset($_GET['loginFailed']) ? "show" : '';
    $userRole = isset($_COOKIE['role']) ? $_COOKIE['role'] : '';
    $view = isset($_GET['view']) ? $_GET['view'] : '/';
    $details = isset($_GET['details']) ? $_GET['details'] : '';
    switch ($view) {
        case '/':
            require_once "./controllers/pets/list.php";
            require_once "./controllers/category/petCategory/list.php";
            require_once "./controllers/home.php";
            break;
        case 'detail':
            if ($details != '') {
                require_once "./controllers/pets/details.php";
            }
            break;
    }
    ?>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>