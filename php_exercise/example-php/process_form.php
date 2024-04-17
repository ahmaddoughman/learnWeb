<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
        $subject = test_input($_POST["subject"]);

        
        echo "<h2>Received Form Data</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "message: $message <br>";
        echo "subject: $subject <br>";
        
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

</body>

</html>
