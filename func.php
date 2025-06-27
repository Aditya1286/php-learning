<?php
echo "Functions in Php<br>";
function avg($arr){
    $sum=0;
    $tot=count($arr);
    foreach($arr as $i){
        $sum+=$i;
    }
    return $sum/$tot;
}
function good(){
    echo "good marks!!";
}
$myarr=[86,78,87,99,65];
$marks=avg($myarr);
echo "Avg Marks of rohan is $marks<br>";
good();
function sumMyNumbers($y,...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    $n=$n-$y;
    return $n;
  }

  $b = sumMyNumber(5, 2, 6, 2, 7, 7);
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo " <br>".$a;
?>
 