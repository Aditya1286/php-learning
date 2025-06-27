<?php
$a =3;
$b =4;
echo $a+$b . "<br>";
echo $a-$b . "<br>";
echo $a*$b . "<br>";
echo $a/$b . "<br>";
echo $a%$b . "<br>";
echo $a**$b . "<br>";
//Assignment operator-+=,*=,/=
$c=0;
$c+=$a;
echo $c . "<br>";
//Comparision Operator-==,<,>.<=.>=
echo "is x==y ";
echo var_dump($a==$b) . "<br>";
//Logical operator- and(&&),or(||),not(!)
$x=true;
$y=false;
echo var_dump($x and $y)."<br>";
echo var_dump(!$y)."<br>";

?>
 