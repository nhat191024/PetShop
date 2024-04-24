<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/assets/PetShop.svg" />
    <title>PetShop Admin</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/db7aab17a8.js" crossorigin="anonymous"></script>
</head>
<style>
    body::-webkit-scrollbar {
        display: none;
    }

    body {
        background-color: #f2f2f2;
        font-family: 'Lexend', sans-serif;
    }

    .headerDashboard {
        width: 10%;
    }

    .table-bg {
        background-color: #43cfef !important;
    }
</style>

<body>
    <?php
    session_start();
    // Check if user is not logged in or user is not admin, redirect to home page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['role'] != 1) {
        header('Location: /');
    }
    // Take the current page
    $currentURL = $_SERVER['REQUEST_URI'];
    $currentPage = isset($_GET['page']) ? $_SERVER['REQUEST_URI'] : 'page=1';
    // Get the current page number
    $currentPage = explode('page', $currentPage)[1];
    $currentPage = explode('=', $currentPage)[1];
    // Get edit id
    $edit = isset($_GET['edit']) ? $_GET['edit'] : '';
    // Get the view
    $view = isset($_GET['view']) ? $_GET['view'] : 'Pets';
    require_once 'views/components/Header.php';
    require_once 'views/components/SideNav.php';
    
    //code flow:
    //1. Check if the view is set or not
    //2. If the view is not set, set the view to Dashboard
    //3. Based on the view, require page controller to display the content
    //4. From the controller, require the model to get data
    //5. Display the data in the view
    // index -> controller -> model -> view

    ?>
    <div class=" vh-100 d-flex justify-content-center align-items-center">
        <?php
        switch ($view) {
            case 'Bills':
                require_once 'controllers/bill/list.php';
                break;
            case 'Pet_Categories':
                if ($edit == '') {
                    require_once 'controllers/category/petCategory/list.php';
                } else {
                    require_once 'controllers/category/petCategory/edit.php';
                }
                break;
            case 'Product_Categories':
                if ($edit == '') {
                    require_once 'controllers/category/productCategory/list.php';
                } else {
                    require_once 'controllers/category/productCategory/edit.php';
                }
                break;
            case 'Colors':
                if ($edit == '') {
                    require_once 'controllers/color/list.php';
                } else {
                    require_once 'controllers/color/edit.php';
                }
                break;
            case 'Sources':
                if ($edit == '') {
                    require_once 'controllers/source/list.php';
                } else {
                    require_once 'controllers/source/edit.php';
                }
                break;
            case 'Breeds':
                if ($edit == '') {
                    require_once 'controllers/breed/list.php';
                } else {
                    require_once 'controllers/breed/edit.php';
                }
                break;
            case 'Pets':
                if ($edit == '') {
                    require_once 'controllers/pets/list.php';
                } else {
                    require_once 'controllers/pets/edit.php';
                }
                break;
            case 'Products':
                if ($edit == '') {
                    require_once 'controllers/product/list.php';
                } else {
                    require_once 'controllers/product/edit.php';
                }
                break;
            case 'Manufacturers':
                if ($edit == '') {
                    require_once 'controllers/manufacturer/list.php';
                } else {
                    require_once 'controllers/manufacturer/edit.php';
                }
                break;
            default:
                require_once 'controllers/pets/list.php';
                break;
        }
        ?>
    </div>

</body>

</html>