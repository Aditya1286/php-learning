<?php
$n=(int)readline("Enter the number: ");
$num=[];
for($i=0;$i<$n;$i++){
    $num[$i]=(int)readline();
}
array_push($num,6);
sort($num);
unset($num[5]);
print_r($num);
array_splice($num,2,1);
print_r($num);
?>
