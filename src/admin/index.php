<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/PetShop.svg" />
    <title>PetShop Admin</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/db7aab17a8.js" crossorigin="anonymous"></script>
</head>
<style>
    body::-webkit-scrollbar {
        display: none;
    }

    .headerDashboard {
        width: 10%;
    }
</style>

<body>
    <?php
    if (isset($_SESSION['loggedIn']) && $_SESSION['role'] != 1) {
        header('Location: /');
    }
    $view = isset($_GET['view']) ? $_GET['view'] : 'Dashboard';
    require_once 'views/components/Header.php';
    require_once 'views/components/SideNav.php';
    ?>
    <div class=" vh-100 d-flex justify-content-center align-items-center">
        <?php
        switch ($view) {
            case 'Dashboard':
                require_once 'views/dashboard.php';
                break;
            case 'Pet_Categories':
                require_once 'controllers/category/petCategory/list.php';
                break;
            case 'Product_Categories':
                require_once 'controllers/category/productCategory/list.php';
                break;
            case 'Colors':
                require_once 'controllers/color/list.php';
                break;
            case 'Sources':
                require_once 'controllers/source/list.php';
                break;
            case 'Pets':
                require_once 'controllers/pets/list.php';
                break;
            default:
                require_once 'views/dashboard.php';
                break;
        }
        ?>
    </div>

</body>

</html>