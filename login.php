<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Simulate user validation
    if ($username == 'admin' && $password == 'Admin') {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>