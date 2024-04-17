<?php

$num = [1, 21, 3, 4, 50];
# example 1 array count
$sum = 0;
for ($i = 0; $i < count($num); $i++) {
    $sum = $sum + $num[$i];
}
echo "The sum is: $sum";   
echo "<br>"; 
echo "<br>"; 


# example 2 array print
echo "print array";
echo "<pre>";
print_r($num);
echo "</pre>";

# example 3 array count how any time value repeat
echo "print array with count value how many time repeat";
echo "<pre>";
print_r(array_count_values($num));
echo "</pre>";

# example 4 array reverse
echo "<pre>";
print_r(array_reverse($num));
echo "</pre>"; 

# example 5 in_array check the value is in array 
if(in_array("1", $num)) {
    echo "found the number <br>";
}

# example 6 enter key to get value
$courses =["java"=> 100,
            "css"=> 60,
            "html"=> 10,];
if(array_key_exists("java", $courses)) {
    echo "print the value: ". $courses["java"];
}
else{
    echo "you entered incorrect key";
}
echo "<br>";

#example 7 array sum
echo "the sum of array =".array_sum($num);
echo "<br>";

#example 8 array products
echo "the sum of array =".array_product($num);
echo "<br>";

#example 9 merge array
$first_array = [1,2,3,4];
$second_array = [5,6,4,2];
echo "<pre>";
print_r(array_merge($first_array,$second_array));
echo "</pre>"; 

#example 10 array random
echo $num[array_rand($num)];
echo "<br>";

#example 11 array shuffle make change the value in random
shuffle($num);
echo "<pre>";
print_r($num);
echo "</pre>";

#example 12  array_shift remove first value
$nums =[1,2,3,4,5,6,7,8]; 
array_shift($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";

#example 13 array_pop remove last value
array_pop($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";

#example 14 array_push add value at the end
array_push($nums, 11);
echo "<pre>";
print_r($nums);
echo "</pre>";

#example 15 array_unshift add value at the first
array_unshift($nums, 12);
echo "<pre>";
print_r($nums);
echo "</pre>";

#example 16 array_slice [name-0f-array , start-value, end-value]
$chars = ["A","B","C","D","E"];
echo "<pre>";
print_r(array_slice($chars, 0,  3));
echo "</pre>";

#example 17 array_splice [name-0f-array , start-value, end-value] delete the array selected
echo "<pre>";
print_r(array_splice($chars, 0,  3));
print_r($chars);
echo "</pre>"

#example 18
?>