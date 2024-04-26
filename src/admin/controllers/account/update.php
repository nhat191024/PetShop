<?php
session_start();
require_once '../../models/account.php';

if (isset($_POST['update'])) {
    $account = getAccountById($_POST['id']);
    $username = $account['username'];
    $email = $account['email'];
    $role = $account['role'];
    $avatar = $account['avatar'];

    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
        if ($_SESSION['user_id'] == $account['id']) {
            $_SESSION['username'] = $username;
        }
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['role']) && !empty($_POST['role'])) {
        $role = $_POST['role'];
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

            $img_upload_path = '../../../upload/' . $img_new_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            if ($account['avatar'] != 'upload/avatar.png') {
                unlink('../../../' . $account['avatar']);
            }
        }
    }

    accountUpdate(
        $account['id'],
        $username,
        $email,
        $role,
        $avatar
    );
    header('Location: /admin/?view=Accounts&edit=' . $account['id']);
}
