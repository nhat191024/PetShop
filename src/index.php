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
    require_once "./views/components/NavBar.php";

    $loginFailed = isset($_GET['loginFailed']) ? "show" : '';
    $userRole = isset($_COOKIE['role']) ? $_COOKIE['role'] : '';
    $view = isset($_GET['view']) ? $_GET['view'] : '/';
    $details = isset($_GET['details']) ? $_GET['details'] : '';
    switch ($view) {
        case '/':
            require_once "./controllers/pets/list.php";
            require_once "./controllers/home.php";
            break;
        case 'detail':
            if ($details != '') {
                require_once "./controllers/pets/details.php";
            }
            break;
    }

    ?>
</body>

</html>