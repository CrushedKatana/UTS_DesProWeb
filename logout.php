<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Thank you for using our service!'); window.location.href='login.html';</script>";
header('Location: login.php');
?>

