<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 10/08/2015
 * Time: 15:29
 */
$servername = "eu-cdbr-azure-north-d.cloudapp.net";
$username = "b99256e599d9fc";
$password = "64c23a04";
$dbname = "rgutest";
$port = "3306";
// Create connection
//   mysqli_connect(host,username,password,dbname,port,socket);
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    echo "error!!!";
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>