<?php
session_start();

// If user is already logged in, redirect to home.php
if (isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// If not logged in, redirect to login.php
header("Location: login.php");
exit();
?>