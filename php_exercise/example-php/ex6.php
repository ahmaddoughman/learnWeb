<?php

$arr1 =[1 => "A", 2=> "B" ];
$arr2 = array(3 => "c", 4=>"d");


echo  "<pre>";

// union +
print_r($arr1 + $arr2);

echo "</pre>";

// equal ==
var_dump($arr1 == $arr2); //false
echo    "<br>";
var_dump($arr1 != $arr2);//true
echo    "<br>";
echo    "<br>";


//$a =110;
$b = @$a or die("variable not found because you comment \$a");
echo "$b";

?>