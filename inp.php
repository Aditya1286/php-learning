<?php
$a=(int)readline("Enter the number: ");
$arr=[];
for($i=0;$i<$a;$i++){
    $arr[$i]=(int)readline("Enter the value arr[$i]: ");
}
for($i=0;$i<$a;$i++){
   echo $arr[$i]." ";
}
?>