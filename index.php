<<<<<<< HEAD
<?php
$array=array("Monday","Tuesday","Wensday","Thrusday","Friday","Saturday","Sunday");
foreach($array as $i){
    echo "Today is ".$i;
    echo "<br>";
}
?>
=======
<?php
echo "working with multidimenional array<br>";
$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        echo $arr[$i][$j]  ;
        echo " ";
    }
    echo "<br>";
}
?>
 
>>>>>>> ca18947bc0768e7304f307308b7b5a61c5ef1af9
