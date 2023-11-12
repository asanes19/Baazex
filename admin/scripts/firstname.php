<?php 
session_start();

// Check if the user is logged in (assuming you have set $_SESSION['userName'] upon successful login)
if (!isset($_SESSION['userName'])) {
    // Redirect to the login page or do something else to handle unauthorized access
    header('Location: index.php');
    exit(); // Make sure to stop further script execution after the redirect
}
$greeting =  $_SESSION['userName'] .  " اهلا";
?>