<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errors = array();


include_once('dbconnect.php');
include_once('errors.php');

session_start();


//Giris Kodu
if (isset($_POST['user_login'])) {
    $user_email = isset($_POST['user_email']) ? mysqli_real_escape_string($db, $_POST['user_email']) : '';
    $user_password = isset($_POST['user_password']) ? mysqli_real_escape_string($db, $_POST['user_password']) : '';

    if (empty($user_email)) {
        array_push($errors, "Gmail is required");
    }
    if (empty($user_password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $user_password = md5($user_password);
        $query = "SELECT * FROM user WHERE `user_email`='$user_email' AND `user_password`='$user_password'";
        $results = mysqli_query($db, $query);
        $userControl = mysqli_fetch_assoc($results);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['user_id'] = $userControl['user_id'];
            $_SESSION['user_name'] = $userControl['user_name'];
            $_SESSION['user_email'] = $userControl['user_email'];
            $_SESSION['user_role'] = $userControl['user_role'];
            $_SESSION['user_password'] = $userControl['user_password'];
            header('location:index.php');
        }
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
