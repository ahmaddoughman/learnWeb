<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello world</h1>
    <h2>ahmad</h2>
    <?php
    echo "<h1> we start learn php</h1>";

    echo gettype(true);
    echo "<br>";
    echo gettype(100.1);
    echo "<br>";
    echo gettype(array("EG" => "Egypt", "lb" => "Lebanon"));
    echo "<br>";

    echo 1 + "2";
    echo "<br>";

    echo 2 + '2 hello';
    echo "<br>";

    echo gettype(2 + '2 hello');
    echo "<br>";

    echo 5 + (int) 10.5;
    echo "<br>";

    var_dump((bool) "");
    echo "<br>";

    var_dump((bool) "hello");
    echo "<br>";

    echo 'hello \'world\'';
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo nl2br("hello ahmad
                 hello php
                 good luck");

    echo "<br>";



    //heredoc
    $name = 'ahmad';
    echo <<<here
    Hello php
    Special Characters $$$ ' ' ' """"""  \\\\
    hello my name is $name
    here;
    echo "<br>";

    echo "<br>";

    //Nowdoc
    echo <<<'Now'
    Hello php
    Special Characters $$$ ' ' ' """"""  \\\\
    hello my name is $name
    Now;
    echo "<br>";


    echo "<br>";

    echo <<<all
    <ul>
        <li>helo</li>
        <li>bonjour</li>
        <li>bye</li>
    </ul>
    all;

    echo "<br>";

    //array
    echo '<pre>';
    print_r([
        0 => "abdallah",
        'A' => 'ahmad',
        'B' => 'bader',
        "mahmoud",
        true => 'sayed',
        "1" => "ossama",
        "gamal",
        9 => "amera",
        "eman",
        "hala",
        false => "asmaa",
        8 => "samer",
        "akel",
        "Names" => ["ali","mark","jad"]
    ]);
    echo '</pre>';
    echo "<br>";

    $name = "ahmad";
    echo "hello $name";
    echo "<br>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    ?>
</body>

</html>