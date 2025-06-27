<<<<<<< HEAD
<?php
$arr = [3, 2, 1, 5, 4];
sort($arr);
echo implode(",", $arr);
array_push($arr, 6, 7);
echo "\n" . implode(",", $arr);
//delete the particular number from array 
unset($arr[0]);
echo "\n" . implode(",", $arr);
//range create a array from range(low,high,step);
$num = range(1, 10, 2);
echo "\n";
print_r($num);
//array combine-make a new array by combining the elements of one or more arrays
$name=array("Manoj","Rahul","Aneesh");
$marks=array("75","89","44");
$c=array_combine($name,$marks);
print_r($c);
//array_count_values()
$a=array("Block 33","Block 34","Block 34","Block 36","Block 36");
print_r(array_count_values($a));
//array_flip
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
// The array_pop() function deletes the last element of an array.
// array_pop(array)
$a=array("red","green","blue");
array_pop($a);
print_r($a);


=======
<?php
$arr = [3, 2, 1, 5, 4];
sort($arr);
echo implode(",", $arr);
array_push($arr, 6, 7);
echo "\n" . implode(",", $arr);
//delete the particular number from array 
unset($arr[0]);
echo "\n" . implode(",", $arr);
//range create a array from range(low,high,step);
$num = range(1, 10, 2);
echo "\n";
print_r($num);
>>>>>>> ca18947bc0768e7304f307308b7b5a61c5ef1af9
?>