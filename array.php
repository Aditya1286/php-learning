<?php
echo "working with multidimensional array<br>";
$arr = [1, 2, 5, 4,11,5,7,8];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo "<br>";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " "; 
}
echo "<br>";
?>
