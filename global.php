<<<<<<< HEAD
<?php
echo "Welcome to scope of local and global<br>";
//these are global variable 
$a=98;
$b=5;
function printvalue(){
    $a=100;
    $b=100;
    echo "The value of your variable a is $a and b is $b";
}
echo $a;
printvalue();
echo "<br>The value of your variable a is $a and b is $b";
=======
<?php
echo "Welcome to scope of local and global<br>";
//these are global variable 
$a=98;
$b=5;
function printvalue(){
    $a=100;
    $b=100;
    echo "The value of your variable a is $a and b is $b";
}
echo $a;
printvalue();
echo "<br>The value of your variable a is $a and b is $b";
>>>>>>> ca18947bc0768e7304f307308b7b5a61c5ef1af9
?>