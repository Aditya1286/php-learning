<?php
// Connection to a database
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database
$sql = "CREATE DATABASE ADIT";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the database was created successfully
if ($result) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Close the connection
mysqli_close($conn);
?><?php
// Connection to a database
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database
$sql = "CREATE DATABASE ADIT";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the database was created successfully
if ($result) {
    echo "Database created successfully.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Close the connection
mysqli_close($conn);
?>