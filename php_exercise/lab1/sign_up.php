<?php 

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "test2";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error){
    die(" ". $conn ->connect_error);
}

if(isset($_POST["sign_up"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    
    $sql = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
    $sql->bind_param("sss", $name, $email,$password);
    if($sql->execute()){
        echo "inserted successful";
        include("ex1.php");
    }
    $sql->close();
    $conn->close();
}

?>