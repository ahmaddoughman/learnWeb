<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="enter your item" name="items">
        <div>
            <label for="">Enter your number to get a rewards</label>
            <input type="text" placeholder="enter your number" name="number">
        </div>

        <input type="submit" value="send">
    </form>

    <?php

    //example 1
    function hello($name)
    {
        echo "hola mr " . $name . "<br>";
    }

    hello("Ahmad ");

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //example 2
        function deep_freezer($item)
        {
            if ($item === "water") {
                echo "make ice <br>";
            } elseif ($item === "coca cola") {
                echo "make cold <br>";
            } else {
                echo "unknown item <br>";
            }
        }
        deep_freezer($_POST['items']);

        //example 3
        $awards = ["Pc", "bisycle", "moto", "phone", "ball"];

        function _id($num)
        {
            global $awards;
            return @$awards[$num];
        }

        if (isset($_POST['number'])) {
            $selectedNumber = $_POST['number'];
            echo _id($selectedNumber);
        }
    }
    echo "<br>";

    // example 4
    function calculate()
    {
        echo "Number of Arguments: " . func_num_args() . "<br>";
        echo "Arguments Index Number 3 is " . func_get_arg(3) . "<br>";
        echo '<pre>';
        print_r(func_get_args());
        echo '</pre>';
        $result = 0;
        foreach (func_get_args() as $arg):
            $result += $arg;
        endforeach;
        echo $result;
    }
    calculate(10, 20, 30, 40, 50);
    echo "<br>";

    # example 4
    function get_data($name, $country = "Private", ...$skills){
        echo "HEllo $name Your Country is $country <br>";
        foreach($skills as $skill):
            echo "-- $skill <br>";
        endforeach;
    }
    get_data("Ahmad","Lebanon","HTML","Css","JS");

    # example 5 passing the argument by reference
    function get_num(&$selectedNumber){
        $selectedNumber +=5;
        return $selectedNumber;
    } 
    $n = 15;
    echo  get_num($n);
    echo "<br>";
    echo "$n";
    echo "<br>";

    # example 6
    function sum(int $number, int $number2, int $number3) {
        return $number + $number2 + $number3;
    }
    //  or
    // function sum($number, $number2, $number3): int {
    //     return $number + $number2 + $number3;
    // }
    echo sum(20,3.5,10.5);
    echo '<br>';
    echo gettype(sum(20,3.5,10.5));
    echo '<br>';

    # example 7 variable funtion

    $say_hola = function($name){
        return 'hola '.$name;
    };
    echo  $say_hola("Ahmad");
    echo '<br>';

    # example 8
    $nums =[1,2,3,4,5];
    function add_five($items){
        return $items +5;
    }
    $nums_after_adding = array_map("add_five", $nums);
    print_r($nums_after_adding);
    echo "<br>";
    foreach($nums_after_adding as $value){
        echo $value ."<br>";
    }

    #  example 9
    $msg="hi";
    $say_hi = function ($name) use ($msg){
        return "$msg $name ";
    };
    echo $say_hi("ahmad");
    echo  "<br>";

    # example 10  2nd way    Arrow Function
    $say_hello = fn($name) => "$msg $name ";
    echo $say_hello("AHmad");
    echo "<br>";

    
    ?>

</body>

</html>