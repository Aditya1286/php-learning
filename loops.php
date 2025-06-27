<?php
$i=1;
echo "Table of 5 using while loop<br>";
while($i<11){
    echo "5 X $i =" . 5*$i;
    echo "<br>";
    $i++;
}
echo "Table of 6 using for loop<br>";
for($j=1;$j<11;$j++){
    echo "6 X $j =" . 6*$j;
    echo "<br>";
}
echo "Using do-while loop<br>";
do{
    $i++;
    echo $i;
    echo "<br>";
}while($i<5);
echo "Using for-each loop<br>";
$arr=array("mango","orange","lemon","grapes");
foreach($arr as $k){
    echo "$k <br>";
}
?>
 