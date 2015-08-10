<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 10/08/2015
 * Time: 15:26
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>