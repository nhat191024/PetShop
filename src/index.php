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
    require_once "./controllers/cart/list.php";
    $loginFailed = isset($_GET['loginFailed']) ? "show" : '';
    $notLogin = isset($_GET['notLogin']) ? "show" : '';
    $addSuccess = isset($_GET['addSuccess']) ? "show" : '';
    $userRole = isset($_COOKIE['role']) ? $_COOKIE['role'] : '';
    $view = isset($_GET['view']) ? $_GET['view'] : '/';
    $details = isset($_GET['details']) ? $_GET['details'] : '';
    $category = isset($_GET['category']) ? $_GET['category'] : '';

    if ($view != 'payment') {
        require_once "./views/components/NavBar.php";
    }

    switch ($view) {
        case '/':
            require_once "./controllers/home.php";
            break;
        case 'detailPet':
            if ($details != '') {
                require_once "./controllers/pets/details.php";
            }
            break;
        case 'detailProduct':
            if ($details != '') {
                require_once "./models/comment.php";
                require_once "./models/account.php";
                require_once "./controllers/product/details.php";
            }
            break;
        case 'petCategory':
            if ($category != '') {
                require_once "./controllers/pets/category.php";
            }
            break;
        case 'productCategory':
            if ($category != '') {
                require_once "./controllers/product/category.php";
            }
            break;
        case 'payment':
            require_once "./controllers/payment.php";
            break;
    }
    if ($view != 'payment') {
        require_once "./views/components/SignUpForm.php";
        require_once "./views/components/LoginForm.php";
        require_once "./views/components/Footer.php";
        require_once "./views/components/toasts.php";
    }
    ?>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./scripts/index.js"></script>
</body>

</html>