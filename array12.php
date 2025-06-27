<?php

$fruits1 = ['apple', 'banana', 'cherry'];
$fruits2 = ['banana', 'date', 'elderberry'];

$commonFruits = array_intersect($fruits1, $fruits2);

echo "Common fruits: ";
print_r($commonFruits);
?>