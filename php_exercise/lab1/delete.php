<?php 

$servername="localhost";
$username= "root";
$password= "";
$dbname= "test2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("". $conn->connect_error);
}

if (isset($_POST["delete"])) {
    $id = $_POST['id'];

    $delete_query = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo 'Delete successfully';
        include("ex1.php");
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>