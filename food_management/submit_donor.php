<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";      // Default password for XAMPP (empty)
$dbname = "food_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$d_id = $_POST['d_id'];
$donor_name = $_POST['donor_name'];
$food_item = $_POST['food_item'];
$pickup_details = $_POST['pickup_details'];

// SQL query to insert data into donor table
$sql = "INSERT INTO donor (d_id, donor_name, food_item, pickup_details)
VALUES ('$d_id', '$donor_name', '$food_item', '$pickup_details')";

if ($conn->query($sql) === TRUE) {
    echo "New donor entry created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
