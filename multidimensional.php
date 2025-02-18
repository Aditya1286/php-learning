<?php
echo "working with multidimenional array\n";
$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        echo $arr[$i][$j]  ;
        echo " ";
    }
    echo "\n";
}
$s=0;
$n=(int)readline("Enter the number: ");
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        if($arr[$i][$j]==$n){
            echo "element is present in the array at arr[$i][$j]";
           return ;
        }
    }
}
echo "element is not present in the array";
?>
 