<?php
$number="100abc";
$san=filter_var($number,FILTER_SANITIZE_NUMBER_INT);
echo $san;
?>