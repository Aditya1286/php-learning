<?php
$name="Aditya";
//strlen()-tells the length of the string
echo strlen($name);
$var="My name is Ron";
echo "<br>";
echo $var;
echo "<br>";
//str_word_count()-tells the word count in string
echo str_word_count($var);
echo "<br>";
echo strrev($name);
echo "<br>";
//strpos()-tells the starting position of that word in a string
echo strpos("$var","is");
echo "<br>";
//str_replace used to replace the first name with second name and 
//also print that name
echo str_replace("Ron","Aditya",$var);
echo "<br>";
//str_repeat() used to repeat the string n number of times
echo str_repeat($name,2);
//here pre is used to show the string actual ;
//ltrim to trim left side;
//rtrim to trim right side;
echo "<pre>";
echo "    This is me    <br>";
echo ltrim("   This is aditya   <br>");
echo rtrim("    This is afitya   <br>");
echo "</pre>";
?>
