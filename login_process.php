<?php
session_start();

// Dummy credentials for login (replace with database check in production)
$valid_username = 'user';
$valid_password = 'password';

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['username'] = $_POST['username'];
    header('Location: home.php');
    exit();
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='login.php';</script>";
}
?>


