<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: grey;
        }


        form {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        input,
        button {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        name <input type="text" name="name" id="name"><br>
        email <input type="email" name="email" id="email"><br>
        password <input type="password" name="password" id="password"><br>
        enter name<input type="text" name="change" id="change"><br>
        <button type="submit" name="submit">submit</button>
        <button type="submit" name="getAllData">get data</button>
        <button type="submit" name="delete">delete</button>
        <button type="submit" name="update">update</button>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");

        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute() === true) {
            echo "Inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    if (isset($_POST["getAllData"])) {
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        $sql1 = "SELECT * FROM users ORDER BY name DESC ";
        $result1 = $conn->query($sql1);
        if ($result->num_rows > 0) {
            echo "<table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["password"] . "</td>
                                </tr>";
            }

            echo "</table>";
        }
        else {
            echo "0 results";
        }
        if ($result1->num_rows > 0) {
            echo "<table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>";

            while ($row = $result1->fetch_assoc()) {
                echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["password"] . "</td>
                                </tr>";
            }

            echo "</table>";

        }
    }

    if (isset($_POST["delete"])) {
        $nameToDelete = $_POST["change"];
    
        $stmt = $conn->prepare("DELETE FROM users WHERE name = ?");
        $stmt->bind_param("s", $nameToDelete);
    
        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
    
        $stmt->close();
    }
    
    
    if (isset($_POST["update"])) {
        $updateName = $_POST["change"];
        $newName = $_POST["name"];
    
        
        $stmtSelect = $conn->prepare("SELECT name FROM users WHERE name = ?");
        $stmtSelect->bind_param("s", $updateName);
        $stmtSelect->execute();
        $stmtSelect->store_result();
    
        if ($stmtSelect->num_rows > 0) {
            
            $stmtSelect->bind_result($existingName);
            $stmtSelect->fetch();
            $stmtSelect->close();
    
            $stmtUpdate = $conn->prepare("UPDATE users SET name = ? WHERE name = ?");
            $stmtUpdate->bind_param("ss", $newName, $existingName);
    
            if ($stmtUpdate->execute()) {
                echo "Record updated successfully.";
            } else {
                echo "Error updating record: " . $stmtUpdate->error;
            }
    
            $stmtUpdate->close();
        } else {
            echo "Record with the specified name not found.";
        }
    }
    
    $conn->close();
    ?>

</body>

</html>