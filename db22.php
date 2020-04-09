<?php
 if(isset($_POST['submit']))
 {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$first=$_POST['first'];
$pass=$_POST['pass'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO db1 (first,pass)VALUES ('$first','$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}
?> 