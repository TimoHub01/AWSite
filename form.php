<?php
$email = $_POST['email'];
$namew = $_POST['nam'];
$subject = $_POST['subject'];
$message = $_POST['message'];
echo ("name $namew");
$servername = "std-mysql";
$username = "std_1612_bd1";
$password = "076435ssh";
$dbname = "std_1612_bd1";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo ("Connection failed: " . mysqli_connect_error());
  }
else
{
    echo ("Connection Succes");
}
$sql = "INSERT INTO names (email, subject, message, name) VALUES ('$email', '$subject', '$message', '$namew')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>