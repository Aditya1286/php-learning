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
?>