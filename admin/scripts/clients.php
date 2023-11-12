<?php
$sql = "SELECT * FROM egb_clients ORDER BY date_created DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td style='width: 10%;'>" . $row['date_created'] . "</td>"; // Set width to 10%
        echo "<td style='width: 10%;'>" . $row['name'] . "</td>"; // Set width to 15%
        echo "<td style='width: 10%;'>" . $row['phoneNumber'] . "</td>"; // Set width to 10%
        echo "<td style='width: 10%;'>" . $row['email'] . "</td>"; // Set width to 15%
        echo "<td style='width: 10%;'>" . $row['country'] . "</td>"; // Set width to 10%
        
        // Assuming you have a database column for the file path (e.g., 'paper1' and 'paper2')
        $filePath1 = $row['paper1']; // Replace with the actual column name for the file path
        $filePath2 = $row['paper2']; // Replace with the actual column name for the file path
        
        echo "<td style='width: 10%;'><a href='../$filePath1' target='_blank'><img class='pdf-icon' src='../assets/img/pdf.png' alt='PDF Icon'></a></td>";
        echo "<td style='width: 10%;'><a href='../$filePath2' target='_blank'><img class='pdf-icon' src='../assets/img/pdf.png' alt='PDF Icon'></a></td>";
                
        echo "<td style='width: 10%;'>" . $row['otherBroker'] . "</td>"; // Set width to 10%
        echo "<td style='width: 10%;'>" . $row['onYourBehalf'] . "</td>"; // Set width to 10%
        echo "<td style='width: 10%;'>" . $row['experience'] . "</td>"; // Set width to 10%
        echo "<td style='width: 20%;'>" . $row['hearAboutUs'] . "</td>"; // Set width to 10%
        echo "<td><a href='scripts/delete.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirmDelete()'>حذف</a></td>";
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='10'>No clients found.</td></tr>";
}
?>
<style>
.pdf-icon {
    width: 50px;
}
</style>
<script>
function confirmDelete() {
    return confirm("Are you sure you want to delete this client?");
}
</script>