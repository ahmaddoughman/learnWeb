<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>User Management</h2>

<!-- HTML form to add a new user -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <input type="submit" value="Add User">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lesson1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email');";
    $sql .= "INSERT INTO student (username, password, email) VALUES ('$username', '$password', '$email');";

    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created successfully<br><br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display data from the 'users' table
$usersSql = "SELECT * FROM users";
$usersResult = $conn->query($usersSql);

echo "<h3>Users Table</h3>";
echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
      </tr>";
while ($row = $usersResult->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td>" . $row['email'] . "</td>
          </tr>";
}
echo "</table>";

// Display data from the 'student' table
$studentSql = "SELECT * FROM student";
$studentResult = $conn->query($studentSql);

echo "<h3>Student Table</h3>";
echo "<table>";
echo "<tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
      </tr>";
while ($row = $studentResult->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td>" . $row['email'] . "</td>
          </tr>";
}
echo "</table>";

// Delete a record from the 'users' table
$deletedUserId = 1;

$deleteQuery = "DELETE FROM users WHERE id = $deletedUserId";

if ($conn->query($deleteQuery) === TRUE) {
    echo "Record deleted successfully<br><br>";
    
    // Update IDs sequentially after deletion
    $updateQuery = "SET @count = 0;
        UPDATE users SET users.id = @count:= @count + 1;
        ALTER TABLE users AUTO_INCREMENT = 1;";

    if ($conn->multi_query($updateQuery) === TRUE) {
        echo "IDs updated successfully<br><br>";
    } else {
        echo "Error updating IDs: " . $conn->error;
    }
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
