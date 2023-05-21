<?php
session_start();
$username = 'admin';
$password = 'admin';

$post_username = $_POST['username'];
$post_password = $_POST['password'];

if($post_username != $username) {
    echo 'Username Tidak Ditemukan!';
} else if($post_password != $password) {
    echo 'Password Salah!';
} else {
    $_SESSION['login'] = true;
    header("Location: admin/");
}