<?php
include('../../database.php');

if (isset($_GET['id'])) {
    // Get the car ID from the URL
    $client = $_GET['id'];

    // Delete the car entry from the database
    $deleteCarQuery = "DELETE FROM egb_clients WHERE id = '$client'";
    mysqli_query($conn, $deleteCarQuery);

    // Redirect back to the cars list page after deletion
    header("Location: ../dashboard.php");
    exit();
}
?>