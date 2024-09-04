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
$r_id = $_POST['r_id'];
$beneficiary_name = $_POST['beneficiary_name'];
$requested_food = $_POST['requested_food'];
$req_location = $_POST['req_location'];
$prepared_date = $_POST['prepared_date'];

// SQL query to insert data into request table
$sql = "INSERT INTO request (r_id, beneficiary_name, requested_food, req_location, prepared_date)
VALUES ('$r_id', '$beneficiary_name', '$requested_food', '$req_location', '$prepared_date')";

if ($conn->query($sql) === TRUE) {
    echo "New request created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
