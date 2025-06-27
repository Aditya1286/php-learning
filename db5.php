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
$sql="SELECT * FROM trip";
$result=mysqli_query($conn,$sql);
if ($result) {
    echo "The Query is Succesfull!<br>";
    $rows=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
        echo $row['name']."<br>";
    }
} else {
    echo "The record was not inserted successfully because of the error: <br>" . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);

?>
