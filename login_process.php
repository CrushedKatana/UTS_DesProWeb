<?php
session_start();

$valid_username = 'user';
$valid_password = 'password';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
        $_SESSION['error'] = "Invalid credentials!";
        header('Location: login.php');
        exit();
    }
}
?>



