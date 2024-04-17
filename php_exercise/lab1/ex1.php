<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>sign up</h1>
    <form id="myForm" method="post">
        name <input type="text" name="name"><br><br>
        email <input type="email" name="email"><br><br>
        password <input type="password" name="password"><br><br>
        <button type="submit" name="sign_up" onclick="setFormAction('sign_up.php')">Sign Up</button>
        <button type="submit" name="get_data" onclick="setFormAction('get_data.php')">Get Data</button>
    </form>

    <script>
        function setFormAction(action) {
            document.getElementById("myForm").action = action;
        }
    </script>


</body>

</html>