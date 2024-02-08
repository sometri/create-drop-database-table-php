<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop database if it exists
$dbname = "crud_db";
$sql = "DROP DATABASE IF EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname dropped successfully";
} else {
    echo "Error dropping database $dbname: " . $conn->error;
}

// Close connection
$conn->close();
?>
