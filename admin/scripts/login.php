<?php

session_start();
include('../../database.php');

if (isset($_POST['login'])) {
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM egb_users WHERE userName='$userName'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify the entered password (plain text comparison)
        if ($password === $storedPassword) {
            // Login success
            $_SESSION['userName'] = $userName;
            $_SESSION['first_name'] = $row['firstName'];
            header('Location: ../dashboard.php'); // Use ../ to navigate to the parent directory
            exit();
        } else {
            // Login failed
            echo "Invalid username or password.";
        }
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}
?>

