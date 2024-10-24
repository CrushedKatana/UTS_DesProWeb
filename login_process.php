<?php
session_start();

// Dummy credentials for login (replace with database check in production)
$valid_username = 'user';
$valid_password = 'password';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username; // Store username in session
        header('Location: home.php'); // Redirect to home
        exit();
    } else {
        // Store the error message in a session variable to display on the login page
        $_SESSION['error'] = "Invalid credentials!";
        header('Location: login.php'); // Redirect back to login page
        exit();
    }
}
?>



