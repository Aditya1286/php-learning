<<<<<<< HEAD
<?php
echo "Welcome to the stage were we are ready to get connected to data base<br>";
/*Ways to connect to a MySQL Datebase
1. MySQlLi extension
two types of Mysqli extension 
a. object orieneted 
b. procedural 
2. PDO-Php Data Object
*/
//connecting to a database
$servername="localhost";
$username="root";
$password="";
//create a connection 
$conn =mysqli_connect($servername,$username,$password);

//Die if connection is not successfull
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfull";
}
//close the connection when done;
mysqli_close($conn);
=======
<?php
echo "Welcome to the stage were we are ready to get connected to data base<br>";
/*Ways to connect to a MySQL Datebase
1. MySQlLi extension
two types of Mysqli extension 
a. object orieneted 
b. procedural 
2. PDO-Php Data Object
*/
//connecting to a database
$servername="localhost";
$username="root";
$password="";
//create a connection 
$conn =mysqli_connect($servername,$username,$password);

//Die if connection is not successfull
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfull";
}
//close the connection when done;
mysqli_close($conn);
>>>>>>> ca18947bc0768e7304f307308b7b5a61c5ef1af9
?>