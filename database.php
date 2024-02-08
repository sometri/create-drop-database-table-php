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

// Create database
$dbname = "crud_db";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname created successfully. <br />";
} else {
    echo "Error creating database $dbname: " . $conn->error;
}

// Select database
$conn->select_db("$dbname");

// Create table
$tblname = "users";
$sql = "CREATE TABLE IF NOT EXISTS $tblname (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table $tblname created successfully <br />";
} else {
    echo "Error creating table $tblname: " . $conn->error;
}

// Close connection
$conn->close();
?>
