<?php
    session_start();
    require_once 'connect.php';


    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST[['password_confirm'];

    if($password ===$password_confirm) {
        //con...
    } else {
        $_SESSION['message'] = 'password does not match';
        header('location:../register.php');
        die ('password does not match');
    }