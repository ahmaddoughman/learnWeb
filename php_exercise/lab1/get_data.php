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
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("" . $conn->connect_error);
}

if (isset($_POST["get_data"])) {
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>action</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["password"] . "</td>
                            <td>
                                <form action='update.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <button type='submit' name='update'>update</button>
                                </form>
                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                                    <button type='submit' name='delete'>delete</button>
                                </form>
                            </td>
                         </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results" . $conn->error;
    }
    $conn->close();
}
?>