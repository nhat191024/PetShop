<?php
if ($view != 'payment' || !isset($_SESSION['loggedIn'])) {
    header('Location: /?notLogin=true');
    exit();
} else {
    $petON = isset($_GET['pet']) ? $_GET['pet'] : '';
    if (isset($_GET['pet'])) {
        require_once "./models/pets.php";
        require_once './models/petCategory.php';
        require_once './models/color.php';
        require_once './models/source.php';
        require_once './models/account.php';
        require_once './models/breed.php';
        $pet = getPetById($_GET['id']);
        require_once "./views/payment.php";
    } else {
        if (isset($_GET['id'])) {
            require_once "./models/product.php";
            require_once "./models/productCategory.php";
            require_once "./models/manufacturer.php";
            require_once "./models/account.php";
            $product = getProductById($_GET['id']);
            require_once "./views/payment.php";
        } else {
            require_once "./models/cart.php";
            require_once "./models/product.php";
            require_once "./models/productCategory.php";
            require_once "./models/manufacturer.php";
            require_once "./models/account.php";

            $cart = getAllUserCart($_SESSION['user_id']);

            require_once "./views/payment.php";
        }
    }
}
