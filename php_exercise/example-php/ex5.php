<?php 

$x =10;
$y = 11;
$z = $x + $y;
echo    "sum is ".$z;
echo  "<br>";
echo  "<br>";

var_dump ($x != $y);
echo  "<br>";

if ($x == $y) {
    echo " equal";
}
else {
    echo " not equal";
}
echo  "<br>";

if($x > $y) {
    echo  $x. " greater than ".$y;
}
elseif ($x < $y) {
    echo $x. " less than ".$y;
}
echo  "<br>";

if (!($x == $y)) {
    echo "not equal";
}
echo  "<br>";

# define use for constant
define("name","Ahmad");
echo   "my name is ".name;
echo  "<br>";

# abs absolute the num
echo "enter a num -1 the it make absolute = ".abs(-1)."<br>";

# round
echo "enter a num double and make a round for it 3.74 = ".round(3.74). "<br>";

# floor
echo "enter a num double and make a floor for it 3.14 = ".round(3.14). "<br>";

# power
echo "enter a 2 num: 2 power 3 = ".pow(2, 3). "<br>";

# square root
echo "enter a  num: square root of 100 = ".sqrt(100). "<br>";
?>