<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
// rules of connection of data
// 1.connection building
// 2.connection verification
// 3.selecting the database
// 4.fetching the data
// 5.insertion of the data
// 6.verification of query 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>