<?php
$rows=(int)readine("Enter the row");
$col=(int)readline("Enter the col");
$ar=[];
for($i=0;$i<$rows;$i++){
    for($j=0;$j<$col;$j++){
        $ar[$i][$j]=(int)readline("Enter the ar[$i][$j]:");
    }
}
foreach($ar as $as){
    foreach($as as $ad){
        echo "$ad ";
    }
    echo "\n";
}
?>