<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "Test123", "mydb");

// Check the connection
if (!$conn) {
    die("Error in establishing connection: " . mysqli_connect_error());
}

echo "Connection established<br>";

// Create the myguests table
$sql = "CREATE TABLE IF NOT EXISTS myguests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    mobile_no VARCHAR(15) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table myguests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
  