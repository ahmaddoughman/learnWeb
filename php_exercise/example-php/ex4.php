<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $myName = "Ahmad";

    function myName(){
        echo "My name is " . $GLOBALS['myName'] . "<br>";
    }
    myName();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['username']) && ($_POST['lang'])) {
            echo $_POST['username']." favorite language ";
            echo''. $_POST['lang'] .'<br>';
            echo "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST['lang'] == 'arabic1'){
            header("Location: ex4b.php");
            exit();   
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST['lang'] == 'arabic1'){
            include("ex4b.php") ; 
        }
    }
    ?>
    
    <form action="" method="post">
        <input type="text" name="username">
        <select name="lang" id="">
            <option value="arabic1">arabic</option>
            <option value="english1">english</option>
            <option value="spanish1">spanish</option>
        </select>
        <input type="submit" value="Send">
    </form>

</body>

</html>