<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("" . $conn->connect_error);
}

if (isset($_POST["update"])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $email = $row["email"];
        $password = $row["password"];
        echo "<form method='post' action=''>
                name: <input type='text' name='new_name' value='$name'><br><br>
                email: <input type='email' name='new_email' value='$email'><br><br>
                password: <input type='password' name='new_password' value='$password'><br><br>
                <input type='hidden' name='id' value='$id'>
                <input type='submit' name='update_product' value='Update'>
            </form>";
    }
}
if (isset($_POST["update_product"])) {
    $id = $_POST['id'];
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    $update_query = "UPDATE users SET name=?, email=?, password=? WHERE id=?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("sssi", $new_name, $new_email, $new_password, $id);

    if ($stmt->execute()) {
        echo 'Update successfully';
        include("ex1.php");
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
