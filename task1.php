<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "adit";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Database connection successful.<br>";

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Database selection failed: " . mysqli_error($conn));
}
echo "Database '$database' selected.<br>";

// Predefined array of names
$arr = ["adi", "raj", "singh", "yas"];

// SQL query to select all records from the 'trip' table
$sql = "SELECT * FROM trip";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    echo "The query was successful!<br>";
    $rows = mysqli_num_rows($result);
    $i = 0;

    // Fetch and display each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Check if the 'name' column exists
        if (isset($row['name'])) {
            echo $row['name']."\n";
        } else {
            echo "Column 'name' does not exist in the 'trip' table.<br>";
        }
    }
} else {
    echo "The query was not successful because of the error: " . mysqli_error($conn) . "<br>";
}

// Close the database connection
mysqli_close($conn);
?>