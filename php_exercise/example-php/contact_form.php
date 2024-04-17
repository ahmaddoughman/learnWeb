<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <?php
   
    $name = $email = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
        $subject = test_input($_POST["subject"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="process_form.php">
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        message: <input type="text" name="message">
        <br><br>
        subject: <textarea name="subject" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>