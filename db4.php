<<<<<<< HEAD
<?php
$servername="localhost";
$username="root";
$password="";
$database="adit";
//database connect
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "Database Successfully Created ";
}
else{
    echo "Database is not created";
}
//insert the table
$sql="INSERT INTO `trip` (`name`,`dest`) VALUES ('Yashwant','Gurugram')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "The record was inserted  successfully!<br>";
} else {
    echo "The record was not inserted successfully because of the error: <br>" . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);

?>
=======
<?php
$servername="localhost";
$username="root";
$password="";
$database="adit";
//database connect
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "Database Successfully Created ";
}
else{
    echo "Database is not created";
}
//insert the table
$sql="INSERT INTO `trip` (`sno`,`name`,`dest`) VALUES (4,'Yashwant','Gurugram')";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "The record was inserted  successfully!<br>";
} else {
    echo "The record was not inserted successfully because of the error: <br>" . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);

?>
>>>>>>> ca18947bc0768e7304f307308b7b5a61c5ef1af9
