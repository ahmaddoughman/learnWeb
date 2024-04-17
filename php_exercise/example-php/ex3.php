<?php 

// variable variable

$a = "Ahmad";
$$a = "ALi";
$$$a = "Mark";

echo "$a";
echo "<br>";

echo $$a;
echo "<br>";

echo $$$a;
echo "<br>";

echo  "hello \${$a}";
echo "<br>";


echo  "hello \${$$a}";
echo "<br>";    
echo "<br>";

// second way
$b = "ahmad";
$b .= " mahmoud";
$b .= " doughman";
echo "welcome ".$b;

?>