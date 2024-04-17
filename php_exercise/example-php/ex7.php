<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" placeholder="enter your temperature" name="user"><br>
        <input type="submit">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //first way
        //$userInput = filter_input(INPUT_POST, 'user', FILTER_VALIDATE_INT);

        // secound way
        $userInput = $_POST['user'];
        
            switch (true) {
                case ($userInput < 0):
                    echo "So Cold";
                    break;
                case ($userInput >= 0 && $userInput < 10):
                    echo "Cold";
                    break;
                case ($userInput >= 10 && $userInput < 20):
                    echo "Average";
                    break;
                case ($userInput >= 20 && $userInput < 30):
                    echo "Hot";
                    break;
                case ($userInput >= 30):
                    echo "So Hot";
                    break;
                default:
                    echo "Invalid Temperature";
            }
        } 
    ?>
</body>

</html>