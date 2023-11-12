<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from Step 1 and Step 2
    $tradeOnBehalf = isset($_POST["tradeOnBehalf"]) ? $_POST["tradeOnBehalf"] : "";
    $tradingAccount = isset($_POST["tradingAccount"]) ? $_POST["tradingAccount"] : "";
    $hearAboutUs = isset($_POST["hearAboutUs"]) ? $_POST["hearAboutUs"] : "";
    $experience = isset($_POST["experience"]) ? $_POST["experience"] : "";

    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $country = isset($_POST["country"]) ? $_POST["country"] : "";

    // File Upload Handling
    $uploadDir = "admin/uploads/";
    $personalDocument1 = $uploadDir . (isset($_FILES["personalDocuments1"]["name"]) ? basename($_FILES["personalDocuments1"]["name"]) : "");
    $personalDocument2 = $uploadDir . (isset($_FILES["personalDocuments2"]["name"]) ? basename($_FILES["personalDocuments2"]["name"]) : "");

    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "egb_baazex";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL INSERT statement
    $sql = "INSERT INTO egb_clients (name, email, phoneNumber, country, paper1, paper2, experience, hearAboutUs, otherBroker, onYourBehalf) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssisssssss", $fullname, $email, $phone, $country, $personalDocument1, $personalDocument2, $experience, $hearAboutUs, $tradeOnBehalf, $tradingAccount);
        
        if ($stmt->execute()) {
            // Data inserted successfully
            
            // Move uploaded files to the specified directory
            if (isset($_FILES["personalDocuments1"]["tmp_name"]) && isset($_FILES["personalDocuments2"]["tmp_name"])) {
                if (move_uploaded_file($_FILES["personalDocuments1"]["tmp_name"], $personalDocument1) &&
                    move_uploaded_file($_FILES["personalDocuments2"]["tmp_name"], $personalDocument2)) {
                    // Set a session variable to indicate success
                    session_start();
                    $_SESSION["formSubmissionSuccess"] = true;
                } else {
                    echo "Error uploading files.";
                }
            }
        } else {
            // Error occurred while inserting data
            echo "Error: " . $stmt->error;
        }
        
        // Close the prepared statement
        $stmt->close();
    } else {
        // Error in preparing the SQL statement
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

// Redirect to the dashboard page or any other page as needed
header("Location: thankyou.html");
exit();
?>

