<?php
$student=[
    ["name"=>"John","Marks"=>["Math"=>85,"Science"=>78]],
    ["name"=>"Emma","Marks"=>["Math"=>90,"Science"=>92]],
    ["name"=>"Oliver","Marks"=>["Math"=>88,"Science"=>76]]
];
foreach($students as $student){
    $marks=$student["Marks"];
    $average=array_sum($Marks)/count($Marks);
    echo $student["name"]." has an average of ".round($average,2)." in Science and Math.";
}
?>