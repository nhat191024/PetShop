<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('Location: /');
    exit();
} else {
    require_once "../../models/account.php";
    $account = getAccountById($_SESSION['user_id']);
    if (isset($_POST['update'])) {
        $username = $account['username'];
        $email = $account['email'];
        $password = $account['password'];
        $avatar = $account['avatar'];

        if (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])) {
            if ($_POST['password'] != $_POST['confirmPassword']) {
                header('Location: /?view=settings&pnm=true');
                exit();
            }
        }
        if (isset($_POST['username']) && !empty($_POST['username'])) {
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])) {
            $img_name = $_FILES['avatar']['name'];
            $img_tmp_name = $_FILES['avatar']['tmp_name'];
            $img_size = $_FILES['avatar']['size'];
            $img_error = $_FILES['avatar']['error'];
            if ($img_error == 0) {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $img_new_name = uniqid("AVATAR-", true) . "." . $img_ex;
                $img_path = 'upload/' . $img_new_name;

                $avatar = $img_path;

                $img_upload_path = '../../upload/' . $img_new_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);
            }
        }

        accountUpdate(
            $account['id'],
            $username,
            $email,
            $password,
            $avatar
        );
        header('Location: /?view=settings');
    }
}
