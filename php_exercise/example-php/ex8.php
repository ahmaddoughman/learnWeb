<?php


for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
    $i++;
}


// foreach
$name = ["ahmad", "ali", 'sam'];
echo "<pre>";
print_r($name);
echo "</pre>";


foreach ($name as $k => $v) {
    echo "your id = ". $k ." your name is ". $v ."<br>";
}


$get_array = ["1","2","3","4","5"];
    # 1 way
    print_r($get_array);
    echo "<br>";
    # 2 way
    foreach ($get_array as $element) {
        echo $element . " ";
    }
    echo "<br>";
    # 3 way
    echo implode(" ", $get_array);
?>