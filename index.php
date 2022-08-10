<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbconn="db_contact";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbconn);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$num =$_GET['num'];
$sql = "INSERT INTO `db_value` (`id`, `value`) VALUES ('0', '$num')";
$rs = mysqli_query($conn, $sql);
if($rs)
    {
        echo "Saving succeed";
    }
    else{
        echo "Error occured";
    }
